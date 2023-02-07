<?php 

if (!isset($_SESSION["userid"])) {
    header("location: /");
}

// ToDo
// get user data based on id
// update user data form
$user = new UsersView();
$profile = $user->getUserProfile($_SESSION["userid"]);
// echo ($profile->name);

?>

<div class="page-content">
    <div class="page-title">
        <h2>My Profile</h2>
    </div>

    <form action="pages/processing/profile.pro.php" method="post">
        <div class="section-content">
            <h3>Company Information</h3>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo ($profile->name) ?>" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Last name</label>
                <input type="text" name="surename" class="form-control" id="validationCustom02" placeholder="Last name" value="<?php echo ($profile->surename) ?>" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>

        <div class="form-group row col-md-6">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo ($profile->email) ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Job position</label>
                <input type="text" name="position" class="form-control" id="validationCustom01" placeholder="First name" value="<?php echo ($profile->position) ?>" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
 
        <button type="submit" name="submit"class="btn btn-primary">Update</button>
    </form>
</div>  
































<!-- 

            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>

        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>

        <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
         -->