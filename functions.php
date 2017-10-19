<?php
function convert($value, $from, $to)
{
    $msg = 0;

    switch ($from)
    {
        // масса
        case 'gram':
            switch ($to)
            {
                case 'gram':
                    $factor = 1;
                    break;

                case 'microgram':
                    $factor = pow(10,3);
                    break;

                case 'milligram':
                    $factor = pow(10,3);
                    break;

                case 'kilogram':
                    $factor = pow(10,-3);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'microgram':
            switch ($to)
            {
                case 'gram':
                    $factor = pow(10,-6);
                    break;

                case 'microgram':
                    $factor = 1;
                    break;

                case 'milligram':
                    $factor = pow(10,-3);
                    break;

                case 'kilogram':
                    $factor = pow(10,-9);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'milligram':
            switch ($to)
            {
                case 'gram':
                    $factor = pow(10,-3);
                    break;

                case 'microgram':
                    $factor = pow(10,3);
                    break;

                case 'milligram':
                    $factor = 1;
                    break;

                case 'kilogram':
                    $factor = pow(10,-6);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'kilogram':
            switch ($to)
            {
                case 'gram':
                    $factor = pow(10,3);
                    break;

                case 'microgram':
                    $factor = pow(10,9);
                    break;

                case 'milligram':
                    $factor = pow(10,6);
                    break;

                case 'kilogram':
                    $factor = 1;
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        // время
        case 'millisecond':
            switch ($to)
            {
                case 'millisecond':
                    $factor = 1;
                    break;

                case 'second':
                    $factor = 1/1000;
                    break;

                case 'minute':
                    $factor = 1/(1000*60);
                    break;

                case 'hour':
                    $factor = 1/(1000*60*60);
                    break;

                case 'day':
                    $factor = 1/(1000*60*60*24);
                    break;

                case 'week':
                    $factor = 1/(1000*60*60*24*7);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'second':
            switch ($to)
            {
                case 'millisecond':
                    $factor = 1000;
                    break;

                case 'second':
                    $factor = 1;
                    break;

                case 'minute':
                    $factor = 60;
                    break;

                case 'hour':
                    $factor = 60*60;
                    break;

                case 'day':
                    $factor = 60*60*24;
                    break;

                case 'week':
                    $factor = 60*60*24*7;
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'minute':
            switch ($to)
            {
                case 'millisecond':
                    $factor = 1000*60;
                    break;

                case 'second':
                    $factor = 60;
                    break;

                case 'minute':
                    $factor = 1;
                    break;

                case 'hour':
                    $factor = 1/(60);
                    break;

                case 'day':
                    $factor = 1/(60*24);
                    break;

                case 'week':
                    $factor = 1/(60*24*7);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'hour':
            switch ($to)
            {
                case 'millisecond':
                    $factor = 1000*60*60;
                    break;

                case 'second':
                    $factor = 60*60;
                    break;

                case 'minute':
                    $factor = 60;
                    break;

                case 'hour':
                    $factor = 1;
                    break;

                case 'day':
                    $factor = 1/(24);
                    break;

                case 'week':
                    $factor = 1/(24*7);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'day':
            switch ($to)
            {
                case 'millisecond':
                    $factor = 1000*60*60*24;
                    break;

                case 'second':
                    $factor = 60*60*24;
                    break;

                case 'minute':
                    $factor = 60*24;
                    break;

                case 'hour':
                    $factor = 24;
                    break;

                case 'day':
                    $factor = 1;
                    break;

                case 'week':
                    $factor = 1/7;
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'week':
            switch ($to)
            {
                case 'millisecond':
                    $factor = 1000*60*60*24*7;
                    break;

                case 'second':
                    $factor = 60*60*24*7;
                    break;

                case 'minute':
                    $factor = 60*24*7;
                    break;

                case 'hour':
                    $factor = 24*7;
                    break;

                case 'day':
                    $factor = 1*7;
                    break;

                case 'week':
                    $factor = 1;
                    break;

                default:
                    $msg = '[err]';
            }
            break;
        
        // длина
        case 'picometer':
            switch ($to)
            {
                case 'picometer':
                    $factor = 1;
                    break;

                case 'nanometer':
                    $factor = 1/pow(10,3);
                    break;

                case 'micrometer':
                    $factor = 1/pow(10,6);
                    break;

                case 'millimeter':
                    $factor = 1/pow(10,9);
                    break;

                case 'centimeter':
                    $factor = 1/pow(10,10);
                    break;

                case 'meter':
                    $factor = 1/pow(10,12);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'nanometer':
            switch ($to)
            {
                case 'picometer':
                    $factor = pow(10,3);
                    break;

                case 'nanometer':
                    $factor = 1;
                    break;

                case 'micrometer':
                    $factor = 1/pow(10,3);
                    break;

                case 'millimeter':
                    $factor = 1/pow(10,6);
                    break;

                case 'centimeter':
                    $factor = 1/pow(10,7);
                    break;

                case 'meter':
                    $factor = 1/pow(10,9);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'micrometer':
            switch ($to)
            {
                case 'picometer':
                    $factor = pow(10,6);
                    break;

                case 'nanometer':
                    $factor = pow(10,3);
                    break;

                case 'micrometer':
                    $factor = 1;
                    break;

                case 'millimeter':
                    $factor = 1/pow(10,3);
                    break;

                case 'centimeter':
                    $factor = 1/pow(10,4);
                    break;

                case 'meter':
                    $factor = 1/pow(10,6);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'millimeter':
            switch ($to)
            {
                case 'picometer':
                    $factor = pow(10,9);
                    break;

                case 'nanometer':
                    $factor = pow(10,6);
                    break;

                case 'micrometer':
                    $factor = pow(10,3);
                    break;

                case 'millimeter':
                    $factor = 1;
                    break;

                case 'centimeter':
                    $factor = 1/10;
                    break;

                case 'meter':
                    $factor = 1/pow(10,3);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'centimeter':
            switch ($to)
            {
                case 'picometer':
                    $factor = pow(10,10);
                    break;

                case 'nanometer':
                    $factor = pow(10,7);
                    break;

                case 'micrometer':
                    $factor = pow(10,4);
                    break;

                case 'millimeter':
                    $factor = 10;
                    break;

                case 'centimeter':
                    $factor = 1;
                    break;

                case 'meter':
                    $factor = 1/pow(10,2);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'meter':
            switch ($to)
            {
                case 'picometer':
                    $factor = pow(10,12);
                    break;

                case 'nanometer':
                    $factor = pow(10,9);
                    break;

                case 'micrometer':
                    $factor = pow(10,6);
                    break;

                case 'millimeter':
                    $factor = pow(10,3);
                    break;

                case 'centimeter':
                    $factor = 100;
                    break;

                case 'meter':
                    $factor = 1;
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        // сила тока
        case 'milliampere':
            switch ($to)
            {
                case 'milliampere':
                    $factor = 1;
                    break;

                case 'ampere':
                    $factor = 1/pow(10,3);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'ampere':
            switch ($to)
            {
                case 'milliampere':
                    $factor = pow(10,3);
                    break;

                case 'ampere':
                    $factor = 1;
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        // напряжение
        case 'millivolt':
            switch ($to)
            {
                case 'millivolt':
                    $factor = 1;
                    break;

                case 'volt':
                    $factor = 1/pow(10,3);
                    break;

                case 'kilovolt':
                    $factor = 1/pow(10,6);
                    break;

                case 'megavolt':
                    $factor = 1/pow(10,9);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'volt':
            switch ($to)
            {
                case 'millivolt':
                    $factor = pow(10,3);
                    break;

                case 'volt':
                    $factor = 1;
                    break;

                case 'kilovolt':
                    $factor = 1/pow(10,3);
                    break;

                case 'megavolt':
                    $factor = 1/pow(10,6);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'kilovolt':
            switch ($to)
            {
                case 'millivolt':
                    $factor = pow(10,6);
                    break;

                case 'volt':
                    $factor = pow(10,3);
                    break;

                case 'kilovolt':
                    $factor = 1;
                    break;

                case 'megavolt':
                    $factor = 1/pow(10,3);
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'megavolt':
            switch ($to)
            {
                case 'millivolt':
                    $factor = pow(10,9);
                    break;

                case 'volt':
                    $factor = pow(10,6);
                    break;

                case 'kilovolt':
                    $factor = pow(10,3);
                    break;

                case 'megavolt':
                    $factor = 1;
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        // температура
        case 'degree_celsius':
            switch ($to)
            {
                case 'degree_celsius':
                    $formula = $value;
                    break;

                case 'degree_fahrenheit':
                    $formula = $value * 9 / 5 + 32;
                    break;

                case 'kelvin':
                    $formula = $value + 273.15;
                    break;
                
                default:
                    $msg = '[err]';
            }
            break;

        case 'degree_fahrenheit':
            switch ($to)
            {
                case 'degree_celsius':
                    $formula = 5 / 9 * ($value - 32);
                    break;

                case 'degree_fahrenheit':
                    $formula = $value;
                    break;

                case 'kelvin':
                    $formula = 5 / 9 * ($value - 32) + 273.15;
                    break;

                default:
                    $msg = '[err]';
            }
            break;

        case 'kelvin':
            switch ($to)
            {
                case 'degree_celsius':
                    $formula = $value - 273.15;
                    break;

                case 'degree_fahrenheit':
                    $formula = ($value - 273.15) * 9 / 5 + 32;
                    break;

                case 'kelvin':
                    $formula = 1;
                    break;

                default:
                    $msg = '[err]';
            }
            break;






    }


    if ($msg)
    {
        $result = $msg;
    }
    elseif($formula)
    {
        $result = $formula;
    }else
    {
        $result = $value * $factor;
    }

    return $result;
}