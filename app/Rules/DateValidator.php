<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DateValidator implements Rule
{

    public $error;

    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        if(strpos($value, 'to') !== false){//dd-mm-yyyy to dd-mm-yyyy
            $startDate = substr($value, 0 , strrpos($value, 'to'));
            $endDate = substr($value, strripos($value, 'to')+3);

            $startValid = explode('-', $startDate);
            $endValid = explode('-', $endDate);

            if(count($startValid) == 3 && count($endValid) == 3){
                if(checkdate($startValid[1], $startValid[0], $startValid[2]) && checkdate($endValid[1], $endValid[0], $endValid[2])){
                    if(strtotime($startDate) <= strtotime($endDate)){
                        return true;
                    }else{
                        $this->error = 'Start date must be less than end date';
                        return false;
                    }
                }
                $this->error = 'Please make sure to use the (mm-dd-YY) format.';
            }else{
                $this->error = 'The input date is not valid';
            }
        }else{
            $date = explode('-', $value);
            if(count($date) == 3){
                if(checkdate($date[1], $date[0], $date[2])){
                    return true;
                }
                $this->error = 'Please make sure to use the (mm-dd-YY) format.';
            }
            $this->error = 'The input date is not valid';
        }
        $this->error = 'Error processing the date, please try again later. <br>'.$value;
        return false;
    }

    public function message()
    {
        return $this->error;
    }
}
