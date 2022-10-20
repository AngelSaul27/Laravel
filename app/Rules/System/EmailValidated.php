<?php

namespace App\Rules\System;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class EmailValidated implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        if($value == auth()->user()->email){
            return true;
        }else{
            $email = DB::table('users')
                ->select('email')
                ->where('email', $value)
                ->count();
            if($email <= 0){
                return true;
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Error the mail change could not be performed.';
    }
}
