<!DOCTYPE html>
<html lang="en">

<head>
    <?php $_POST; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Welcome $_POST[lastName]"; ?></title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;400&display=swap');

        body {
            height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            background-image: url(resources/img/bg.gif);
            overflow: hidden;
        }

        .btn {
            z-index: 2;
            margin-top: -20vh;
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding: 20px 30px;
            font-size: 20px;
        }

        h4 {
            font-family: 'Inter', sans-serif;
            margin: 20vh;
            padding: 0;
            text-align: center;
            color: white;
            font-size: 4rem;
        }

        span {
            font-family: 'Roboto Mono', monospace;
            color: #ff7300;
        }
    </style>
</head>

<body>
    <?php

    include("SQLConnect.php");

    try {
        $query = mysqli_query($con, "INSERT INTO tbl_students(studID, lastName, firstName, MI, course, yearlevel)
    VALUES('$_POST[studID]','$_POST[lastName]','$_POST[firstName]','$_POST[MI]','$_POST[course]','$_POST[yearLevel]')");
        if ($query) {
    ?>
            <br>
            <h4>Congrats <span> <?php echo $_POST['lastName']; ?></span>, you have successfully registered your self </h4>
            <br><br><br>
            <form action="index.php">
                <button type="submit" class="btn btn-success">Login</button>
            </form>

        <?php

        }
    } catch (Exception $e) {

        ?>
        <h4>Please Try again <span><?php echo $_POST['lastName']; ?></span> , Something went wrong!</h4>
        <br><br><br>
        <form action="index.php">
            <button type="submit" class="btn btn-danger">Back</button>
        </form>

    <?php
    }

    ?>


</body>

</html>