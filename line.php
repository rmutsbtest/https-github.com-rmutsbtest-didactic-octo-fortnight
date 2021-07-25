 <?php
  

function send_LINE($msg){
 $access_token = 'u83PSPbv71RWdLRKi9qIHBOtRx0PFQUrmU89SJv4HW3/khteSskZUVpV2P/gkkKUwOmX0DGAFl5EhuCfPLt3i4d2A7mVUsjuMt3HtgzBLZn2kv3o9eFbtZMy008lrWKRBgeJzvE8uuwO0TVw6WgjdwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ucbe44bc54b06e3e01bcf38aedc0723aa',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
