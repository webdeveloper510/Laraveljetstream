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
        $valid = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required'],
            'date' => ['required'],
            'profile_photo_path' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

         $profile_photo_path = $input['profile_photo_path']->store('profile', 'spaces');
        return User::create([
            // $input=$request->all();
            // $destinationPath = $input['profile_photo_path']->store('images/', 'spaces');
            'name' => $input['name'],
            'surname' => $input['surname'],
            'date_of_birth' => $input['date'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'profile_photo_path' =>$profile_photo_path
        ]);
    }
}
