<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
</head>
<body>
<?php 
for($j=1;$j<=9;$j++){
    echo '<tr>';
    for($i=1;$i<=9;$i++){
        echo "<td> $j X $i =" . ($j*$i) . "</td>";
     }
    echo "</tr>";
}
?>
</body>
</html>