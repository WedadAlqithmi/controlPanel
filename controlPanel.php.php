<?php
// connect to MySQL
$host = "127.0.0.1";
$user = "root";
$password = "123456";
$database = "moverecord";

$connect =  mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("cannot connect to database field:" . mysqli_connect_error());
} else {
    echo 'Database is connected';
}
?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: pink;

        }

        button {
            border-radius: 100%;
            border: none;
            outline: none;
            padding: 16px;
            margin-bottom: 12px;
            margin-top: 12px;
            margin-right: 12px;
            margin-left: 12px;
            background-color: white;
            box-shadow: 3px 3px 7px rgb(218, 78, 143);

        }

        svg {
            fill: white;
            width: 64px;
            height: 64px;
        }

        .middle {
            padding: 5%;
            display: block;
            text-align: center;
            margin: auto;
        }

        .power {
            background-color: rgb(242, 74, 74);
        }

        h1 {
            display: block;
            color:white;
            margin-top: 20px;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>


    <div class="middle">

        <h1>Control Panel</h1>

        <form action='' method='POST'>

            <section>
                <button type="submit" name="up"> <img src="assets/up.svg" /></button>
            </section>
            <p>


            </p>
            <section>
                <button type="submit" name="left"> <img src="assets/left.svg" /></button>
                <button type="submit" name="onOff" class="power"> <img src="assets/on_off.svg" /></button>
                <button type="submit" name="right"> <img src="assets/right.svg" /></button>

            </section>

            <section>
                <button type="submit" name="down"> <img src="assets/down.svg" /></button>

            </section>




        </form>
    </div>


    <?php
    // write to database
    if (isset($_POST['left'])) {
        $query = "INSERT INTO move (MOVE) VALUES ('left') ";
        $result =  mysqli_query($connect, $query);
        die("Left move successed ");

        if (!$result) {
            echo '<script>alert("<< ERROR in Query >>");</script>';
        }
    }


    if (isset($_POST['right'])) {
        $query = "INSERT INTO move (MOVE) VALUES ('right') ";
        $result =  mysqli_query($connect, $query);
        die("Right move successed");

        if (!$result) {
            echo '<script>alert("<< ERROR in Query >>");</script>';
        }
    }



    if (isset($_POST['up'])) {
        $query = "INSERT INTO move (MOVE) VALUES ('up') ";
        $result =  mysqli_query($connect, $query);
        die("Forward move successed");

        if (!$result) {
            echo '<script>alert("<< ERROR in Query >>");</script>';
        }
    }




    if (isset($_POST['down'])) {
        $query = "INSERT INTO move (MOVE) VALUES ('down') ";
        $result =  mysqli_query($connect, $query);
        die("Backward move successed");

        if (!$result) {
            echo '<script>alert("<< ERROR in Query >>");</script>';
        }
    }



    if (isset($_POST['onOff'])) {
        $query = "INSERT INTO move (MOVE) VALUES ('on/Off') ";
        $result =  mysqli_query($connect, $query);
        die("Your robot is shut down successfully");

        if (!$result) {
            echo '<script>alert("<< ERROR in Query >>");</script>';
        }
    }





    ?>

</body>

</html>
<?php
// close connection
mysqli_close($connect);
?>