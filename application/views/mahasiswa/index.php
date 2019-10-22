<div class="container">
    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data was <strong>successfully</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url(); ?>mahasiswa/add" class="btn btn-primary">Add Data Mahasiswa</a>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
    <h3>Register Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li class="list-group-item"><?= $mhs['name'] ?></li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>