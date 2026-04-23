		<?= $this->extend('template/view_header') ?>
		
		<?= $this->section('content') ?>
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col">
					 <div class="card radius-10 border-start border-0 border-3 border-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Water Level
									<h4 class="my-1 text-info"><?= esc($last_data['sen_w']) ?></h4>
									<!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bx-water'></i>
								</div>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Temperature</p>
								   <h4 class="my-1 text-danger"><?= esc($last_data['sen_t']) ?></h4>
								   <!-- <p class="mb-0 font-13">+5.4% from last week</p> -->
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bx-sun'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-success">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Humidity</p>
								   <h4 class="my-1 text-success"><?= esc($last_data['sen_h']) ?></h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-wind' ></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Data Sensor</p>
								   <h4 class="my-1 text-warning"><?= esc($count_all) ?></h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-data'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> 
				</div><!--end row-->

				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-2">
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-info">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Last Update</p>
								   <h4 class="my-1 text-info"><?= esc($last_data['timetaken']) ?></h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-cosmic text-white ms-auto"><i class='bx bxs-calendar-week' ></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Data SAR</p>
								   <h4 class="my-1 text-warning"><?= esc($count_all_sar) ?></h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-data'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> 
				</div><!--end row-->

				<div class="row">
						<div class="col-12 col-lg-7 col-xl-8 d-flex">
						  <div class="card radius-10 w-100">
							<div class="card-header bg-transparent">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Device Monitoring Map</h6>
									</div>
									
								</div>
							   </div>
							 <div class="card-body">
								<!-- <div class="row"> -->
								  <div class="col-lg-7 col-xl-12">
									 <!-- <div id="geographic-map-2"></div> -->
									 <div id="map" style="width: 800px; height: 400px; position: relative; outline-style: none;"></div>
								  </div>
							 </div>
						   </div>
						</div>
			   
						<div class="col-12 col-lg-5 col-xl-4 d-flex">
							<div class="card w-100 radius-10">
						     <div class="card-body">
							  <div class="card radius-10 border shadow-none">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Total Device</p>
											<h4 class="my-1">5</h4>
											<!-- <p class="mb-0 font-13">+6.2% from last week</p> -->
										</div>
										<div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto"><i class='bx bxs-heart-circle'></i>
										</div>
									</div>
								</div>
							 </div>
							 <div class="card radius-10 border shadow-none">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Coverage Area</p>
											<h4 class="my-1">5 Km</h4>
											<!-- <p class="mb-0 font-13">+3.7% from last week</p> -->
										</div>
										<div class="widgets-icons-2 bg-gradient-ibiza text-white ms-auto"><i class='bx bxs-comment-detail'></i>
										</div>
									</div>
								</div>
							 </div>
							 <div class="card radius-10 mb-0 border shadow-none">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Monitoring Rate</p>
											<h4 class="my-1">100 %</h4>
											<!-- <p class="mb-0 font-13">+4.6% from last week</p> -->
										</div>
										<div class="widgets-icons-2 bg-gradient-moonlit text-white ms-auto"><i class='bx bxs-share-alt'></i>
										</div>
									</div>
								</div>
							  </div>
							 </div>

							</div>
			   
						</div>
					 </div><!--end row-->

			</div>
		</div>
		<!--end page wrapper -->
		

<script>
	var map = L.map('map').setView([13.8212439,100.5117827], 16);

	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

    var marker = L.marker([13.8190113,100.5121004]).addTo(map);
    marker.bindPopup("<b>Device Points 1 <br> TGGS Building</b>").openPopup();

    var marker2 = L.marker([13.8191422,100.5117129]).addTo(map);
    marker2.bindPopup("<b>Device Points 2 <br> FITD Building</b>").openPopup();

    var marker3 = L.marker([13.8198365,100.5141078]).addTo(map);
    marker3.bindPopup("<b>Device Points 3 <br> Library Building</b>").openPopup();

    var marker4 = L.marker([13.8206236,100.512989]).addTo(map);
    marker4.bindPopup("<b>Device Points 4 <br> Applied Sciences Building</b>").openPopup();

    var marker5 = L.marker([13.8204744,100.515017]).addTo(map);
    marker5.bindPopup("<b>Device Points 5 <br> Architecture Building</b>").openPopup();
</script>

		<?= $this->endSection() ?>
		