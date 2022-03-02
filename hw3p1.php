<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' type='text/css' href='styles.css'>
    <link rel='icon' href='javascript.png'>
    <meta charset = "UTF-8">
    <title>CIS 114 Homework 3 Part 1</title>
</head>
<body>
    <div style="margin-top: 4em;">
        <form action="hw3p1.php" method="post">
            <div class="divColumn">
                <div class="subDiv">
                    <p id="inputLabel">Homework Average:</p>
                </div>
                <div class="divColumn">
                    <input type="text" name="hwAverage" id="textBox" value="<?php echo $_POST['hwAverage']?>">
                </div>
            </div>
            <div class="divColumn">
                <div class="subDiv">
                    <p id="inputLabel">Mid-Term Score:</p>
                </div>
                <div class="divColumn">
                    <input type="text" name="mtScore" id="textBox" value="<?php echo $_POST['mtScore']?>">
                </div>
            </div>
            <div class="divColumn">
                <div class="subDiv">
                    <p id="inputLabel">Final Exam Score:</p>
                </div>
                <div class="divColumn">
                    <input type="text" name="feScore" id="textBox" value="<?php echo $_POST['feScore']?>">
                </div>
            </div>
            <div class="divColumn">
                <div class="subDiv">
                    <p id="inputLabel">Participation:</p>
                </div>
                <div class="divColumn">
                    <input type="text" name="participation" id="textBox" value="<?php echo $_POST['participation']?>">
                </div>
            </div>
            <div>
                <input type="submit" id="submit" value="Submit" style="margin-top: 0.5em;">
            </div>
        </form>
        <script>
            var hwAverage = "<?php echo $_POST["hwAverage"]?>";
            var mtScore = "<?php echo $_POST["mtScore"]?>";
            var feScore = "<?php echo $_POST["feScore"]?>";
            var participation = "<?php echo $_POST["participation"]?>";
            var finalAverage = hwAverage * 0.5;
                       
            finalAverage = finalAverage + mtScore * 0.2;
            finalAverage = finalAverage + feScore * 0.2;
            finalAverage = finalAverage + participation * 0.1;
            
            finalAverage = Math.round(finalAverage * 1) /1;
            
            
            if(!hwAverage && !mtScore && !feScore && !participation){
                document.write('<p id="info">Enter a value in each corresponding text box to have your grade calculated</p>');
            }
            else if (isNaN(hwAverage) || isNaN(mtScore) || isNaN(feScore) || isNaN(participation)){
                document.write('<p id="error">ERROR: Each entry must be a number</p>');
            }
            else if (finalAverage > 89){
                document.write('<p class="finalAv a">' + finalAverage + '\nA</p>');   
            }
            else if (finalAverage < 89 && finalAverage > 79){
                document.write('<p class="finalAv b">' + finalAverage + '\nB</p>');   
            }
            else if (finalAverage < 79 && finalAverage > 69){
                document.write('<p class="finalAv c">' + finalAverage + '\nC</p>');   
            }
            else if (finalAverage < 69 && finalAverage > 59){
                document.write('<p class="finalAv d">' + finalAverage + '\nD</p><p id="error">Student must retake course!</p>');   
            }
            else if (finalAverage < 59){
                document.write('<p class="finalAv f">' + finalAverage + '\nF</p><p id="error">Student must retake course!</p>');   
            }
        </script>
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