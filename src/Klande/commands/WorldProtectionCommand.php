<?php

namespace Klande\commands;

// PocketMine Features

use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class WorldProtectionCommand extends Command {
   public function __construct(){
      parent::__construct('worldprotection', 'Plugin Info');
      $this->setPermission('worldprotection.info');
   }
   
   public function execute(CommandSender $sender, string $commandLabel, array $args): void {
      if($sender instanceof Player){
         $sender->sendMessage(TextFormat::colorize('§8Author:§f Klande' . PHP_EOL . '§8GitHub:§f https://github.com/Klaandee' . PHP_EOL . '§8Version:§f 1.5' . PHP_EOL . '§8Last Update:§f 27/01/2023'));
      }
   }
}