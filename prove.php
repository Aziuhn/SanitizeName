<?php

$name='<script>alert("ciccio")</script>';
if(strpos($name,"<script>")!==null){
    echo (strpos($name,"alert"));
}else{
    echo ("NULL");
}
echo "\n\n";
var_dump(strpos($name,"alert"));





//$correctStr = str_replace(" ", "", $str);
//echo ($str."\n");
//echo ($correctStr);