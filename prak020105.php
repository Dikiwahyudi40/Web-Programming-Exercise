<html>
	<head>Headings</head>
	<body>
	<?php
		$i = 1;
		do{
			if ($i%2 == 0){
				echo "<h".$i."><font style='color:red;'>Heading".$i."</font></h".$i.">";
				$i++;
			}
			else{
				echo "<h".$i.">Heading".$i."</h".$i.">";
				$i++;
			}
		}while($i<7);
	?>
	</body>
</html>