<link rel="stylesheet" href="main.css">

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<div class="sticky-top">
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
			

			<div class="sidebar-brand-text mx-3">Selamat Datang <sup><?= $this->session->login['nama'] ?></sup></div>
		</a>
		
		<?php if ($this->session->login['role'] == 'admin') : ?>
			<hr class="sidebar-divider my-0">
			<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('dashboard') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
		<?php endif; ?>
		<hr class="sidebar-divider">
		<?php if ($this->session->login['role'] == 'admin') : ?>
			<div class="sidebar-heading">
				Master
			</div>


			<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('barang') ?>">
					<i class="fas fa-fw fa-box"></i>
					<span>Barang</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'pembeli' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('pembeli') ?>">
					<i class="fas fa-fw fa-cash-register"></i>
					<span>Pembeli</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
		<?php endif; ?>
		<li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('home') ?>">
				<i class="fas fa-fw fa-home"></i>
				<span>Home</span></a>
		</li>
		<div class="sidebar-heading">
			Transaksi
		</div>

		<li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('penjualan') ?>">
				<i class="fas fa-shopping-basket"></i>
				<span>Cart</span></a>
		</li>



		<div class="sidebar-heading">

		</div>

		<li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('logout') ?>">
				<i class="fas fa-sign-out-alt"></i>
				<span>Log Out</span></a>
		</li>


		<hr class="sidebar-divider">
		<?php if ($this->session->login['role'] == 'admin') : ?>
			<!-- Heading -->
			<div class="sidebar-heading">
				Pengaturan
			</div>

			<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('pengguna') ?>">
					<i class="fas fa-fw fa-users"></i>
					<span>Manajemen Pengguna</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">
		<?php endif; ?>
		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-block">
			<button class="rounded-circle border-0" id="sidebarToggle">
			
			</button>
		</div>
		
	</div>

</ul>