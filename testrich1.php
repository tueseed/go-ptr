<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.line.me/v2/bot/user/Ua9ba6c25071c19588c095ec147efe2b1/richmenu/richmenu-6970e1b6ab46d6d4a5d8657bb5208560",
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer pwo0kxwpp2MFook0bX8Gr+XR+cOuT5/4mCU2aKFMa5ML5V9PDZAAqaRS5uyPGBC4DS2lkzekn1nT8OBpjE8HPNQqXJm6mBcixaVfmtLm08N1kug5XMgHL4CZAaKXSyOUZumGYOnEOjw7VSx0llzYtgdB04t89/1O/w1cDnyilFU=",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}