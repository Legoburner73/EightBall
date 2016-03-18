<?php

namespace Legoburner73\eightball;

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
                if($answers === 1) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Signs point to yes.");
                }elseif($answers === 2) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Yes.");
                }elseif($answers === 3) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Reply hazy, try again.");                      
                }elseif($answers === 4) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Without a doubt");
                }elseif($answers === 5) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."My sources say no");
                }elseif($answers === 6) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."As I see it, yes.");
                }elseif($answers === 7) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."You may rely on it.");
                }elseif($answers === 8) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Concentrate and ask again.");
                }elseif($answers === 9) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Outlook not so good.");
                }elseif($answers === 10) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."It is decidedly so.");
                }elseif($answers === 11) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Better not to tell you know.");
                }elseif($answers === 12) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Very doubtful.");
                }elseif($answers === 13) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Yes - definitely.");
                }elseif($answers === 14) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."It is certain.");
                }elseif($answers === 15) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Cannot predict now.");
                }elseif($answers === 16) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Most likely.");
                }elseif($answers === 17) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Ask again later.");
                }elseif($answers === 18) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."My reply is no.");
                }elseif($answers === 19) {
                        $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Outlook good.");
                }elseif($answers === 20) {
                    $sender->sendMessage(Colour::BLUE."[".Colour::GREEN."8ball".Colour::BLUE."]".Colour::RED."Don't count on it.");
                    }
                }
                break;
    }
    }
}