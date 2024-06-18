<?php

namespace App\SmsMethods;

class SmsStrategyContext{
    private SmsMethod $strategy;

    public function __construct(string $smsMethod){
        $this->strategy= match($smsMethod){
            'mnotify'=> new MnotifySms(),
            'google'=> new GoogleSms(),
            'hubtel'=> new HubtelSms(),
            default => throw new \InvalidArgumentException('you must pass in either mnotify, hubtel or google'),
        };

    }
    public function sms(): string{
        return $this->strategy->sms();
    }
}