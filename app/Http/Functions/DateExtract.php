<?php
namespace App\Http\Functions;
class DateExtract{

    public static function subtrDate($date){
        if(strpos($date, 'to') !== false){ //dd-mm-yyyy to dd-mm-yyyy
            $startDate = substr($date,0 , strrpos($date, 'to'));
            $endDate = substr($date, strrpos($date, 'to') + 3);

            $startDate = explode('-', $startDate);
            $endDate = explode('-', $endDate);

            $startDate = $startDate[2].'-'.$startDate[1].'-'.$startDate[0];
            $endDate = $endDate[2].'-'.$endDate[1].'-'.$endDate[0];

            $startDate = str_replace(" ", "", $startDate);
            $endDate = str_replace(" ", "", $endDate);

            return [$startDate,$endDate];
        }else{
            $date = explode('-', $date);
            $date = $date[2].'-'.$date[1].'-'.$date[0];

            $date = str_replace(" ", "", $date);

            return [$date, $date];
        }
    }

}
