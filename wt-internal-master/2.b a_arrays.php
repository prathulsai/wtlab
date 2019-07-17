<html>
<body>
<?php
$age = array( "Ben"=>"37", "Joe"=>"43","Peter"=>"35");
asort($age);
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
</body>
</html>