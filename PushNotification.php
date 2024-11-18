<?php

require_once 'Notification.php';
 class PushNotification implements Notification{
    public function send(string $message){
        echo "Sending push notification: $message \n";	
    }
 }
?>