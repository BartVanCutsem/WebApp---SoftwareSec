<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;
use Valorin\Pwned\Pwned; 
trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        return ['required', 'string',(new Password)->length(7), 'confirmed',  new \Valorin\Pwned\Pwned(300),];
    }
}
