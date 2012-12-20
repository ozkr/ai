<?php
require_once ('brain/create.php');
require_once ('brain/chop.php');
print "Correcto!: <br>La palabra es <b>".$_POST['input']."</b><br>";

$input = $_POST['input'];

if (isset($input))
{

	if (preg_match ('/ /i', $input))
	{
    // The string contains characters spaces
		//echo "Tiene espacios!";
		$chop = new Chop();
		//$chop-> abbreviate($input);
		print $chop->abbreviate($input);
	}
	else
	{
		$lol = new Creator();
		$lol->CreateFile($input);
		$lol->InsertData($input, $input, $input, $input);
	}

}
else
{
	die("Error procesando palabra");
}
?>