<?php

$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
$product=htmlspecialchars($_POST['product'],ENT_QUOTES);
$order_count=htmlspecialchars($_POST['order_count'],ENT_QUOTES);

print "私の名前は、".$name."です"."<br/>";
print "ご希望の商品は、".$product."<br/>";
print "注文数は、".$order_count;