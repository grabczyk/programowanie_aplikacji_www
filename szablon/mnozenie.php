<?php
include "0begin.php"
?>
<style>
    th, td, table {
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px
    }

    td:nth-child(1) {
        background-color: black;
    }
</style>
<h1> Tabliczka mnożenia </h1>
<a href="?n=10">do 10</a>
<a href="?n=20">do 20</a>
<a href="?n=30">do 30</a>
<?php
$n = $_GET["n"];
if (!isset($n)) $n = 20;

echo "<table><tr><td></td>";
for ($i = 1; $i <= $n; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";
for ($i = 1; $i <= $n; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 1; $j <= $n; $j++) {
        $tmp = $i * $j;
        echo "<td>$tmp</td>";
    }
    echo "</tr>";

}


include "0end.php"
?>
