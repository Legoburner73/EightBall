<?php

namespace Legoburner73\eightball;

/*
* 8-Ball in pocketmine by Legoburner73
*/

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat as Colour;
use pocketmine\event\Listener;
use pocketmine\Server;

class Main extends PluginBase implements Listener {
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(Colour::GREEN."[8ball] has been enabled!");
    }
    
    public function onDisable() {
        $this->getLogger()->info(Colour::RED."[8ball] has been disabled!");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        switch ($command->getName()) {
            case "8ball":
                $answers = mt_rand(1, 20);
                if(!(isset($args[0]))) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."I can't reply to nothing! Please try again.");
                }else{
                switch($answers) {
                    case 1:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Signs point to yes.");
                    break;
                    case 2:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Yes.");
                    break;
                    case 3:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Reply hazy, try again.");                      
                    break;
                    case 4:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Without a doubt");
                    break;
                    case 5:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."My sources say no");
                    break;
                    case 6:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."As I see it, yes.");
                    break;
                    case 7:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."You may rely on it.");
                    break;
                    case 8:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Concentrate and ask again.");
                    break;
                    case 9:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Outlook not so good.");
                    break;
                    case 10:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."It is decidedly so.");
                    break;
                    case 11:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Better not to tell you know.");
                    break;
                    case 12:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Very doubtful.");
                    break;
                    case 13:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Yes - definitely.");
                    break;
                    case 14:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."It is certain.");
                    break;
                    case 15:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Cannot predict now.");
                    break;
                    case 16:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Most likely.");
                    break;
                    case 17:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Ask again later.");
                    break;
                    case 18:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."My reply is no.");
                    break;
                    case 19:
                        $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Outlook good.");
                    break;
                    case 20:
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Don't count on it.");
                    break;
                    }
                }
                break;
    }
    }
}
