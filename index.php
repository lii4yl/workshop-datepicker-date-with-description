<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>Date Picker Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $.getJSON('db.php', function(specialDates) {
                $("#datepicker").datepicker({
                    beforeShowDay: function(date) {
                        var dateStr = $.datepicker.formatDate('yy-mm-dd', date);
                        if (specialDates[dateStr]) {
                            return [true, 'specialDay', specialDates[dateStr].name]; // ใช้ชื่อเหตุการณ์เป็นข้อความที่แสดง
                        } else {
                            return [true, '', ''];
                        }
                    },
                    onSelect: function(dateText, inst) {
                        // เมื่อผู้ใช้เลือกวันที่
                        var selectedDate = new Date(dateText);
                        var formattedDate = $.datepicker.formatDate('yy-mm-dd', selectedDate);

                        // ตรวจสอบว่าวันที่ที่เลือกมีข้อมูลพิเศษหรือไม่
                        if (specialDates[formattedDate]) {
                            alert("วันที่: " + dateText + "\n" +
                                "เป็นวัน: " + specialDates[formattedDate].name + "\n" +
                                "รายละเอียด: " + specialDates[formattedDate].description);
                        }
                    }
                });
            });
        });
    </script>
    <style>
        .specialDay a {
            background-color: #ffdddd !important;
            color: #000000;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>เลือกวันที่:</h2>
    <input type="text" id="datepicker">
</body>

</html>