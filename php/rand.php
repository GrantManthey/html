<link rel="stylesheet" type="text/css" href="sheet.css">
<header style="font-size:35px;">

<header>
<?php
		for($i = 0; $i < 20000; $i++){
			$a = (rand(65,91));
			$b = (rand(65,91));
			$c = (rand(65,91));
			
			$ac = chr($a);
			$bc = chr($b);
			$cc = chr($c);
			
			$txt = $ac.$bc.$cc;
			echo "$txt&nbsp;";
			if ($i % 20 == 0 ){echo "<br />";}
			
		}
?>
<div>
</div>
</header>
