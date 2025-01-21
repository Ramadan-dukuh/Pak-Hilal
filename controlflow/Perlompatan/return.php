<?php
function testReturn(){
    for($i=0;$i<5;$i++){
        //melakukan return pada $i==2
        if($i==2){
            return;
        }
        echo("nilai i: $i <br>");
    }
    echo("loop selesai");
}
//jalankan function
testReturn();
echo("FUNCTION SELESAI");
?>