
<?php $__env->startSection('content'); ?>
    

    <main id="main" class="main">

        <div class="pagetitle">
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Default Accordion -->

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">


                            <h5 class="card-title text-center pb-0 fs-4"> LAPORAN</h5>
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Laporan Data Barang
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <a href="<?php echo e(url('/laporan/asetbergerak')); ?>">
                                        <span> 1. Data Aset Bergerak</span>
                                    </a><br>

                                    <a href="<?php echo e(url('/laporan/asettidakbergerak')); ?>">
                                        <span> 2. Data Aset Tidak Bergerak</span>
                                    </a><br>

                                    <a href="<?php echo e(url('/laporan/peralatan')); ?>">
                                        <span> 3. Data Aset Peralatan</span>
                                    </a><br>

                                    <a href="<?php echo e(url('/laporan/perlengkapan')); ?>">
                                        <span> 4. Data Aset Perlengkapan</span>
                                    </a><br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Laporan Pencatatan
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <a href="<?php echo e(url('/laporan/barangkeluar')); ?>">
                                        <span> 1. Data Barang Keluar</span>
                                    </a><br>

                                    <a href="<?php echo e(url('/laporan/barangmasuk')); ?>">
                                        <span> 2. Data Barang Masuk</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Laporan Peminjaman
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    
                                    <a href="<?php echo e(url('/laporan/peminjaman')); ?>">
                                        <span> Data Riwayat Peminjaman </span>
                                    </a><br>



                                </div>
                            </div>
                        </div>
                    </div><!-- End Default Accordion Example -->
                <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/laporan/menu.blade.php ENDPATH**/ ?>