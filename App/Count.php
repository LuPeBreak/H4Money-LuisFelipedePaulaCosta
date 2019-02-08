<?php 

require __DIR__."/Crud/ReadCount.php";

$read = new ReadCount;
$count = $read->build('cliente');


?>