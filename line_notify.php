<?php
    function send_notify()
    {
        $notify_message = "อย่าลืม... ตั้งอุณหภูมิเครื่องปรับอากาศที่ 25 องศา ช่วยทำให้ลดการใช้พลังงานไฟฟ้าได้นาจา";
        $access_token = 'V2FWDWvMAziTgaiPpWOsJ9CGDeVYGkhzYdtHMhh33lR';
        $url = 'https://notify-api.line.me/api/notify';
        $headers = array('Content-Type: multipart/form-data', 'Authorization: Bearer ' . $access_token);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ["message"=>$notify_message]);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result . "\r\n";
    }
    
    
    ////////////////////////////////////////หาวัน
    $d_sever = date("Y-m-d H:i:s");
    echo "<br>date server = ".$d_sever."<br>";
    $d_thai = date("Y-m-d H:i:s",strtotime('+5 hours')); 
    echo "date thai(+7) = ".$d_thai;
    $dayofweek = date('w', strtotime($d_thai));
    echo "<br>day of week = ".$dayofweek."<br>";

    $hr = date('H:i',strtotime($d_thai));
    echo "hr = ".$hr;
    ////////////////////////////////////////
    if($dayofweek > 0 && $dayofweek < 6)
    {
        
    }
    

    

?>