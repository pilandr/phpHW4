<?php

interface TariffInterface
{
    public function countPrice(): int;
    public function addService(ServiceInterface $service): self;
    public function getMinute(): int;
    public function getDistance(): int;
}