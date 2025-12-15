<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dãy số 1 đến 100</title>
</head>
<body>

<?php
for ($i = 1; $i <= 100; $i++) {

    // Số chẵn
    if ($i % 2 == 0) {
        echo "<span style='font-weight: bold; color: red;'>$i</span> ";
    } 
    // Số lẻ
    else {
        echo "<span style='font-weight: bold; font-style: italic; color: green;'>$i</span> ";
    }
}
?>

</body>
</html>
