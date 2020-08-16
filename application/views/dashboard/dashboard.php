<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="content-body">

	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="card gradient-1">
					<div class="card-body py-3 text-center">
						<h3 class="card-title text-white">Vehicles due today</h3>
						<div class="d-inline-block">
							<h2 class="text-white">4565</h2>
							<p class="text-white mb-0"><?php echo date("Y-m-d") ?></p>
						</div>
						<span class="float-right display-5 opacity-5">
							<img src="https://image.flaticon.com/icons/svg/554/554027.svg" alt="">
							<!-- <i class="fa fa-shopping-cart"></i> -->
						</span>
						<nav class="nav flex-row py-0">
							<li class="nav-item d-flex justify-content-between align-items-center">
								<img src="https://image.flaticon.com/icons/svg/832/832964.svg" alt="" width="25px">
								<a class="nav-link active text-success" href="#" id="cleared">
									6778</a>
							</li>
							<li class="nav-item d-flex justify-content-between align-items-center">
								<a class="nav-link active text-danger" href="#" id="still_in">
									884</a>
								<img src="https://image.flaticon.com/icons/svg/832/832974.svg" alt="" width="25px">
							</li>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="card gradient-2">
					<div class="card-body  text-center">
						<h3 class="card-title text-whiter">Revenue collected</h3>
						<div class="d-inline-block">
							<h2 class="text-white">$ 8541</h2>
							<p class="text-white mb-0"><?php echo date("Y-m-d"); ?></p>
						</div>
						<span class="float-right display-5 opacity-5">
							<i class="fa fa-money"></i></span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="card gradient-3">
					<div class="card-body">
						<h3 class="card-title text-white text-center">New Customers</h3>
						<div class="d-inline-block">
							<h2 class="text-white">4565</h2>
							<p class="text-white mb-0"><?php echo date("Y-m-d"); ?></p>
						</div>
						<span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="card gradient-4">
					<div class="card-body">
						<h3 class="card-title text-white text-center">Customer Satisfaction</h3>
						<div class="d-inline-block">
							<h2 class="text-white">99%</h2>
							<p class="text-white mb-0">Jan - March 2019</p>
						</div>
						<span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body pb-0 d-flex justify-content-between">
								<div>
									<h4 class="mb-1">Earnings</h4>
									<p>Total Earnings of the Week</p>
									<h3 class="m-0">$ 12,555</h3>
								</div>
								<div>
									<ul>
										<li class="d-inline-block mr-3"><a class="text-dark" href="#">Day</a>
										</li>
										<li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a>
										</li>
										<li class="d-inline-block"><a class="text-dark" href="#">Month</a></li>
									</ul>
								</div>
							</div>
							<div class="chart-wrapper">
								<canvas id="chart_widget_2"></canvas>
							</div>
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<div class="w-100 mr-2">
										<h6>DAY TIME</h6>
										<div class="progress" style="height: 6px">
											<div class="progress-bar bg-danger" style="width: 40%"></div>
										</div>
									</div>
									<div class="ml-2 w-100">
										<h6>NIGHT</h6>
										<div class="progress" style="height: 6px">
											<div class="progress-bar bg-primary" style="width: 80%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<!-- #/ container -->
</div>
<!--**********************************
                Content body end
            ***********************************-->
<!--**********************************
                Footer start
            ***********************************-->