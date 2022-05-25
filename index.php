
    <?php 
        require_once 'view/head.php';
        require_once 'data/select.php';
        session_start();
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
        <?php if(isset($_SESSION['message'])){?>
        <div class="alert alert-success" role="alert">
            <?php print $_SESSION['message']; ?>
        </div>
        <?php $_SESSION['message'] = null; } ?>
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
                            <a href="create.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="data/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
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
    <div aria-label="Page navigation example" class="mb-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
            <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
            <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </div>

    <?php require_once 'view/footer.php'; ?>