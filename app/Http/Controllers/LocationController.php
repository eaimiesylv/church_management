<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected function locations()
    {
        return [
            1 => [
                'id' => 1,
                'badge' => 'Headquarters',
                'title' => '123 Grace Avenue',
                'address' => 'City Center, Abuja, Nigeria.',
                'desc' => 'Our main campus is home to our Sunday services, midweek Bible study, and Friday prayer meetings. All are welcome.',
                'mapSrc' => 'https://maps.google.com/maps?q=9.0579,7.4914&z=15&output=embed',
                'directions' => 'https://maps.google.com/?q=9.0579,7.4914',
                'phone' => '+2348000000000',
                'times' => [
                    'Sunday' => '9:00 AM',
                    'Wednesday' => '6:00 PM',
                    'Friday' => '6:00 PM',
                ],
            ],
            2 => [
                'id' => 2,
                'badge' => 'Zone 1',
                'title' => 'Eastside Fellowship Hall',
                'address' => 'East District, Abuja, Nigeria.',
                'desc' => 'Our Eastside campus serves the eastern communities with Sunday worship and a midweek youth programme for teens and young adults.',
                'mapSrc' => 'https://maps.google.com/maps?q=9.0679,7.5514&z=15&output=embed',
                'directions' => 'https://maps.google.com/?q=9.0679,7.5514',
                'phone' => '+2348000000001',
                'times' => [
                    'Sunday' => '9:30 AM',
                    'Wednesday' => '6:00 PM',
                ],
            ],
            3 => [
                'id' => 3,
                'badge' => 'Zone 2',
                'title' => 'North Fellowship Centre',
                'address' => 'North Park, Abuja, Nigeria.',
                'desc' => "The North campus hosts a thriving children's ministry, couples fellowship, and our flagship Friday night prayer service.",
                'mapSrc' => 'https://maps.google.com/maps?q=9.1079,7.4714&z=15&output=embed',
                'directions' => 'https://maps.google.com/?q=9.1079,7.4714',
                'phone' => '+2348000000002',
                'times' => [
                    'Sunday' => '8:00 AM',
                    'Friday' => '6:00 PM',
                ],
            ],
            4 => [
                'id' => 4,
                'badge' => 'Zone 3',
                'title' => 'Riverside Worship Centre',
                'address' => 'Riverside, Abuja, Nigeria.',
                'desc' => 'Our newest campus serves the southern riverside communities with Sunday worship, outreach ministries, and community dinners.',
                'mapSrc' => 'https://maps.google.com/maps?q=9.0279,7.4414&z=15&output=embed',
                'directions' => 'https://maps.google.com/?q=9.0279,7.4414',
                'phone' => '+2348000000003',
                'times' => [
                    'Sunday' => '10:00 AM',
                ],
            ],
        ];
    }

    public function index()
    {
        $locations = $this->locations();
        return view('pages.locations', compact('locations'));
    }

    public function show($id)
    {
        $locations = $this->locations();
        if (! isset($locations[$id])) {
            abort(404);
        }
        $loc = $locations[$id];
        return view('pages.branch', ['location' => $loc, 'locations' => $locations]);
    }
}
