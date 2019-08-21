<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    	<form method="post">
    		Enter a number
    		<input type="text" name="input"/>
    		<input type="submit" name="Ok"/>
    	</form>
        <?php
        if (isset($_POST["input"])) {
        	$number = $_POST["input"];
        	if (is_numeric($number)) {
        		echo $number . '*'. $number . '=' . $number* $number;
        	} else {
        		echo "you should input a number!";
        	}    	
        } 
        ?>
    </body>
</html>