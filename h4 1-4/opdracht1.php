<?php
$tijd = date("H:i");
 
if($tijd >= 6) {
    echo"Het is ochtend.";
}else if($tijd >= 12) {
    echo"Het is Middag.";
}else if($tijd >= 18) {
    echo"Het is Avond.";
} else {
    echo"Het is sNachts.";
}
     
?>