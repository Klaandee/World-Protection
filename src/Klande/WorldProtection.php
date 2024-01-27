<?php

namespace Klande;

// PocketMine Features

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\utils\SingletonTrait;

// WorldProtection Features

use Klande\events\EventListener;

class WorldProtection extends PluginBase implements Listener {
   
   use SingletonTrait;
   
   public function onLoad(): void {
      self::setInstance($this);
   }
   
   public function onEnable(): void {
      
      CommandManager::register();
      
      $this->getLogger()->info('WorldProtection By Klande Enable');
      
      $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
   }
}