<?php
    $group_id_ar = array("V2FWDWvMAziTgaiPpWOsJ9CGDeVYGkhzYdtHMhh33lR","HU3p4oP8dMChXaPbDxNd7WZW2Wu9NvkJuGc6YyjBLHU");
    function send_notify($msg,$group_id)
    {
        $notify_message = $msg;
        $access_token = $group_id;
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

    function send_spacial_msg($msg1,$group_id)
    {
        $notify_message = $msg1;
        $access_token = $group_id;
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
        $number = rand(0,11);
        $msg_ar = array(
                        "อย่าลืม... ตั้งอุณหภูมิเครื่องปรับอากาศที่ 25 องศา ช่วยทำให้ลดการใช้พลังงานไฟฟ้าได้นาจา",
                        "ขับรถที่ 90 กม./ชั่วโมง ช่วยประหยัดน้ำมันได้",
                        "พลังงานนั้นมีค่ารู้รักษาก่อนหมดไป ถอดปลั๊กเมื่อไม่ใช้ ประหยัดไฟ ประหยัดตัง",
                        "น้ำและไฟมีจำกัด ควรประหยัดรู้คุณค่า ป่าไม้มีราคา ร่วมรักษาอย่าทำลาย",
                        "สิ่งแวดล้อมจะสะอาดและสดใส เพราะใส่ใจรู้รักษ์พลังงาน",
                        "เปิดแอร์ได้ในช่วงเวลา 09.00-11.45 และ 13.00-16.00 เท่านั้นนะจ๊ะ",
                        "เปิดไฟเท่าที่จำเป็น เมื่อไม่ใช้ก็ปิด ช่วยประหยัดได้นะ",
                        "ตู้เย็นที่ไม่มีระบบละลายน้ำแข็งอัตโนมัติ ให้กดปุ่มละลายน้ำแข็งทุกๆ วันทำการแรกของเดือนนะ",
                        "ตั้งค่าการพักหน้าจอคอมพิวเตอร์อัตโนมัติเมื่อไม่ใช้งานเกินกว่า 15 นาที",
                        "ใช้ภาพหน้าจอคอมพิวเตอร์โทนสีเข้มจะประหยัดพลังงานกว่าโทนสีสว่าง",
                        "ตรวจสอบข้อความใจคอมฯ ก่อนจะสั่งพิมพ์ช่วยลดกระดาษเสียได้นะ",
                        "ใช้ FTP หรือ Cloud(เช่น google drive) แทนการปริ้นเอกสารส่งให้ผู้อื่น เพื่อลดการใช้กระดาษ"
        );
        return $msg_ar[$number];
    }
    
    ////////////////////////////////////////หาวัน
    $d_sever = date("Y-m-d H:i:s");
    echo "<br>date server = ".$d_sever."<br>";
    $d_thai = date("Y-m-d H:i:s",strtotime('+7 hours')); 
    echo "date thai(+7) = ".$d_thai;
    $dayofweek = date('w', strtotime($d_thai));
    echo "<br>day of week = ".$dayofweek."<br>";

    $hr = date('H',strtotime($d_thai));
    $mn = date('i',strtotime($d_thai));
    echo "hr = ".$hr."<br>";
    echo "mn = ".$mn."<br>";
    ////////////////////////////////////////
    if($dayofweek > 0 && $dayofweek < 6 && $hr > 8 && $hr < 17)
    {
        
        foreach($group_id_ar as $group_id)
        {
            if($hr == 9)
            {
                send_spacial_msg("สวัสดีตอนเช้าจ้า....",$group_id);
            }
            if($hr == 11)
            {
                send_spacial_msg("ก่อนออกไปทานข้าวอย่าลืมปิดแอร์กันนะครับ..",$group_id);
            }
            if($hr == 16)
            {
                send_spacial_msg("ใกล้เลิกงานแล้วปิดแอร์ก่อนก็ดีนะ.....",$group_id);
            }  
            send_notify(random_msg(),$group_id);
            echo $group_id;
        }
        
    }
 
// กลุ่ม พธร.ข่าวสาร  HU3p4oP8dMChXaPbDxNd7WZW2Wu9NvkJuGc6YyjBLHU
    

?>