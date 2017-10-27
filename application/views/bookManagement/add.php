<?php require("sidebar.php") ?>
<html>
<head>
	<title>s</title>
	<style type="text/css">

	.btn-add {border-radius: 0px; background-color: #00BCD4; color: white;}
	</style>
</head>
<body>




	<div class="container">




		<div class="col-md-offset-2 col-md-8 col-md-offset-2">


<br><br>

<form action="insertrecord" method="post">

		<label>Enter Book Name:</label>
		<input type="text" name="bkname" class="form-control" required ><br>

		<label>Enter Book Author:</label>
		<input type="text" name="autname" class="form-control" required ><br>


		<label>Enter Book Edition:</label>
		<input type="text" name="edition" class="form-control" required ><br>


		<label>Enter Book Title:</label>
		<input type="text" name="title" class="form-control" required ><br>


		<label>Batch ID:</label>
		<input type="text" name="batchid" class="form-control" required ><br>

	 <center>	<button  class="btn btn-add btn-lg">Add Book Record</button>  </center>

</form>	 
</div>

	</div>




</body>
</html>