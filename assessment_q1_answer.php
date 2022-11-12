<?php 

include('data.php');

function printKeyValue($data)
{
    foreach($data AS $key => $value) {
        if (is_array($value)) {
            printKeyValue($value);
        } else {
            echo $key." => ".$value."<br>";
        }
    }
}

printKeyValue($data);




?>