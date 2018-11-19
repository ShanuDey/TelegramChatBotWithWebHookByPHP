<?php

$json = file_get_contents('php://input');
$action = json_decode($json, true);
//print_r($action);
/*
// testing for received message
$myfile = fopen("data.txt", "a") or die ("Unable to open file");
fwrite($myfile,$action['message']['text']);
fwrite($myfile, " request received\n");
fclose($myfile);
*/

//extracting msg and chatid from json decoded value
$msg = strtolower($action['message']['text']);
$chat_id = $action['message']['chat']['id'];

//fuction for send messege
function sendMessage($chat_id,$msg){
	//some emoji and text for random picking
	$replyArr=array("\xF0\x9F\x98\x8E","\xF0\x9F\x98\xB4","stop it","\xF0\x9F\x98\x88","\xF0\x9F\x98\x9D","\xF0\x9F\x98\x92","\xF0\x9F\x98\xB1","\xF0\x9F\x98\xAE","\xF0\x9F\x98\xB6");
	//count = 9

	$reply = "lol";
	switch($msg){
		case "hi":
			$reply ="hello";
			break;
		case "hello":
			$reply = "hi";
			break;
		case "good morning":
		case "good night":
			$reply = "same 2 u";
			break;
		default:
			$reply= $replyArr[mt_rand(0,8)];
	}

	$token="<Enter your bot token here from BotFather>";
	$website="https://api.telegram.org/bot".$token;
	

	$data=file_get_contents($website."/sendmessage?chat_id=".$chat_id."&text=".$reply);
}


$myfile = fopen("count.txt", "r") or die ("Unable to open file");
$count = fread($myfile,1);
fclose($myfile);


$myfile = fopen("count.txt", "w") or die ("Unable to open file");
if($count==5 || $count==mt_rand(1,4)){
	fwrite($myfile, "0");
	sendmessage($chat_id,$msg);
}
else{
	fwrite($myfile, $count+1);
}
fclose($myfile);

?>

