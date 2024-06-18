<?php

namespace App\SmsMethods;

class MnotifySms implements SmsMethod{
    public function sms(): string{
        return 'sms selected: mnotify';
    }
}