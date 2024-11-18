<?php
require_once 'Notification.php';
class EmailNotification implements Notification{
    public function send(string $message){
            echo "Sending email: $message \n";
    }
}
?>