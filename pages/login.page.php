<div class="login">

    <form class="form" id="login" action="pages/processing/login.pro.php" method="post">
        <h1 class="form__title">Login</h1>

        <!-- <div class="form__message form__message--error"></div> -->
        <div class="form__input-group">
            <input type="text" class="form__input" name="email" autofocus placeholder="Email">
            <!-- <div class="form__input-error-message"></div> -->
        </div>

        <div class="form__input-group">
            <input type="password" class="form__input" name="password" autofocus placeholder="Password">
            <!-- <div class="form__input-error-message"></div> -->
        </div>

        <button name="submit" class="form__button" type="submit">Continue</button>

        <p class="form__text">
            <a href="#" class="form__link">Forgot your password?</a>
        </p>
        <p class="form__text">
            <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
        </p>
    </form>




    <form class="form form--hidden" id="createAccount" action="pages/processing/signup.pro.php" method="post">
        <h1 class="form__title">Create Account</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">
            <input name="name" type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input name="email" type="text" class="form__input" autofocus placeholder="Email Address">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input name="password" type="password" class="form__input" autofocus placeholder="Password">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input name="pwdrepeat" type="password" class="form__input" autofocus placeholder="Confirm password">
            <div class="form__input-error-message"></div>
        </div>
        <button name="submit" class="form__button" type="submit">Continue</button>
        <p class="form__text">
            <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
        </p>
    </form>
</div>