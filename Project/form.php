<!-- Include Header Here -->
<?php include('components/header.php'); ?>

<?php

$error= ['product_error' => '', 'product_price' => ''];
$ProductName = $ProductPrice = $ProductDeccription = '';

	if(isset($_POST['create_product'])){
		$ProductName			= htmlspecialchars($_POST['product_name']) ?? "Product Name";
		$ProductPrice 			= htmlspecialchars($_POST['product_price']) ?? "";
		$ProductDeccription			= htmlspecialchars($_POST['ProductDeccription']) ?? "";

		if(empty($ProductName)){
			$error['product_error'] = "Please Enter Product Name";
		}

		if(empty($ProductPrice)){
			$error['product_price'] = "Please Enter Product Price";
		}
	}
	
?>
<!-- Include content Here -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>hello world</h2>
			<form action="form.php" method="POST">
				<div class="form-group">
					<label for="product_name">Product Name</label>
					<input type="text" name="product_name" id="product_name" class="form-control" value="<?=$ProductName ?? "" ; ?>">	
					<span style="color: red;"><?=$error['product_error'];?></span>
				</div>

				<div class="form-group">
					<label for="product_price">Product Name</label>
					<input type="text" name="product_price" id="product_price" class="form-control" value="<?=$ProductPrice;?>">	
					<span style="color: red;"><?=$error['product_price']?></span>
				</div>

				<div class="form-group">
					<label for="ProductDeccription">Product Name</label>
					<textarea name="ProductDeccription" id="ProductDeccription" rows="4" class="form-control">
						<?=$ProductDeccription;?>
					</textarea>	
				</div>

				<div class="form-group text-right">
					<input type="submit" value="Submit" name="create_product" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Include Footer Here -->
<?php include('components/footer.php'); ?> 