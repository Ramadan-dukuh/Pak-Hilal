<?php
function testExit(){
    for($i=0;$i<5;$i++){
        //melakukan exit pada $i==2
        if($i==2){
            exit;
        }
        echo("nilai i: $i <br>");
    }
    echo("loop selesai");
}
//jalankan function
testExit();
echo("FUNCTION SELESAI");
?>