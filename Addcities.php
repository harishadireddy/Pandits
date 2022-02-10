<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Cities</title>
        <link rel="stylesheet" href="./scss/Addcities.css">
    </head>

    <body>
        <?php include('NavBar.php');?>
        <section class="main">
            <div class="content">
                <a href="Cities.php"><img src="./Images/bone.png" alt="" srcset=""></img></a>
                <div class="panel">

                    <label for="cityname" class="form__label">City Name</label>
                    <input required type="text" name="cityname" id="cityname" placeholder="Enter City Name" />
                    <button type="submit">Submit</button>
                </div>
            </div>
        </section>
    </body>


</html>