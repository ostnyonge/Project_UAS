<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('pembeli') ?>">
				
				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('pembeli') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="card shadow">
							<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							<div class="card-body">
								<form action="<?= base_url('pembeli/proses_tambah') ?>" id="form-tambah" method="POST">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="kode_pembeli"><strong>Kode pembeli</strong></label>
											<input type="text" name="kode_pembeli" placeholder="Masukkan Kode pembeli" autocomplete="off"  class="form-control" required value="pembeli - <?= mt_rand(10, 99) ?>" maxlength="8" readonly>
										</div>
										<div class="form-group col-md-6">
											<label for="nama_pembeli"><strong>Nama pembeli</strong></label>
											<input type="text" name="nama_pembeli" placeholder="Masukkan Nama pembeli" autocomplete="off"  class="form-control" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="username_pembeli"><strong>Username</strong></label>
											<input type="text" name="username_pembeli" placeholder="Masukkan Username" autocomplete="off"  class="form-control" required>
										</div>
										<div class="form-group col-md-6">
											<label for="password_pembeli"><strong>Password</strong></label>
											<input type="text" name="password_pembeli" placeholder="Masukkan Password" autocomplete="off"  class="form-control" required>
										</div>
									</div>
									<hr>
									<div class="form-group">
										<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
										<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
									</div>
								</form>
							</div>				
						</div>
					</div>
				</div>
				</div>
			</div>
			
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
	<script>
		$(document).ready(function(){
			let username_pembeli = $('input[name="kode_pembeli"]').val().split(' - ');
			username_pembeli = 'KSR' + username_pembeli[1]
			 $('input[name="username_pembeli"]').val(username_pembeli)
		})
	</script>
</body>
</html>