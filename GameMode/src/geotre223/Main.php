<?php

namespace geotre223;

use geotre223\Command\gamemode;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable(): void
    {
        $this->getLogger()->notice("Le plugin GameMode est bien activé !");
        $this->getServer()->getCommandMap()->registerAll("", [
            new gamemode()
        ]);
    }
}
