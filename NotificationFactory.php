<?php
 class NotificationFactory{
    public static function createNotification(string $type){
            switch($type){
                case 'email': 
                    return new EmailNotification();
                case 'sms': 
                    return new SmsNotification();
                case 'push':
                    return new PushNotification();
                default:
                return throw new Exception("Unknown notification : $type");  
            }
    }
 }
?>