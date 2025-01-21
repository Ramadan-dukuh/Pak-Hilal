<?php
function testbreak(){
    for($i=0;$i<5;$i++){
        //melakukan break pada $i==2
        if($i==2){
            break;
        }
        echo("nilai i: $i <br>");
    }
    echo("loop selesai <br>");
}
//jalankan function
testbreak();
echo("FUNCTION SELESAI");
?>