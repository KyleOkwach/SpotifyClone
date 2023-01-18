<?php include_once 'head.php' ?>
<script src="javascript/password_visibility.js" defer></script>
<script src="javascript/signup.js" defer></script>
<body>
    <div class="main__body">
        <div class="form__div">
            <a href="index.php"><h2 class="logo"><i class="fa-solid fa-infinity"></i> SONGZ</h2></a>
            <hr>
            <h4 class="prompt">Create a Songz account</h4>
            <form class="form__div__login" autocomplete="off" enctype="multipart/form-data">
                <div class="form__error">Error message!</div>
                <div class="form__div__login-sect">
                    <input type="text" name="email" autocomplete="off" required>
                    <label for="email">What is your email?</label>
                    <span></span>
                </div>
                <div class="form__div__login-sect">
                    <input class="pass" type="password" name="create" autocomplete="do-not-autofill" required>
                    <button class="toggle-pass">
                        <i class="eye fa-regular fa-eye-slash"></i>
                    </button>
                    <label for="password">Create a password</label>
                    <span></span>
                </div>
                <div class="form__div__login-sect">
                    <input class="pass" type="password" name="confirm" autocomplete="off" required>
                    <label for="password">Confirm your password</label>
                    <span></span>
                </div>
                <div class="form__div__login-sect">
                    <input type="text" name="username" autocomplete="off" required>
                    <label for="username">Select a username</label>
                    <span></span>
                </div>
                <div class="text-h">
                    <p>profile</p>
                    <input type="file" name="image">
                </div>

                <input class="form__div__login-button" type="submit" value="Create Account" name="signup">
                <div class="text-h">
                    <p>Already have an account?</p>
                    <p><a href="login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>