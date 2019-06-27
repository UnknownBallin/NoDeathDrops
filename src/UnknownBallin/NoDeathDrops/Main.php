<?php

namespace UnknownBallin\NoDeathDrops;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;

class Main extends PluginBase implements Listener{
	
	public function onEnable():void{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onDeath(PlayerDeathEvent $event){
		$event->setDrops([]);
	}
}
