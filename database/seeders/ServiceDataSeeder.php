<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class ServiceDataSeeder extends Seeder
{
    public function run(): void
    {
        // Service units
        $serviceUnits = ['Choir', 'Usher', 'Media', 'Worship'];
        foreach ($serviceUnits as $name) {
            DB::table('service_units')->updateOrInsert(['name' => $name], ['image' => null, 'description' => null, 'created_at' => now(), 'updated_at' => now()]);
        }

        // Groups (group units)
        $groups = ['Singer', 'Dancer'];
        foreach ($groups as $name) {
            DB::table('groups')->updateOrInsert(['name' => $name], ['description' => null, 'image' => null, 'type' => 'unit', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()]);
        }

        // Positions
        $positions = ['Pastor', 'Minister', 'Mr', 'Deacon'];
        foreach ($positions as $name) {
            DB::table('positions')->updateOrInsert(['name' => $name], ['description' => null, 'created_at' => now(), 'updated_at' => now()]);
        }

        // Hierarchy types and hierarchies
        $types = ['Zone', 'District'];
        $typeIds = [];
        foreach ($types as $t) {
            $id = DB::table('hierarchy_types')->updateOrInsert(['name' => $t], ['created_at' => now(), 'updated_at' => now()]);
            // updateOrInsert returns bool, so fetch id
            $type = DB::table('hierarchy_types')->where('name', $t)->first();
            $typeIds[$t] = $type->id ?? null;
        }

        $hierarchies = ['Blosson', 'Sanctuary'];
        foreach ($hierarchies as $h) {
            // associate with first hierarchy type if available
            $typeId = $typeIds['Zone'] ?? ($typeIds['District'] ?? null);
            if ($typeId) {
                DB::table('hierarchies')->updateOrInsert(['name' => $h, 'hierarchy_type_id' => $typeId], ['image' => null, 'created_at' => now(), 'updated_at' => now()]);
            }
        }

        // Create a sample location in Lagos
        $locationId = DB::table('locations')->insertGetId([
            'name' => 'Lagos - Surulere',
            'address' => 'Random address, Surulere, Lagos',
            'city' => 'Surulere',
            'state' => 'Lagos',
            'country' => 'Nigeria',
            'phone' => null,
            'email' => null,
            'lead_pastor' => null,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Create sample cells
        $cellIds = [];
        foreach (['Cell A', 'Cell B'] as $c) {
            $cellIds[] = DB::table('cells')->insertGetId(['name' => $c, 'created_at' => now(), 'updated_at' => now()]);
        }

        // Create some sample users and attach relationships
        $serviceUnit = DB::table('service_units')->first();
        $position = DB::table('positions')->first();

        for ($i = 1; $i <= 5; $i++) {
            $userId = DB::table('users')->insertGetId([
                'full_name' => "Sample User {$i}",
                'email' => "user{$i}@example.test",
                'password' => Hash::make('password'),
                'country_id' => DB::table('countries')->where('name', 'Nigeria')->value('id') ?? 1,
                'state_of_origin_id' => DB::table('states')->where('name', 'Lagos')->value('id'),
                'lga_id' => DB::table('local_governments')->where('name', 'Surulere')->value('id'),
                'photo' => null,
                'mobile_phone' => null,
                'address' => null,
                'email_verified_at' => now(),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if ($serviceUnit) {
                DB::table('service_unit_members')->updateOrInsert(['service_unit_id' => $serviceUnit->id, 'user_id' => $userId], ['created_at' => now(), 'updated_at' => now()]);
            }

            if (! empty($cellIds)) {
                DB::table('cell_members')->updateOrInsert(['cell_id' => $cellIds[array_rand($cellIds)], 'user_id' => $userId], ['created_at' => now(), 'updated_at' => now()]);
            }

            if ($position) {
                DB::table('position_user')->insert(['user_id' => $userId, 'position_id' => $position->id, 'location_id' => $locationId, 'assigned_date' => now()->toDateString(), 'is_active' => true, 'created_at' => now(), 'updated_at' => now()]);
            }

            if ($locationId) {
                DB::table('location_user')->updateOrInsert(['location_id' => $locationId, 'user_id' => $userId], ['is_primary' => ($i === 1), 'created_at' => now(), 'updated_at' => now()]);
            }
        }
    }
}
