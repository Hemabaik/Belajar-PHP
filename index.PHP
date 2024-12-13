<?PHP

global $a, $b, $c, $d, $e, $f;
$a = 8;
$b = 20;
$c = 3;
$d = 9;
$e = 5;
$f = 5;

echo "a = " . $a . " b = " . $b . " c = " . $c . " d = " . $d . " e = " . $e;
echo "<br>";

$e = $a + $b;
echo "e = a + b ";
echo "<br>";
echo "e = ".$e;
echo "<br>";
echo "d = e - c ";
echo "<br>";
echo "d = ".$e - $c;
echo "<hr>";
echo "Ini adalah increment (kenaikan/penambahan)<br>";
echo $f++;
echo "<br>";
echo $f;
echo "<br>ini decrement<br>";
echo --$f;

