<?php
namespace DopPackForMW;

function collection(array $array = []): DopPackForMW
{
    return new DopPackForMW($array);
}
