<!-- Zolo functions (mySQL, PHP) -->
<?php include('zolo-functions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta http-equiv="refresh" content="60" /> -->
		<title>Ember&trade; A Smart Combustion&trade; Solution</title>
		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Ember -->
		<link rel="stylesheet" href="css/styles.css">
		<!-- Font Awesome -->
		<script src="js/all.js"></script>
		<!-- Zolo functions -->
		<script src="js/zolo-functions.js"></script>
		<!-- jQuery -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="js/bootstrap.bundle.js"></script>
	</head>
	<body>
		<div class="row">
				<div id="header" class="col align-items-center">
					<h1>Ember</h1>
					<span class="tradem">&trade;</span>
					<p class="tagline">A Smart Combustion</p><span class="tradem tradem-sm">&trade;</span> <p class="tagline tag-end">Solution</p>
					<span class="settings">
						<span class="dropdown">
							<a href="#" class="f-icon dropbtn">
								<i class="fas fa-cog"></i>
							</a>
							<div class="dropdown-content">
								<a href="#" data-toggle="modal" data-target="#temp-modal">Temperature</a>
								<a href="#" data-toggle="modal" data-target="#oxyg-modal">Oxygen</a>
								<a href="#" data-toggle="modal" data-target="#carb-modal">Carbon Monoxide</a>
							</div>
						</span>
						<!-- Temp modal content start -->
						<div class="modal" id="temp-modal" tabindex="-1" role="dialog" aria-labelledby="temp-modal-label" aria-hidden="true" data-backdrop="static">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
							<form method="post" action="#">
						      <div class="modal-header align-items-center">
						        <h2 class="modal-title" id="temp-modal-label">Temperature Settings</h2>
						        <button type="button" class="close" name="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true" class="close">&times;</span>
						        </button>
						      </div>
								<hr>
						      <div class="modal-body">
						        <!-- <div class="scale">
						        	<h3>Scale</h3>
									<input type="radio" name="scale" value="f" checked> <label>Fahrenheit</label>
									<input type="radio" name="scale" value="c"> <label>Celcius</label>
						        </div> -->
								<br>
								<div class="custom align-items-center">
									<h3>Custom colors<sup>*</sup></h3>
									<br>
									<div class="row align-items-center color-value-pick">
										<span class="col">
											<label>Min value</label>
											<input class="form-control color-value-input" type="text" name="minValueTemp" maxlength="4" value="<?php echo isset($_POST['minValueTemp']) ? $_POST['minValueTemp'] : '' ?>">
											<input type="color" id="minColorTemp" class="pickr" name="minColorTemp" value="<?php echo isset($_POST['minColorTemp']) ? $_POST['minColorTemp'] : '' ?>">
										</span>
										<span class="col">
											<label>Mid value</label>
											<input class="form-control color-value-input" type="text" name="midValueTemp" maxlength="4" value="<?php echo isset($_POST['midValueTemp']) ? $_POST['midValueTemp'] : '' ?>">
											<input type="color" id="midColorTemp" class="pickr" name="midColorTemp" value="<?php echo isset($_POST['midColorTemp']) ? $_POST['midColorTemp'] : '' ?>">
										</span>
										<span class="col">
											<label>Max value</label>
											<input class="form-control color-value-input" type="text" name="maxValueTemp" maxlength="4" value="<?php echo isset($_POST['maxValueTemp']) ? $_POST['maxValueTemp'] : '' ?>">
											<input type="color" id="maxColorTemp" class="pickr"name="maxColorTemp" value="<?php echo isset($_POST['maxColorTemp']) ? $_POST['maxColorTemp'] : '' ?>">
										</span>
									</div>
								</div>
						      </div>
							  <p><sup>*</sup>Leave blank to use default color/value definitions</p>
						      <div class="modal-footer">
						        <button type="submit" name="submitTemp" value="save" class="btn btn-primary">Save</button>
						      </div>
							  </form>
						    </div>
						  </div>
						</div>
						<!-- Temp modal content end -->
						<!-- Oxyg modal content start -->
						<div class="modal" id="oxyg-modal" tabindex="-1" role="dialog" aria-labelledby="oxyg-modal-label" aria-hidden="true" data-backdrop="static">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
							<form method="post" action="#">
						      <div class="modal-header align-items-center">
						        <h2 class="modal-title" id="oxyg-modal-label">Oxygen Settings</h2>
						        <button type="button" class="close" name="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true" class="close">&times;</span>
						        </button>
						      </div>
								<hr>
						      <div class="modal-body">
								<br>
								<div class="custom align-items-center">
									<h3>Custom colors<sup>*</sup></h3>
									<br>
									<div class="row align-items-center color-value-pick">
										<span class="col">
											<label>Min value</label>
											<input class="form-control color-value-input" type="text" name="minValueOxyg" maxlength="4" value="<?php echo isset($_POST['minValueOxyg']) ? $_POST['minValueOxyg'] : '' ?>">
											<input type="color" id="minColorOxyg" class="pickr" name="minColorOxyg" value="<?php echo isset($_POST['minColorOxyg']) ? $_POST['minColorOxyg'] : '' ?>">
										</span>
										<span class="col">
											<label>Mid value</label>
											<input class="form-control color-value-input" type="text" name="midValueOxyg" maxlength="4" value="<?php echo isset($_POST['midValueOxyg']) ? $_POST['midValueOxyg'] : '' ?>">
											<input type="color" id="midColorOxyg" class="pickr" name="midColorOxyg" value="<?php echo isset($_POST['midColorOxyg']) ? $_POST['midColorOxyg'] : '' ?>">
										</span>
										<span class="col">
											<label>Max value</label>
											<input class="form-control color-value-input" type="text" name="maxValueOxyg" maxlength="4" value="<?php echo isset($_POST['maxValueOxyg']) ? $_POST['maxValueOxyg'] : '' ?>">
											<input type="color" id="maxColorOxyg" class="pickr"name="maxColorOxyg" value="<?php echo isset($_POST['maxColorOxyg']) ? $_POST['maxColorOxyg'] : '' ?>">
										</span>
									</div>
								</div>
						      </div>
							  <p><sup>*</sup>Leave blank to use default color/value definitions</p>
						      <div class="modal-footer">
						        <button type="submit" name="submitOxyg" value="save" class="btn btn-primary">Save</button>
						      </div>
							  </form>
						    </div>
						  </div>
						</div>
						<!-- Oxyg modal content end -->
						<!-- Carb modal content start -->
						<div class="modal" id="carb-modal" tabindex="-1" role="dialog" aria-labelledby="carb-modal-label" aria-hidden="true" data-backdrop="static">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
							<form method="post" action="#">
						      <div class="modal-header align-items-center">
						        <h2 class="modal-title" id="carb-modal-label">Carbon Monoxide Settings</h2>
						        <button type="button" class="close" name="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true" class="close">&times;</span>
						        </button>
						      </div>
								<hr>
						      <div class="modal-body">
								<br>
								<div class="custom align-items-center">
									<h3>Custom colors<sup>*</sup></h3>
									<br>
									<div class="row align-items-center color-value-pick">
										<span class="col">
											<label>Min value</label>
											<input class="form-control color-value-input" type="text" name="minValueCarb" maxlength="4" value="<?php echo isset($_POST['minValueCarb']) ? $_POST['minValueCarb'] : '' ?>">
											<input type="color" id="minColorCarb" class="pickr" name="minColorCarb" value="<?php echo isset($_POST['minColorCarb']) ? $_POST['minColorCarb'] : '' ?>">
										</span>
										<span class="col">
											<label>Mid value</label>
											<input class="form-control color-value-input" type="text" name="midValueCarb" maxlength="4" value="<?php echo isset($_POST['midValueCarb']) ? $_POST['midValueCarb'] : '' ?>">
											<input type="color" id="midColorCarb" class="pickr" name="midColorCarb" value="<?php echo isset($_POST['midColorCarb']) ? $_POST['midColorCarb'] : '' ?>">
										</span>
										<span class="col">
											<label>Max value</label>
											<input class="form-control color-value-input" type="text" name="maxValueCarb" maxlength="4" value="<?php echo isset($_POST['maxValueCarb']) ? $_POST['maxValueCarb'] : '' ?>">
											<input type="color" id="maxColorCarb" class="pickr"name="maxColorCarb" value="<?php echo isset($_POST['maxColorCarb']) ? $_POST['maxColorCarb'] : '' ?>">
										</span>
									</div>
								</div>
						      </div>
							  <p><sup>*</sup>Leave blank to use default color/value definitions</p>
						      <div class="modal-footer">
						        <button type="submit" name="submitCarb" value="save" class="btn btn-primary">Save</button>
						      </div>
							  </form>
						    </div>
						  </div>
						</div>
						<!-- Carb modal content end -->
						<a href="#" class="f-icon" data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $systemStatus; ?>">
							<i class="fas fa-wave-square"></i>
						</a>
					</span>
				</div>
			</div>
		<div id="sections" class="row align-items-center">
				<div id="temp" class="col section temp">
					<span class="path-group one">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $tpath14 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $tpath13 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $tpath01 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $tpath02 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $tpath03 ?>">
						</span>
						<!-- path-left, path-middle, path-right, path-bottom, path-top -->
						<span id="tp1" class="value p1 ftoc" onmouseover="document.getElementById('tp1').innerHTML=(<?php echo $data['path_01_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp1').innerHTML='<?php echo $data['path_01_temp']; ?>'"><?php echo $data['path_01_temp']; ?></span>
						<span id="tp2" class="value p2 ftoc" onmouseover="document.getElementById('tp2').innerHTML=(<?php echo $data['path_02_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp2').innerHTML='<?php echo $data['path_02_temp']; ?>'"><?php echo $data['path_02_temp']; ?></span>
						<span id="tp3" class="value p3 ftoc" onmouseover="document.getElementById('tp3').innerHTML=(<?php echo $data['path_03_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp3').innerHTML='<?php echo $data['path_03_temp']; ?>'"><?php echo $data['path_03_temp']; ?></span>
						<span id="tp13" class="value p13 ftoc" onmouseover="document.getElementById('tp13').innerHTML=(<?php echo $data['path_13_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp13').innerHTML='<?php echo $data['path_13_temp']; ?>'"><?php echo $data['path_13_temp']; ?></span>
						<span id="tp14" class="value p14 ftoc" onmouseover="document.getElementById('tp14').innerHTML=(<?php echo $data['path_14_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp14').innerHTML='<?php echo $data['path_14_temp']; ?>'"><?php echo $data['path_14_temp']; ?></span>
					</span>
					<span class="path-group two">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $tpath16 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $tpath15 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $tpath04 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $tpath05 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $tpath06 ?>">
						</span>
						<span id="tp4" class="value p4 ftoc" onmouseover="document.getElementById('tp4').innerHTML=(<?php echo $data['path_04_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp4').innerHTML='<?php echo $data['path_04_temp']; ?>'"><?php echo $data['path_04_temp']; ?></span>
						<span id="tp5" class="value p5 ftoc" onmouseover="document.getElementById('tp5').innerHTML=(<?php echo $data['path_05_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp5').innerHTML='<?php echo $data['path_05_temp']; ?>'"><?php echo $data['path_05_temp']; ?></span>
						<span id="tp6" class="value p6 ftoc" onmouseover="document.getElementById('tp6').innerHTML=(<?php echo $data['path_06_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp6').innerHTML='<?php echo $data['path_06_temp']; ?>'"><?php echo $data['path_06_temp']; ?></span>
						<span id="tp15" class="value p15 ftoc" onmouseover="document.getElementById('tp15').innerHTML=(<?php echo $data['path_15_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp15').innerHTML='<?php echo $data['path_15_temp']; ?>'"><?php echo $data['path_15_temp']; ?></span>
						<span id="tp16" class="value p16 ftoc" onmouseover="document.getElementById('tp16').innerHTML=(<?php echo $data['path_16_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp16').innerHTML='<?php echo $data['path_16_temp']; ?>'"><?php echo $data['path_16_temp']; ?></span>
					</span>
					<span class="path-group three">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $tpath18 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $tpath17 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $tpath07 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $tpath08 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $tpath09 ?>">
						</span>
						<span id="tp7" class="value p7 ftoc" onmouseover="document.getElementById('tp7').innerHTML=(<?php echo $data['path_07_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp7').innerHTML='<?php echo $data['path_07_temp']; ?>'"><?php echo $data['path_07_temp']; ?></span>
						<span id="tp8" class="value p8 ftoc" onmouseover="document.getElementById('tp8').innerHTML=(<?php echo $data['path_08_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp8').innerHTML='<?php echo $data['path_08_temp']; ?>'"><?php echo $data['path_08_temp']; ?></span>
						<span id="tp9" class="value p9 ftoc" onmouseover="document.getElementById('tp9').innerHTML=(<?php echo $data['path_09_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp9').innerHTML='<?php echo $data['path_09_temp']; ?>'"><?php echo $data['path_09_temp']; ?></span>
						<span id="tp17" class="value p17 ftoc" onmouseover="document.getElementById('tp17').innerHTML=(<?php echo $data['path_17_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp17').innerHTML='<?php echo $data['path_17_temp']; ?>'"><?php echo $data['path_17_temp']; ?></span>
						<span id="tp18" class="value p18 ftoc" onmouseover="document.getElementById('tp18').innerHTML=(<?php echo $data['path_18_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp18').innerHTML='<?php echo $data['path_18_temp']; ?>'"><?php echo $data['path_18_temp']; ?></span>
					</span>
					<span class="path-group four">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $tpath20 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $tpath19 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $tpath10 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $tpath11 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $tpath12 ?>">
						</span>
						<span id="tp10" class="value p10 ftoc" onmouseover="document.getElementById('tp10').innerHTML=(<?php echo $data['path_10_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp10').innerHTML='<?php echo $data['path_10_temp']; ?>'"><?php echo $data['path_10_temp']; ?></span>
						<span id="tp11" class="value p11 ftoc" onmouseover="document.getElementById('tp11').innerHTML=(<?php echo $data['path_11_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp11').innerHTML='<?php echo $data['path_11_temp']; ?>'"><?php echo $data['path_11_temp']; ?></span>
						<span id="tp12" class="value p12 ftoc" onmouseover="document.getElementById('tp12').innerHTML=(<?php echo $data['path_12_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp12').innerHTML='<?php echo $data['path_12_temp']; ?>'"><?php echo $data['path_12_temp']; ?></span>
						<span id="tp19" class="value p19 ftoc" onmouseover="document.getElementById('tp19').innerHTML=(<?php echo $data['path_19_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp19').innerHTML='<?php echo $data['path_19_temp']; ?>'"><?php echo $data['path_19_temp']; ?></span>
						<span id="tp20" class="value p20 ftoc" onmouseover="document.getElementById('tp20').innerHTML=(<?php echo $data['path_20_temp']; ?>-32)/1.88.toFixed(0)" onmouseout="document.getElementById('tp20').innerHTML='<?php echo $data['path_20_temp']; ?>'"><?php echo $data['path_20_temp']; ?></span>
					</span>
					<br>
					<hr>
					<p id="t-scale" class="accent">°F</p>
					<p>Temperature</p>
					<br>
				</div>
				<div id="oxygen" class="col section o2">
					<span class="path-group one">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $opath14 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $opath13 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $opath01 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $opath02 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $opath03 ?>">
						</span>
						<span class="value p1"><?php echo number_format($data['path_01_o2'], 1, '.', ''); ?></span>
						<span class="value p2"><?php echo number_format($data['path_02_o2'], 1, '.', ''); ?></span>
						<span class="value p3"><?php echo number_format($data['path_03_o2'], 1, '.', ''); ?></span>
						<span class="value p13"><?php echo number_format($data['path_13_o2'], 1, '.', ''); ?></span>
						<span class="value p14"><?php echo number_format($data['path_14_o2'], 1, '.', ''); ?></span>
					</span>
					<span class="path-group two">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $opath16 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $opath15 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $opath04 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $opath05 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $opath06 ?>">
						</span>
						<span class="value p4"><?php echo number_format($data['path_04_o2'], 1, '.', ''); ?></span>
						<span class="value p5"><?php echo number_format($data['path_05_o2'], 1, '.', ''); ?></span>
						<span class="value p6"><?php echo number_format($data['path_06_o2'], 1, '.', ''); ?></span>
						<span class="value p15"><?php echo number_format($data['path_15_o2'], 1, '.', ''); ?></span>
						<span class="value p16"><?php echo number_format($data['path_16_o2'], 1, '.', ''); ?></span>
					</span>
					<span class="path-group three">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $opath18 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $opath17 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $opath07 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $opath08 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $opath09 ?>">
						</span>
						<span class="value p7"><?php echo number_format($data['path_07_o2'], 1, '.', ''); ?></span>
						<span class="value p8"><?php echo number_format($data['path_08_o2'], 1, '.', ''); ?></span>
						<span class="value p9"><?php echo number_format($data['path_09_o2'], 1, '.', ''); ?></span>
						<span class="value p17"><?php echo number_format($data['path_17_o2'], 1, '.', ''); ?></span>
						<span class="value p18"><?php echo number_format($data['path_18_o2'], 1, '.', ''); ?></span>
					</span>
					<span class="path-group four">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $opath20 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $opath19 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $opath10 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $opath11 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $opath12 ?>">
						</span>
						<span class="value p10"><?php echo number_format($data['path_10_o2'], 1, '.', ''); ?></span>
						<span class="value p11"><?php echo number_format($data['path_11_o2'], 1, '.', ''); ?></span>
						<span class="value p12"><?php echo number_format($data['path_12_o2'], 1, '.', ''); ?></span>
						<span class="value p19"><?php echo number_format($data['path_19_o2'], 1, '.', ''); ?></span>
						<span class="value p20"><?php echo number_format($data['path_20_o2'], 1, '.', ''); ?></span>
					</span>
					<br>
					<hr>
					<p class="accent">%</p>
					<p>Oxygen</p>
					<br>
				</div>
				<div id="monoxide" class="col section co">
					<span class="path-group one">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $cmpath14 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $cmpath13 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $cmpath01 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $cmpath02 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $cmpath03 ?>">
						</span>
						<span class="value p1"><?php echo $data['path_01_co2']; ?></span>
						<span class="value p2"><?php echo $data['path_02_co2']; ?></span>
						<span class="value p3"><?php echo $data['path_03_co2']; ?></span>
						<span class="value p13"><?php echo $data['path_13_co2']; ?></span>
						<span class="value p14"><?php echo $data['path_14_co2']; ?></span>
					</span>
					<span class="path-group two">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $cmpath16 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $cmpath15 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $cmpath04 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $cmpath05 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $cmpath06 ?>">
						</span>
						<span class="value p4"><?php echo $data['path_04_co2']; ?></span>
						<span class="value p5"><?php echo $data['path_05_co2']; ?></span>
						<span class="value p6"><?php echo $data['path_06_co2']; ?></span>
						<span class="value p15"><?php echo $data['path_15_co2']; ?></span>
						<span class="value p16"><?php echo $data['path_16_co2']; ?></span>
					</span>
					<span class="path-group three">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $cmpath18 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $cmpath17 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $cmpath07 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $cmpath08 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $cmpath09 ?>">
						</span>
						<span class="value p7"><?php echo $data['path_07_co2']; ?></span>
						<span class="value p8"><?php echo $data['path_08_co2']; ?></span>
						<span class="value p9"><?php echo $data['path_09_co2']; ?></span>
						<span class="value p17"><?php echo $data['path_17_co2']; ?></span>
						<span class="value p18"><?php echo $data['path_18_co2']; ?></span>
					</span>
					<span class="path-group four">
						<span class="path-color">
							<img src="img/top-path.png" class="path-top" style="<?php echo $cmpath20 ?>">
							<img src="img/bottom-path.png" class="path-bottom" style="<?php echo $cmpath19 ?>">
							<img src="img/left-path.png" class="path-left" style="<?php echo $cmpath10 ?>">
							<img src="img/middle-path.png" class="path-middle" style="<?php echo $cmpath11 ?>">
							<img src="img/right-path.png" class="path-right" style="<?php echo $cmpath12 ?>">
						</span>
						<span class="value p10"><?php echo $data['path_10_co2']; ?></span>
						<span class="value p11"><?php echo $data['path_11_co2']; ?></span>
						<span class="value p12"><?php echo $data['path_12_co2']; ?></span>
						<span class="value p19"><?php echo $data['path_19_co2']; ?></span>
						<span class="value p20"><?php echo $data['path_20_co2']; ?></span>
					</span>
					<br>
					<hr>
					<p class="accent">PPM (x1000)</p>
					<p>Carbon Monoxide</p>
					<br>
				</div>
			</div>
	</body>
	<!-- Bootstrap tooltip enable -->
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
			html: "true"   
		});

		<?php 
		//phpinfo();
		//echo '<pre>'; print_r($data); echo '</pre>';
		//echo "path_01_temp:";
		//echo $data['path_01_temp'];
		//echo number_format($data[0]['path_01_o2'], 1, '.', '');
		//echo '<pre>'; var_dump($data); echo '</pre>';
		//echo '<pre>'; print_r(array_keys($data)); echo '</pre>';
		//print_r(array_keys($data));
		?>
</html>