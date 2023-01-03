<?php

echo "exercise 4";
print("<br>Hello World<br>");
echo "Hello World";
printf("Hello World<br>");

echo "exercise 5";
$intNum = 472;
$doubleNum = 29.3;
$boolean = true;
$string = "Web Code Geeks";
$array = array("SreyMav", "Prunh", "Roth");
echo"my data: $intNum";
for($i=0; $i<3 ; $i++){
    echo "<br>$array[$i]";
}

echo "exercise 6,7,8<br>";
$age = 20;
if ($age < 10) {
    echo "You are a kid";
} elseif ($age < 20) {
    echo "You are a teenager";
} else {
    echo "You are an adult";
}


echo "<br>exercise 9<br>";
for ($i=0; $i < 5; $i++) {
    echo "<br>This is loop number $i";
}
echo "<br>exercise 10<br>";
$i=0; // initialization
while ($i < 5) {
    echo "<br>This is loop number $i";
    $i++; // step
}
echo "<br>exercise 11<br>";
$i = 0; // initialization
do {
    $i++; // step
    echo "This is loop number $i";
}while ($i < 5); // condition

?>
