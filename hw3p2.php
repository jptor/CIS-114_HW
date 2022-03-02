<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' type='text/css' href='styles.css'>
    <link rel='icon' href='javascript.png'>
    <meta charset = "UTF-8">
    <title>CIS 114 Homework 3 Part 2</title>
</head>
<body>
    <div style="margin-top: 4em;">
        <form action="hw3p2.php" method="post" id="comissionForm">
            <div>
                <p id="info">Enter your name</p>
            </div>
            <div style="text-align: left; width: 12em; height: 4em; margin: 0 auto;">
                <div style="float: left; width: 50%;">
                    <p id="inputLabel">Salesperson:</p>
                </div>
                <div style="float: left; width: 50%;">
                    <input type="text" name="salesPerson" id="textBox" style="padding-right: 0.5em;" value="<?php echo $_POST['salesPerson']?>">
                </div>
            </div>
            <script>
                var salesPerson = "<?php echo $_POST['salesPerson']?>";
                var itemOne = "<?php echo $_POST['itemOne']?>";
                var itemTwo = "<?php echo $_POST['itemTwo']?>";
                var itemThree = "<?php echo $_POST['itemThree']?>";
                var itemFour = "<?php echo $_POST['itemFour']?>";
                
                var itemOneTotal = Math.round((itemOne * 20.99) * 100) / 100;
                var itemTwoTotal = Math.round((itemTwo * 12.75) * 100) / 100;
                var itemThreeTotal = Math.round((itemThree * 9.95) * 100) / 100;
                var itemFourTotal = Math.round((itemFour * 35.89) * 100) / 100;
                
                var salesTotal = Math.round((itemOneTotal + itemTwoTotal + itemThreeTotal + itemFourTotal) * 100) / 100;
                
                var comissionTotal;
                
                function error(){
                    itemOne = "~";
                    itemTwo = "~";
                    itemThree = "~";
                    itemFour = "~";
                    itemOneTotal = "~";
                    itemTwoTotal = "~";
                    itemThreeTotal = "~";
                    itemFourTotal = "~";
                    salesTotal = "~";
                    comissionTotal = "~";
                }
                
                if (itemOne > 0 || itemTwo > 0 || itemThree > 0 || itemFour > 0) {
                    comissionTotal = Math.round(0.09 * salesTotal * 100) / 100 + 250;
                }
                else {
                    comissionTotal = 0;
                }
                
                if (!itemOne && !itemTwo && !itemThree && !itemFour){
                    document.write('<p id="info">Enter the number of items sold for each item number below</p><p id="info"><b>Your commission is 9% of each sale plus $250</b></p>');
                    itemOne = 0;
                    itemTwo = 0;
                    itemThree = 0;
                    itemFour =0;
                }
                else if (!Number.isInteger(parseFloat(itemOne)) || !Number.isInteger(parseFloat(itemTwo)) || !Number.isInteger(parseFloat(itemThree)) || !Number.isInteger(parseFloat(itemFour))){
                    document.write('<p id="error">ERROR: Each entry must be a positive whole number</p>')
                    
                    error();
                }
                else if (itemOne < 0 || itemTwo < 0 || itemThree < 0 || itemFour < 0){
                    document.write('<p id="error">ERROR: Each entry must be a positive number</p>')
                    
                    error();
                }
                else {
                    document.write('<p id="info">Enter the number of items sold for each item number below</p>');
                }
            </script>
            <div style="text-align: left; width: 11em; height: 4em; margin: 0 auto;">
                <div style="float: left; width: 50%;">
                    <p id="inputLabel">Item #1</p>
                </div>
                <div  style="float: left; width: 50%;">
                    <input type="text" name="itemOne" id="textBox" value="<?php echo $_POST['itemOne']?>">
                </div>
            </div>
            <div style="text-align: left; width: 11em; height: 4em; margin: 0 auto;">
                <div style="float: left; width: 50%;">
                    <p id="inputLabel">Item #2</p>
                </div>
                <div  style="float: left; width: 50%;">
                    <input type="text" name="itemTwo" id="textBox" value="<?php echo $_POST['itemTwo']?>">
                </div>
            </div>
            <div style="text-align: left; width: 11em; height: 4em; margin: 0 auto;">
                <div style="float: left; width: 50%;">
                    <p id="inputLabel">Item #3</p>
                </div>
                <div  style="float: left; width: 50%;">
                    <input type="text" name="itemThree" id="textBox" value="<?php echo $_POST['itemThree']?>">
                </div>
            </div>
            <div style="text-align: left; width: 11em; height: 4em; margin: 0 auto;">
                <div style="float: left; width: 50%;">
                    <p id="inputLabel">Item #4</p>
                </div>
                <div  style="float: left; width: 50%;">
                    <input type="text" name="itemFour" id="textBox" value="<?php echo $_POST['itemFour']?>">
                </div>
            </div>
            <div style="margin: 0 auto; width: 12em;">
                <input type="submit" name="submit" id="submit" value="Submit">
            </div>
        </form>
        <div style="height: 11em; width: 35em; margin: 0 auto;">
            <div style="float: left; width: 20%;">
                <p id="info" style="text-align: left;"><b>Item #</b></p>
                <p id="info" style="text-align: left;">1<br>2<br>3<br>4</p>
            </div>
            <div style="float: left; width: 20%">
                <p id="info" style="text-align: left;"><b>Price</b></p>
                <p id="info" style="text-align: left;">$20.99<br>$12.75<br>$9.95<br>$35.89</p>
            </div>
            <div style="float: left; width: 20%;">
                <p id="info" style="text-align: left;"><b># Sold</b></p>
                <script>
                    document.write('<p id="info" style="text-align: left;">' + itemOne + '<br>' + itemTwo + '<br>' + itemThree + '<br>' + itemFour + '</p>')
                </script>
            </div>
            <div style="float: left; width: 20%;">
                <p id="info" style="text-align: left;"><b>Total</b></p>
                <script>
                    document.write('<p id="info" style="text-align: left;">$' + itemOneTotal + '<br>$' + itemTwoTotal + '<br>$' + itemThreeTotal + '<br>$' + itemFourTotal + '</p>');
                </script>
            </div>
            <div style="float:left; width: 20%;">                
                 <p id="info" style="margin-bottom: 1em;"><b>Total Amount Sold: </b><br><script>document.write('$' + salesTotal);</script></p>                
                 <p id="info" style="margin-top: 1em;"><b>Total Commission: </b><br><span id="info" style="margin-left: 0em; color: #00ff00; text-shadow: 0px 0px 5px #00cc00;"><script>document.write('$' + comissionTotal);</script></span></p>
            </div>
        </div>
        <div id='comingSoon'>
            <div style='padding-bottom: 0.5em;'>
                <a href='hw3.html'>Back</a>
            </div>
            <div>
                <a href='index.html'>Back to home</a>
            </div>
        </div>
    </div>
</body>
</html>