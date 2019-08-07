<?php
	function flex_msg()
	{
			/*$json1 = '{
							"type":"flex",
							"altText":"Green Office",
							"contents":{
										"type": "bubble",
										"hero": {
													"type": "image",
													"url": "https://go-ptr.herokuapp.com/images/3-R.jpg",
													"size": "full",
													"aspectRatio": "20:13",
													"aspectMode": "cover"
												}
									}		
						}';*/
				$json1 = '{
							"type":"flex",
							"altText":"Green Office",
							"contents":{
											"type":"carousel",
											"contents":[
														{
															"type": "bubble",
															"hero": {
																		"type": "image",
																		"url": "https://go-ptr.herokuapp.com/images/3-R.jpg",
																		"size": "full",
																		"aspectRatio": "20:13",
																		"aspectMode": "cover"
																	}
														},
														{
															"type": "bubble",
															"hero": {
																		"type": "image",
																		"url": "https://go-ptr.herokuapp.com/images/3-R.jpg",
																		"size": "full",
																		"aspectRatio": "20:13",
																		"aspectMode": "cover"
																	}
														}
													  ]	
										}
						}';
		$result = json_decode($json1);
		return $result;
	}
	function push($group_id,$text_alert)
	{
		$access_token = 'HtkOj0LGq918+vgLfbXs1uF8kM4YsWYmMX1OGIn5THSXsoWwKFGc25QNLxvP4sAV8LpQM446o/uIUbLxOfjm09FDX+73peOuXqHvKttcHLdF0TypLdnjuKl+b61n6vjxrUayj5t8tqdqOtispyKW5wdB04t89/1O/w1cDnyilFU=';
		//$messages = [ 'type' => 'text','text' => $text_alert];
		$messages = flex_msg();
		$url = 'https://api.line.me/v2/bot/message/push';
        $data = ['to' => 'Ua9ba6c25071c19588c095ec147efe2b1','messages' => [$messages]];
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
	}
	
	require('db/connect-db.php');
	$text_alert = "ปรับอุณหภูมิเครื่องปรับอากาศที่ 25 องศา จะทำให้ประหยัดไฟฟ้าได้ รู้ป่ะเนี่ย";
	$sql_select_group = "SELECT group_id FROM tbl_group";
	$query_group = mysqli_query($conn,$sql_select_group);
	while($obj_result = mysqli_fetch_assoc($query_group))
	{
		push($obj_result["group_id"],$text_alert);
	}
	echo "OK.....นะคะ";
?>