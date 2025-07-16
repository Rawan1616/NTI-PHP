<html>
    <head></head>
    <body>
        <?php 


$colors = ["red", "blue", "green"];

for ($i = 0; $i < sizeof($colors); $i++) {
    echo $colors[$i] . "<br>";
}

$user = [
    "name" => "Rawan", 
    "age" => "25",
    "city" => "alex"
];

echo $user["name"] . "<br>";
?>

        
        
    </body>
</html>