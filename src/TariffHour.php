<?php

class TariffHour extends TariffAbstract
{
    protected $pricePerMinute = 200 / 60;
    protected $pricePerKilometer = 0;

    public function __construct(int $distance, int $minutes)
    {
        parent::__construct($distance, $minutes);

        $this->minutes = $this->minutes - $this->minutes % 60 + 60;
    }
}