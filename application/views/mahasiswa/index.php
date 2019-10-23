<div class="container">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if( $this->session->flashdata('flash') ) : ?>


    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data was <strong>successfully</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->




<?php endif; ?>

<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url(); ?>mahasiswa/add" class="btn btn-primary">Add Data Mahasiswa</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Find Data Mahasiswa.." name="keyword">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Find</button>
            </div>
            </div>
        </form>
    </div>
</div>


<div class="row mt-3">
    <div class="col-md-6">
    <h3>Register Mahasiswa</h3>

    <?php if( empty($mahasiswa) ) : ?>
            <div class="alert alert-danger" role="alert">
        Data is not found. 
        </div>
    <?php endif; ?>

        <ul class="list-group">
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li class="list-group-item"><?= $mhs['name'] ?>
            <a href="<?= base_url(); ?>mahasiswa/delete/<?= $mhs['id'] ?>" class="badge badge-danger float-right button-delete">delete</a>

            <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'] ?>" class="badge badge-success float-right">edit</a>

            <a href="<?= base_url(); ?>mahasiswa/details/<?= $mhs['id'] ?>" class="badge badge-primary float-right">details</a>
        </li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>