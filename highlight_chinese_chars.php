<html>
    <head>
    <meta charset="UTF-8"/>
    <style>.red{color:red;}</style>
</head>
<body>
<?php

$str = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃';
$string = preg_replace('/([^a-zA-Z\s+]+)/is', "<span class='red'>$1</span>", $str);

echo "<br/>".$str;
echo "<br/>".$string;

?>
</body>
</html>