<!DOCTYPE html>
<html>
<head>
	<title>Items - ThriftIt</title>
	<?php
	include 'header.php';

	?>
</head>
<body>
	<?php
	include 'navBar.php';

	?>


	<div class="container" style="margin-top: 100px">
		<div class="jumbotron">
			<h1>Hello!!! Miss J. T.</h1>
		</div>

		<div class="row">
			<?php

				include 'db.php';

				$sql = "SELECT * FROM ads";
				$result = $conn->query($sql);

				if ($result) {
					@include 'itemShow.php';
				} else {
					$jt = "hello";
					@include 'errorItemShow.php';
				}


			?>




		</div>







	</div>
</body>
</html>