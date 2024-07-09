<?php

namespace App\Hellper;

use Illuminate\Support\Carbon;

/**
 * Calculates percentage
 *
 * @param  int  $base
 * @param  int  $number
 * @return float
 */
function get_percent($base, $number)
{
    if ($base == 0) {
        return 0;
    }

    $diff = $number - $base;

    return ($diff / $base) * 100;
}

/**
 * Converts time in business format to mysql format
 *
 * @param  string  $time
 * @return strin
 */
function format_time($time)
{
    $time_format = 'H:i';
    if (session('business.time_format') == 12) {
        $time_format = 'h:i A';
    }

    return !empty($time) ? Carbon::createFromFormat('H:i:s', $time)->format($time_format) : null;
}

/**
 * Converts date in mysql format to business format
 *
 * @param  string  $date
 * @param  bool  $time (default = false)
 * @return strin
 */
function format_date($date, $show_time = false, $business_details = null)
{
    $format = !empty($business_details) ? $business_details->date_format : session('business.date_format');
    if (!empty($show_time)) {
        $time_format = !empty($business_details) ? $business_details->time_format : session('business.time_format');
        if ($time_format == 12) {
            $format .= ' h:i A';
        } else {
            $format .= ' H:i';
        }
    }

    return !empty($date) ? Carbon::createFromTimestamp(strtotime($date))->format($format) : null;
}
