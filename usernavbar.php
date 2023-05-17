<style>
  button{
    float:right;
    margin-top: 10px;
    background-color:#fff;
    border:none;
  }</style>
<?php
include("login2.php");
?>
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b>SEGORA FOODS</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="userhome.php">Menu</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="sales.php">Bills</a></li>
        
       
      </ul><button style = "float:right;">User : <?php echo $_SESSION['username'];?></button>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>