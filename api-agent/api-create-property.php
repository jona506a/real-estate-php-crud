<?php

//validate everything
if(empty( $_POST['price'])){
    echo 'error'.__LINE__;
    exit;
}

if( !ctype_digit( $_POST['price'] ) ){
    echo 'error'.__LINE__;
    exit;
}
$sPrice = intVal($_POST['price']); //convert to number
// todo: validate the price
$sAddress = $_POST['address'];
//todo: validate the address: is it empty? check it's min/max


$jProperty = new stdClass();
$jProperty->price = $sPrice;
$jProperty->address = $sAddress;
$jProperty->uploadedDate = time();
$jProperty->size = intVal($_POST['size']);
$jProperty->images = [];


$iImageNumber = count($_FILES['images']['name']);
for ($i = 0; $i < $iImageNumber ; $i++){
    $sImageName = $_FILES['images']['name'][$i];
    // echo $sImageName;
    $iImageSize = $_FILES['images']['size'][$i];
    // echo $iImageSize;
    $sImageExt = $_FILES['images']['type'][$i];
    // echo $sImageExt;
    // array_push($jProperty->images, $sImageName); | ONE WAY
    $jProperty->images[$i] = $sImageName; // ANOTHER WAY

}


$sProperty = json_encode($jProperty, JSON_PRETTY_PRINT);
file_put_contents('property.json', $sProperty);

