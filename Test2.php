<?php

require_once 'NotificationFactory.php';
require_once 'SMSNotification.php';

try{
  $notificationType = 'sms';
  $notification = NotificationFactory::createNotification($notificationType);
  $notification->send("Hello, Khalid Welldone!");

}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
?>