<?php
class Creator
{
	
	function CreateFile($nombre)
	{
		$ourFileName = "$nombre".".php";
		$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
		fclose($ourFileHandle);
	}

	function InsertData($nombre, $var1, $var2, $var3)
	{
		$file = fopen("$nombre".".php", "r+");
		// Seek to the end
		fseek($file, SEEK_END, 0);
		// Get and save that position
		$filesize = ftell($file);
		// Seek to half the length of the file
		fseek($file, SEEK_SET, $filesize / 1);
		// Write your data
		fwrite($file, "<?php
class " ."$nombre". "\n
{\n
	private $" ."$var1;". "\n
    private $" ."$var2;". "\n
    private $" ."$var3;". "\n
\n\n
		public function __construct()\n
		{\n
			\$this->setData($" ."$var1". ", $" ."$var2". ", $" ."$var3". ");\n
			//parent::__construct();\n

		}
\n\n
		public function setData($" ."$var1". ", $" ."$var2". ", $" ."$var3". ")\n
		{\n
	        \$this->" ."$var1". "= $" ."$var1;". "\n
	        \$this->" ."$var2". "= $" ."$var2;". "\n
	        \$this->" ."$var3". "= $" ."$var3;". "\n
    	}
\n\n
		public function printData()
		{\n
	        echo \"SomeThing : \" . \$this->" ."$var1". ". \" \" . \$this->" ."$var2". ";\n
	        echo \"Other : \" . \$this->" ."$var3". ";\n
    	}
\n\n
}
\n\n
?>");
		// Close the file handler
		fclose($file);
	}
}

?>