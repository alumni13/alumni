<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        

        <x-jet-validation-errors class="mb-4" />
       
                <h6><b><u> Personal Details </u> <b></h6>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="title" value="{{ __('Title') }}" />
                <select name="title" class="px-3 py-2 block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('title')" required autofocus autocomplete="title" >
                                   <option value="">Select </option>
                                   <option value="Prof">Prof</option>
                                   <option value="Dr">Dr</option>
                                   <option value="Eng(Mr)">Eng(Mr)</option>
                                   <option value="Eng(Ms)">Eng(Ms)</option>
                                   <option value="Mr">Mr</option>
                                   <option value="Ms">Ms</option>
                                   <option value="Mrs">Mrs</option>
                               </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Full Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="iname" value="{{ __('Name with Initials') }}" />
                <x-jet-input id="iname" class="block mt-1 w-full" type="text" name="iname" :value="old('iname')" required autofocus autocomplete="iname" />
            </div>

            <div class="mt-4">
                <x-jet-label for="gender" value="{{ __('Gender') }}" />
                <select name="gender" class="px-3 py-2 block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('gender')" required autofocus autocomplete="gender" >
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                </select>
            </div>


            <div class="mt-4">
                <x-jet-label for="dob" value="{{ __('Date of Birth') }}" />
                <x-jet-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus autocomplete="dob" />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Contact Number') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-jet-label for="nic" value="{{ __('NIC') }}" />
                <x-jet-input id="nic" class="block mt-1 w-full" type="text" name="nic" :value="old('nic')" required autofocus autocomplete="nic" />
            </div>

            <div class="mt-4">
                <x-jet-label for="profession" value="{{ __('Profession/Designation') }}" />
                <x-jet-input id="profession" class="block mt-1 w-full" type="text" name="profession" :value="old('profession')" required autofocus autocomplete="profession" />
            </div>

            <div class="mt-4">
                <x-jet-label for="currentplaceofwork" value="{{ __('Present Place of work') }}" />
                <x-jet-input id="currentplaceofwork" class="block mt-1 w-full" type="text" name="currentplaceofwork" :value="old('currentplaceofwork')" required autofocus autocomplete="currentplaceofwork" />
            </div>

           

            <div class="mt-4">
                <x-jet-label for="periodofassociation" value="{{ __('Period of Association with the Faculty') }}" />
                <x-jet-input id="periodofassociation" class="block mt-1 w-full" type="text" name="periodofassociation" :value="old('currentplaceofwork')" required autofocus autocomplete="periodofassociation" />
            </div>

            <div class="mt-4">
                <x-jet-label for="typeofassociation" value="{{ __('Type of Association with the Faculty') }}" />
                <select name="typeofassociation" class="px-3 py-2 block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('typeofassociation')" required autofocus autocomplete="typeofassociation" >
                        <option value="">Select </option>
                        <option value="Undergraduate">Undergraduate</option>
                        <option value="Postgraduate">Postgraduate</option>
                        <option value="Academic Staff">Academic Staff</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="qoff" value="{{ __('Degrees / Qualifications Obtained from the Faculty') }}" />
                <x-jet-input id="qoff" class="block mt-1 w-full" type="text" name="qoff" :value="old('qoff')" required autofocus autocomplete="qoff" />
            </div>

            <div class="mt-4">
                <x-jet-label for="yoa" value="{{ __('Year of Award') }}" />
                <x-jet-input id="yoa" class="block mt-1 w-full" type="text" name="yoa" :value="old('yoa')" required autofocus autocomplete="yoa" />
            </div>

            <div class="mt-4">
                <x-jet-label for="oq" value="{{ __('Other Academic/ Professional Qualifications') }}" />
                <x-jet-input id="oq" class="block mt-1 w-full" type="text" name="oq" :value="old('oq')" required autofocus autocomplete="oq" />
            </div>

            <div class="mt-4">
                <x-jet-label for="areasofspecialization" value="{{ __('Key Areas of Specialization') }}" />
                <x-jet-input id="areasofspecialization" class="block mt-1 w-full" type="text" name="areasofspecialization" :value="old('areasofspecialization')" required autofocus autocomplete="areasofspecialization" />
            </div>

            <div class="mt-4">
                <x-jet-label for="amtpaid" value="{{ __('Amount Paid') }}" />
                <x-jet-input id="amtpaid" class="block mt-1 w-full" type="text" name="amtpaid" :value="old('amtpaid')" required autofocus autocomplete="amtpaid" />
            </div>

            <div class="mt-4">
                <x-jet-label for="mop" value="{{ __('Mode of Payment') }}" />
                <select name="mop" class="px-3 py-2 block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="old('mop')" required autofocus autocomplete="mop" >
                                   <option value="">Select </option>
                                   <option value="Cash">Cash</option>
                                   <option value="Bank Transfer">Bank Transfer</option>
                                   <option value="Cheque">Cheque</option>
                                   <option value="Bank Draft">Bank Draft</option>
                                   <option value="Credit Card">Credit Card</option>
                                   <option value="Other">Other</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="nob" value="{{ __('Name of the Bank') }}" />
                <x-jet-input id="nob" class="block mt-1 w-full" type="text" name="nob" :value="old('nob')" required autofocus autocomplete="nob" />
            </div>

            <div class="mt-4">
                <x-jet-label for="dop" value="{{ __('Date of Payment') }}" />
                <x-jet-input id="dop" class="block mt-1 w-full" type="date" name="dop" :value="old('dop')" required autofocus autocomplete="dop" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
