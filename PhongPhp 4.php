<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>work4-610-08</title>
</head>
<body>
<?php

    $name = ['นายชยางกูร ขำเถื่อน', 'นายไชยวัฒน์ มิตรานนท์', 'นายวโรดม กุนเรื่อง', 'นายอภิวิชญ์ ชนะชล',
        'นายชานนท์ ชาวชายโขง', 'นายนพดล ละดาดก', 'นายชินกฤช ธนกรณ์กุล', 'นายพงศ์ภรณ์ สุนทรานุรักษ์',
        'นายพรเทพ เอมอมร', 'นายวรชัย เจนจบวิทยา', 'นายสรวิชญ์ สิทธิวรสกุล', 'นายไชยวัฒน์ จัดเจนนาวี',
        'นายวงศ์วริศ ชัยกุลประดิษฐ์', 'นายคณิศร ศักดิ์ทอง', 'นายธนวัฒน์ ลบช้าง', 'นายแทนไท จันทร์ยจร',
        'นายปรัญชัย เพชรแสงโรจน์', 'นายพัทธดนย์ สุวรรณรัตน์', 'นายสัณหณัฐ ครองธรรมศิริ', 'นายจิรภัทร ภูบรรทัด',
        'นายจิรานุวัฒน์ ขันธ์นิตย์', 'นายสิปปกร จันทร์พุ่ม', 'นายอชิรวัตติ์ ศรีรัตนาม', 'นายปณิทัศน์ แซ่เจียม',
        'นายกันตพัฒน์ โตใหญ่', 'นายชุติเดช เทิดสถิตบุญฤทธิ์', 'นายวชิรวิชญ์ ตะเภาทอง', 'นายพุฒิเกียรติ แก้วกล้า',
        'นายศุภโชค ปิยเจริญสิทธิ์', 'นางสาวสุภาวิตา บุญโภคอุดม', 'นางสาวพิมพ์ชนก สุขนุ่ม', 'นางสาววรณัน บุหงาเกษมสุข',
        'นางสาวอภิชญา ตะโกจีน', 'นางสาวนัทธมน วชิรสุดเลขา', 'นางสาวสิรินดา อยู่เมฆ', 'นางสาวปภาดา เหลืองประภา',
        'นางสาวณัฐชา เท้าสมบุญ', 'นางสาวธัญชนก สุดธง', 'นางสาวกัญญวรา สายโส', 'นางสาวนภัสสร กิจจารักษ์'];
    $key = array_search('นายพงศ์ภรณ์ สุนทรานุรักษ์', $name);
    if ($key !== false) {
        $fname = $name[$key];
        unset($name[$key]);
        array_unshift($name, $fname);
    }
    echo "<table border='1'>";
    echo "<tr><th>เลขที่</th><th>ชื่อ-สกุล</th></tr>";
    $number = 1;
    foreach ($name as $name) {
        echo "<tr>";
        echo "<td>$number</td>";
        echo "<td>$name</td>";
        echo "</tr>";
    $number++;
    }

    echo "</table>";
    ?>

</body>
</html>