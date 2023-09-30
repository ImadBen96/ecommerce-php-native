<?php require_once('header.php'); ?>

<section class="content-header">
	<h1 style="text-align: center;">Dashboard</h1>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_top_category");
$statement->execute();
$total_top_category = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_mid_category");
$statement->execute();
$total_mid_category = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_end_category");
$statement->execute();
$total_end_category = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_product");
$statement->execute();
$total_product = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=?");
$statement->execute(array('Completed'));
$total_order_completed = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE shipping_status=?");
$statement->execute(array('Completed'));
$total_shipping_completed = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=?");
$statement->execute(array('Pending'));
$total_order_pending = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE payment_status=? AND shipping_status=?");
$statement->execute(array('Completed','Pending'));
$total_order_complete_shipping_pending = $statement->rowCount();
?>

<section class="content">
	<div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">TOP CATEGORIES</h4>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?php echo $total_top_category; ?></span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">MID CATEGORIES</h4>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?php echo $total_mid_category; ?></span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">END CATEGORIES</h4>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?php echo $total_end_category; ?></span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">PRODUCTS</h4>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?php echo $total_product; ?></span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">COMPLETED ORDERS</h4>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?php echo $total_order_completed; ?></span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">COMPLETED SHIPPING</h4>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?php echo $total_shipping_completed; ?></span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">Pending Orders</h4>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?php echo $total_shipping_completed; ?></span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h4 class="m-b-20">PENDING SHIPPING (ORDER COMPLETED)</h4>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span><?php echo $total_order_complete_shipping_pending; ?></span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>

		
	</div>
</section>

<?php require_once('footer.php'); ?>