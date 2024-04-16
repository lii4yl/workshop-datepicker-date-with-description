<?php
// กำหนดข้อมูลสำหรับการเชื่อมต่อฐานข้อมูล
$servername = "localhost"; // ชื่อเซิร์ฟเวอร์ฐานข้อมูล
$username = "root"; // ชื่อผู้ใช้ของ MySQL
$password = ""; // รหัสผ่านของ MySQL
$dbname = "mydatabase"; // ชื่อฐานข้อมูลที่ต้องการใช้

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// สร้างคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง special_events
$sql = "SELECT event_date, event_name, event_description FROM special_events";
$result = $conn->query($sql);

$specialDates = [];

// หากมีข้อมูลที่ดึงได้
if ($result->num_rows > 0) {
    // วนลูปเพื่อดึงข้อมูลแต่ละแถว
    while ($row = $result->fetch_assoc()) {
        // เพิ่มข้อมูลลงในอาร์เรย์ specialDates
        $specialDates[$row["event_date"]] = [
            'name' => $row["event_name"],
            'description' => $row["event_description"]
        ];
    }
}

// ปิดการเชื่อมต่อ
$conn->close();

// ส่งข้อมูลกลับเป็น JSON
echo json_encode($specialDates);
