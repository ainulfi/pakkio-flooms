		<?= $this->extend('template/view_header') ?>
		<?= $this->section('content') ?>
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <!-- <div class="col">
					 <div class="card radius-10 border-start border-0 border-3 border-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-secondary">Latitude
									<h4 class="my-1 text-info">-5.21</h4>
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bx-location-pin'></i>
								</div>
							</div>
						</div>
					 </div>
				   </div> -->
				   <!-- <div class="col">
					<div class="card radius-10 border-start border-0 border-3 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Longitude</p>
								   <h4 class="my-1 text-danger">135.85</h4>
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bx-thermometer'></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> -->
				</div><!--end row-->

				<div class="row">
						<div class="col-12 col-lg-7 col-xl-8 d-flex">
						  <div class="card radius-10 w-100">
							<div class="card-header bg-transparent">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Search and Rescue Map</h6>
									</div>
									
								</div>
							   </div>
							 <div class="card-body">
								<!-- <div class="row"> -->
								  <div class="col-lg-7 col-xl-12">
									 <!-- <div id="map_rescue" style="width: 700px; height: 300px; position: relative; outline-style: none;"></div> -->
									 <div id="map_rescue" style="width: 770px; height: 350px; outline-style: none;"></div>
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
											<p class="mb-0 text-secondary">Affected Area</p>
											<h4 class="my-1">7 districts</h4>
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
											<p class="mb-0 text-secondary">Affected People</p>
											<h4 class="my-1">5000 people</h4>
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
											<p class="mb-0 text-secondary">Survivor</p>
											<h4 class="my-1">98,95 %</h4>
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

				 <div class="card radius-10">
				 		<div class="card-header bg-transparent">
							<div class="d-flex align-items-center">
								<div>
									<h4 class="mb-0">Table Detail Search and Rescue Information</h4>
								</div>
							</div>
					   	</div>
                        <div class="card-body">
						 <div class="table-responsive">
						   <table id="example22"class="table table-striped table-bordered">
							<thead class="table-light">
							 <tr>
							   <th>No</th>
							   <th>Id</th>
							   <th>Destination</th>
							   <th>Type</th>
							   <th>Message</th>
							   <th>Latitude</th>
							   <th>Longitude</th>
							   <th>Time Received</th>
							   <th>Time Taken</th>
							 </tr>
							 </thead>
							 <tbody>
								<?php $no = 1; ?>
								<?php foreach ($enduser_tb as $u): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= esc($u['id']) ?></td>
										<td><?= esc($u['dest']) ?></td>
										<td><?= esc($u['type']) ?></td>
										<td><?= esc($u['msg']) ?></td>
										<td><?= esc($u['lat']) ?></td>
										<td><?= esc($u['lon']) ?></td>
										<td><?= esc($u['time']) ?></td>
										<td><?= esc($u['timetaken']) ?></td>
									</tr>
								<?php endforeach; ?>
						    </tbody>
						  </table>
						  </div>
						 </div>
					</div>

			</div>
		</div>
		<!--end page wrapper -->

		<script>
	var map = L.map('map_rescue').setView([13.8212439,100.5117827], 16);

	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

    var marker = L.circle([13.8190113,100.5121004], {
	    color: 'red',
	    fillColor: '#f03',
	    fillOpacity: 0.3,
	    radius: 100
	}).addTo(map);
	marker.bindPopup("500 people");

    var marker2 = L.circle([13.8206236,100.512989], {
	    color: 'red',
	    fillColor: '#f03',
	    fillOpacity: 0.7,
	    radius: 200
	}).addTo(map);
    marker2.bindPopup("1000 people");

    var marker3 = L.circle([13.8204744,100.515017], {
	    color: 'red',
	    fillColor: '#f03',
	    fillOpacity: 0.5,
	    radius: 150
	}).addTo(map);
    marker3.bindPopup("850 people");

    // var marker4 = L.marker([13.8206236,100.512989]).addTo(map);
    // marker4.bindPopup("<b>Device Points 4 <br> Applied Sciences Building</b>").openPopup();

    // var marker5 = L.marker([13.8204744,100.515017]).addTo(map);
    // marker5.bindPopup("<b>Device Points 5 <br> Architecture Building</b>").openPopup();
</script>

		<?= $this->endSection() ?>
		