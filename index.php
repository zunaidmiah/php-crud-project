
    <?php 
        require_once 'view/head.php';
        require_once 'data/select.php';
          // Program to display current page URL.
    ?>
    <div class="container py-4 my-4">
        <h2>
            Data Create, Read, Edit and Update Project
            <a href="create.php" class="btn btn-info" title="Add New">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
            </a>
        </h2>
        <hr>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($data) { 
                    if ($data->num_rows > 0) {
                    $i =1;
                     while($row = $data->fetch_assoc()) {?>
                    <tr>
                        <th><?php echo $i; ?></th>
                        <td><?php echo $row['full_name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td>
                            <a href="" class="btn btn-primary">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i++;} } } else {?>
                    <tr>
                        <td>No data found</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php require_once 'view/footer.php'; ?>