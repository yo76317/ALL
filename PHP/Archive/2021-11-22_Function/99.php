<?php
//練習

echo "<table width='600' border='1'>";
for($j=1;$j<=9;$j++){
echo "<tr>";
for($i=1;$i<=$j;$i++){
echo "<td>{$i}*{$j}=".($i*$j)."</td>";
}
echo "</tr>";
}
echo "</table>";
