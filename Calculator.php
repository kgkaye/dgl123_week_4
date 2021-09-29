<!doctype html>
<html lang="en>">
<head>
    <!-- 
    Graham Kaye
    September 29
    DGL 123
    Week 4 assignment
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1">
    <title>Addition Only Calculator</title>
    
</head>
<body>
    <h1>Addition Only Calculator</h1>

    <form >
        <div>
            <label for="first_number">1st Number</label>
            <input type="number" name="first_number" value="0"> <!--Adds numeric value to first_number-->
        </div>
        <br>
        <div>
            <label for="second_number">2nd Number</label>
            <input type="number" name="second_number" value="0">
        </div>
        <br>
        <input type="submit" value="Calculate Sum">
    </form>
    <br>
    <?php  
        $first_number = $_GET['first_number'] ?? '0';
        $second_number = $_GET['second_number'] ?? '0';
        $total = $first_number + $second_number;
        //if first_number and second_number have a value echo out results
        if (isset ($_GET['first_number'], $_GET['second_number'])) {
            echo "<h2>Result:</h2>
            <p>$first_number + $second_number = $total</p>";          
        } 
    ?>
</body>
</html>
