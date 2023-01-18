<?php include_once 'head.php' ?>
<script src="javascript/password_visibility.js" defer></script>
<script src="javascript/login.js" defer></script>
<body>
    <div class="main__body">
        <div class="form__div">
            <a href="index.php"><h2 class="logo"><i class="fa-solid fa-infinity"></i> SONGZ</h2></a>
            <hr>
            <h4 class="prompt">You must login to continue</h4>
            <form class="form__div__login" autocomplete="off">
                <div class="form__error">Error message!</div>
                <div class="form__div__login-sect">
                    <input type="text" name="cred"autocomplete="off" required>
                    <label for="username">Email or Username</label>
                    <span></span>
                </div>
                <div class="form__div__login-sect">
                    <input class="pass" type="password" name="password"autocomplete="off" required>
                    <label for="password">Password</label>
                    <button class="toggle-pass">
                        <i class="eye fa-regular fa-eye-slash"></i>
                        <!-- <i class="fa-regular fa-eye"></i> -->
                    </button>
                    <span></span>
                </div>
                <a href="#">Forgot Password?</a>
                <input class="form__div__login-button" type="submit" value="Login" name="login">
                <div class="flex flex-h text-h">
                    <p>Don't have an account?</p>
                    <p><a href="signup.php">Signup</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>