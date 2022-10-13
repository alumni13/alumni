<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'title' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'iname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string'],
            'dob' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'min:11'],
            'nic' => ['required', 'string', 'max:12'],
            'profession' => ['required', 'string', 'max:255'],
            'currentplaceofwork' => ['required', 'string', 'max:255'],
            'periodofassociation' => ['required', 'string', 'max:255'],
            'typeofassociation' => ['required', 'string'],
            'qoff' => ['required', 'string', 'max:255'],
            'yoa' => ['required', 'string', 'max:255'],
            'oq' => ['required', 'string', 'max:255'],
            'areasofspecialization' => ['required', 'string', 'max:255'],
            'amtpaid' => ['required', 'string', 'max:255'],
            'mop' => ['required', 'string'],
            'nob' => ['required', 'string', 'max:255'],
            'dop' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'title' => $input ['title'],
            'name' => $input['name'],
            'iname' => $input['iname'],
            'gender' => $input['gender'],
            'dob' => $input['dob'],
            'address' => $input['address'],
            'phone' => $input['phone'],
            'nic' => $input['nic'],
            'profession' => $input['profession'],
            'currentplaceofwork' => $input['currentplaceofwork'],
            'periodofassociation' => $input['periodofassociation'],
            'typeofassociation' => $input['typeofassociation'],
            'qoff' => $input['qoff'],
            'yoa' => $input['yoa'],
            'oq' => $input['oq'],
            'areasofspecialization' => $input['areasofspecialization'],
            'amtpaid' => $input['amtpaid'],
            'mop' => $input['mop'],
            'nob' => $input['nob'],
            'dop' =>  $input['dop'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
