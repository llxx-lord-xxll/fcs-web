<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class words implements Rule
{
    private $val;
    private $cval;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($val)
    {
        $this->val = $val;
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
        $this->cval = str_word_count($value);
        if ($this->cval > $this->val || $this->cval < 1)
        {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if($this->val>60)
        {
            return "The :attribute should not contain more than $this->val words" ;
        }
        elseif ($this->val)
        {
            return "The :attribute should at least contain a word";
        }

    }
}
