<?php
if (isset($_SESSION["userid"])) {
    header("location: /");
}

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$error = parse_url($url, PHP_URL_QUERY);

$msgLogin = '';
$msgSign = '';
$active = 'login';

switch ($error) {
    case 'accessdenied':
        $active = 'login';
        $msgLogin = "Email or Password is invalid, please try again.";
        break;
    case 'emptyinput':
        $active = 'sign';
        $msgSign = "Please enter your Email and Password.";
        break;
    case 'emailtaken':
        $active = 'sign';
        $msgSign = "The Email is already taken.";
        break;
    case 'username':
        $active = 'sign';
        $msgSign = "Please check the Username.";
        break;
    case 'passwordmatch':
        $active = 'sign';
        $msgSign = "Password does not match";
        break;
    default:
        break;
}
?>

<div class="login">

    <form class="form <?php if ($active == "sign") echo 'form--hidden'; ?>" id="login" action="pages/processing/login.pro.php" method="post">
        <h1 class="form__title">Login</h1>
        <div class="error_msg"><?php echo $msgLogin; ?></div>
        <div class="form__input-group">
            <input name="email" type="text" class="form__input" autofocus placeholder="Email">
        </div>
        <div class="form__input-group">
            <input name="password" type="password" class="form__input" autofocus placeholder="Password">
        </div>
        <button name="submit" class="form__button" type="submit">Continue</button>
        <p class="form__text">
            <a href="#" class="form__link">Forgot your password?</a>
        </p>
        <p class="form__text">
            <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
        </p>
    </form>

    <form class="form <?php if ($active == "login") echo 'form--hidden'; ?>" id="createAccount" action="pages/processing/signup.pro.php" method="post">
        <h1 class="form__title">Create Account</h1>
        <div class="error_msg"><?php echo $msgSign; ?></div>
        <div class="form__input-group">
            <input name="name" type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
        </div>
        <div class="form__input-group">
            <input name="email" type="text" class="form__input" autofocus placeholder="Email Address">
        </div>
        <div class="form__input-group">
            <input name="password" type="password" class="form__input" autofocus placeholder="Password">
        </div>
        <div class="form__input-group">
            <input name="pwdrepeat" type="password" class="form__input" autofocus placeholder="Confirm password">
        </div>
        <button name="submit" class="form__button" type="submit">Continue</button>
        <p class="form__text">
            <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
        </p>
    </form>
</div>