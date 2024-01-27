<?php

namespace Klande\manager;

// Commands

use Klande\commands\WorldProtectionCommand;

// Main

use Klande\WorldProtection;

class CommandManager {
   
   public static function register(): void {
      
      WorldProtection::getInstance()->getServer()->getCommandMap()->register('worldprotection', new WorldProtectionCommand());
   }
}