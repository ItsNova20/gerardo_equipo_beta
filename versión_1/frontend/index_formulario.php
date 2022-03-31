<html>
	<head>
		<meta charset="utf8" />
		<title>Formulario</title>
		<style>
            body {background: #EAEDED;
                color:#17202A;}
			form {
				margin: 0px auto;
				width: 410px;
				padding: 1.5em;
				border: 2px solid #24303c;
				border-radius: 4px;
			}

			ul {
				list-style: none;
				padding: 0;
				margin: 0;
			}

			form li + li {
				margin-top: 1.5em;
			}

			label {
				display: inline-block;
				width: 85px;
				text-align: right;
			}

			input,
			textarea {
				font: 1em Berlin Sans FB;
				width: 300px;
				box-sizing: border-box;
                background: #EAEDED;
				border: 1px solid #17202A;
			}

			input:focus,
			textarea:focus {
				border-color: #000;
			}

			textarea {
				vertical-align: top;
				height: 5em;
			}

			.button {
				padding-left: 69px;
			}

			button {
				margin-left: 0.5em;
				background: #8e9191;
				border-color: #B3B6B7;
                color: white;
                font-size: 15px;
			}
		</style>
	</head>

	<body>
        <header><br>
            <center><h1><font style="font-family: Dominique" color="#17202A">Registro de datos</font></h1></center>
        </header>
		<form name="form" action="guardar.php" method="POST">
			<ul>
				<li>
					<label for="nombres"><font style="font-family: Berlin Sans FB">Nombre(s):</label></font>
					<input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre." />
				</li>
				<li>
					<label for="apellido_paterno"><font style="font-family: Berlin Sans FB">Apellido paterno:</label></font>
					<input class="controls" type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Ingrese su apellido paterno." />
				</li>
                <li>
					<label for="apellido_materno"><font style="font-family: Berlin Sans FB">Apellido materno:</label></font>
					<input class="controls" type="text" name="apellido_materno" id="apellido_materno" placeholder="Ingrese su apellido materno." />
				</li>
                <li>
					<label for="CURP" ><font style="font-family: Berlin Sans FB">CURP:</label></font>
					<input class="controls" type="text" name="CURP" id="CURP" required maxlength="18" size="10" placeholder="Ingrese su CURP." />
				</li>
                <li>
					<label for="numero_celular"><font style="font-family: Berlin Sans FB">Número de celular:</label></font>
					<input class="controls" type="number" name="numero_celular"   id="numero_celular"  placeholder="Ingrese su número de celular." />
				</li>
                
				<li class="button">
					<input type="submit" value="Enviar formulario"><a href="formulario_pagina_2.php"></a>
					
					<center><button type="reset"><font style="font-family: Berlin Sans FB">Borrar fomulario</button></font></center>
				</li>
			</ul>
		</form>
	</body>
</html>