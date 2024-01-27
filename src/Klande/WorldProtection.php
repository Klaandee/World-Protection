<?php

namespace Klande;

// PocketMine Features

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;

class WorldProtection extends PluginBase implements Listener {
   
   public function onLoad(): void {
      self::setInstance($this);
   }
   
   public function onEnable(): void {
      
      $this->getLogger()->info('WorldProtection By Klande Enable');
      
      $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
   }
}