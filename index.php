<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name=theme-color content="#007BFF">
        <link href=/bootstrap.css rel=stylesheet></link>
        <style>
        body{
            padding-left:10%;
            padding-right:10%;
            font-size:1.6em;
        }
        .submitB{
            height:3em;
            width:100%;
        }
        </style>
	</head>
	<body>
    <form method=post>
    <input name="capitalize" type="radio" id=capitalize value=capitalize default></input>
    <label for=capitalize class=silver > Include Capitalize chars</label>
    <br>
    <input name="capitalize" type="radio" id=no-capitalize value=no-capitalize></input>
    <label class=silver for=no-capitalize > No Capitalize</label>
    <hr>
    <input name="numerals" id=numerals type="radio" value=numerals></input>
    <label class=silver for=numerals > Include at least one number</label>
    <br>
    <input name="numerals" id=no-numerals type="radio" value=no-numerals></input>
    <label class=silver for=no-numerals> Do not include any number</label>
    <hr>
    <input name="specialS" id=specialS type="checkbox" value=specialS></input>
    <label class=silver for=specialS> include symblos</label>
    <hr>
    <input name="generate" class="btn-primary btn submitB" value="Generate"
    type="submit"></input>
    <br>
    <br>
    </div> 
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
    echo '<div>' . shell_exec($command) . '</div>';
}
    echo '<br><br><br><br><br><br>';
?>
	</body>
</html>
