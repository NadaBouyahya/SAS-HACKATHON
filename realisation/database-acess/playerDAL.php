<?php
require_once 'mysqlconnection.php';
require_once 'player.php';

class PlayerDAL extends Connection {
 
    public function addPlayer($player){

        $userName = $player->getUserName();
        // Sql query
        $insertRow="INSERT INTO player (username) VALUES ('$userName')";
                                
        // Execute query
        mysqli_query($this->Connect(), $insertRow);
    }

    public function getPlayer($id){
        $sqlGetQuery = "SELECT * FROM player WHERE id= $id";
    
        // get result
        $result = mysqli_query($this->Connect(), $sqlGetQuery);
    
        // fetch to array
        $player_data = mysqli_fetch_assoc($result);

        $player = new Player();

        $player->setId($player_data['id']);
        $player->setUsername($player_data['username']);

        return $player;
    }  

    public function getAllPlayers(){
        $sqlGetData = 'SELECT * FROM player';
        $result = mysqli_query($this->Connect(), $sqlGetData);
        $playersList = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $players = array();

        foreach($playersList as $playerList){
            $player = new Player();
            $player->setId($playerList['id']);
            $player->setUserName($playerList['username']);

            array_push($players, $player);  
        }
        return $players;
    }


}