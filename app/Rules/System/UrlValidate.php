<?php

namespace App\Rules\System;

use Illuminate\Contracts\Validation\Rule;

class UrlValidate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($url)
    {
        $this->url = $url;
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
        //
        if($this->url == 'facebook'){
            if($value != null){
                return preg_match('/^(http|https):\/\/(www\.)?facebook.com\/.*$/', $value);
            }else{
                return true;
            }
        }
        if($this->url == 'twitter'){
            if($value != null){
                return preg_match('/^(http|https):\/\/(www\.)?twitter.com\/.*$/', $value);
            }else{
                return true;
            }
        }
        if($this->url == 'instagram'){
            if($value != null){
                return preg_match('/^(http|https):\/\/(www\.)?instagram.com\/.*$/', $value);
            }else{
                return true;
            }
        }
        if($this->url == 'github'){
            if($value != null){
                return preg_match('/^(http|https):\/\/(www\.)?github.com\/.*$/', $value);
            }else{
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
        return $this->url.' url is not valid.';
    }
}
