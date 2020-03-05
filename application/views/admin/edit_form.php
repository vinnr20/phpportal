<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
<?php //print_r($tr_replication_mysql);?>
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/add') ?>" method="post" >
							<div class="form-row">
    								<div class="form-group col-md-4">
										<label for="staticDate">Date</label>
										<input class="form-control form-control-sm"
								 		type="date" name="date" placeholder="Masukkan Tanggal" required value="<?php echo $tr_replication_mysql[0]->date?>">
									</div>

									<div class="form-group col-md-2">
							    		<label for="shift">Shift</label>
							    		<select class="form-control form-control-sm" id="shift" name="shift" placeholder="Shift" required>
									      <option>1</option>
									      <option>2</option>
									      <option>3</option>
									    </select>
									</div>
							</div>
							<br>

				<fieldset>
				<h5>MySQL Replication Monitoring</h5>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Corona</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="corona" id="inlineRadio1" value="1" required <?php $tr_replication_mysql[0]->corona==1 ? print "checked": print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="corona" id="inlineRadio2" value="0" required <?php $tr_replication_mysql[0]->corona==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_corona" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_corona?>">
				    </div>

				    <label class="col-sm-2 col-form-label">IB Bisnis</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="ibisnis" id="inlineRadio1" value="1" required <?php $tr_replication_mysql[0]->ibisnis==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="ibisnis" id="inlineRadio2" value="0" required <?php $tr_replication_mysql[0]->ibisnis==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_ibisnis" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_ibisnis?>">
				    </div>
				</div>

					

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Mocash Brilink</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="mocash" id="inlineRadio1" value="1"  required <?php $tr_replication_mysql[0]->mocash==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="mocash" id="inlineRadio2" value="0"  required <?php $tr_replication_mysql[0]->mocash==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_mocash" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_mocash?>">
				    </div>

				    <label class="col-sm-2 col-form-label">Internet Banking</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="ibanking" id="inlineRadio1" value="option1"  required <?php $tr_replication_mysql[0]->ibanking==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="ibanking" id="inlineRadio2" value="option2"  required <?php $tr_replication_mysql[0]->ibanking==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_ibanking" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_ibanking?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">CMS</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="cms" id="inlineRadio1" value="1"  required <?php $tr_replication_mysql[0]->cms==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="cms" id="inlineRadio2" value="0"  required <?php $tr_replication_mysql[0]->cms==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_cms" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_cms?>">
				    </div>

				    <label class="col-sm-2 col-form-label">Brispot</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="brispot" id="inlineRadio1" value="1"  required <?php $tr_replication_mysql[0]->brispot==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="brispot" id="inlineRadio2" value="0"  required <?php $tr_replication_mysql[0]->brispot==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_brispot" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_brispot?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WBS</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="wbs" id="inlineRadio1" value="1" required <?php $tr_replication_mysql[0]->wbs==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="wbs" id="inlineRadio2" value="0" required <?php $tr_replication_mysql[0]->wbs==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_wbs" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_wbs?>">
				    </div>

				    <label class="col-sm-2 col-form-label">My QR</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="myqr" id="inlineRadio1" value="1" required <?php $tr_replication_mysql[0]->myqr==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="myqr" id="inlineRadio2" value="0" required <?php $tr_replication_mysql[0]->myqr==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_myqr" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_myqr?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Money Changer</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="mchanger" id="inlineRadio1" value="1" required <?php $tr_replication_mysql[0]->mchanger==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="mchanger" id="inlineRadio2" value="0" required <?php $tr_replication_mysql[0]->mchanger==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_mchanger" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_mchanger?>">
				    </div>

				    <label class="col-sm-2 col-form-label">Device Locator</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="dlocator" id="inlineRadio1" value="1" required <?php $tr_replication_mysql[0]->dlocator==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="dlocator" id="inlineRadio2" value="0" required <?php $tr_replication_mysql[0]->dlocator==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_dlocator" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_dlocator?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Brifast</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="brifast" id="inlineRadio1" value="1" required <?php $tr_replication_mysql[0]->brifast==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="brifast" id="inlineRadio2" value="0" required <?php $tr_replication_mysql[0]->brifast==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_brifast" class="form-control form-control-sm" id="corona" value="<?php echo $tr_replication_mysql[0]->remark_brifast?>">
				    </div>
				</fieldset>
			
				<fieldset>
				<h5>Mimix Replication Monitoring</h5>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">GTI1 to DRC</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="lokasi1" id="inlineRadio1" value="1" required <?php $tr_monitoring_mimix[0]->lokasi1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="lokasi1" id="inlineRadio2" value="0" required <?php $tr_monitoring_mimix[0]->lokasi1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_lokasi1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_mimix[0]->remark_lokasi1?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">GTI1 to ODC</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="lokasi2" id="inlineRadio1" value="1" required <?php $tr_monitoring_mimix[0]->lokasi2==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="lokasi2" id="inlineRadio2" value="0" required <?php $tr_monitoring_mimix[0]->lokasi2==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_lokasi2" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_mimix[0]->remark_lokasi2?>">
				    </div>
				</div>
			


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">DRC1P8 to DRC3P8</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="lokasi3" id="inlineRadio1" value="1" required <?php $tr_monitoring_mimix[0]->lokasi3==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="lokasi3" id="inlineRadio2" value="0" required <?php $tr_monitoring_mimix[0]->lokasi3==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_lokasi3" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_mimix[0]->remark_lokasi3?>">
				    </div>
				</fieldset>
			
				<fieldset>
				<h5>Oracle Monitoring</h5>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WAY4-DB1</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db1" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db1" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db1?>">
				    </div>

				    <label class="col-sm-2 col-form-label">WAY4-DB2</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db2" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db2==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db2" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db2==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db2" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db2?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WAY4-DB3</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db3" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db3==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db3" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db3==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db3" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db3?>">
				    </div>

				    <label class="col-sm-2 col-form-label">WAY4-DB4</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db4" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db4==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db4" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db4==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db4" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db4?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WAY4-DB5</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db5" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db5==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db5" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db5==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db5" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db5?>">
				    </div>

				    <label class="col-sm-2 col-form-label">WAY4-DB6</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db6" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db6==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db6" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db6==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db6" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db6?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WAY4-DB7</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db7" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db7==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db7" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db7==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db7" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db7?>">
				    </div>

				    <label class="col-sm-2 col-form-label">WAY4-DB8</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db8" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db8==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db8" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db8==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db8" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db8?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WAY4-DB9</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db9" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db9==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db9" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db9==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db9" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db9?>">
				    </div>

				    <label class="col-sm-2 col-form-label">WAY4-DB10</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db10" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db10==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db10" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db10==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db10" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db10?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WAY4-DB11</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db11" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db11==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db11" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db11==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db11" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db11?>">
				    </div>

				    <label class="col-sm-2 col-form-label">WAY4-DB12</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db12" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db12==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db12" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db12==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db12" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db12?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WAY4-DB13</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db13" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db13==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db13" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db13==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db13" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db13?>">
				    </div>

				    <label class="col-sm-2 col-form-label">WAY4-DB14</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db14" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db14==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db14" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db14==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db14" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db14?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WAY4-DB15</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db15" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db15==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db15" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db15==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db15" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db15?>">
				    </div>

				    <label class="col-sm-2 col-form-label">WAY4-DB16</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db16" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db16==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db16" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db16==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db16" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db16?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">WAY4-DB17</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db17" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->way4db17==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="way4db17" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->way4db17==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_way4db17" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_way4db17?>">
				    </div>

				    <label class="col-sm-2 col-form-label">RTGS</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="rtgs" id="inlineRadio1" value="1" required <?php $tr_monitoring_oracle[0]->rtgs==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="rtgs" id="inlineRadio2" value="0" required <?php $tr_monitoring_oracle[0]->rtgs==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_rtgs" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_oracle[0]->remark_rtgs?>">
				    </div>
				</div>
				</fieldset>
		
				<fieldset>
				<h5>Storage Checking</h5>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">HPE</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hpe" id="inlineRadio1" value="1" required <?php $tr_cek_storage[0]->hpe==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hpe" id="inlineRadio2" value="0" required <?php $tr_cek_storage[0]->hpe==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hpe" class="form-control form-control-sm" id="corona" value="<?php echo $tr_cek_storage[0]->remark_hpe?>">
				    </div>

				    <label class="col-sm-2 col-form-label">HDS</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hds" id="inlineRadio1" value="1" required <?php $tr_cek_storage[0]->hds==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hds" id="inlineRadio2" value="0" required <?php $tr_cek_storage[0]->hds==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hds" class="form-control form-control-sm" id="corona" value="<?php echo $tr_cek_storage[0]->remark_hds?>">
				    </div>
				</div>
				</fieldset>
			
				<h5>Grafana Monitoring</h5>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Disk Usage Grafana</label>
					<div class="col-sm-3">
						<input type="number" name="diskusage_server" class="form-control form-control-sm" placeholder="Server" required value="<?php echo $tr_monitoring_grafana[0]->diskusage_server?>">
					</div>
					<div class="col-sm-3">
						<input type="number" name="diskusage_page" class="form-control form-control-sm" placeholder="Page" required value="<?php echo $tr_monitoring_grafana[0]->diskusage_page?>">
					</div>
				</div>
							
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Memory Usage Grafana</label>
					<div class="col-sm-3">
						<input type="number" name="memory_server" class="form-control form-control-sm" placeholder="Server" required value="<?php echo $tr_monitoring_grafana[0]->memory_server?>">
					</div>
					<div class="col-sm-3">
						<input type="number" name="memory_page" class="form-control form-control-sm" placeholder="Page" required value="<?php echo $tr_monitoring_grafana[0]->memory_page?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Host Down Grafana</label>
					<div class="col-sm-3">
						<input type="number" name="host_server" class="form-control form-control-sm" placeholder="Server" required value="<?php echo $tr_monitoring_grafana[0]->host_server?>">
					</div>
					<div class="col-sm-3">
						<input type="number" name="host_page" class="form-control form-control-sm" placeholder="Page" required value="<?php echo $tr_monitoring_grafana[0]->host_page?>">
					</div>
				</div>
			
				<fieldset>
					<h5>Mainframe Replication Monitoring</h5>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">PPRC Monitoring</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="pprc" id="inlineRadio1" value="1" required <?php $tr_status_pprc[0]->pprc==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="pprc" id="inlineRadio2" value="0" required <?php $tr_status_pprc[0]->pprc==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_pprc" class="form-control form-control-sm" id="corona" value="<?php echo $tr_status_pprc[0]->remark_pprc?>">
				    </div>

				    <label class="col-sm-2 col-form-label">Portal OPT</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="portalopt" id="inlineRadio1" value="1" required <?php $tr_portal_opt[0]->portalopt==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="portalopt" id="inlineRadio2" value="0" required <?php $tr_portal_opt[0]->portalopt==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_portalopt" class="form-control form-control-sm" id="corona" value="<?php echo $tr_portal_opt[0]->remark_portalopt?>">
				    </div>
				</div>
				</fieldset>
		

				<fieldset>				
					<h5>Vcenter GTI Monitoring</h5>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Number of Cluster</label>
							    <div class="col-sm-2">
							      	<input type="numeric" name="num_clustergti" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vcgti[0]->num_clustergti?>">
							    </div>
							    &nbsp; &nbsp; &nbsp;
							<label class="col-form-label">HY</label>
							    <div class="col-sm-1">
							      	<input type="numeric" name="hy_gti" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vcgti[0]->hy_gti?>">
							    </div>
							    &nbsp; &nbsp; &nbsp;
							<label class="col-form-label">AF</label>
							    <div class="col-sm-1">
							      	<input type="numeric" name="af_gti" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vcgti[0]->af_gti?>">
							    </div>
							    &nbsp; &nbsp; &nbsp;
							<label class="col-form-label">HB</label>
							    <div class="col-sm-1">
							      	<input type="numeric" name="hb_gti" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vcgti[0]->hb_gti?>">
							    </div>
						</div>


						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Number of Node</label>
							    <div class="col-sm-2">
							      	<input type="numeric" name="num_nodegti" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vcgti[0]->num_nodegti?>">
							    </div>
						</div>

						<div class="form-group row">
				    <label class="col-sm-2 col-form-label">HB-CL1</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl1" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->hbcl1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl1" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->hbcl1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hbcl1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_hbcl1?>">
				    </div>

				    <label class="col-sm-2 col-form-label">AF-CL1</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="afcl1" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->afcl1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="afcl1" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->afcl1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_afcl1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_afcl1?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">HB-CL2</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl2" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->hbcl2==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl2" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->hbcl2==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hbcl2" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_hbcl2?>">
				    </div>

				    <label class="col-sm-2 col-form-label">AF-CL2</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="afcl2" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->afcl2==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="afcl2" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->afcl2==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_afcl2" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_afcl2?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">HB-CL3</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl3" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->hbcl3==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl3" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->hbcl3==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hbcl3" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_afcl3?>">
				    </div>

				    <label class="col-sm-2 col-form-label">AF-CL3</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="afcl3" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->afcl3==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="afcl3" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->afcl3==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_afcl3" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_afcl3?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">HB-CL4</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl4" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->hbcl4==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl4" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->hbcl4==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hbcl4" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_hbcl4?>">
				    </div>

				    <label class="col-sm-2 col-form-label">AF-CL4</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="afcl4" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->afcl4==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="afcl4" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->afcl4==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_afcl4" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_afcl4?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">HB-CL5</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl5" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->hbcl5==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl5" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->hbcl5==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hbcl5" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_hbcl5?>">
				    </div>

				    <label class="col-sm-2 col-form-label">HY-CL1</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hycl1" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->hycl1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hycl1" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->hycl1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hycl1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_hycl1?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">HB-CL6</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl6" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->hbcl6==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl6" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->hbcl6==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hbcl6" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_hbcl6?>">
				    </div>

				    <label class="col-sm-2 col-form-label">HY-CL2</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hycl2" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->hycl2==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hycl2" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->hycl2==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hycl2" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_hycl2?>">
				    </div>
				</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">HB-CL7</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl7" id="inlineRadio1" value="1" required <?php $tr_monitoring_vcgti[0]->hbcl7==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hbcl7" id="inlineRadio2" value="0" required <?php $tr_monitoring_vcgti[0]->hbcl7==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hbcl7" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vcgti[0]->remark_hbcl7?>">
				    </div>
				</fieldset>    
			
				<fieldset>				
					<h5>Vcenter TBN Monitoring</h5>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Number of Cluster</label>
							    <div class="col-sm-2">
							      	<input type="numeric" name="num_clustertbn" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vctbn[0]->num_clustertbn ?>">
							    </div>
							    &nbsp; &nbsp; &nbsp;
							<label class="col-form-label">HY</label>
							    <div class="col-sm-1">
							      	<input type="numeric" name="hy_tbn" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vctbn[0]->hy_tbn?>">
							    </div>
							    &nbsp; &nbsp; &nbsp;
							<label class="col-form-label">AF</label>
							    <div class="col-sm-1">
							      	<input type="numeric" name="af_tbn" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vctbn[0]->af_tbn?>">
							    </div>
							    &nbsp; &nbsp; &nbsp;
							<label class="col-form-label">HB</label>
							    <div class="col-sm-1">
							      	<input type="numeric" name="hb_tbn" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vctbn[0]->hb_tbn?>">
							    </div>
						</div>


						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Number of Node</label>
								<div class="col-sm-2">
									<input type="numeric" name="num_nodetbn" class="form-control form-control-sm" required value="<?php echo $tr_monitoring_vctbn[0]->num_nodetbn?>">
								</div>
						</div>


				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-CL1</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl1" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl1" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl1?>">
				    </div>

				    <label class="col-sm-2 col-form-label">NV-CL11</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl11" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl11==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl11" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl11==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl11" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl11?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-CL2</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl2" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl2==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl2" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl2==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl2" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl2?>">
				    </div>

				    <label class="col-sm-2 col-form-label">NV-CL12</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl12" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl12==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl12" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl12==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl12" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl12?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-CL3</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl3" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl3==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl3" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl3==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl3" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl3?>">
				    </div>

				    <label class="col-sm-2 col-form-label">NV-CL13</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl13" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl13==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl13" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl13==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl13" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl13?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-CL4</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl4" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl4==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl4" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl4==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl4" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl4?>">
				    </div>

				    <label class="col-sm-2 col-form-label">NV-CL14</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl14" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl14==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl14" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl14==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl14" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl14?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-CL5</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl5" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl5==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl5" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl5==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl5" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl5?>">
				    </div>

				    <label class="col-sm-2 col-form-label">COM-AF-CL1</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="comafcl1" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->comafcl1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="comafcl1" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->comafcl1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_comafcl1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_comafcl1?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-CL6</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl6" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl6==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl6" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl6==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl6" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl6?>">
				    </div>

				    <label class="col-sm-2 col-form-label">COM-HB-CL1</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="comhbcl1" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->comhbcl1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="comhbcl1" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->comhbcl1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_comhbcl1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_comhbcl1?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-C7</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl7" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl7==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl7" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl7==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl7" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl7?>">
				    </div>

				    <label class="col-sm-2 col-form-label">COM-HB-CL2</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="comhbcl2" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->comhbcl2==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="comhbcl2" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->comhbcl2==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_comhbcl2" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_comhbcl2?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-CL8</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl8" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl8==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl8" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl8==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl8" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl8?>">
				    </div>

				    <label class="col-sm-2 col-form-label">HP-CL1</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hpcl1" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->hpcl1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="hpcl1" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->hpcl1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_hpcl1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_hpcl1?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-CL9</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl9" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl9==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl9" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl9==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl9" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl9?>">
				    </div>

				    <label class="col-sm-2 col-form-label">MGT-AF-CL1</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="mgtafcl1" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->mgtafcl1==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="mgtafcl1" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->mgtafcl1==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_mgtafcl1" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_mgtafcl1?>">
				    </div>
				</div>

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">NV-CL10</label>
				    <div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl10" id="inlineRadio1" value="1" required <?php $tr_monitoring_vctbn[0]->nvcl10==1 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio1">OK</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="nvcl10" id="inlineRadio2" value="0" required <?php $tr_monitoring_vctbn[0]->nvcl10==0 ? print "checked":print""?>>
					  	<label class="form-check-label" for="inlineRadio2">NOT OK</label>
					</div>
				    <div class="col-sm-2">
				      <input type="text" name="remark_nvcl10" class="form-control form-control-sm" id="corona" value="<?php echo $tr_monitoring_vctbn[0]->remark_nvcl10?>">
				    </div>
				</div>
			</fieldset>
		
							<div class="form-group">
								<h5 for="name">Notes</h5>
								<textarea class="form-control" name="notes"
								 name="description" placeholder="Notes" required><?php echo 
								 $tr_notes[0]->notes?></textarea>
							</div>
							<br>

							<input class="btn btn-success" type="submit" name="btn" value="Save"/>
						</form>

					</div>
				</div>
				<!-- /.container-fluid -->
				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>
			</div>
			<!-- /.content-wrapper -->
		</div>
		<!-- /#wrapper -->
		<?php $this->load->view("admin/_partials/scrolltop.php") ?>
		<?php $this->load->view("admin/_partials/js.php") ?>

<!-- tambahkan jquery-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.corona").click(function(){
							$("#form1, #form1").hide()
							if($(this).val() == "0"){
							$("#form1, #form1").show();
							}
				});
			});
		</script>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.ibisnis").click(function(){
							$("#form2, #form2").hide()
							if($(this).val() == "0"){
							$("#form2, #form2").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.mocash").click(function(){
							$("#form3, #form3").hide()
							if($(this).val() == "0"){
							$("#form3, #form3").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.ibanking").click(function(){
							$("#form4, #form4").hide()
							if($(this).val() == "0"){
							$("#form4, #form4").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.cms").click(function(){
							$("#form5, #form5").hide()
							if($(this).val() == "0"){
							$("#form5, #form5").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.brispot").click(function(){
							$("#form6, #form6").hide()
							if($(this).val() == "0"){
							$("#form6, #form6").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.wbs").click(function(){
							$("#form7, #form7").hide()
							if($(this).val() == "0"){
							$("#form7, #form7").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.myqr").click(function(){
							$("#form8, #form8").hide()
							if($(this).val() == "0"){
							$("#form8, #form8").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.mchanger").click(function(){
							$("#form9, #form9").hide()
							if($(this).val() == "0"){
							$("#form9, #form9").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.dlocator").click(function(){
							$("#form10, #form10").hide()
							if($(this).val() == "0"){
							$("#form10, #form10").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.brifast").click(function(){
							$("#form11, #form11").hide()
							if($(this).val() == "0"){
							$("#form11, #form11").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.lokasi1").click(function(){
							$("#form12, #form12").hide()
							if($(this).val() == "0"){
							$("#form12, #form12").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.lokasi2").click(function(){
							$("#form13, #form13").hide()
							if($(this).val() == "0"){
							$("#form13, #form13").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.lokasi3").click(function(){
							$("#form14, #form14").hide()
							if($(this).val() == "0"){
							$("#form14, #form14").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db1").click(function(){
							$("#form15, #form15").hide()
							if($(this).val() == "0"){
							$("#form15, #form15").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db2").click(function(){
							$("#form16, #form16").hide()
							if($(this).val() == "0"){
							$("#form16, #form16").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db3").click(function(){
							$("#form17, #form17").hide()
							if($(this).val() == "0"){
							$("#form17, #form17").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db4").click(function(){
							$("#form18, #form18").hide()
							if($(this).val() == "0"){
							$("#form18, #form18").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db5").click(function(){
							$("#form19, #form19").hide()
							if($(this).val() == "0"){
							$("#form19, #form19").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db6").click(function(){
							$("#form20, #form20").hide()
							if($(this).val() == "0"){
							$("#form20, #form20").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db7").click(function(){
							$("#form21, #form21").hide()
							if($(this).val() == "0"){
							$("#form21, #form21").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db8").click(function(){
							$("#form22, #form22").hide()
							if($(this).val() == "0"){
							$("#form22, #form22").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db9").click(function(){
							$("#form23, #form23").hide()
							if($(this).val() == "0"){
							$("#form23, #form23").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db10").click(function(){
							$("#form24, #form24").hide()
							if($(this).val() == "0"){
							$("#form24, #form24").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db11").click(function(){
							$("#form25, #form25").hide()
							if($(this).val() == "0"){
							$("#form25, #form25").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db12").click(function(){
							$("#form26, #form26").hide()
							if($(this).val() == "0"){
							$("#form26, #form26").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db13").click(function(){
							$("#form27, #form27").hide()
							if($(this).val() == "0"){
							$("#form27, #form27").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db14").click(function(){
							$("#form28, #form28").hide()
							if($(this).val() == "0"){
							$("#form28, #form28").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db15").click(function(){
							$("#form29, #form29").hide()
							if($(this).val() == "0"){
							$("#form29, #form29").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db16").click(function(){
							$("#form30, #form30").hide()
							if($(this).val() == "0"){
							$("#form30, #form30").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.way4db17").click(function(){
							$("#form31, #form31").hide()
							if($(this).val() == "0"){
							$("#form31, #form31").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.rtgs").click(function(){
							$("#form32, #form32").hide()
							if($(this).val() == "0"){
							$("#form32, #form32").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hpe").click(function(){
							$("#form33, #form33").hide()
							if($(this).val() == "0"){
							$("#form33, #form33").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hds").click(function(){
							$("#form34, #form34").hide()
							if($(this).val() == "0"){
							$("#form34, #form34").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.pprc").click(function(){
							$("#form35, #form35").hide()
							if($(this).val() == "0"){
							$("#form35, #form35").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.portalopt").click(function(){
							$("#form36, #form36").hide()
							if($(this).val() == "0"){
							$("#form36, #form36").show();
							}
				});
			});
			</script>

			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hbcl1").click(function(){
							$("#form37, #form37").hide()
							if($(this).val() == "0"){
							$("#form37, #form37").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.afcl1").click(function(){
							$("#form38, #form38").hide()
							if($(this).val() == "0"){
							$("#form38, #form38").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hbcl2").click(function(){
							$("#form39, #form39").hide()
							if($(this).val() == "0"){
							$("#form39, #form39").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.afcl2").click(function(){
							$("#form40, #form40").hide()
							if($(this).val() == "0"){
							$("#form40, #form40").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hbcl3").click(function(){
							$("#form41, #form41").hide()
							if($(this).val() == "0"){
							$("#form41, #form41").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.afcl3").click(function(){
							$("#form42, #form42").hide()
							if($(this).val() == "0"){
							$("#form42, #form42").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hbcl4").click(function(){
							$("#form43, #form43").hide()
							if($(this).val() == "0"){
							$("#form43, #form43").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.afcl4").click(function(){
							$("#form44, #form44").hide()
							if($(this).val() == "0"){
							$("#form44, #form44").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hbcl5").click(function(){
							$("#form45, #form45").hide()
							if($(this).val() == "0"){
							$("#form45, #form45").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hycl1").click(function(){
							$("#form46, #form46").hide()
							if($(this).val() == "0"){
							$("#form46, #form46").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hbcl6").click(function(){
							$("#form47, #form47").hide()
							if($(this).val() == "0"){
							$("#form47, #form47").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hycl2").click(function(){
							$("#form48, #form48").hide()
							if($(this).val() == "0"){
							$("#form48, #form48").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hbcl7").click(function(){
							$("#form49, #form49").hide()
							if($(this).val() == "0"){
							$("#form49, #form49").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl1").click(function(){
							$("#form50, #form50").hide()
							if($(this).val() == "0"){
							$("#form50, #form50").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl11").click(function(){
							$("#form51, #form51").hide()
							if($(this).val() == "0"){
							$("#form51, #form51").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl2").click(function(){
							$("#form52, #form52").hide()
							if($(this).val() == "0"){
							$("#form52, #form52").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl12").click(function(){
							$("#form53, #form53").hide()
							if($(this).val() == "0"){
							$("#form53, #form53").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl3").click(function(){
							$("#form54, #form54").hide()
							if($(this).val() == "0"){
							$("#form54, #form54").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl13").click(function(){
							$("#form55, #form55").hide()
							if($(this).val() == "0"){
							$("#form55, #form55").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl4").click(function(){
							$("#form56, #form56").hide()
							if($(this).val() == "0"){
							$("#form56, #form56").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl14").click(function(){
							$("#form57, #form57").hide()
							if($(this).val() == "0"){
							$("#form57, #form57").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl5").click(function(){
							$("#form58, #form58").hide()
							if($(this).val() == "0"){
							$("#form58, #form58").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.comafcl1").click(function(){
							$("#form59, #form59").hide()
							if($(this).val() == "0"){
							$("#form59, #form59").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl6").click(function(){
							$("#form60, #form60").hide()
							if($(this).val() == "0"){
							$("#form60, #form60").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.comhbcl1").click(function(){
							$("#form61, #form61").hide()
							if($(this).val() == "0"){
							$("#form61, #form61").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl7").click(function(){
							$("#form62, #form62").hide()
							if($(this).val() == "0"){
							$("#form62, #form62").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.comhbcl2").click(function(){
							$("#form63, #form63").hide()
							if($(this).val() == "0"){
							$("#form63, #form63").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl8").click(function(){
							$("#form64, #form64").hide()
							if($(this).val() == "0"){
							$("#form64, #form64").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.hpcl1").click(function(){
							$("#form65, #form65").hide()
							if($(this).val() == "0"){
							$("#form65, #form65").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl9").click(function(){
							$("#form66, #form66").hide()
							if($(this).val() == "0"){
							$("#form66, #form66").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.mgtafcl1").click(function(){
							$("#form67, #form67").hide()
							if($(this).val() == "0"){
							$("#form67, #form67").show();
							}
				});
			});
			</script>

			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
						<script type="text/javascript">
							$(function(){
							$(":radio.nvcl10").click(function(){
							$("#form68, #form68").hide()
							if($(this).val() == "0"){
							$("#form68, #form68").show();
							}
				});
			});
			</script>

</body>

</html>