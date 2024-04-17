# คำอธิบาย

- ตัวอย่างการใช้งาน Datepicker พัฒนาด้วย PHP สำหรับศึกษาการทำงานร่วมกับ jQuery 
- นำเข้าชุดข้อมูลจาก Database มาแสดงบน Datepicker ที่ทำงานร่วมกับ jQuery UI
- ไม่ต้องติดตั้งไฟล์เพิ่มเติมเนื่องจากใช้งานผ่าน CDN

## การติดตั้ง

1. ทดสอบบน localhost สร้างฐานข้อมูลชื่อ 'mydatabase' 
2. นำเข้าตัวอย่างข้อมูลใช้คำสั่ง sql ด้านล่าง

```
CREATE TABLE IF NOT EXISTS special_events (
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    event_date DATE,
    event_name VARCHAR(255),
    event_description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO special_events (event_date, event_name, event_description) VALUES 
('2024-01-01', 'New Year''s Day', 'Celebrates the beginning of the new year.'),
('2024-02-14', 'Valentine''s Day', 'A day to celebrate love and affection.'),
('2024-03-08', 'International Women''s Day', 'Commemorates the achievements and contributions of women worldwide.'),
('2024-04-22', 'Earth Day', 'A day dedicated to promoting environmental protection and sustainability.'),
('2024-05-12', 'Mother''s Day', 'Honors mothers and motherhood (dates may vary depending on the country).'),
('2024-06-16', 'Father''s Day', 'Honors fathers and fatherhood (dates may vary depending on the country).'),
('2024-06-05', 'World Environment Day', 'Focuses on environmental issues and conservation efforts.'),
('2024-07-30', 'International Day of Friendship', 'Celebrates the importance of friendship and camaraderie.'),
('2024-08-12', 'International Youth Day', 'Highlights the role of young people in promoting peace and development.'),
('2024-09-21', 'International Day of Peace', 'A day devoted to promoting peace and non-violence globally.'),
('2024-10-31', 'Halloween', 'Traditionally associated with costumes, trick-or-treating, and spooky themes.'),
('2024-11-28', 'Thanksgiving Day (United States)', 'A day for expressing gratitude and sharing a meal with loved ones.'),
('2024-12-25', 'Christmas Day', 'Celebrates the birth of Jesus Christ, commonly observed with religious and cultural traditions.');

```
## นำไปใช้งาน

เป็นเพียงพื้นฐานการพัฒนาระบบด้วย PHP สามารถนำไปศึกษาและพัฒนาระบบของตัวเองได้

## การมีส่วนร่วม

เปิดรับ Pull requests สำหรับการเปลี่ยนแปลงที่สำคัญๆ กรุณาเปิดปัญหา (issue) ก่อนเพื่อสนทนาเกี่ยวกับสิ่งที่ต้องการเปลี่ยนแปลง โปรดตรวจสอบและอัปเดตการทดสอบตามที่เหมาะสมครับ

## License

[Apache License 2.0](https://choosealicense.com/licenses/apache-2.0/)
