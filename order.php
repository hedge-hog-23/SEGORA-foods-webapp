<?php include('header.php'); ?>
<body>
<?php include('usernavbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">ORDER</h1>
	<form method="POST" action="purchase.php">
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th>Category</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>stock</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php 
					$sql="select * from product left join category on category.categoryid=product.categoryid where product.stock > 0 order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""></td>
							<td><?php echo $row['catname']; ?></td>
							<td><?php echo $row['productname']; ?></td>
							<td class="text-right">&#x20A8; <?php echo number_format($row['price'], 2); ?></td>
							<td><?php echo $row['stock'];?></td>
                            

							<td>
                            <form id = "ip">
<input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"><script>
var form = document.getElementById("ip");
  var input = document.getElementsByName("quantity_<?php echo $iterate; ?>")[0];

  input.addEventListener("input", function() {
    if (this.value > <?php echo $row['stock']; ?>) {
      this.value = "";
      alert("The quantity you entered exceeds the current stock value. Please enter a quantity less than or equal to " + <?php echo $row['stock']; ?>);
    }
    else if (this.value == 0) {
      
      alert("Out of stock");
    }
  });</script>
</td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		
		<div class="row">
			<div class="col-md-3">
				<input type="text" name="customer" class="form-control" placeholder="user name as logged in" required>
			</div>
			<div class="col-md-2" style="margin-left:-20px;">
				<button type="submit" class="btn btn-primary">Pay</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
</body>
</html>