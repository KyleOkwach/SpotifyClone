
<?php
    include_once 'head.php';
    include_once 'php/config.php';
    session_start();

    if(!isset($_SESSION['session_id'])){
        header("location: login.php");
    }
?>

<body>
    <!-- body -->
    <div class="container container__main flex">
        <div class="flex flex__h flex__h__main">
            <?php include "components/menu.php" ?>
            <?php include "components/songs.php" ?>
        </div>
        <?php include "components/player.php" ?>
    </div>

</body>
</html>