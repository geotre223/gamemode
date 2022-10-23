<?php

namespace geotre223\Command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class gamemode extends Command
{
    public function __construct()
    {
        parent::__construct("gm", "permet de changer son gamemode", "/gamemode", ["gm"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if($sender instanceof Player)
        {
            switch($args[0])
            {
                case "0":
                    $sender->sendMessage("Vous venez de passer en survie !");
                    $sender->setGamemode(\pocketmine\player\GameMode::SURVIVAL());
                    break;
                case "1":
                    $sender->sendMessage("Vous venez de passer en créatif !");
                    $sender->setGamemode(\pocketmine\player\GameMode::CREATIVE());
                    break;
                case "2":
                        $sender->sendMessage("Vous venez de passer en aventure !");
                    $sender->setGamemode(\pocketmine\player\GameMode::ADVENTURE());
                    break;
                case "3":
                    $sender->sendMessage("Vous venez de passer en spectateur !");
                    $sender->setGamemode(\pocketmine\player\GameMode::SPECTATOR());
                    break;
            }
        }
    }
}