<?php
namespace practika_serv_2packet\Validators;
use Src\Validator\AbstractValidator;

class SpecialSymbolsValidator extends AbstractValidator
{
    protected string $message = 'Field :field cannot contain special characters';
    public function rule(): bool
    {
        $symbols = '!@#$%^&*()_+}{":?><';
        if(preg_match('/['.$symbols.']/', $this->value)){
            return false;
        }
        return true;
    }
}