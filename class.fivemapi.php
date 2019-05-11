<?php
/*
##################################################
#												 #
#		        Free API By CONTROL              #
#												 #
##################################################

*/

class FivemAPI {

	public function ServerInfo($ip, $port){
		$server = json_decode(file_get_contents("http://{$ip}:{$port}/info.json"), true);
		return $server;
	}

	public function PlayerInfo($ip, $port){
		$server = json_decode(file_get_contents("http://{$ip}:{$port}/players.json"), true);
		return $server;
	}


}