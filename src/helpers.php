<?php
namespace DopPackForMW;

use Src\Validator\Validator;

function collection(array $array = []): Validator
{
    return new Validator($array);
}