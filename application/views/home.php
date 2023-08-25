<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php') ?>

</head>

<body id="page-top">
    <!-- ======= Header ======= -->

    <div id="wrapper">
        <!-- load sidebar -->
        <?php $this->load->view('partials/sidebar.php') ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content" data-url="<?= base_url('pembeli') ?>">
                <!-- load Topbar -->
                <?php $this->load->view('partials/topbar.php') ?>

                <div class="container-fluid">
                    <div class="clearfix">
                        <div class="float-left">

                        </div>
                    </div>

                    <!-- <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('success') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php elseif ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('error') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif ?> -->
                    <div class="row">




                        <main id="main">

                            <section id="hero" class="hero d-flex align-items-center section-bg">
                                <div class="container">
                                    <div class="row justify-content-between gy-5">
                                        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                                            <h2 data-aos="fade-up">TEMANI HARI MU DENGAN<br>SEDUHAN TEH BERKUALITAS</h2>
                                            <p data-aos="fade-up" data-aos-delay="100">a Cup of Tisane, Makes Everything
                                                Better.
                                                P-IRT and Halal MUI approved. </p>
                                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                                <a href="https://linktr.ee/seduh.tisane" class="btn-book-a-table">Seduh.Tisane</a>

                                                <a href="https://youtu.be/puuEUPpYixw" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                                                        Video</span></a>

                                        </div>
                                    </div>
                                    <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                                        <img src="assets/img/Tea.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                                    </div>
                                </div>
                    </div>
                    </section><!-- End Hero Section -->

                    <!-- ======= About Section ======= -->
                    <section id="about" class="about">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>About Us</h2>
                                <p>Learn More <span>About Us</span></p>
                            </div>

                            <div class="row gy-4">
                                <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/bg.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                                    <div class="call-us position-absolute">
                                        <h4>Ikuti Perjalanan kami</h4>
                                        <p>@Seduh.tisane</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                                    <div class="content ps-0 ps-lg-5">
                                        <p class="fst-italic">
                                            SEDUH adalah Perusahaan Teh & Tisane Indonesia, yang menawarkan
                                            berbagai macam teh,
                                            berbagai jenis tisane, dan aksesoris terkait. Kami menggunakan
                                            bahan-bahan berkualitas
                                            baik yang dikemas dengan hati-hati.
                                        <ul>
                                            <li><i class="bi bi-check2-all"></i> Campuran
                                                khas 100% alami.</li>
                                            <li><i class="bi bi-check2-all"></i> tanpa bahan pengawet
                                                atau bahan buatan</li>
                                            <li><i class="bi bi-check2-all"></i> P-IRT and Halal MUI approved.
                                            </li>
                                        </ul>
                                        <p>
                                            Campuran
                                            khas kami 100% alami dan dibuat dengan tangan tanpa bahan pengawet
                                            atau bahan buatan untuk memastikan setiap cangkir menghadirkan
                                            pengalaman minum yang
                                            luar biasa, dan memberikan gaya hidup yang lebih baik.
                                        </p>
                                        <div class="position-relative mt-4">
                                            <img src="assets/img/video.about.jpg" class="img-fluid" alt="">
                                            <a href="https://youtu.be/zf59MaHRYhE" class="glightbox play-btn"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </section><!-- End About Section -->





                    <!-- ======= Menu Section ======= -->
                    <section id="menu" class="menu">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>Our Product</h2>
                                <p>Check Our <span>Seduh Product</span></p>
                            </div>

                            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                                <li class="nav-item">
                                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                                        <h4>Premium Tea Bag</h4>
                                    </a>
                                </li><!-- End tab nav item -->

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                                        <h4>Tea Blinde series</h4>
                                    </a><!-- End tab nav item -->

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                                        <h4>Tea Tin Can</h4>
                                    </a>
                                </li><!-- End tab nav item -->

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                                        <h4>Hampers</h4>
                                    </a>
                                </li><!-- End tab nav item -->

                            </ul>

                            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                                <div class="tab-pane fade active show" id="menu-starters">

                                    <div class="tab-header text-center">
                                        <p>Menu</p>
                                        <h3>Premium Tea</h3>
                                    </div>

                                    <div class="row gy-5">

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/PremiumTea1.jpeg" class="glightbox"><img src="assets/img/menu/PremiumTea1.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Blue Jasmine</h4>
                                            <p class="ingredients">
                                                (Green Tea + Jasmine + Blue Pea Flower)
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp149.000</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/PremiumTea2.jpeg" class="glightbox"><img src="assets/img/menu/PremiumTea2.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Beryful</h4>
                                            <p class="ingredients">
                                                (Black tea + Roselle + Rosehip + Elderberry + Flavour)
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp187.500</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/PremiumTea3.jpeg" class="glightbox"><img src="assets/img/menu/PremiumTea3.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Zesty Ginger</h4>
                                            <p class="ingredients">
                                                (Organic Black Tea + Lemongrass + Ginger)
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp.149.000</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/PremiumTea4.jpeg" class="glightbox"><img src="assets/img/menu/PremiumTea4.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Sunset Breeze</h4>
                                            <p class="ingredients">
                                                (Green Tea + Chamomile + Peppermint + Safflower)
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp187.500</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/PremiumTea5.jpeg" class="glightbox"><img src="assets/img/menu/PremiumTea5.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Rosy Moonlight</h4>
                                            <p class="ingredients">
                                                (Silver Needle White Tea + Rose + Jasmine)
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp187.500</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/PremiumTea6.jpeg" class="glightbox"><img src="assets/img/menu/PremiumTea6.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Coco Pandan</h4>
                                            <p class="ingredients">
                                                (Green Tea + Coconut + Pandan Leaf + Stevia Leaf)
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp137.500</a>
                                        </div>
                                    </div>
                                </div><!-- End Starter Menu Content -->


                                <div class="tab-pane fade" id="menu-breakfast">

                                    <div class="tab-header text-center">
                                        <p>Menu</p>
                                        <h3>Tea Blend Series</h3>
                                    </div>

                                    <div class="row gy-5">

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TBS1.jpeg" class="glightbox"><img src="assets/img/menu/TBS1.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Forget Me Gerd</h4>
                                            <p class="ingredients">
                                                (Teh Putih + Kunyit + Sereh + Chamomile + bunga Forget Me Not )
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp15.500</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TBS2.jpeg" class="glightbox"><img src="assets/img/menu/TBS2.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Spice Velvet</h4>
                                            <p class="ingredients">
                                                (Green Tea + Red Roselle + Cinnamon + Peppermint)
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp9.900</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TBS3.jpeg" class="glightbox"><img src="assets/img/menu/TBS3.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Masala Chai</h4>
                                            <p class="ingredients">
                                                (Black tea + Ginger + Green Cardamom + Cinnamon + Clove + stevia
                                                Leaves)
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp12.500</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TBS4.jpeg" class="glightbox"><img src="assets/img/menu/TBS4.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Tropical Green</h4>
                                            <p class="ingredients">
                                                (Steamed Green Tea + Dried Pineapple + dried Mango + Natural
                                                Flavour + Calendula Petal)

                                            </p>
                                            <button href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp12.500</button>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TBS5.jpeg" class="glightbox"><img src="assets/img/menu/TBS5.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Prosperi Tea</h4>
                                            <p class="ingredients">
                                                (Organic green tea + Dried apple + Rose petal + Peach blossom +
                                                Safflower )
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp15.500</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TBS6.jpeg" class="glightbox"><img src="assets/img/menu/TBS6.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>French Earl Grey</h4>
                                            <p class="ingredients">
                                                (Black tea + rose petals + Natural Bergamot Oil)
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp12.500</a>
                                        </div><!-- Menu Item -->

                                    </div>
                                </div><!-- End Breakfast Menu Content -->

                                <div class="tab-pane fade" id="menu-lunch">

                                    <div class="tab-header text-center">
                                        <p>Menu</p>
                                        <h3>Tea Tin Can</h3>
                                    </div>

                                    <div class="row gy-5">

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TA1.jpeg" class="glightbox"><img src="assets/img/menu/TA1.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Pink Flowers</h4>
                                            <p class="ingredients">
                                                Food Safe / non - Toxic + Waterproof
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp15.000</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TA2.jpeg" class="glightbox"><img src="assets/img/menu/TA2.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Pink Mandala</h4>
                                            <p class="ingredients">
                                                Food Safe / non - Toxic + Waterproof
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp15.000</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TA3.jpeg" class="glightbox"><img src="assets/img/menu/TA3.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Purple Galaxy</h4>
                                            <p class="ingredients">
                                                Food Safe / non - Toxic + Waterproof
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp15.000</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TA4.jpeg" class="glightbox"><img src="assets/img/menu/TA4.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Red Marble</h4>
                                            <p class="ingredients">
                                                Food Safe / non - Toxic + Waterproof
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp15.000</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TA5.jpeg" class="glightbox"><img src="assets/img/menu/TA5.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Tree Painting</h4>
                                            <p class="ingredients">
                                                Food Safe / non - Toxic + Waterproof
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp15.000</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/TA6.jpeg" class="glightbox"><img src="assets/img/menu/TA6.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Bridge Painting</h4>
                                            <p class="ingredients">
                                                Food Safe / non - Toxic + Waterproof
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp15.000</a>
                                        </div><!-- Menu Item -->

                                    </div>
                                </div><!-- End Lunch Menu Content -->

                                <div class="tab-pane fade" id="menu-dinner">

                                    <div class="tab-header text-center">
                                        <p>Menu</p>
                                        <h3>Hampers</h3>
                                    </div>

                                    <div class="row gy-5">

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/HM1.jpeg" class="glightbox"><img src="assets/img/menu/HM1.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Happy Wedding Hampers</h4>
                                            <p class="ingredients">
                                                Happy Wedding Hampers Gift Box
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp137.500</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/HM2.jpeg" class="glightbox"><img src="assets/img/menu/HM2.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Christmas Hampers</h4>
                                            <p class="ingredients">
                                                Christmas Hampers Gift Box
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp130.000</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/HM3.jpeg" class="glightbox"><img src="assets/img/menu/HM3.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Chinese New Year Hampers</h4>
                                            <p class="ingredients">
                                                Chinese New Year Flower Tea Hamper Gift
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp137.500</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/HM4.jpeg" class="glightbox"><img src="assets/img/menu/HM4.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Happy Birthday Hampers</h4>
                                            <p class="ingredients">
                                                Happy Birthday Hampers Gift Box
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp137.500</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/HM5.jpeg" class="glightbox"><img src="assets/img/menu/HM5.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Happy Engagement Hampers</h4>
                                            <p class="ingredients">
                                                Happy Engagement Hampers Gift Box
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp148.000</a>
                                        </div><!-- Menu Item -->

                                        <div class="col-lg-4 menu-item">
                                            <a href="assets/img/menu/HM6.jpeg" class="glightbox"><img src="assets/img/menu/HM6.jpeg" class="menu-img img-fluid" alt=""></a>
                                            <h4>Happy Graduation Hampers</h4>
                                            <p class="ingredients">
                                                Happy Graduation Hampers Gift Box
                                            </p>
                                            <a href="<?php echo site_url('penjualan/tambah'); ?>" type="button" class="btn btn-primary btn-lg">Rp137.500</a>
                                        </div><!-- Menu Item -->
                                    </div>
                                </div><!-- End Dinner Menu Content -->

                            </div>

                        </div>
                    </section><!-- End Menu Section -->
                    <!-- ======= Gallery Section ======= -->
                    <section id="gallery" class="gallery section-bg">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>gallery</h2>
                                <p>Check <span>Our Gallery</span></p>
                            </div>

                            <div class="gallery-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Gallery1.jpg"><img src="assets/img/gallery/Gallery1.jpg" class="img-fluid" alt=""></a></div>
                                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Gallery2.jpg"><img src="assets/img/gallery/Gallery2.jpg" class="img-fluid" alt=""></a></div>
                                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Gallery3.jpeg"><img src="assets/img/gallery/Gallery3.jpeg" class="img-fluid" alt=""></a></div>
                                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Gallery4.jpeg"><img src="assets/img/gallery/Gallery4.jpeg" class="img-fluid" alt=""></a></div>
                                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Gallery5.jpeg"><img src="assets/img/gallery/Gallery5.jpeg" class="img-fluid" alt=""></a></div>
                                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Gallery6.jpeg"><img src="assets/img/gallery/Gallery6.jpeg" class="img-fluid" alt=""></a></div>
                                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Gallery7.jpeg"><img src="assets/img/gallery/Gallery7.jpeg" class="img-fluid" alt=""></a></div>
                                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/Gallery8.jpg"><img src="assets/img/gallery/Gallery8.jpg" class="img-fluid" alt=""></a></div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>



                            <!-- ======= Chefs Section ======= -->
                            <section id="test" class="chefs section-bg">
                                <div class="container" data-aos="fade-up">

                                    <div class="section-header">
                                        <h2>Testimoni</h2>
                                        <p>Pelanggan <span>Setia</span> Seduh</p>
                                    </div>

                                    <div class="row gy-4">

                                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                            <div class="chef-member">
                                                <div class="member-img">
                                                    <img src="assets/img/chefs/epen.jpg" class="img-fluid" alt="">
                                                    <div class="social">
                                                        <a href=""><i class="bi bi-twitter"></i></a>
                                                        <a href=""><i class="bi bi-facebook"></i></a>
                                                        <a href=""><i class="bi bi-instagram"></i></a>
                                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                                    </div>
                                                </div>
                                                <div class="member-info">
                                                    <h4>Octo Seven Talahatu</h4>
                                                    <span>Pekerja Kantoran</span>
                                                    <p>"Seduh jagonya bikin kepala lebih rileks kalo lagi kerja
                                                        kantoran. Cocok banget
                                                        kerja di temani seduh"
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- End Chefs Member -->

                                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                            <div class="chef-member">
                                                <div class="member-img">
                                                    <img src="assets/img/chefs/wisnu.jpg" class="img-fluid" alt="">
                                                    <div class="social">
                                                        <a href=""><i class="bi bi-twitter"></i></a>
                                                        <a href=""><i class="bi bi-facebook"></i></a>
                                                        <a href=""><i class="bi bi-instagram"></i></a>
                                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                                    </div>
                                                </div>
                                                <div class="member-info">
                                                    <h4>Wisnu Adi Heryanto</h4>
                                                    <span>Mahasiswa</span>
                                                    <p>"Kepala sering kali cenat cenut gara gara tugas menumpuk,
                                                        tapi
                                                        kalo udh
                                                        minum seduh rasanya lebih tenang dan siap mengahadapi
                                                        tugas.
                                                        Nugas? Seduh solusinya."
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- End Chefs Member -->

                                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                            <div class="chef-member">
                                                <div class="member-img">
                                                    <img src="assets/img/chefs/ilham.jpg" class="img-fluid" alt="">
                                                    <div class="social">
                                                        <a href=""><i class="bi bi-twitter"></i></a>
                                                        <a href=""><i class="bi bi-facebook"></i></a>
                                                        <a href=""><i class="bi bi-instagram"></i></a>
                                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                                    </div>
                                                </div>
                                                <div class="member-info">
                                                    <h4>Muhammad Ilhamsyah Aliwibawa</h4>
                                                    <span>Aktor</span>
                                                    <p>"Sebagai aktor tentunya saya harus memperhatikan
                                                        kesehatan tapi
                                                        dengan seduh hal
                                                        tersebut sudah terpenuhi karena banyaknya manfaat
                                                        kesehatan yang
                                                        di dapatkan dari
                                                        secangkir teh seduh. Seduh bantu kita untuk jaga
                                                        kesehatan"
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- End Chefs Member -->

                                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                            <div class="chef-member">
                                                <div class="member-img">
                                                    <img src="assets/img/chefs/sandi.jpg" class="img-fluid" alt="">
                                                    <div class="social">
                                                        <a href=""><i class="bi bi-twitter"></i></a>
                                                        <a href=""><i class="bi bi-facebook"></i></a>
                                                        <a href=""><i class="bi bi-instagram"></i></a>
                                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                                    </div>
                                                </div>
                                                <div class="member-info">
                                                    <h4>Sandi Ardijaya Sopandi</h4>
                                                    <span>Pencinta Alam</span>
                                                    <p>"Saya suka sekali dengan seduh, karena dengan secangkir
                                                        teh seduh
                                                        mengandung banyak
                                                        sekali herbal yang 100% Alami dari alam dan
                                                        tentunya
                                                        baik untuk kesehatan.
                                                        Seduh 100% alami"
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- End Chefs Member -->

                                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                        </div><!-- End Chefs Member -->

                                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                            <div class="chef-member">
                                                <div class="member-img">
                                                    <img src="assets/img/chefs/ali.jpg" class="img-fluid" alt="">
                                                    <div class="social">
                                                        <a href=""><i class="bi bi-twitter"></i></a>
                                                        <a href=""><i class="bi bi-facebook"></i></a>
                                                        <a href=""><i class="bi bi-instagram"></i></a>
                                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                                    </div>
                                                </div>
                                                <div class="member-info">
                                                    <h4>Ali Mustolih</h4>
                                                    <span>Pendaki Gunung Profesional</span>
                                                    <p>"Dengan seduh di backpack, saya bisa mendaki banyak
                                                        gunung di
                                                        indonesia.Saya bisa
                                                        lebih
                                                        menikmati indahnya pemandangan dari atas gunung dengan
                                                        di temani
                                                        hangatnya teh
                                                        Seduh. Seduh, Mengahangatkan."
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- End Chefs Member -->



                                    </div>

                                    <div class="row">

                                    </div>
                                </div>
                        </div>
                        <!-- load footer -->
                        <?php $this->load->view('partials/footer.php') ?>
                        <!-- ======= Footer ======= -->
                        <footer id="footer" class="footer">

                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('partials/js.php') ?>
    <script src="<?= base_url('sb-admin/js/demo/datatables-demo.js') ?>"></script>
    <script src="<?= base_url('sb-admin') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('sb-admin') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>

</html>