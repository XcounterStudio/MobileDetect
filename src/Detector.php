<?php
namespace XcounterStudio\MobileDetect;

use \yii\base\Component as Component;

class Detector extends Component
{

    private $mobileDetectLib;

    public function __call($name, $parameters)
    {
        return call_user_func_array([
            $this->mobileDetectLib,
            $name
        ], $parameters);
    }

    public function init()
    {
        $this->mobileDetectLib = new MobileDetectBundle();
        parent::init();
    }
}

