<?php

class PhoningBill
{
    private PhoneNumber $ownerOfThePhoneNumber;
    private array $calls = [];
    private int $numberOfCalls;
    private const SUBSCRIPTION_FEE = 500;


    public function __construct(PhoneNumber $ownerOfThePhoneNumber, array $calls)
    {
        $this->ownerOfThePhoneNumber = $ownerOfThePhoneNumber;
        $this->calls = $calls;
        $this->numberOfCalls = count($calls);
    }

    public function setNumberOfCalls(int $numberOfCalls): void
    {
        $this->numberOfCalls = $numberOfCalls;
    }

    public function getNumberOfCalls(): int
    {
        return $this->numberOfCalls;
    }



    public function getOwnerOfThePhoneNumber(): PhoneNumber
    {
        return $this->ownerOfThePhoneNumber;
    }

    public function setOwnerOfThePhoneNumber(PhoneNumber $ownerOfThePhoneNumber): void
    {
        $this->ownerOfThePhoneNumber = $ownerOfThePhoneNumber;
    }
    public function addCall(Call $call): void
    {
        $this->calls[] = $call;
        $this->numberOfCalls++;
    }
    public function getCalls(): array
    {
        return $this->calls;
    }
    public function calculateTotalBill(): int
    {
        $totalCallCost = 0;
        foreach ($this->calls as $call) {
            $minutes = intdiv($call->getCallDuration() + 59, 60);
            $totalCallCost += $minutes * 7;
        }
        $totalBill = self::SUBSCRIPTION_FEE + $totalCallCost;
        return $totalBill;
    }

    public function calculateTotalMinutes(): int
    {
        $totalMinutes = 0;
        foreach ($this->calls as $call) {
            $minutes = intdiv($call->getCallDuration() + 59, 60);
            $totalMinutes += $minutes;
        }
        return $totalMinutes;
    }
}
