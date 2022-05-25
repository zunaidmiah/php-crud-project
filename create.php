
    <?php require_once 'view/head.php'; ?>
    <div class="container  py-4 my-4">
        <h2>Add new information</h2><hr>
        <div class="form">
            <form action="data/process.php" method="post">
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter full name">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="n/a">Not Defined</option>
                    </select>
                </div>

                <button type="submit" name="create" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <?php require_once 'view/footer.php'; ?>
    