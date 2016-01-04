<?php

namespace MasterDoctor\YoutubeProject;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class MainClass extends PluginBase{
    
    public function onEnable(){
        $this->getLogger()->info("YoutubeProject has been enabled");
    }
    
    public function onDisable(){
        $this->getLogger()->info("YoutubeProject has been disabed");
    }
       
   public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
       if(strtolower($cmd->getName()) === "heal"){
           
           /** @var Player $varName */
           $sender->setHealth($sender->getMaxHealth());
           
           return true;
       }
       
       return false;
   }
    
}
