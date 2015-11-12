<?php
define('BOT_TOKEN', '136351936:AAGVoKhQF-AAyvu9kkuTxFfRsIVudpzDJ2g');
define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

  //request updates



  // process incoming message and answer
  $message_id = $message['message_id'];
  $chat_id = $message['chat']['id'];
  if (isset($message['text'])) {
    // incoming text message
    $text = $message['text'];

    if (strpos($text, "/ciao") === 0) {
      apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => 'Nice to meet you'));
    } 
  } else {
    apiRequest("sendMessage", array('chat_id' => $chat_id, "text" => 'I understand only text messages'));
  }




>
