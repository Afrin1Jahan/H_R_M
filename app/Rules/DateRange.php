<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;


class DateRange implements Rule
{
    public function passes($attribute, $value)
    {
        // Assuming $value is an array with 'start_date' and 'end_date'
        $startDate = \Carbon\Carbon::parse($value['start_date']);
        $endDate = \Carbon\Carbon::parse($value['end_date']);

        return $endDate->greaterThanOrEqualTo($startDate);
    }



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
  
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
