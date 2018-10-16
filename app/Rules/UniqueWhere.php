<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueWhere implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $form,$field;
    public function __construct($form,$field)
    {

        $this->form = $form;
        $this->field = $field;
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

        $res = 0;

        foreach (DB::table('site_forms_submissioon')->where('form_id','=',$this->form)->get() as $submissions)
        {
            $tmp = $res = DB::table("site_forms_data")->where('submission_id','=',$submissions->id)->where('field_id','=',$this->field)->where('field_data','=',$value)->count();

            if ($tmp != 0)
            {
                $res++;
            }
        }

        if ($res == 0)
        {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The :attribute already exists";
    }
}
