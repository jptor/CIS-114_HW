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
        <script>
            var temp = "<?php echo $_POST['temp']?>"
            var cTemp; //= 5/9 * (temp - 32);
            var fTemp; //= 32 + (9/5 * temp);
            var finalTemp;
            
            function createTextBox(){
                if(temp && !isNaN(temp)){
                    let div = document.getElementById('finalTempDiv');
                    let tempTextBox = document.createElement('input');
                    tempTextBox.type = "text";
                    tempTextBox.style = "width: 10em;";
                    tempTextBox.setAttribute('readonly', 'true');
                    tempTextBox.id = "textBox";
                    tempTextBox.value = finalTemp;
                
                    div.append(tempTextBox);
                }
            }
            
            function convertToCelcius(){
                cTemp = Math.round(5/9 * (temp - 32) * 1) / 1;
                finalTemp = temp + '°F  is  ' + cTemp.toString() + '°C';
                createTextBox();
            }
            
            function convertToFarenheit(){
                fTemp = Math.round(32 + (9/5 * temp) *1 ) / 1;
                finalTemp = temp + '°C  is  ' + fTemp.toString() + '°F';
                createTextBox();
            }
            
            if (!temp){
                document.write('<p id="info">Enter a temperature and press one of the buttons to convert it to farenheit or celcius</p>');
            }
            else if (isNaN(temp)){
                document.write('<p id="error">ERROR: The entry must be a number</p>')
            }
            else{
                document.write('<p id="info">Enter a temperature and press one of the buttons to convert it to farenheit or celcius</p>');
            }
        </script>
        <form action="hw3p3.php" method="post" id="tempForm">
            <div>
                <input type="text" name="temp" value="<?php echo $_POST['temp']?>" style="margin-top: 1.5em;" id="textBox">
            </div>
            <div>
                <input type="submit" value="Celcius → Farenheit" style="width: 12em;" name="cButton" id="submit">
                <input type="submit" value="Farenheit → Celcius" style="width: 12em;" name="fButton" id="submit">
            </div>
        </form>
        <div id="finalTempDiv">
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
        <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                
                if(isset($_POST['fButton'])){
                    echo '<script>convertToCelcius();</script>';
                }
                else{
                    echo '<script>convertToFarenheit();</script>';
                }
            }
        ?>
</body>
</html>