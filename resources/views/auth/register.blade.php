<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!--First Name -->
        <div class="mt-4">
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

         <!--Last Name -->
        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required  />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

          <!--Gender -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <div class="mt-2">
                <label for="male" class="inline-flex items-center">
                    <input type="radio" id="male" name="gender" value="m" class="form-radio" {{ old('gender') == 'm' ? 'checked' : '' }}>
                    <span class="ml-2">Male</span>
                </label>
                <label for="female" class="inline-flex items-center ml-6">
                    <input type="radio" id="female" name="gender" value="f" class="form-radio" {{ old('gender') == 'f' ? 'checked' : '' }}>
                    <span class="ml-2">Female</span>
                </label>
            </div>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

          <!--Phone Number-->
        <div class="mt-4">
            <x-input-label for="phone_numbers" :value="__('Phone Number')" />
            <x-text-input id="phone_numbers" class="block mt-1 w-full" type="number" name="phone_numbers[]" :value="old('phone_numbers')"/>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

         <!--Date of Birth -->
         <div class="mt-4">
            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
