<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' type='text/css' href='styles.css'>
    <link rel='icon' href='javascript.png'>
    <meta charset = "UTF-8">
    <title>CIS 114 Homework 2 Part 2</title>
</head>
<body>
    <div style="margin-top: 8em;">
        <form action="hw2p2.php" method="post">
            <div>
                <input type="text" name="numOne" id="textBox" value="<?php echo $_POST['numOne']?>">
                <input type="text" name="numTwo" id="textBox" value="<?php echo $_POST['numTwo']?>">
                <input type="text" name="numThree" id="textBox" value="<?php echo $_POST['numThree']?>">
            </div>
            <div>
                <input type="submit" id="submit" value="Submit">
            </div>
        </form>
    <script>
        
        var numOne = "<?php echo $_POST["numOne"]?>"
        var numTwo = "<?php echo $_POST["numTwo"]?>"
        var numThree = "<?php echo $_POST["numThree"]?>"
        var numSum;
        var numAverage;
        var numProduct;
        var numLarge;
        var numSmall;

        function numFunction(){
            
            if(!numOne && !numTwo && !numThree){
                
                document.write('<p id="info">Enter some numbers in the text boxes above, and press submit.</p>');
                return(0);
            }
            
            numOne = parseFloat("<?php echo $_POST["numOne"]?>");
            numTwo = parseFloat("<?php echo $_POST["numTwo"]?>");
            numThree = parseFloat("<?php echo $_POST["numThree"]?>");
            
            if(Number.isInteger(numOne) && Number.isInteger(numTwo) && Number.isInteger(numThree)){
                
                numSum = numOne + numTwo + numThree;
                numAverage = numSum / 3;
                numProduct = numOne * numTwo * numThree;
                numLarge = Math.max(numOne, numTwo, numThree);
                numSmall = Math.min(numOne, numTwo, numThree);
                
                document.write('<p id="info">Sum: ' + numSum + '<br> Average: ' + numAverage + '<br>Product: ' + numProduct + '<br>Largest Number: ' + numLarge + '<br>Smallest Number: ' + numSmall + '</p>')
            }
            else {
                document.write('<p id="error">ERROR: Each entry must be an integer (whole number)</p>');
            }
        }
        numFunction();
    </script>
    </div>
        <div id='comingSoon'>
            <div style='padding-bottom: 0.5em;'>
                <a href='hw2.html'>Back</a>
            </div>
            <div>
                <a href='index.html'>Back to home</a>
            </div>
        </div>
</body>
</html>