<?php

namespace Kat\zKitKatz;

use pocketmin\plugin\PluginBase;

class Main extends PluginBase
{
    protected function onEnable() : void{
        $this->getLogger()->info("Plugin has been Enabled");
    }
} // end of Main function