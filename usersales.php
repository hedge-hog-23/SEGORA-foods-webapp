<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>


<div class="container">
	<h1 class="page-header text-center">SALES</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Customer</th>
			<th>Total Sales</th>
			<th>Details</th>
			<th>Status</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);	
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td><?php echo $row['customer']; ?></td>
						<td class="text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
						<td><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
						<td><?php echo $row['status']; ?></td>
					</tr>
					<?php
				}
			
				$sql = "UPDATE purchase set status = 'delivered' WHERE TIMESTAMPDIFF(MINUTE,date_purchase,NOW()) >1";
				if (mysqli_query($conn, $sql)) {
					echo "";}
			?>
				
				
					
					
			
			
		</tbody>
	</table>
</div>
</body>
</html>