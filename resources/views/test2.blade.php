<!-- Start Shop Home List  -->
<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>On sale</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					@foreach($products as $product)
						<div class="single-list">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="list-image overlay">
										<img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
										<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 no-padding">
									<div class="content">
										<h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
										<p class="price with-discount">{{$product->prix_product}}</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Meilleur vente</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					@foreach($products as $product)
						<div class="single-list">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="list-image overlay">
										<img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
										<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 no-padding">
									<div class="content">
										<h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
										<p class="price with-discount">{{$product->prix_product}}</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Les plus Visité</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					@foreach($products as $product)
						<div class="single-list">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="list-image overlay">
										<img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
										<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 no-padding">
									<div class="content">
										<h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
										<p class="price with-discount">{{$product->prix_product}}</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					<!-- End Single List  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->