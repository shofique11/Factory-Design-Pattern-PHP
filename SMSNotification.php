<?php
require_once 'Notification.php';
class SMSNotification implements Notification{
    public function send(string $message){
        echo "Send SMS notification: $message \n";	
    }
}
?>