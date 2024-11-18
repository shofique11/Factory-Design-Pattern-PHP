<?php

require_once 'NotificationFactory.php';
require_once 'EmailNotification.php';

try{
  $notificationType = 'email';
  $notification = NotificationFactory::createNotification($notificationType);
  $notification->send("Hello, Mr Rahat Congratulations!");

}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
?>