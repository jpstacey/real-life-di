<?php

/**
 * Manager.
 */
class AbstractManagerStaff
{
    /**
     * @var ScrewdriverCatalogue
     */
    protected $catalogue;

    public function giveCatalogueTo(RepairStaff $staff)
    {
        $staff->catalogue = $secretCatalogue;
    }

    public __construct(ScrewdriverCatalogue $catalogue)
    {
        $this->catalogue = $catalogue;
    }
}
