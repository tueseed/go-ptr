<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/cus.css">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Sarabun|Roboto" rel="stylesheet">
	</head>
	<body>
		<header style="margin-bottom: 70px;">
			<nav class="shadow-sm navbar fixed-top navbar-light bg-white">
				<!-- Brand/logo -->
				<a class="navbar-brand font-weight-bold" href="#!">
					<img src="assets/images/pea-logo.png" alt="logo" style="width:100px;">
					โปรแกรมประชาสัมพันธ์ข่าวสารโครงการสำนักงานสีเขียว
				</a>
			</nav>
		</header>
		<main>
			<div class="container mt-2">
				<div class="row row-center">
					<div class="col-lg-12">
						<button type="button" class="btn btn-primary" data-toggle="modal" href="#addtopic">เพิ่มข้อมูล</button>
					</div>
				</div>
			</div>
			<div class="modal fade" id="addtopic" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">เพิ่มข่าวสาร</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="car_num">หัวข้อข่าวสาร</label>
											<input class="form-control" type="text" name="car_num" id="car_num" required />
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="car_type">รายละเอียด</label>
											<input class="form-control" type="text" name="car_type" id="car_type" required>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-default" onclick="add_car()">ตกลง</button>
							</div>
					</div>
				</div>
			</div>
			<div class="container mt-2">
				<div class="row">
					<div class="col-lg-12">
						<table class="table">
							<thead class="thead-light">
							  <tr>
								<th>หัวข้อประชาสัมพันธ์</th>
								<th>การแจ้งเตือน</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>John</td>
								<td>Doe</td>
								
							  </tr>
							  <tr>
								<td>Mary</td>
								<td>Moe</td>
								
							  </tr>
							  <tr>
								<td>July</td>
								<td>Dooley</td>
								
							  </tr>
							</tbody>
					  </table>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>