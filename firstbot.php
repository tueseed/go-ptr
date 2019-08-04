<?php
	require("db/connect-db.php");

	function imagemap($replyToken)
	{
		$access_token = 'pwo0kxwpp2MFook0bX8Gr+XR+cOuT5/4mCU2aKFMa5ML5V9PDZAAqaRS5uyPGBC4DS2lkzekn1nT8OBpjE8HPNQqXJm6mBcixaVfmtLm08N1kug5XMgHL4CZAaKXSyOUZumGYOnEOjw7VSx0llzYtgdB04t89/1O/w1cDnyilFU=';
		// $messages = ['type' => 'text','text' => $txtin];//สร้างตัวแปร 
		$messages = '{
						"type": "imagemap",
						"baseUrl": "images/classroom1.jpg/460",
						"altText": "This is an imagemap",
						"baseSize": {
										"width": 1040,
										"height": 1040
									},
						"actions": [
			  							{
											"type": "uri",
											"area": {
														"x": 2,
														"y": 1,
														"width": 1036,
														"height": 1033
													},
											"linkUri": "line://app/1561756390-QMx74VGA"
			  							}
									]
					  }';
		$mes = json_decode($messages);			  
		$url = 'https://api.line.me/v2/bot/message/reply';
		$data = [
					'replyToken' => $replyToken,
					'messages' => [$mes],
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
	function rich2($uid)
	{
		$access_token = 'pwo0kxwpp2MFook0bX8Gr+XR+cOuT5/4mCU2aKFMa5ML5V9PDZAAqaRS5uyPGBC4DS2lkzekn1nT8OBpjE8HPNQqXJm6mBcixaVfmtLm08N1kug5XMgHL4CZAaKXSyOUZumGYOnEOjw7VSx0llzYtgdB04t89/1O/w1cDnyilFU=';
		$url = 'https://api.line.me/v2/bot/user/'.$uid.'/richmenu/richmenu-a8b364e53db970d5eebc86e60a947fcf';
		$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, '-d');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		echo $result . "\r\n";
	}

	function rich3($uid)
	{
		$access_token = 'pwo0kxwpp2MFook0bX8Gr+XR+cOuT5/4mCU2aKFMa5ML5V9PDZAAqaRS5uyPGBC4DS2lkzekn1nT8OBpjE8HPNQqXJm6mBcixaVfmtLm08N1kug5XMgHL4CZAaKXSyOUZumGYOnEOjw7VSx0llzYtgdB04t89/1O/w1cDnyilFU=';
		$url = 'https://api.line.me/v2/bot/user/'.$uid.'/richmenu/richmenu-6970e1b6ab46d6d4a5d8657bb5208560';
		$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, '-d');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		echo $result . "\r\n";
	}

	function rich_default($uid)
	{
		$access_token = 'pwo0kxwpp2MFook0bX8Gr+XR+cOuT5/4mCU2aKFMa5ML5V9PDZAAqaRS5uyPGBC4DS2lkzekn1nT8OBpjE8HPNQqXJm6mBcixaVfmtLm08N1kug5XMgHL4CZAaKXSyOUZumGYOnEOjw7VSx0llzYtgdB04t89/1O/w1cDnyilFU=';
		$url = 'https://api.line.me/v2/bot/user/'.$uid.'/richmenu';
		$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, '-d');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		echo $result . "\r\n";
	}

	function reply_msg($txtin,$replyToken)//สร้างข้อความและตอบกลับ
	{
		$access_token = 'pwo0kxwpp2MFook0bX8Gr+XR+cOuT5/4mCU2aKFMa5ML5V9PDZAAqaRS5uyPGBC4DS2lkzekn1nT8OBpjE8HPNQqXJm6mBcixaVfmtLm08N1kug5XMgHL4CZAaKXSyOUZumGYOnEOjw7VSx0llzYtgdB04t89/1O/w1cDnyilFU=';
		$messages = ['type' => 'text','text' => $txtin];//สร้างตัวแปร 
		$url = 'https://api.line.me/v2/bot/message/reply';
		$data = [
					'replyToken' => $replyToken,
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

	// รับข้อมูล
	$content = file_get_contents('php://input');//รับข้อมูลจากไลน์
	$events = json_decode($content, true);//แปลง json เป็น php
	if (!is_null($events['events'])) //check ค่าในตัวแปร $events
	{
		foreach ($events['events'] as $event) {
			if ($event['type'] == 'message' && $event['message']['type'] == 'text')
			{
				$replyToken = $event['replyToken']; //เก็บ reply token เอาไว้ตอบกลับ
				$source_type = $event['source']['type'];//เก็บที่มาของ event(user หรือ group)
				$txtin = $event['message']['text'];//เอาข้อความจากไลน์ใส่ตัวแปร $txtin
				$uid = $event['source']['userId'];
				if($txtin == "rich2")
				{
					rich2($uid);
				}
				else if($txtin == "rich3")
				{
					rich3($uid);
				}
				else if($txtin == "rich1")
				{
					rich_default($uid);
				}
				else if($txtin == "การจัดอบรม")
				{
					imagemap($replyToken);
				}
				// reply_msg($uid,$replyToken);      
			}
		}
	}
	echo "BOT OK";