<?php

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
