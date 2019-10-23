<div class="container">
    <div class="row">
        <div class="col-md-6">
        
        <h3 class="mt-3">List of Peoples</h3>


        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>

            <?php foreach ($peoples as $people) : ?>

            <tr>
             <th>1</th>
             <td><?= $people['name']; ?></td>
             <td><?= $people['email']; ?></td>
             <td>
                <a href="" class="badge badge-warning">details</a>
                <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">add</a>
            </td>
        </tr>

        <?php endforeach; ?>

        </tbody>
        </table>        
        </div>
    </div>
</div>