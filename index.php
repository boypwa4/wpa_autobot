<?php
  require_once('./vendor/autoload.php');
  
  //Namespace
  use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
  use \LINE\LINEBot;
  use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
  
  $channel_token = 'c6oO8Le6hGA+L62XNuTVdkzTNE0mOlllGA8STcTpRoV6SWpQtQIFJzqJT19UNSU77LDDGhckMygb2EsCRxAGZNW5VNgct40LoeClmcqJEDYEqiykYiQpB7Cvyrw46PGadjKEbCXAEBPTdm48qVErcQdB04t89/1O/w1cDnyilFU=';
  $channel_secret = 'f5947e39e07a5f896c7eb3d333814e4b';
  
  $content = file_get_contents('php://input');
  $events = json_decode($content, true);
  
  if(!is_null($events['events'])){
	  foreach($events['events']as $events){
		  if($events['type']='message'){
			  switch($events['message']['type']){
				  case'text':
				  	$replyToken = $events['replyToken'];
					$respMessage = 'สวัสดี'.$events['message']['text'];
					
					$httpClient = new CurlHTTPClient($channel_token);
					$bot = new LINEBot($httpClient, array('channel_secret' => $channel_secret));
					$textMessageBuilder = new TextMessageBuilder($respMessage);
					$response = $bot->replyMessage($replyToken, $textMessageBuilder);
				  break;
		}
	  }
	}
  }
?>
