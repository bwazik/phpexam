<?php
// 1. Chessboard
echo "<h3>1. Chessboard</h3>";
for ($row = 1; $row <= 8; $row++) {
    for ($col = 1; $col <= 8; $col++) {
        if (($row + $col) % 2 == 0) {
            echo "◼️";
        } else {
            echo "◻️";
        }
    }
    echo "<br>";
}

// 3. Sort Array ASC and DESC Without Built-in Functions
echo "<h3>3. Sort Array</h3>";
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

// Ascending Order
echo "Ascending Order: ";
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
print_r($array);

// Descending Order
echo "<br>Descending Order: ";
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] < $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
print_r($array);

// 4. Average of Numbers
echo "<h3>4. Average of Numbers</h3>";
$numbers = [2, 4, 6, 8];
$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}
$average = $sum / count($numbers);
echo "Average: " . $average;

// 5. Filter and Delete Even Numbers
echo "<h3>5. Delete Even Numbers</h3>";
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($array as $key => $value) {
    if ($value % 2 == 0) {
        unset($array[$key]);
    }
}
print_r($array);

// 6. Find Max Number Using If
echo "<h3>6. Find Max Number</h3>";
$numbers = [10, 30, 20];
$max = $numbers[0];
if ($numbers[1] > $max) $max = $numbers[1];
if ($numbers[2] > $max) $max = $numbers[2];
echo "Max number: " . $max;

// 7. Increment Date by One Month
echo "<h3>7. Increment Date by One Month</h3>";
$date = "2012-12-21";
echo date("Y-m-d", strtotime($date . " +1 month"));

// 8. Month Before Current Month
echo "<h3>8. Month Before Current Month</h3>";
echo date("m", strtotime("-1 month"));

// 9. String Contains Another String Using Regex
echo "<h3>9. String Contains Check</h3>";
$mainString = "hello world";
$searchString = "world";
if (preg_match("/" . preg_quote($searchString) . "/", $mainString)) {
    echo "String found!";
} else {
    echo "String not found!";
}

// 10. Prime Number Check
echo "<h3>10. Prime Number Check</h3>";
function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
echo isPrime(17) ? "Prime" : "Not Prime";

// 11. Change Background Color with Cookie
echo "<h3>11. Background Color with Cookie</h3>";
if (isset($_POST['color'])) {
    setcookie('bgcolor', $_POST['color'], time() + (86400 * 30));
    header("Refresh:0");
}
$color = $_COOKIE['bgcolor'] ?? 'white';
?>
<!DOCTYPE html>
<html>
<body style="background-color: <?= htmlspecialchars($color) ?>;">
<form method="post">
    <select name="color">
        <option value="white">White</option>
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
    </select>
    <button type="submit">Change Color</button>
</form>
</body>
</html>
