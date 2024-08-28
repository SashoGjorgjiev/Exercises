<?php

class Call
{
    public PhoneNumber $phoneNumber;
    public int $callDuration;

    public function __construct(PhoneNumber $phoneNumber, int $callDuration)
    {
        $this->phoneNumber = $phoneNumber;
        $this->callDuration = $callDuration;
    }

    public function getCallDuration(): int
    {
        return $this->callDuration;
    }

    public function setCallDuration(int $callDuration): void
    {
        $this->callDuration = $callDuration;
    }

    public function getMinuti(): int
    {
        return intdiv($this->callDuration + 59, 60); 
    }
    public function getPhoneNumber(): PhoneNumber
    {
        return $this->phoneNumber;
    }
}
