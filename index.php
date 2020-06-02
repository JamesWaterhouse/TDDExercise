<?php

function greet($names = 'my friend')
{
    $allResults = '';

    if (is_array($names)) {
        $shout_array = [];
        $speak_array = [];
        $clean_array = [];

        foreach ($names as $name) {
            if (strpos($name, ',')) {
                echo($name);
                $allNames = explode(', ', $name);
                var_dump($allNames);
                foreach ($allNames as $name) {
                    array_push($clean_array, $name);
                }
            }else{
                array_push($clean_array, $name);
            }
        }
        foreach ($clean_array as $name) {
            if (ctype_upper($name)) {
                array_push($shout_array, $name);
            } else {
                array_push($speak_array, $name);
            }
        }
        if ($speak_array) {
            if (count($speak_array) > 2) {
                $i = 0;
                $length = count($speak_array);
                $result = '';
                foreach ($speak_array as $name) {
                    if ($i == 0) {
                        $result = "Hello, " . $name . ", ";
                    } elseif ($i < $length -1) {
                        $result .= $name . ", ";
                    } else {
                        $result .= "and " . $name . ".";
                    }
                    $i++;
                }
                $allResults .= $result;
            }elseif(count($speak_array) == 2) {
                $allResults .= "Hello, " . $speak_array[0] . " and " . $speak_array[1] . ".";
            }else{
                $allResults .= "Hello, " . $speak_array[0] . ".";
            }
        }
        if ($shout_array) {
            if (count($shout_array) > 2) {
                $i = 0;
                $length = count($shout_array);
                $result = '';
                foreach ($shout_array as $name) {
                    if ($i == 0) {
                        $result = " AND HELLO, " . $name . ", ";
                    } elseif ($i < $length -1) {
                        $result .= $name . ", ";
                    } else {
                        $result .= "AND " . $name . "!";
                    }
                    $i++;
                }
                $allResults .= $result;
            } elseif (count($shout_array) == 2) {
                $allResults .= " AND HELLO, " . $shout_array[0] . " AND " . $shout_array[1] . "!";
            } else {
                $allResults .= " AND HELLO " . $shout_array[0] . "!";
            }
        }
    } else {
        if ($names) {
            if (ctype_upper($names)) {
                return "HELLO, " . $names . '!';
            }
            return "Hello, " . $names . ".";
        }
        return "Hello, my friend.";
    }
    return $allResults;
}
