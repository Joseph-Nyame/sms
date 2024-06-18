<?php

namespace App\SmsMethods;

class HubtelSms implements SmsMethod{
    public function sms(): string{
        return 'sms selected: hubtel';
    }
}