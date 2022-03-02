<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' type='text/css' href='styles.css'>
    <link rel='icon' href='javascript.png'>
    <meta charset = "UTF-8">
    <title>CIS 114 Homework 2 Part 3</title>
</head>
<body>
    <div style="margin-top: 8em;">
        <form action="hw2p3.php" method="post">
            <div>
                <input type="text" name="usDollar" id="textBox" value="<?php echo $_POST['usDollar']?>">
            </div>
            <div>
                <input type="submit" id="submit" value="Submit">
            </div>
        </form>
    </div>
    <div>
        <script>
            var usDollar = "<?php echo $_POST["usDollar"]?>";
            var hkDollar = " ";
            var euro = " ";
            var cnDollar = " "; 
            var yen = " ";
            var peso = " ";
        
            if(!isNaN(usDollar) && usDollar){
                hkDollar = Math.round(usDollar * 7.8 * 100) / 100;
                euro = Math.round(usDollar * 0.89 * 100) / 100;
                cnDollar = Math.round(usDollar * 1.31 * 100) / 100;
                yen = Math.round(usDollar * 108.38 * 100) / 100;
                peso = Math.round(usDollar * 19.11 * 100) /100;
            
                document.write('<p id="info">Enter a number of US Dollars to see its value in other currencies.</p>');
            }
            else if(!usDollar){
                document.write('<p id="info">Enter a number of US Dollars to see its value in other currencies.</p>');
            }
            else{
                document.write('<p id="error">ERROR: Please enter a number</p>');
            }
        </script>
    </div>
    <div>
        <table>
            <tr>
                <th style="border-top-left-radius: 0.5em;">Currency</th>
                <th>Rate</th>
                <th style="border-top-right-radius: 0.5em;">Value</th>
            </tr>
            <tr>
                <td>Euros</td>
                <td>8.9</td>
                <script>
                    document.write("<td>" + euro + "</td>");
                </script>
            </tr>
            <tr>
                <td>Canadian Dollars</td>
                <td>13.1</td>
                <script>
                    document.write("<td>" + cnDollar + "</td>");
                </script>
            </tr>
            <tr>
                <td>Hong Kong Dollar</td>
                <td>78</td>
                <script>
                    document.write("<td>" + hkDollar + "</td>");
                </script>
            </tr>
            <tr>
                <td>Japanese Yen</td>
                <td>1083.8</td>
                <script>
                    document.write("<td>" + yen + "</td>");
                </script>
            </tr>
            <tr>
                <td style="border-bottom-left-radius: 0.5em;">Mexican Peso</td>
                <td>191.1</td>
                <script>
                    document.write('<td style="border-bottom-right-radius: 0.5em;">' + peso + "</td>");
                </script>
            </tr>
        </table>
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