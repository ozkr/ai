<?php
require_once ('create.php');
class Chop
{

 function abbreviate($input) {
            $explode = explode(' ', $input);			
			for($i = 0; $i <= strlen($input); $i++)
			{
				if(isset($explode[$i]))
				{
					$inputs = $explode[$i];
					//echo "\$explode[$i]! <br>";
					//echo $inputs;
					//Creamos los archivos de las nuevas palabras
					$crea =	new Creator();
					$crea -> CreateFile($inputs);
					$crea -> InsertData($inputs, $inputs, $inputs, $inputs);
				}
			}

        }
}

?>