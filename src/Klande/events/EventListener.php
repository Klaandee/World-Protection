<?php

namespace Klande\events;

// PocketMine Features

use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\permission\DefaultPermissions;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use pocketmine\Server;

class EventListener implements Listener {
   
   private $player = [];
   
   public function onBreak(BlockBreakEvent $event)
   {
      $player = $event->getPlayer();
      if(!$player->hasPermission("worldprotection.pass") && !$player->hasPermission(DefaultPermissions::ROOT_OPERATOR)) {
             $event->cancel();
             $player->sendMessage(TextFormat::colorize('§cYou do not have permission to break blocks'));
      }
   }
   
   public function onPlace(BlockPlaceEvent $event)
   {
      $player = $event->getPlayer();
      if(!$player->hasPermission("worldprotection.pass") && !$player->hasPermission(DefaultPermissions::ROOT_OPERATOR)) {
             $event->cancel();
             $player->sendMessage(TextFormat::colorize('§cYou do not have permission to place blocks'));
      }
   }
   
   public function onDamage(EntityDamageEvent $event)
   {
      $event->cancel();
   }
}