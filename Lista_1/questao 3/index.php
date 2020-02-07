<html>
	<head>
		<title>Página inicial</title>
	</head>
	<body>

        <?php
            echo "Digite: ";
        ?>
	    <form action="test.php" method="get">

		    Nome<input type="text" name="nom">
            Sexo<input type="text" name="sex">
            Idade<input type="number" name="ida">
            <button>
            Concluir
            </button>
	    </form>
	</body>
</html>