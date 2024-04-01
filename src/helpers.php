<?php
namespace DopPackForMW;


function collection(array $array = []): RequireValidator
{
    return new RequireValidator($array);
}
function collection1(array $array = []): SpecialSymbolsValidator
{
    return new SpecialSymbolsValidator($array);
}
function collection2(array $array = []): UniqueValidator
{
    return new UniqueValidator($array);
}