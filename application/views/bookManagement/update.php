<?php require("sidebar.php") ?>
<html>
<head>
	<title>s</title>
	<style type="text/css">

	.btn {border-radius: 0px; color: white;}
	</style>
</head>
<body>


	<div class="container">




		<div class="col-md-offset-2 col-md-8 col-md-offset-2">


<br>

<form action="http://localhost:8080/book-management/ci/manage/updateBookRecord/<?php echo $result[0]['id']; ?>" method="post">

		<label>Enter Book Name:</label>
		<input type="text" name="bkname" value="<?php echo $result[0]['name']; ?>" class="form-control" required ><br>

		<label>Enter Book Author:</label>
		<input type="text" name="autname" value="<?php echo $result[0]['author']; ?>" class="form-control" required ><br>


		<label>Enter Book Edition:</label>
		<input type="text" name="edition" value="<?php echo $result[0]['edition']; ?>" class="form-control" required ><br>


		<label>Enter Book Title:</label>
		<input type="text" name="title" value="<?php echo $result[0]['title']; ?>" class="form-control" required ><br>


		<label>Batch ID:</label>
		<input type="text" name="batchid" value="<?php echo $result[0]['batchid']; ?>" class="form-control" required ><br>

	 <center>	<button  class="btn btn-success  btn-lg">Update Book Record</button>  </center>

</form>	 
</div>

	</div>




</body>
</html>