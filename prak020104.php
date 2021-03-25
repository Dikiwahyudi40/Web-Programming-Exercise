<html>
	<head>Headings</head>
	<body>
	<?php
		for ($i=1; $i<=6; $i++){
			while($i == true){
				echo "<h".$i.">Heading".$i."</h".$i.">";
				$i++;
				echo "<h".$i."><font style='color:red;'>Heading".$i."</font></h".$i.">";
				break;
			}
		}
	?>
	</body>
</html>