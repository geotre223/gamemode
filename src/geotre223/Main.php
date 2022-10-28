<?php

namespace geotre223;

use geotre223\Command\Gamemode;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable(): void
    {
        $this->getServer()->getCommandMap()->registerAll("", [
            new gamemode()
        ]);
    }
}
