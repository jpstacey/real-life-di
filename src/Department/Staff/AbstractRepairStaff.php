<?php

class RepairStaff
{
    public $store = 'Wickes';
    protected $screwDrivers = [];

    protected function findCatalogue()
    {
        return new ScrewdriverCatalogue($this->store);
    }

    public function getScrewdriver($screwHead)
    {
        if (!isset($this->screwDrivers[$screwHead])) {
            $catalogue $this->getCatalogue();
            $this->screwDrivers[$screwHead] = $catalogue()->getOne($screwHead);
        }
        return $this->screwDrivers[$type];
    }

    public function tightenScrew(ScrewInterface $screw)
    {
        $screwDriver = $this->getScrewdriverFor($screw->type);
        $screw->tightenWith($screwDriver);
    }
}
