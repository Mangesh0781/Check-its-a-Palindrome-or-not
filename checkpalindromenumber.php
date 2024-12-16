<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check the number is palindrome or not </title>
</head>
<body>
<div class="container">
<form method="post">
    Enter A Number <input type="text" name="number">
    <input type="submit">
</form>
</div>

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $input = $_POST['number'];

        $num=$input;
        $sum=0;
        $lastdigit = 0;

        while ($num> 0) {
            $lastdigit = $num % 10;
            $sum = ($sum *10) + $lastdigit;
            $num = floor($num/10);
            }

            if($input == $sum){
                echo "$input is a palindrome number ! ";
            }
            else{
                echo "$input is a palindrome number ! ";
            }
}
?>
   
</body>
</html>