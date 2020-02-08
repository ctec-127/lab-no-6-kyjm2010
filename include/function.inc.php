<?php 
// function to calculate converted temperature
function convertTemp($temp, $unit1, $unit2)
{
    if($unit1 == 'celsius'){
        if($unit2 == 'fahrenheit'){
            $converted = (1.8*$temp)+32;
        }elseif($unit2 == 'kelvin'){
            $converted = $temp + 273.15;
        }elseif($unit2 == 'celsius'){
            $converted = $temp;
        }
    }

    if($unit1 == 'fahrenheit'){
        if($unit2 == 'celsius'){
            $converted = (1.8*$temp)-32;
        }elseif($unit2 == 'kelvin'){
            $converted = ($temp + 459.67)*1.8;
        } elseif($unit2 == 'fahrenheit'){
            $converted = $temp;
        }
        
    }

    if($unit1 == 'kelvin'){
        if($unit2 == 'celsius'){
            $converted = $temp - 273.15;
        }elseif($unit2 == 'fahrenheit'){
            $converted = ($temp * 1.8) - 459.67;
        } elseif($unit2 == 'kelvin'){
            $converted = $temp;
        }
        
    }
    // conversion formulas
    // Celsius to Fahrenheit = T(°C) × 9/5 + 32
    // Celsius to Kelvin = T(°C) + 273.15
    // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
    // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
    // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
    // Kelvin to Celsius = T(K) - 273.15

    // You need to develop the logic to convert the temperature based on the selections and input made
    return $converted;
} // end function
?>