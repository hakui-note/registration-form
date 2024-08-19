<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $furigana = htmlspecialchars($_POST['furigana']);
    $age = htmlspecialchars($_POST['age']);
    $dob = htmlspecialchars($_POST['dob']);
    $postal_code = htmlspecialchars($_POST['postal_code']);
    $address = htmlspecialchars($_POST['address']);
    $phone = htmlspecialchars($_POST['phone']);

    echo "<h2>登録内容</h2>";
    echo "名前: " . $name . "<br>";
    echo "ふりがな: " . $furigana . "<br>";
    echo "年齢: " . $age . "<br>";
    echo "生年月日: " . $dob . "<br>";
    echo "郵便番号: " . $postal_code . "<br>";
    echo "住所: " . $address . "<br>";
    echo "電話番号: " . $phone . "<br>";
}
?>