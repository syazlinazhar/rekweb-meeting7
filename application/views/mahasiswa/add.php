<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Add Data Mahasiswa
            </div>
            <div class="card-body">
                <?php if( validation_errors() ) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="form-group">
                        <label for="matric">Matric</label>
                        <input type="number" name="matric" class="form-control" id="matric">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email"
                        class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="course">Course</label>
                        <select class="form-control" id="course" name="course">
                        <option value="Information Technology">Information Technology</option>
                        <option value="Science Economy">Science Economy</option>
                        <option value="Human Resource">Human Resource</option>
                        <option value="Accountancy">Accountancy</option>
                        <option value="Communication">Communication</option>
                        </select>
                    </div>
                <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>

            </form>
            </div>
        </div>
    </div>
    </div>
</div>