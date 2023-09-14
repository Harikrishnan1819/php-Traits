<?php
trait message1{
    function msg1(){
        echo "HELLO...!<br>";
    }
}
trait message2{
    function msg2(){
        echo "HOW ARE YOU....!";
    }
}
class welcome1{
    use message1;
}
class welcome2{
    use message1,message2;
}
$obj= new welcome1();  
$obj->msg1();

$obj1 = new welcome2();
$obj1 -> msg1();
$obj1 -> msg2();


?>