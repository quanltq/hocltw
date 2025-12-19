<?php
include "db.php";

/* ===== THÊM ===== */
if (isset($_POST['btnAdd'])) {
    sqlsrv_query(
        $conn,
        "INSERT INTO SINHVIEN (TenSV, Lop) VALUES (?, ?)",
        [$_POST['TenSV'], $_POST['Lop']]
    );
    header("Location: crud.php");
    exit;
}

/* ===== SỬA ===== */
if (isset($_POST['btnUpdate'])) {
    sqlsrv_query(
        $conn,
        "UPDATE SINHVIEN SET TenSV=?, Lop=? WHERE MaSV=?",
        [$_POST['TenSV'], $_POST['Lop'], $_POST['MaSV']]
    );
    header("Location: crud.php");
    exit;
}

/* ===== XÓA ===== */
if (isset($_POST['btnDelete'])) {
    sqlsrv_query(
        $conn,
        "DELETE FROM SINHVIEN WHERE MaSV=?",
        [$_POST['MaSV']]
    );
    header("Location: crud.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>CRUD </title>
<style>
body { font-family: Arial; }
input, button { margin: 4px; }
table { border-collapse: collapse; width: 60%; }
th, td { border: 1px solid #000; padding: 6px; text-align: center; }
</style>
</head>
<body>

<h2>CRUD SINH VIÊN </h2>

<form method="post">
    Mã SV:
    <input type="number" name="MaSV" placeholder="Chỉ dùng khi sửa/xóa">

    <br>

    Tên SV:
    <input type="text" name="TenSV">

    Lớp:
    <input type="text" name="Lop">

    <br><br>

    <button type="submit" name="btnAdd">THÊM</button>
    <button type="submit" name="btnUpdate">SỬA</button>
    <button type="submit" name="btnDelete"
        onclick="return confirm('Xóa sinh viên này?')">XÓA</button>
</form>

<hr>

<h3>DANH SÁCH SINH VIÊN</h3>

<table>
<tr>
    <th>Mã SV</th>
    <th>Tên SV</th>
    <th>Lớp</th>
</tr>

<?php
$stmt = sqlsrv_query($conn, "SELECT * FROM SINHVIEN");
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo "<tr>
        <td>{$row['MaSV']}</td>
        <td>{$row['TenSV']}</td>
        <td>{$row['Lop']}</td>
    </tr>";
}
?>
</table>

</body>
</html>
