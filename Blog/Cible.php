<?php

			$BlogC = fopen('messages.txt', 'a+');

				date_default_timezone_set ( 'Europe/Paris' );
				$_POST['Date']=date('d').'/'.date('m').'/'.date('y').' '.date('H').':'.date('i');

				if(!empty($_POST['message']) AND !empty($_POST['titre']) AND !empty($_POST['nom']))
				{
					fputs($BlogC,$_POST['titre']);
					fputs($BlogC,'\n');
					fputs($BlogC,$_POST['Date']);
					fputs($BlogC,$_POST['nom']);
					fputs($BlogC,$_POST['message']);
				}

				fseek($BlogC, 0);

				while(FALSE!=($Affichage=fgets($BlogC)))
				{
					echo $Affichage;
				}

				fclose($BlogC);
				
?>