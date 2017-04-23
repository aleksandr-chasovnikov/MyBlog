<?php include ROOT . '/views/layouts/header.php' ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Категории</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->

						<?php foreach ($categories as $categoryItem): ?>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="/category/<?php echo $categoryItem['id'];?>">
											<?php  echo $categoryItem['name'];?>
										</a>
									</h4>
								</div>
							</div>

						<?php endforeach; ?>
							
						</div><!--/category-products-->
					</div>
				</div>
					
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Последние посты</h2>

						<?php foreach ($latestProducts as $product): ?>

						
							<div class="product-image-wrapper">
								<img src="/template/images/home/product6.jpg" alt="images" />

								<a href="/product/<?php echo $product['id'];?>">
									<h2><?php echo $product['name'];?></h2>
								</a>
								<p>
									<?php echo $product['description'];?>
								</p>
								
							</div>

						<?php endforeach; ?>
						
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	
<?php include ROOT . '/views/layouts/footer.php' ?>