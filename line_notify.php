<?php
    function send_notify($msg)
    {
        $notify_message = $msg;
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
    
    function random_msg()
    {
        $number = rand(0,3);
        $msg_ar = array(
                        "อย่าลืม... ตั้งอุณหภูมิเครื่องปรับอากาศที่ 25 องศา ช่วยทำให้ลดการใช้พลังงานไฟฟ้าได้นาจา",
                        "ขับรถที่ 80 กม./ชั่วโมง ช่วยประหยัดน้ำมันได้",
                        "พลักงงานนั้นมีค่ารู้รักษาก่อนหมดไป ถอดปลั๊กเมื่อไม่ใช้ ประหยัดไฟ ประหยัดตัง",
                        "น้ำและไฟมีจำกัด ควรประหยัดรู้คุณค่า ป่าไม้มีราคา ร่วมรักษาอย่าทำลาย"
        );
        return $msg_ar[$number];
    }
    
    ////////////////////////////////////////หาวัน
    $d_sever = date("Y-m-d H:i:s");
    echo "<br>date server = ".$d_sever."<br>";
    $d_thai = date("Y-m-d H:i:s",strtotime('+5 hours')); 
    echo "date thai(+7) = ".$d_thai;
    $dayofweek = date('w', strtotime($d_thai));
    echo "<br>day of week = ".$dayofweek."<br>";

    $hr = date('h',strtotime($d_thai));
    echo "hr = ".$hr;
    ////////////////////////////////////////
    if($dayofweek > 0 && $dayofweek < 6 && $hr > 8 && $hr < 17)
    {
        send_notify(random_msg());
    }
    

    

?>