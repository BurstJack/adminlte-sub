<?php

    function println($str) {
        echo $str . "<br>";
    }

    function trim_last($arr) {
        if (trim($arr[count($arr)-1]) ===  "") 
            { unset($arr[count($arr)-1]); }
        return $arr;
    }

    function pretty_print_r($arr) {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }

    function arr_json($arr) {
    }
    
    function json_2arr($json) {
    }

    // 1st line csv holds column names
    function csv_2arr($csv) {
        $res = array();
        $temp = explode("\n", $csv);
        
        foreach ($temp as $k=>$v) {
            if ($k==0) { $keys = explode(";", $v); }
            else { 
                $values = explode(";", $v); 
                $combine = array_combine($keys, $values);
                $res[] = $combine;
            }
        }        
        return $res;
    }
    
?>
