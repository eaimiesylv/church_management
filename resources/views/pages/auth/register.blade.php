<x-layouts::auth :title="__('Register')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-zinc-700">{{ __('Name') }}</label>
                <input id="name" name="name" value="{{ old('name') }}" type="text" required autofocus autocomplete="name" placeholder="{{ __('Full name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('name') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium text-zinc-700">{{ __('Email address') }}</label>
                <input id="email" name="email" value="{{ old('email') }}" type="email" required autocomplete="email" placeholder="email@example.com" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('email') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- extra profile selects: country, state, lga, service unit, cell, position, hierarchy --}}
            @php
                $countries = $countries ?? \Illuminate\Support\Facades\DB::table('countries')->get();
                $states = $states ?? \Illuminate\Support\Facades\DB::table('states')->get();
                $lgas = $lgas ?? \Illuminate\Support\Facades\DB::table('local_governments')->get();
                $serviceUnits = \Illuminate\Support\Facades\DB::table('service_units')->get();
                $cells = \Illuminate\Support\Facades\DB::table('cells')->get();
                $positions = \Illuminate\Support\Facades\DB::table('positions')->get();
                $hierarchies = \Illuminate\Support\Facades\DB::table('hierarchies')->get();
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Country') }}</label>
                    <select name="country_id" class="mt-1 block w-full rounded-md border-gray-300">
                        <option value="">{{ __('Select country') }}</option>
                        @foreach($countries as $c)
                            <option value="{{ $c->id }}" {{ old('country_id') == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('State') }}</label>
                    <select name="state_of_origin_id" class="mt-1 block w-full rounded-md border-gray-300">
                        <option value="">{{ __('Select state') }}</option>
                        @foreach($states as $s)
                            <option value="{{ $s->id }}" {{ old('state_of_origin_id') == $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('LGA') }}</label>
                    <select name="lga_id" class="mt-1 block w-full rounded-md border-gray-300">
                        <option value="">{{ __('Select LGA') }}</option>
                        @foreach($lgas as $l)
                            <option value="{{ $l->id }}" {{ old('lga_id') == $l->id ? 'selected' : '' }}>{{ $l->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Service unit') }}</label>
                    <select name="service_unit_id" class="mt-1 block w-full rounded-md border-gray-300">
                        <option value="">{{ __('Select service unit') }}</option>
                        @foreach($serviceUnits as $su)
                            <option value="{{ $su->id }}" {{ old('service_unit_id') == $su->id ? 'selected' : '' }}>{{ $su->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Cell') }}</label>
                    <select name="cell_id" class="mt-1 block w-full rounded-md border-gray-300">
                        <option value="">{{ __('Select cell') }}</option>
                        @foreach($cells as $cell)
                            <option value="{{ $cell->id }}" {{ old('cell_id') == $cell->id ? 'selected' : '' }}>{{ $cell->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Position') }}</label>
                    <select name="position_id" class="mt-1 block w-full rounded-md border-gray-300">
                        <option value="">{{ __('Select position') }}</option>
                        @foreach($positions as $p)
                            <option value="{{ $p->id }}" {{ old('position_id') == $p->id ? 'selected' : '' }}>{{ $p->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">{{ __('Hierarchy') }}</label>
                    <select name="hierarchy_id" class="mt-1 block w-full rounded-md border-gray-300">
                        <option value="">{{ __('Select hierarchy') }}</option>
                        @foreach($hierarchies as $h)
                            <option value="{{ $h->id }}" {{ old('hierarchy_id') == $h->id ? 'selected' : '' }}>{{ $h->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-zinc-700">{{ __('Password') }}</label>
                <input id="password" name="password" type="password" required autocomplete="new-password" placeholder="{{ __('Password') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('password') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-zinc-700">{{ __('Confirm password') }}</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="{{ __('Confirm password') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('password_confirmation') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="w-full inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none" data-test="register-user-button">
                    {{ __('Create account') }}
                </button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">{{ __('Log in') }}</a>
        </div>
    </div>
</x-layouts::auth>
