<?php

namespace geotre223\Command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class gamemode extends Command {

    public function __construct() {
        parent::__construct("gamemode", "Changer votre mode jeu", "/gamemode", ["gm"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {

        if($sender instanceof Player) {
            if (isset($args[0])) {
            switch($args[0]) {
                case "0":
                    $sender->sendMessage("Vous êtes désormais en mode survie !");
                    $sender->setGamemode(\pocketmine\player\GameMode::SURVIVAL());
                    break;
                case "1":
                    $sender->sendMessage("Vous êtes désormais en mode créatif !");
                    $sender->setGamemode(\pocketmine\player\GameMode::CREATIVE());
                    break;
                case "2":
                    $sender->sendMessage("Vous êtes désormais en mode aventure !");
                    $sender->setGamemode(\pocketmine\player\GameMode::ADVENTURE());
                    break;
                case "3":
                    $sender->sendMessage("Vous êtes désormais en mode spectateur !");
                    $sender->setGamemode(\pocketmine\player\GameMode::SPECTATOR());
                    break;
                default:
                    $sender->sendMessage("Utilisation de la commande : /gamemode (ex: [0;1;2;3])");
                    return;
                }
            } else {
                $sender->sendMessage("Utilisation de la commande : /gamemode (ex: [0;1;2;3])");
            }
        } else {
            $sender->sendMessage("Commande non exécutable dans console.");
        }
    }
}