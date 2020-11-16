<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <style>
        body {
            background-color: blue;
        }

        .heading {
            font-family: cursive;
            font-size: 300%;
            color: red;
            text-align: center;
        }

        .calculator {
            font-family: cursive;
            font-size: 110%;
            color: white;
            text-align: center;
            margin-top: 10vh;
        }

        input {
            color: white;
            text-align: center;
            font-weight: bold;
            font-family: cursive;
            border-left: #080510;
            border-right: #080510;
            border-style: groove;
            background-color: #080510;
            font-size: 110%;
        }

        select {
            color: white;
            text-align: center;
            font-weight: bold;
            font-family: cursive;
            border-left: #080510;
            border-right: #080510;
            border-style: groove;
            background-color: #080510;
            font-size: 95%;
        }

        option {
            color: white;
            text-align: center;
            font-weight: bold;
            font-family: cursive;
            border-left: #080510;
            border-right: #080510;
            border-style: groove;
            background-color: #080510;
            font-size: 95%;
        }

        .footer {
            left: 0px;
            right: 0px;
            bottom: 4px;
            position: fixed;
            text-align: center;
            color: teal;
            font-family: Comic Sans Ms;
            font-size: 120%;
        }

        a {
            text-decoration: none;
            color: red;
        }

        a:hover {
            color: lawngreen;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
    </style>
</head>

<body>
    <div class="heading">
        <font>Kalkulator Sederhana</font>
    </div>
    <div class="calculator">
        <form action="" method="POST">
            <input type="number" name="first_input" placeholder="Masukan Angka Pertama" size="20" />&nbsp;&nbsp;&nbsp;
            <input type="number" name="second_input" placeholder="Masukan Angka Kedua" size="20" />&nbsp;&nbsp;&nbsp;
            <select name="function">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>a*a</option>
                <option>Modulus</option>
            </select><br><br><input type="reset" value="Reset">
            <input type="submit" name="submit" value="Submit" />
        </form>
        <?php
				if (isset($_POST['submit'])) {
					$input_1 = htmlspecialchars($_POST['first_input']);
					$input_2 = htmlspecialchars($_POST['second_input']);
					$operator = $_POST['function'];

					if ($input_1 == null) {
						die("<br><br>Masukan Angka Terlebih Dahulu");
					}



					switch ($operator) {
						case '+':
							$penjumlahan = $input_1 + $input_2;
							echo "<br><br>Result:<br> " . $penjumlahan;
						break;

						case '-':
							$pengurangan = $input_1 - $input_2;
							echo "<br><br>Result:<br> " . $pengurangan;
						break;

						case '*':
							$perkalian = $input_1 * $input_2;
							echo "<br><br>Result:<br>" . $perkalian;
						break;

						case '/':
							$pembagian = $input_1 / $input_2;
							echo "<br><br>Result:<br>" . $pembagian;
						break;

						case 'a*a':
							$Kuadrat = $input_1 * $input_1;
							die("<br><br>Result:<br>" . $Kuadrat);
						break;

						case 'Modulus':
							$Modulus = $input_1 % $input_2;
							die("<br><br>Result:<br>" . $Modulus);
						break;
					}
				}
			?>
    </div>
    <div class="footer">
        <footer>

        </footer>
    </div>
</body>

</html>