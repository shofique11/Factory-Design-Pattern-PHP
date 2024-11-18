<?php

require_once 'NotificationFactory.php';
require_once 'PushNotification.php';

try{
  $notificationType = 'push';
  $notification = NotificationFactory::createNotification($notificationType);
  $notification->send("Hello, Mr Zamil Have a great day!");

}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
?>