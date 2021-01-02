<!DOCTYPE html>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
        <link href=/bootstrap.css rel=stylesheet></link>
        <style>
			body{
                padding-left:15%;
                padding-right:15%;
                font-size:1.5em;
			}
        .submitB{
            height:3em;
            width:100%;
        }
        </style>
	</head>
	<body>
    <form method=post>
    <input name="capitalize" type="radio" value=capitalize default></input>
    <label class=silver > Include Capitalize chars</label>
    <br>
    <input name="capitalize" type="radio" value=no-capitalize></input>
    <label class=silver > No Capitalize</label>
    <hr>
    <input name="numerals" type="radio" value=numerals></input>
    <label class=silver > Include at least one number</label>
    <br>
    <input name="numerals" type="radio" value=no-numerals></input>
    <label class=silver > Do not include any number</label>
    <hr>
    <input name="specialS" type="checkbox" value=specialS></input>
    <label class=silver > include symblos</label>
    <hr>
    <input name="generate" class="btn-primary btn submitB" value="Generate" type="submit"></input>
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
?>
	</body>
</html>
