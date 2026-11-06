<!DOCTYPE html>
<html>
<head>
    <title>Chessboard</title>
    <style>
        table { border-collapse: collapse; width: 400px; height: 400px; }
        td { width: 12.5%; height: 12.5%; }
        .white { background-color: #ffffff; }
        .black { background-color: #000000; }
    </style>
</head>
<body>
    <table border="1">
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                // إذا كان مجموع الصف والعمود زوجياً، فاللون أبيض، وإلا فأسود
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td class='white'></td>";
                } else {
                    echo "<td class='black'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
//السوال الثاني//
<?php
$n = 5; // عدد الصفوف للجزء العلوي

// الجزء العلوي من المعين
for ($i = 1; $i <= $n; $i++) {
    // طباعة المسافات
    for ($j = 1; $j <= ($n - $i); $j++) {
        echo "&nbsp;&nbsp;";
    }
    // طباعة النجوم
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "* ";
    }
    echo "<br>";
}

// الجزء السفلي من المعين
for ($i = $n - 1; $i >= 1; $i--) {
    // طباعة المسافات
    for ($j = 1; $j <= ($n - $i); $j++) {
        echo "&nbsp;&nbsp;";
    }
    // طباعة النجوم
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "* ";
    }
    echo "<br>";
}
?>
//السوال الثالث//
<?php
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

// 1. الترتيب التصاعدي (ASC)
$arr_asc = $array;
$n = count($arr_asc);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arr_asc[$j] > $arr_asc[$j + 1]) {
            // تبديل القيم
            $temp = $arr_asc[$j];
            $arr_asc[$j] = $arr_asc[$j + 1];
            $arr_asc[$j + 1] = $temp;
        }
    }
}
echo "ASC: " . implode(", ", $arr_asc) . "<br>";

// 2. الترتيب التنازلي (DESC)
$arr_desc = $array;
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arr_desc[$j] < $arr_desc[$j + 1]) {
            // تبديل القيم
            $temp = $arr_desc[$j];
            $arr_desc[$j] = $arr_desc[$j + 1];
            $arr_desc[$j + 1] = $temp;
        }
    }
}
echo "DESC: " . implode(", ", $arr_desc);
?>
//السوال الرابع//
<?php
$numbers = [10, 20, 30, 40, 50];
$sum = 0;
$count = count($numbers);

if ($count > 0) {
    foreach ($numbers as $num) {
        $sum += $num;
    }
    $avg = $sum / $count;
    echo "The average is: " . $avg;
} else {
    echo "Array is empty.";
}
?>
//السوال الخامس//
<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$filtered_array = [];

foreach ($array as $num) {
    // إذا لم يكن العدد زوجياً، قم بإضافته للمصفوفة الجديدة
    if ($num % 2 != 0) {
        $filtered_array[] = $num;
    }
}

// إعادة ترقيم الفهارس وطباعة المصفوفة
print_r(array_values($filtered_array));
?>
//السوال السادس//
<?php
$group = [10, 30, 20];
$max = $group[0]; // نفترض أن العنصر الأول هو الأكبر مبدئياً

if ($group[1] > $max) {
    $max = $group[1];
}
if ($group[2] > $max) {
    $max = $group[2];
}

echo "The maximum number is: " . $max;
?>
//السوال السابع//
<?php
$sample_date = "2012-12-21";
$new_date = date('Y-m-d', strtotime($sample_date . " +1 month"));

echo "Sample date : " . $sample_date . "<br>";
echo "Expected Output : " . $new_date;
?>
//السوال الثامن//
<?php
// الحصول على الشهر الحالي والسنة الحالية
$current_month = date('n');
$current_year = date('Y');

// حساب الشهر السابق
$prev_month = $current_month - 1;
$prev_year = $current_year;

if ($prev_month == 0) {
    $prev_month = 12;
    $prev_year -= 1;
}

// حساب عدد الأيام في الشهر السابق
$days_count = cal_days_in_month(CAL_GREGORIAN, $prev_month, $prev_year);

echo "Number of days in the month before current month: " . $days_count;
?>
//السوال التاسع//
<?php
$string = "Hello World, welcome to PHP programming.";
$search = "welcome";

// استخدام النمط مع /i لجعل البحث غير حساس لحالة الحروف (Case-insensitive)
if (preg_match("/$search/i", $string)) {
    echo "The string contains '{$search}'.";
} else {
    echo "The string does not contain '{$search}'.";
}
?>
//السوال العاشر//
<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 11;
if (isPrime($number)) {
    echo "{$number} is a prime number.";
} else {
    echo "{$number} is not a prime number.";
}
?>
//السوال رقم 11//
<?php
// التحقق مما إذا تم إرسال اللون عبر القائمة المنسدلة وتخزينه في Cookie
if (isset($_POST['bg_color'])) {
    $color = $_POST['bg_color'];
    setcookie('site_color', $color, time() + (86400 * 30), "/"); // حفظ لمدة 30 يوماً
    $background = $color;
} elseif (isset($_COOKIE['site_color'])) {
    $background = $_COOKIE['site_color'];
} else {
    $background = "#ffffff; // اللون الافتراضي أبيض
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Background Color</title>
</head>
<body style="background-color: <?php echo $background; ?>;">
    <form method="POST">
        <label>Choose background color:</label>
        <select name="bg_color" onchange="this.form.submit()">
            <option value="">Select Color</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="yellow">Yellow</option>
        </select>
    </form>
</body>
</html>


