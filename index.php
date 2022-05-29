
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
                <tbody id="search_text">
                <?php if($data) { 
                    if ($data->num_rows > 0) {
                    $i =(($page-1)*10) + 1;
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
    <?php if(isset($status) and $status){ 
        $next = false;
        if(isset($data) and $data->num_rows == 10){
            $next = true;
        }
        ?>
    <div aria-label="Page navigation example" class="mb-4" id="pagination">
        <ul class="pagination justify-content-center">
            <?php if($page != 1){ ?>
            <li class="page-item">
            <a class="page-link" href="?page=<?php echo $page-1; ?>" tabindex="-1">Previous</a>
            </li>
            <?php } ?>
            <?php 
                if($page == 1 and $next){
                    $start = 1; $end = $page+1;
                } elseif($page != 1 and $next){
                    $start = $page-1; $end = $page+1;
                } else{
                    $start = 1; $end = $page;
                }
            ?>
            <?php for($i=$start;$i<=$end;$i++){?>
            <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
            <?php if($next){ ?>
            <li class="page-item">
            <a class="page-link" href="?page=<?php echo $page+1; ?>">Next</a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>

    <?php require_once 'view/footer.php'; ?>