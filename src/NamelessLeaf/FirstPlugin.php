<?php

namespace NamelessLeaf;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat as C;

 class NamelessLeaf extends PluginBase implements Listener {
//class Inactive-to-ReactiveExample extends PluginBase implements Listener{

          public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
                    $this->getServer()->getPluginManager()->registerEvents($this,$this);
		    $this->getLogger()->info("Enabled Plugin"); //THIS WHILL SHOW WHEN SERVER ONLINE
		    $this->getLogger()->info("This Plugin is Now Running");
          }
          public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled"); // THIS WILL TRIGER WHEN SERVER GOES OFFLINE
		    $this->getLogger()->info("Seems The Plugin Has Disable Did Server Stop?"); 
          }
	  public function onJoin(PlayerJoinEvent $event){
  		 $player = $event->getPlayer();
   		$name = $player->getName();
   		$this->getSergetServerver()->broadcastMessage(C::GREEN."$name Joined The Inactive-to-Reactive test Server! Awesome!");
	}
	public function onQuit(PlayerQuitEvent $event){
	$player = $event->getPlayer();  //This gets the player
        $name = $player->getName();  //Gets the Name of the player

        $this->getServer()->broadcastMessage("§l§e============================");
        $this->getServer()->broadcastMessage("§l§a $name Has Left The Server");
        $this->getServer()->broadcastMessage("§l§e============================");
   }
}
      
      
      
      
      
      
