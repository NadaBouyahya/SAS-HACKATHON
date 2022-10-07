<?php

require_once "../database-acess/playerDAL.php";

class PlayerBLL {
    private $playerBLL = null;
    
    public function getAllPlayers(){
        $playerBLL = new PlayerDAL();

        return $playerBLL->getAllPlayers();
    }

    public function addPlayer($player){
        $playerBLL = new PlayerDAL ();

        return $playerBLL->addPlayer($player);
    }

    public function getPlayer($player){
        $playerBLL = new PlayerDAL ();

        return $playerBLL->getPlayer($player);
    }
    
}

?>