<?php
session_start();
if(isset($_POST["ID"]) && isset($_POST["numbe"])){
    $numbe = $_POST["numbe"];
    $ID = $_POST["ID"];
    $cart = $_SESSION['cart'];
    if(array_key_exists($ID, $cart)){
        if($numbe){
            $cart[$ID]= array(
                'name'=>$cart[$ID]["name"],
                'numbe'=> $numbe,
                'price'=>$cart[$ID]['price'],
                'img'=>$cart[$ID]['img']
            );
        }else{
            unset( $cart[$ID]);
        }
        
        $_SESSION['cart'] = $cart;
}
}

?>