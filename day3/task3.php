<html>
<head>
    <title>My First Web Page</title>
</head>
<body>

<?php 
    // $score = 50;

    if (isset($score)) {
        if ($score >= 50) {
            echo "You passed the test";
        } else {
            echo "You failed the test";
        }
  
    }
      else{
    echo " score not set ";
    }

?>

</body>
</html>

</html>