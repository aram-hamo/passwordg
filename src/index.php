<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name=theme-color content="#007BFF">
        <meta name=description content="">
        <link href=/bootstrap.css rel=stylesheet />
        <title>passwordG</title>
        <style>
        body{
            padding-left:5%;
            padding-right:5%;
            font-size:1.6em;
        }
        .submitB{
            height:3em;
            width:100%;
        }
        .password{
            width:100%;
        }
        footer{
            text-align:center;
        }
        </style>
	</head>
	<body>
    <form method=post>
    <input name="capitalize" checked="checked" type="radio" id=capitalize value=capitalize default />
    <label for=capitalize class=silver > Include Capitalize chars</label>
    <br>
    <input name="capitalize" type="radio" id=no-capitalize value=no-capitalize />
    <label class=silver for=no-capitalize > No Capitalize</label>
    <hr>
    <input name="numerals" id=numerals type="radio" checked="checked" value=numerals />
    <label class=silver for=numerals > Include at least one number</label>
    <br>
    <input name="numerals" id=no-numerals type="radio" value=no-numerals />
    <label class=silver for=no-numerals> Do not include any number</label>
    <hr>
    <input name="specialS" id=specialS type="checkbox" value=specialS />
    <label class=silver for=specialS> include symblos</label>
    <hr>
    <input name="generate" class="btn-primary btn submitB" value="Generate"
    type="submit" />
    <br>
    <br>
    </form>
<?php
if(isset($_POST['generate'])){
    $command = "pwgen -1sv";
    if($_POST["capitalize"] == "capitalize"){
        $command = $command . " -c ";
    }elseif($_POST["capitalize"] == "no-capitalize"){
        $command = $command . " -A ";
    }
    if($_POST["numerals"] == "numerals"){
        $command = $command . " -n ";
    }elseif($_POST["numerals"] == "no-numerals"){
        $command = $command . " -0 ";
    }
    if($_POST["specialS"] == "specialS"){
        $command = $command . " -y ";
    }
    echo '<br><textarea id=password class=password id=password>' . shell_exec($command) . '</textarea>';
    echo '<br><button class="btn btn-success copyButton" onclick="copyToClipboard()">Copy To The Clipboard</button> ';
}
    echo '<br><br><br><br><br><br>';
    echo '<script> window.location.href = "/#password"; </script>';
?>
<br>

<script>
 function copyToClipboard() {
  /* Get the text field */
  var copyText = document.getElementById("password");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

} 
</script>
        <footer>
            <img src=/gitlab-icon-rgb.png>
            <a href=https://gitlab.com/aram-hamo/passwordg target="_blank">Get The Source Code</a>
        </footer>
	</body>
</html>
