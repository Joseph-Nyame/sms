<?php

namespace App\SmsMethods;

class GoogleSms implements SmsMethod{
    public function sms(): string{
        return 'sms selected: google sms';
    }
}