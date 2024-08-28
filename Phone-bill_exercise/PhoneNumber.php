<?php
class PhoneNumber
{
    public string $name;
    public string $prefix;
    public int $numberPhone;

    public function __construct(string $name, string $prefix,)
    {
        $this->name = $name;
        $this->prefix = $prefix;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function getNumberPhone(): int
    {
        return $this->numberPhone;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPrefix(int $prefix): void
    {
        $this->prefix = $prefix;
    }

    public function setNumberPhone(int $numberPhone): void
    {
        $this->numberPhone = $numberPhone;
    }

    public function checkIfThereIsTheSamePhoneNumber(PhoneNumber $phoneNumber): bool
    {
        if ($this->prefix === $phoneNumber->getPrefix() && $this->numberPhone === $phoneNumber->getNumberPhone()) {
            return true;
        } else {
            return false;
        }
    }

    public function getNumberOfCalls(PhoningBill $phoningBill)
    {
        $count = 0;
        foreach ($phoningBill->getCalls() as $call) {
            if ($call->getPhoneNumber()->getPhoneNumber() === $this->getNumberPhone()) {
                $count++;
            }
        }

        return $count;
    }
}
