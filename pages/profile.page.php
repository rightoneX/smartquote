<?php

if (!isset($_SESSION["userid"])) {
    header("location: /");
}

$user_data = new UsersView();
$user = $user_data->getUserProfile($_SESSION["userid"]);

// $company_data = new CompaniesView();
// $company = $company_data->getCompanyProfile($user->company_id);

// $industry_data = new IndustriesView();
// $industry= $industry_data->getIndustryName($company->industry_id);

?>


<div class="container">

    <div class="py-5 text-center">
        <!-- <img class="d-block mx-auto mb-4" src="images/logo30.png" alt="" width="72" height="72"> -->
        <h2>Profile</h2>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum voluptate eligendi numquam facilis dicta excepturi est modi eos hic suscipit ratione iste, quasi nemo tempora.
        </p>
    </div>

    <div class="row">

        <form action="pages/processing/profile.pro.php" method="post">

            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Personal Information</h4>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="name" placeholder="First name" value="<?php echo ($user->name) ?>" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="surename" placeholder="Last name" value="<?php echo ($user->surename) ?>" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo ($user->phone) ?>" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">Registered Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo ($user->email) ?>" readonly>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="position">Job position <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="Job position" value="<?php echo ($user->position) ?>">
                        <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="date">Day of birth <span class="text-muted">(Optional)</span></label>
                        <input type="date" class="form-control" id="date" name="dob" placeholder="dd/mm/year" value="<?php if ($user->dob != "1900-01-01") {
                                                                                                                            echo ($user->dob);
                                                                                                                        } ?>">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3 ">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="notification" id="notification" <?php if ($user->notification) {
                                                                                                                        echo ('checked');
                                                                                                                    } ?>>
                        <label class="custom-control-label" for="notification">Receive project task notification emails</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="newsletter" id="newsletter" <?php if ($user->newsletter) {
                                                                                                                    echo ('checked');
                                                                                                                } ?>>
                        <label class="custom-control-label" for="newsletter">Receive weekly website newsletter email</label>
                    </div>
                </div>

                <hr class="mb-4">

                <button type="submit" name="submit" class="btn btn-primary btn-block">Update</button>
        </form>

    </div>


</div>
</div>