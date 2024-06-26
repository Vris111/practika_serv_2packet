<?php
namespace practika_serv_2packet\Validators;

use practika_serv_2packet\AbstractValidator;

class RequireValidator extends AbstractValidator
{
    protected string $message = 'Field :field is required';
    public function rule(): bool
    {
        return !empty($this->value);
    }
}