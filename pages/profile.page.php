<?php if (!isset($_SESSION["userid"])) {
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
    <form>
        <div class="section-content">
            <h3>Company Information</h3>
        </div>

        <div class="form-group row col-md-6">
            <label for="staticName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="staticName" value="<?php echo ($profile->name) ?>">
            </div>
        </div>
        <div class="form-group row col-md-6">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo ($profile->email) ?>">
            </div>
        </div>
        <div class="form-group row col-md-6">
            <label for="inputSurname" class="col-sm-2 col-form-label">Surname</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputSurname" placeholder="<?php echo ($profile->surname) ?>">
            </div>
        </div>
        <div class="form-group row col-md-6">
            <label for="inputPosition" class="col-sm-2 col-form-label">Position</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputPosition" placeholder="<?php echo ($profile->position) ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>



        <!-- <div class="form-row col-md-6">
            <div class="form-group col-md-4">
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
            <div class="form-group col-md-4">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div> -->
</div>

<!-- <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="<?php echo ($profile->name) ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="<?php echo ($profile->email) ?>">
            </div>


            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div> -->

<!-- <div class="form-group">
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
<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>