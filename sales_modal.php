<!-- Sales Details -->
<div class="modal fade" id="details<?php echo $row['purchaseid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Sales Full Details</h4></center>
            </div>
            <div class="modal-body" id = "print">
                <div class="container-fluid" >
                    <h5>Customer: <b><?php echo $row['customer']; ?></b>
                        <span class="pull-right">
                            <?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?>
                        </span>
                    </h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Purchase Quantity</th>
                            <th>Subtotal</th>
                        </thead>
                        <tbody>
                            <?php
                                $sql="select * from purchase_detail left join product on product.productid=purchase_detail.productid where purchaseid='".$row['purchaseid']."'";
                                $dquery=$conn->query($sql);
                                while($drow=$dquery->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?php echo $drow['productname']; ?></td>
                                        <td class="text-right"> <?php echo number_format($drow['price'], 2); ?> INR</td>
                                        <td><?php echo $drow['quantity']; ?></td>
                                        <td class="text-right">
                                            <?php
                                                $subt = $drow['price']*$drow['quantity'];
                                                echo number_format($subt, 2);
                                            ?> INR
                                        </td>
                                    </tr>
                                    <?php
                                    
                                }
                            ?>
                            <tr>
                                <td colspan="3" class="text-right"><b>TOTAL</b></td>
                                <td class="text-right"><?php echo number_format($row['total'], 2); ?> INR</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
			</div>
            <div class="modal-footer">
                <button onclick="print()">Print this page</button>
                <script>
                function print () {
 var printDiv = document.getElementById("print");
 var printWindow = window.open('', '', 'left=0, top=0, width=800, height=500, toolbar=0, scrollbars=0, status=0');
 printWindow.document.write(printDiv.innerHTML);
 printWindow.document.close();
 printWindow.focus();
 printWindow.print();
}</script>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
