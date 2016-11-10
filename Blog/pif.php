<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Blog</title>
		<script src="script.js"></script>
	</head>

	<body>

		<center><h1>Blog</h1></center><br/>	
		

			<?php
				
				$BlogC = fopen('Blog.txt', 'a+');

				date_default_timezone_set ( 'Europe/Paris' );
				$_POST['Date']=date('d').'/'.date('m').'/'.date('y').' '.date('H').':'.date('i');

				if(!empty($_POST['Message']) AND !empty($_POST['Titre']) AND !empty($_POST['Pseudo']))
				{

					fputs($BlogC,$_POST['Titre']);
					fputs($BlogC,'<br/>');
					fputs($BlogC,$_POST['Date']);
					fputs($BlogC,'<br/>');
					fputs($BlogC,$_POST['Pseudo']);
					fputs($BlogC,'<br/>');
					fputs($BlogC,$_POST['Message']);
					fputs($BlogC,'<br/>');
					fputs($BlogC,'<br/>');
				}

				fseek($BlogC, 0);

				while(FALSE!=($Affichage=fgets($BlogC)))
				{
					echo $Affichage;
				}

				fclose($BlogC);
				
			?>
			
			
		</form>
	</body>

	<footer>
		<form action="#" method="POST">
		<p>
				<label for="Pseudo">Pseudo: </label><input type="text" name="Pseudo"/>
				<br/>
				<label for="Titre">Titre: </label><input type="text" name="Titre"/>
				<br/>
				<label for="Message">Message: </label><input type="text" name="Message"/>

				<input type="submit" value="Envoyer"/>
			</p>

	</footer>
</html>