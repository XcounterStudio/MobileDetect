<?php
namespace XcounterStudio\MobileDetect;

use Detection\MobileDetect;

class MobileDetectBundle extends MobileDetect
{

    private $isMobile;

    private $isTablet;

    public function isMobileCached()
    {
        if ($this->isMobile === null) {
            
            $this->isMobile = parent::isMobile();
        }
        
        return $this->isMobile;
    }

    public function isTabletCached()
    {
        if ($this->isTablet === null) {
            
            $this->isTablet = parent::isTablet();
        }
        
        return $this->isTablet;
    }
}