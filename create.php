
    <?php require_once 'view/head.php'; ?>
    <?php 
        $title = "Add new information";
        $action = "data/process.php";
        $name = $email = $address = $gender = null;
        $btn = "Submit";
        if(isset($_GET['id'])){
            require_once 'data/edit.php';
            if($data){
                $data = $data->fetch_assoc();
                $title = "Edit information";
                $action = "data/edit.php";
                $btn = "Update";
                $name = $data['full_name'];
                $email = $data['email'];
                $address = $data['address'];
                $gender = $data['gender'];
            }
        }
        
    ?>
    <div class="container  py-4 my-4">
        <h2>
            <?php print $title;  ?>
        </h2><hr>
        <div class="form">
            <form action="<?php print $action;?>" method="post">
                <?php if(isset($_GET['id'])) ?>
                <input type="hidden" name="id" value="<?php print $_GET['id']; ?>">
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter full name" value="<?php print $name; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php print $email; ?>">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" value="<?php print $address; ?>">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="">Select Gender</option>
                        <option <?php if($gender == 'male') print "selected";  ?> value="male">Male</option>
                        <option <?php if($gender == 'female') print "selected";  ?> value="female">Female</option>
                        <option <?php if($gender == 'n/a') print "selected";  ?> value="n/a">Not Defined</option>
                    </select>
                </div>

                <button type="submit" name="create" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <?php require_once 'view/footer.php'; ?>
    