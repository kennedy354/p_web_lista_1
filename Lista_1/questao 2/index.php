<html>
	<head>
		<title>Página inicial</title>
	</head>
	<body>

        <?php
            echo "Digite dois números. ";
        ?>
	    <form action="soma.php" method="get">

		    <input type="number" name="num1">
            <input type="number" name="num2">
            <button>
            Somar
            </button>
	    </form>
	</body>
</html>