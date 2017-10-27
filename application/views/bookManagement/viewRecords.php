<?php include("sidebar.php");  ?>

<html>
<head>
	<title></title>
	<style type="text/css">
	.table th{color: red; text-align: center; }
	.table td{text-align: center;}
	.table tbody tr td{padding: 13px;}

	</style>
</head>
<body>
<br><br>


	<div class="container">


		<table class="table table-striped table-bordered table-responsive" >
			<tr>		<th>Sr No:</th>		<th>Book Name:</th>		<th>Author Name:</th>		<th>Edition</th>		<th>Title</th>		<th>Batch Id:</th>				</tr>		

			<tr>
				<?php foreach ($data as $row ): ?>

				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td><?php echo $row['edition']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['batchid']; ?></td>

			</tr>
				<?php endforeach; ?>
		</table>

	</div>

</body>
</html>
