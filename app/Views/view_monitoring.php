		<?= $this->extend('template/view_header') ?>

		<?= $this->section('content') ?>
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">


				</div><!--end row-->

				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
					<div class="col">
						<div class="card radius-10 border-start border-0 border-3 border-danger">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Water Level</p>
										<h5 class="mb-0"><?= esc($last_data['sen_w']) ?></h5>
									</div>
									<div class="ms-auto">	<i class='bx bx-water font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="w-chart5"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 border-start border-0 border-3 border-success">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Temperature</p>
										<h5 class="mb-0"><?= esc($last_data['sen_t']) ?></h5>
									</div>
									<div class="ms-auto">	<i class='bx bx-sun font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="w-chart6"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 border-start border-0 border-3 border-warning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Humidity</p>
										<h5 class="mb-0"><?= esc($last_data['sen_h']) ?></h5>
									</div>
									<div class="ms-auto">	<i class='bx bx-hive font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="w-chart7"></div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 border-start border-0 border-3 border-primary">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Data</p>
										<h5 class="mb-0"><?= esc($count_all) ?></h5>
									</div>
									<div class="ms-auto">	<i class='bx bx-data font-30'></i>
									</div>
								</div>
							</div>
							<div class="" id="w-chart8"></div>
						</div>
					</div>
				</div>

				<div class="row">
						<div class="col-12 col-lg-7 col-xl-4 d-flex">
						  <div class="card radius-10 w-100">
							<div class="card-header bg-transparent">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Water Realtime Monitoring</h5>
									</div>
									
								</div>
							   </div>
							 <div class="card-body">
								<div id="water_chart" style="width:350px; height:350px;"></div>
							 </div>
						   </div>
						</div>

						<div class="col-12 col-lg-7 col-xl-4 d-flex">
						  <div class="card radius-10 w-100">
							<div class="card-header bg-transparent">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Temperature Realtime Monitoring</h5>
									</div>
								</div>
							   </div>
							 <div class="card-body">
								<div id="temperature_chart" style="width:350px; height:350px;"></div>
							 </div>
						   </div>
						</div>

						<div class="col-12 col-lg-7 col-xl-4 d-flex">
						  <div class="card radius-10 w-100">
							<div class="card-header bg-transparent">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Humidity Realtime Monitoring</h5>
									</div>
								</div>
							   </div>
							 <div class="card-body">
								<div id="humidity_chart" style="width:350px; height:350px;"></div>
							 </div>
						   </div>
						</div>
					</div>

					<!-- table for data in the server -->	
				 <div class="card radius-10">
				 	<div class="card-header bg-transparent">
						<div class="d-flex align-items-center">
							<div>
								<h4 class="mb-0">Table Detail Sensor Monitoring Data</h4>
							</div>
						</div>
					   </div>
                     <div class="card-body">
						<!-- <div class="d-flex align-items-center"> -->
							<!-- <div> -->
								<div class="table-responsive">
								   <table id="example2" class="table table-striped table-bordered">
									<thead class="table-light">
									 <tr>
									   <th>No</th>
									   <th>Id</th>
									   <th>Waterlevel</th>
									   <th>Humidity</th>
									   <th>Temperature</th>
									   <th>Date & Time</th>
									 </tr>
									 </thead>
									 <tbody>
									 	<?php $no = 1; ?>
										<?php foreach ($sensor_tb as $u): ?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= esc($u['id']) ?></td>
												<td><?= esc($u['sen_w']) ?></td>
												<td><?= esc($u['sen_h']) ?></td>
												<td><?= esc($u['sen_t']) ?></td>
												<td><?= esc($u['timetaken']) ?></td>
											</tr>
										<?php endforeach; ?>
								    </tbody>
								  </table>
								  </div>
							<!-- </div> -->
						<!-- </div> -->
					 </div>
				</div>
				<!-- end table for data in the server -->
					
			</div>

		</div>
		<!--end page wrapper -->

		<script>
			document.addEventListener('DOMContentLoaded', function () {
				// 1. Safely convert the PHP array to a JS-readable JSON object
				// JSON_NUMERIC_CHECK ensures numbers aren't wrapped in quotes
				const rawData = <?= json_encode($temperature_data, JSON_NUMERIC_CHECK) ?>;

				// 2. Map the data for Highcharts
				// Use the column names from your sensor_tb
				const timetaken = rawData.map(item => item.timetaken);
				const totals = rawData.map(item => item.sen_t);

				// 3. Initialize Highcharts
				Highcharts.chart('temperature_chart', {
					chart: { 
						type: 'line',
						backgroundColor: 'transparent' // Good for themed dashboards
					},
					title: { text: 'Temperature Data Report' },
					xAxis: { 
						categories: timetaken,
						title: { text: 'Time Logged' }
					},
					yAxis: { 
						title: { text: 'Temperature (°C)' } 
					},
					series: [{
						name: 'Temperature',
						data: totals,
						color: '#17a2b8' // Matching your "text-info" style
					}],
					credits: { enabled: false } // Cleans up the chart UI
				});
			});
		</script>

		<script>
			document.addEventListener('DOMContentLoaded', function () {
				// 1. Safely convert the PHP array to a JS-readable JSON object
				// JSON_NUMERIC_CHECK ensures numbers aren't wrapped in quotes
				const rawData = <?= json_encode($water_data, JSON_NUMERIC_CHECK) ?>;

				// 2. Map the data for Highcharts
				// Use the column names from your sensor_tb
				const timetaken = rawData.map(item => item.timetaken);
				const totals = rawData.map(item => item.sen_w);

				// 3. Initialize Highcharts
				Highcharts.chart('water_chart', {
					chart: { 
						type: 'line',
						backgroundColor: 'transparent' // Good for themed dashboards
					},
					title: { text: 'Water Data Report' },
					xAxis: { 
						categories: timetaken,
						title: { text: 'Time Logged' }
					},
					yAxis: { 
						title: { text: 'Water Level' } 
					},
					series: [{
						name: 'Water Level',
						data: totals,
						color: '#17a2b8' // Matching your "text-info" style
					}],
					credits: { enabled: false } // Cleans up the chart UI
				});
			});
		</script>

		<script>
			document.addEventListener('DOMContentLoaded', function () {
				// convert the PHP array to a JS-readable JSON object
				// JSON_NUMERIC_CHECK ensures numbers aren't wrapped in quotes
				const rawData = <?= json_encode($water_data, JSON_NUMERIC_CHECK) ?>;

				// Map the data for Highcharts
				// Use the column names from sensor_tb
				const timetaken = rawData.map(item => item.timetaken);
				const totals = rawData.map(item => item.sen_w);

				// 3. Initialize Highcharts
				Highcharts.chart('humidity_chart', {
					chart: { 
						type: 'line',
						backgroundColor: 'transparent' // Good for themed dashboards
					},
					title: { text: 'Humidity Data Report' },
					xAxis: { 
						categories: timetaken,
						title: { text: 'Time Logged' }
					},
					yAxis: { 
						title: { text: 'Humidity (%)' } 
					},
					series: [{
						name: 'Humidity',
						data: totals,
						color: '#17a2b8' // Matching your "text-info" style
					}],
					credits: { enabled: false } // Cleans up the chart UI
				});
			});
		</script>
		<?= $this->endSection() ?>


		