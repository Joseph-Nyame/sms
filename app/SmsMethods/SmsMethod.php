<?php

namespace App\SmsMethods;

interface SmsMethod{
    public function sms(): string;
}