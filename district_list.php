<?php
$districts = array(1=>["Narsingdi","Narayanganj"],2=>["Cumilla","Noyakhali"],3=>["Bhola"]);


$id =  $_POST['id'];

$lists = ($districts[$id]);
foreach($lists as $list){
    echo "<option>". $list ."</option>";
}
?>