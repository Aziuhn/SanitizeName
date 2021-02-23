<?php

$name='<script>alert("ciccio")</script>';
if(strpos($name,"<script>")!=null){
    echo (strpos("<script>",$name));
}else{
    echo ("NULL");
}
echo "\n\n";
var_dump(strpos("<script>",$name));





//$correctStr = str_replace(" ", "", $str);
//echo ($str."\n");
//echo ($correctStr);