<?php $this->load->view('admin/admin_shared/admin_header'); ?>
<!-- END Head-->
<style>
	.input:focus {
		outline: outline: aliceblue !important;
		border: 2px solid red !important;
		box-shadow: 2px #719ECE;
	}
</style>
<!-- START: Body-->

<body id="main-container" class="default">


	<!-- END: Main Menu-->
	<?php $this->load->view('admin/admin_shared/admin_sidebar');
	// include('admin_shared/admin_sidebar.php'); ?>
	<!-- END: Main Menu-->

	<!-- START: Main Content-->
	<main>
		<div class="container-fluid site-width">
			<!-- START: Listing-->
			<div class="row">
				<div class="col-12  align-self-center">
					<div class="col-12 col-sm-12 mt-3">
						<div class="card">
							<div class="card-header justify-content-between align-items-center">
								<h4 class="card-title" style="float:left;">Add Master Menifiest</h4>
								<a href="<?= base_url('admin/view-genrated-gatepass'); ?>" class="btn btn-primary" style="float:right;"> View Master Manifest  </a>
							</div>
							<div class="card-body">
								<?php if ($this->session->flashdata('notify') != '') { ?>
									<div class="alert <?php echo $this->session->flashdata('class'); ?> alert-colored"><?php echo $this->session->flashdata('notify'); ?></div>
									<?php unset($_SESSION['class']);
									unset($_SESSION['notify']);
								} ?>
								<div class="row">
									<div class="col-12">
										<form role="form" action="<?= base_url('admin/add-gatepass'); ?>" method="post"
											enctype="multipart/form-data">

											<div class="form-group row">

												<label class="col-sm-2 col-form-label">Master Manifiest Date</label>
												<div class="col-sm-2">
													<!--<input type="datetime-local" class="form-control" name="datetime" id="col-sm-1 col-form-label" >-->

													<?php
													$datec = date('Y-m-d H:i');

													// $tracking_data[0]['tracking_date'] = date('Y-m-d H:i',strtotime($tracking_data[0]['tracking_date']));
													$datec = str_replace(" ", "T", $datec);


													// $datec = dateTimeValue($datec);
													// $datec = str_replace(' ', 'T', $datec);
													?>
													<input readonly type="datetime-local" required class="form-control"
														name="datetime" value="<?php echo $datec; ?>" id="menifest_back"
														min="<?= date('Y-m-d', strtotime("-1 days")) . 'T' . date('H:i'); ?>"
														max="<?= date('Y-m-d') . 'T' . date('H:i'); ?>">
												</div>
												<label class="col-sm-2 col-form-label">Line Access</label>
												<div class="col-sm-2">
													<select  class="form-control" id="line_access"
														required>
														<option value="">-- Select Access -- </option>
														<option value="1">Yes</option>
														<option value="0">No</option>
													</select>
													<input type="hidden" name="line_access" class="form-control select-line" id="line_access_val" required/>
												</div>
												<label class="col-sm-2 col-form-label select-line" style="display:none;">Line Hual</label>
												<div class="col-sm-2 select-line" style="display:none;">
													<select  class="form-control" id="select-line"
														>
														<option value=""> -- Select line --</option>
														<?php foreach ($line_hual as $key => $value) { ?>
															<option value="<?= $value->route_id; ?>"><?= $value->route_name; ?></option>
														<?php } ?>
													</select>
													<input type="hidden" name="line_hual" class="form-control select-line" id="line_test" required/>
												</div>
											</div>

											<div class="form-group row">
											<label class="col-sm-2 col-form-label">Branch ( Next Touch Point )</label>
												<div class="col-sm-2">
													<select name="branch_destination" class="form-control" id="branch_destination">
														<option value=""> -- Select Branch --</option>
													</select>
												</div>
												<label class="col-sm-2 col-form-label">Forworder Name</label>
												<div class="col-sm-2">
													<select name="forwarder_name" class="form-control"
														id="forwarderName" required>
														<option value="">Select Forworder Name</option>
															<option value="SELF" selected>SELF</option>
													</select>
												</div>

												<label class="col-sm-2 col-form-label">Lock No</label>
												<div class="col-sm-2">
													<input type="text" name="cd_no" class="form-control" required/>
												</div>
												<label class="col-sm-2 col-form-label">Mode</label>
												<div class="col-sm-2">
													<select name="forwarder_mode" class="form-control"
														id="forwarder_mode" required>
														<option value="">Select Forworder Mode</option>
														<option value="All">All</option>
														<?php foreach ($mode_list as $value) {
															?>
															<option value="<?php echo $value['mode_name']; ?>"><?php echo $value['mode_name']; ?></option>
														<?php
														} ?>
													</select>
												</div>
												<label class="col-sm-2 col-form-label">Remark</label>
												<div class="col-sm-2">
												<textarea class="form-control" name='remark'></textarea>
												</div>
												<label class="col-sm-2 col-form-label">Minifested By</label>
												<div class="col-sm-2">
													<input type="text" readonly name="username" required
														value="<?= $_SESSION['userName']; ?>" class="form-control" />
												</div>
												<label  class="col-sm-2 col-form-label bkdate_meni_check" id="bkdate_meni_check" style="display:none;">Back Date Reason<span class="compulsory_fields" >*</span></label>
												<div class="col-sm-2 bkdate_meni_check" id="bkdate_meni_check" style="display:none;">
													<textarea type="text" name="bkdate_reason" id="bkdate_meni_reason" class="form-control" value="<?php //echo $bid; ?>"></textarea>
												</div>
											</div>

											<div class="col-md-3">
												<div class="box-footer pull right">
													<button type="submit" name="submit"
														class="btn btn-primary">Submit</button>
												</div>

											</div>
											<div class="col-md-12" id="search" style="display: none;">
												<input type="text" id="search_data" placeholder="Enter Manifest No"
													style="float: right;">
												<input type="button" id="btn_search" style="float: right;"
													value="Search">
												<br>
											</div>
											<div class="col-md-12">

												<!--  col-sm-4-->
												<table class="table table-bordered table-striped">
													<thead>
														<tr>
															<th></th>
															<th>Manifest No.</th>
															<th>Origion</th>
															<th>Destination</th>
															<th>Mode</th>

														</tr>
													</thead>
													<tbody id="change_status_id">
													</tbody>

												</table>
												<!--  box body-->
											</div>
										</form>
									</div>
								</div>

							</div>
						</div>
						<!-- END: Listing-->
					</div>
	</main>
	<!-- END: Content-->
	<?php ini_set('display_errors', '0');
	ini_set('display_startup_errors', '0');
	error_reporting(E_ALL); ?>
	<!-- START: Footer-->
	<?php $this->load->view('admin/admin_shared/admin_footer');
	//include('admin_shared/admin_footer.php'); ?>
	<!-- START: Footer-->
</body>
<script type="text/javascript"
	src="<?php echo base_url(); ?>assets/jQueryScannerDetectionmaster/jquery.scannerdetection.js"></script>
<script type="text/javascript">
	$(document).scannerDetection({
		timeBeforeScanTest: 200, // wait for the next character for upto 200ms
		startChar: [120], // Prefix character for the cabled scanner (OPL6845R)
		endChar: [13], // be sure the scan is complete if key 13 (enter) is detected
		avgTimeByChar: 40, // it's not a barcode if a character takes longer than 40ms
		onComplete: function (barcode, qty) {
			var forwording_no = barcode;

			var forwarderName = $("#forwarderName").val();
			var forwarder_mode = $("#forwarder_mode").val();

			var message = '';

			$("input[name='pod_no[]']").map(function () {
				var numbers = $(this).val();

				var number = numbers.split("|");

				if (number[0] == forwording_no) {
					message = 'This Forwording No Already Exist In The List!';
					// return false;
				}
			}).get();

			if (message != '') {
				alert(message);
				return false;
			}
			$.ajax({
				url: "<?php echo base_url() . 'Admin_domestic_menifiest/bagdata'; ?>",
				type: 'POST',
				dataType: "html",
				data: { forwording_no: forwording_no, forwarderName: forwarderName, forwarder_mode: forwarder_mode },
				error: function () {
					alert('Please Try Again Later');
				},
				success: function (data) {
					console.log(data);

					if (data != "") {
						$("#change_status_id").prepend(data);
						var array = [];

						tw = 0;
						tp = 0;

						$("input.cb[type=checkbox]:checked").each(function () {

							tw = tw + parseFloat($(this).attr("data-tw"));
							tp = tp + parseFloat($(this).attr("data-tp"));

						});

						document.getElementById('total_weight').value = tw;
						document.getElementById('total_pcs').value = tp;

					}
					else {
						$("#change_status_id").prepend('');
					}
					$("#search_data").val('');
					$("#search_data").focus();
					//alert("Record added successfully");  
				},
				error: function (response) {
					console.log(response);
				}
			});
		} // main callback function	
	});
</script>
<!-- END: Body-->
<script type="text/javascript">
	$(document).ready(function () {

		$(".desti").prop('required', true);

		$("form[name='generatePOD']").validate({
			rules: {
				destination_branch: "required",
			},
			minimumField: {
				min: function (element) {
					return $("#destination_branch").val() != "";
				}
			},
			messages: {
				destination_branch: "required"
			},

			submitHandler: function (form) {
				form.submit();
			}
		});

		$("form[name='generatePOD']").validate();


		$(window).keydown(function (event) {
			if (event.keyCode == 13) {
				//var awb_no=$(this).val();
				var forwording_no = $("#search_data").val();
				var forwarderName = $("#forwarderName").val();
				var forwarder_mode = $("#forwarder_mode").val();
		

				if (forwording_no != "") {


					var message = '';

					$("input[name='pod_no[]']").map(function () {
						var numbers = $(this).val();

						var number = numbers.split("|");

						if (number[0] == forwording_no) {
							message = 'This Forwording No Already Exist In The List!';
							// return false;
						}
					}).get();

					if (message != '') {
						alert(message);
						return false;
					}
					$.ajax({
						url: "Admin_gatepass/bagdata",
						type: 'POST',
						dataType: "html",
						data: { forwording_no: forwording_no, forwarderName: forwarderName, forwarder_mode: forwarder_mode  },
						success: function (data) {
							console.log(data);
							if (data != "") {
								$("#change_status_id").prepend(data);
								var array = [];

								tw = 0;
								tp = 0;

								$("input.cb[type=checkbox]:checked").each(function () {

									tw = tw + parseFloat($(this).attr("data-tw"));
									tp = tp + parseFloat($(this).attr("data-tp"));

								});

								document.getElementById('total_weight').value = tw.toFixed(2);
								document.getElementById('total_pcs').value = tp;
							}
							else {
								$("#change_status_id").prepend('');
							}
							$("#search_data").val('');
						}

					});

				} else {
					alert("Please enter Forwording no");
				}

			}
		});
		
		$('#line_access').change(function(){
            var status = $(this).val();
            $('#line_access_val').val(status);
			$('#line_access').attr('disabled', true);
			
			if(status == 1){
				$(".select-line").show();
				$('#select-line').attr('required', true);
			}else{
				$(".select-line").hide();
				$('#select-line').attr('required', false);
			}
			
		});
		$('#line_access').attr('required', true);
		$('#select-line').change(function(){
			var line = $(this).val();
			$('#line_test').val(line);
			$('#select-line').attr('disabled', true);
			$('#branch_destination').attr('required', true);	
			var status = $(this).val();
			$.ajax({
				url: "Admin_gatepass/line_branch",
				type: 'POST',
				dataType: "html",
				data: { line: status},
				success: function (data) {
					$('#branch_destination').html(data);
					
				}
			});
		});


		$("#btn_search").click(function () {
			//var awb_no=$(this).val();
			var forwording_no = $("#search_data").val();
			var forwarderName = $("#forwarderName").val();
			var forwarder_mode = $("#forwarder_mode").val();
			var line_access = $("#line_access").val();
			var select_line = $("#select-line").val();


			// console.log(all);

			if (forwording_no != "") {

				forwording_no = forwording_no.trim();

				var message = '';

				$("input[name='pod_no[]']").map(function () {
					var numbers = $(this).val();

					var number = numbers.split("|");

					if (number[0] == forwording_no) {
						message = 'This AWB No Already Exist In The List!';
						// return false;
					}
				}).get();

				if (message != '') {
					alert(message);
					return false;
				}
				$.ajax({
					url: "Admin_gatepass/bagdata",
					type: 'POST',
					dataType: "html",
					data: { forwording_no: forwording_no, forwarderName: forwarderName, forwarder_mode: forwarder_mode, select_line : select_line, line_access:line_access },
					success: function (data) {
						console.log(data);
						$('#search_data').val('');
						if (data != "") {
							$("#change_status_id").prepend(data);
							var array = [];

							tw = 0;
							tp = 0;

							$("input.cb[type=checkbox]:checked").each(function () {

								tw = tw + parseFloat($(this).attr("data-tw"));
								tp = tp + parseFloat($(this).attr("data-tp"));

							});

							document.getElementById('total_weight').value = tw.toFixed(2);
							document.getElementById('total_pcs').value = tp;
							$("#search_data").val('');
						}
						else {
							$("#change_status_id").prepend('');
						}
						$("#search_data").focus();

					}

				});

			} else {
				alert("Please enter Forwording no");
			}



		});

		$("#podbox").change(function () {

			var podno = $(this).val();
			if (podno != null || podno != '') {

				$.ajax({
					type: 'POST',
					url: '<?php echo base_url() ?>menifiest/getPODDetails',
					data: 'podno=' + podno,
					success: function (d) {
						//alert(d);
						var x = d.split("-");
						//alert(x);
						$(".consignername").val(x[0]);

						$(".pieces").val(x[2]);
						$(".weight").val(x[3]);
					}
				});
			} else {

			}

		});


		var tw;
		var tp;

		$(document).on("click", ".cb", function () {


			var array = [];

			tw = 0;
			tp = 0;

			$("input.cb[type=checkbox]:checked").each(function () {

				tw = tw + parseFloat($(this).attr("data-tw"));
				tp = tp + parseFloat($(this).attr("data-tp"));


			});

			document.getElementById('total_weight').value = tw;
			document.getElementById('total_pcs').value = tp;

		});



		$('#example1').DataTable({
			'paging': true,
			'lengthChange': true,
			'searching': true,
			'ordering': true,
			'info': true,
			'autoWidth': true

		});
	});
	$(document).keypress(
		function (event) {
			if (event.which == '13') {
				event.preventDefault();
			}
		});

	$("#forwarder_mode , #line_access").change(function () {
        var Access = $('#line_access').val();
        var forwarder_mode = $('#forwarder_mode').val();
		if(Access !=''&& forwarder_mode !=''){
		$('#search').show();
		}
	});

	$('#bkdate_meni_check').css({ "display": "none" });
	$("#menifest_back").change(function () {
		let dt = $("#menifest_back").val();
		var bdt = new Date(dt);
		var bmonth = bdt.getMonth() + 1; var bday = bdt.getDate();
		var boutput = bdt.getFullYear() + '/' + (bmonth < 10 ? '0' : '') + bmonth + '/' + (bday < 10 ? '0' : '') + bday;

		var d = new Date();
		var month = d.getMonth() + 1; var day = d.getDate();

		var output = d.getFullYear() + '/' + (month < 10 ? '0' : '') + month + '/' + (day < 10 ? '0' : '') + day;
		if (output == boutput) {
			// $("#bkdate_reason").attr("required", "false");
			$("#bkdate_meni_reason").removeAttr("required");
			$('.bkdate_meni_check').css({ "display": "none" });
		} else {
			$("#bkdate_meni_reason").attr("required", "true");
			$('.bkdate_meni_check').css({ "display": "flex" });
		}
	});


</script>

<?php

function dateTimeValue($timeStamp)
{
	$date = date('d-m-Y', $timeStamp);
	$time = date('H:i:s', $timeStamp);
	return $date . 'T' . $time;
}

?>