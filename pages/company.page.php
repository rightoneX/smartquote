<?php

if (!isset($_SESSION["userid"])) {
    header("location: /");
}

$user_data = new UsersView();
$user = $user_data->getUserProfile($_SESSION["userid"]);

$company_data = new CompaniesView();
$company = $company_data->getCompany($user->company_id);

$_SESSION["companyid"] = $user->company_id;

$industry_data = new IndustriesView();
$industry = $industry_data->getIndustryName($company->industry_id);

?>


<div class="container">

    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/logo30.png" alt="" width="72" height="72">
        <h2>Company Profile</h2>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Harum voluptate eligendi numquam facilis dicta excepturi est modi 
            eos hic suscipit ratione iste, quasi nemo tempora.
        </p>
    </div>

    <div class="row">

        <form action="pages/processing/company.pro.php" method="post">

            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">General Information</h4>

                <div class="col-md-6 mb-3">
                    <label for="industry">Industry</label>
                    <input type="text" class="form-control" id="industry" name="industry_id" placeholder="Industry" value="<?php echo ($company->industry_id) ?>" required>
                    <div class="invalid-feedback">
                        Valid company name is required.
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <label for="logo">Company logo</label>
                    <input type="text" class="form-control" id="logo" name="logo" placeholder="Image Logo" value="<?php echo ($company->industry_id) ?>" required>
                    <div class="invalid-feedback">
                        Valid company logo image is required.
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="motto">Company Moto</label>
                    <input type="text" class="form-control" id="motto" name="motto" placeholder="Company motto" value="<?php echo ($company->motto) ?>" required>
                    <div class="invalid-feedback">
                        Valid company logo image is required.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="companyName">Company name</label>
                        <input type="text" class="form-control" id="companyName" name="name" placeholder="Company name" value="<?php echo ($company->name) ?>" required>
                        <div class="invalid-feedback">
                            Valid company name is required.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tradingName">Trading name</label>
                        <input type="text" class="form-control" id="tradingName" name="trading_name" placeholder="trading name" value="<?php echo ($company->trading_name) ?>" required>
                        <div class="invalid-feedback">
                            Valid trading name is required.
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="companyNumber">Company number</label>
                        <input type="number" class="form-control" id="companyNumber" name="company_number" placeholder="Company number" value="<?php echo ($company->company_number) ?>" required>
                        <div class="invalid-feedback">
                            Valid company number is required.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="irdNumber">IRD number</label>
                        <input type="text" class="form-control" id="irdNumber" name="ird_number" placeholder="IRD number" value="<?php echo ($company->ird_number) ?>" required>
                        <div class="invalid-feedback">
                            Valid IRD number is required.
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone">Company Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo ($company->phone) ?>" required>
                        <div class="invalid-feedback">
                            Valid phone number is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Website" value="<?php echo ($company->website) ?>">
                        <div class="invalid-feedback">
                            Valid website url is required.
                        </div>
                    </div>
                </div>


                <div class="py-5 text-center">
                    <h4>Company Address</h4>

                </div>



                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="address_country_id" placeholder="Country" value="<?php echo ($company->address_country_id) ?>" required>
                        <div class="invalid-feedback">
                            Valid country is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="address_city" placeholder="City" value="<?php echo ($company->address_city) ?>">
                        <div class="invalid-feedback">
                            Valid city is required.
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="street">Street</label>
                        <input type="text" class="form-control" id="street" name="address_street" placeholder="Street" value="<?php echo ($company->address_street) ?>" required>
                        <div class="invalid-feedback">
                            Valid Street name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="building">Building number</label>
                        <input type="text" class="form-control" id="building" name="address_building" placeholder="Building" value="<?php echo ($company->address_building) ?>">
                        <div class="invalid-feedback">
                            Valid buidling number is required.
                        </div>
                    </div>
                </div>



                <!-- <div class="col-md-6 mb-3 ">
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
                </div> -->

                <hr class="mb-4">

                <button type="submit" name="submit" class="btn btn-primary btn-block">Update</button>
        </form>

    </div>


</div>

                                                                                                            </div>