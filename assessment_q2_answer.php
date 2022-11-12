<?php 

include('data.php');

function dynamicSort(array &$array, $target_key) {

    array_walk_recursive(
        $array,
        function($value, $k, $key) use (&$target_values) {
            if ($k === $key) {
                $target_values[] = $value;
            }
        },
        $target_key
    );

    array_multisort($target_values, $array);
}

dynamicSort($data, "account_id");
echo "<pre>"; print_r($data); echo "<br />";

?>