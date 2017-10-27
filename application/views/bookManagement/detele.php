<?php include("sidebar.php");  ?>

<html>
<head>
	<title></title>
	<style type="text/css">
	.table th{color: red; text-align: center; }
	.table td{text-align: center;}
	.table tbody tr td{padding: 5px;}
	a:hover{ text-decoration: none;}
	</style>
</head>
<body>
<br><br>


	<div class="container">


		<table class="table table-striped table-bordered table-responsive" >
			<tr>		<th>Sr No:</th>		<th>Book Name:</th>		<th>Author Name:</th>		<th>Edition</th>				<th>Batch Id:</th>			<th>Action:</th>			</tr>		

			<tr>
				<?php foreach ($result as $row ): ?>

				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td><?php echo $row['edition']; ?></td>
				
				<td><?php echo $row['batchid']; ?></td>
				<td>
					<a href="http://localhost:8080/book-management/ci/manage/deleteBook/<?php echo $row['id'] ?>">
						<button style="border-radius:0px;" class="btn btn-danger btn-block"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;&nbsp;Delete</button>
					</a>
				</td>

			</tr>
				<?php endforeach; ?>
		</table>

	</div>

</body>
</html>
