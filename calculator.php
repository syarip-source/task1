<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculator</title>

</head>

<body>

<?php
$result = "";

    if(isset($_POST['submit'])) {
        $no1 = $_POST['num1'];
        $no2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case "+":
                $result = $no1 + $no2;
            break;            
            case "-":
                $result =  $no1 - $no2;
            break;            
            case "*":
                $result =  $no1 * $no2;
            break;            
            case "/":
                if($no2 == 0) {
                    $result = "INF";
                } else {
                    $result =  $no1 / $no2;
                }
            break;        }
    }
?>

<form method="post" action="">
    <input style="padding:10px; border:1px solid #3581fc;" type="number" name="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : '' ?>" placeholder="A" required>
    <select style="padding:10px; border:1px solid #3581fc;" name="operator">
        <option value="+" <?php if (isset($_POST['operator']) && $_POST['operator'] == "+") echo "selected='selected'"; ?>>+ (Add)</option>
        <option value="-" <?php if (isset($_POST['operator']) && $_POST['operator'] == "-") echo "selected='selected'"; ?>>- (Subtract)</option>
        <option value="*" <?php if (isset($_POST['operator']) && $_POST['operator'] == "*") echo "selected='selected'"; ?>>x (Multiply)</option>
        <option value="/" <?php if (isset($_POST['operator']) && $_POST['operator'] == "/") echo "selected='selected'"; ?>>/ (Divide)</option>
    </select>
    <input style="padding:10px; border:1px solid #3581fc;" type="number" name="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : '' ?>" placeholder="B" required>
    =
    <input style="padding:10px; border:1px solid #3581fc;" type="text" readonly placeholder="RESULT" value="<?php $result; echo $result ?>">
    <br>
    <button style="padding:10px; border:1px solid #3581fc; margin-top:10px;" type="submit" name="submit" value="submit">Calculate</button>
</form>