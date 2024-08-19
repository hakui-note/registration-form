<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報登録フォーム</title>
    </head>
    <body>
        <h2>個人情報登録フォーム</h2>

        <form action="submit.php" method="post">
            <label for="name">名前:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="furigana">ふりがな:</label><br>
            <input type="text" id="furigana" name="furigana" required><br><br>

            <label for="age">年齢:</label><br>
            <input type="number" id="age" name="age" required><br><br>
            
            <!-- 生年月日 -->
            <label for="birth_year">生年月日:</label><br>
            <!-- 年 -->
            <select id="birth_year" name="birth_year" required><br><br>
                <option value="">年をを選択</option>
            </select>
            <!-- 月 -->
            <select id="birth_month" name="birth_month" required>
                <option value="">月を選択</option>
                <?php for ($m = 1; $m <= 12; $m++) {
                    echo "<option value='$m'>$m</option>";
                } ?>
            </select>
            <!-- 日 -->
            <select id="birth_day" name="birth_day" required>
                <option value="">日を選択</option>
                <?php for ($d = 1; $d <= 31; $d++) {
                    echo "<option value='$d'>$d</option>";
                } ?>
            </select><br><br>

            <label for="postal_code">郵便番号</label><br>
            <input type="text" id="phone" name="phone" required><br><br>

            <input type="submit" value="送信">
        </form>

        <script>
            // 生年月日の年を現在から120年前まで生成
            const yearSelect = document.getElementById('birth_year');
            const currentYear = new Date().getFullYear();

            for (let y = currentYear; y >= currentYear -120; y--) {
                const option = document.createElement('option');
                option.value = y;
                option.text = y;
                yearSelect.add(option);
            }

            // 年齢から生まれ年を計算して自動選択
            document.getElementById('age').addEventListener('input', function() {
                const age = parseInt(this.value);
                if (!isNaN(age)){
                    const birthYear = currentYear - age;
                    yearSelect.value = birthYear;
                }
            });
        </script>
    </body>
</html>