<?php
	function fackalk($fack)
	{
		if($fack > 1)
		{
			return gmp_mul($fack, fackalk($fack - 1));
		}
		else
		{
			return 1;
		}
	}
	
	if(($_GET['fack'] < 1) || ($_GET['fack'] > 1000))
	{
		echo "Argument is out of range.";
		exit();
	}
	else
	{
		$res = fackalk($_GET['fack']);
		settype($res, "string");
		$newres = wordwrap($res, 100, "<br />\n", true);
		echo $newres;
	}
?>