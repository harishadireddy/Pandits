<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Pooja</title>
        <link rel="stylesheet" href="./scss/Addpooja.css">
    </head>

    <body>
        <?php include('NavBar.php');?>

        <section class="main">
            <div class="content">
                <a href="Pooja.php"><img src="./Images/bone.png" alt="" srcset=""></img></a>
                <div class="panel">

                    <label for="pooja_name" class="form__label">Pooja Name</label>
                    <input required type="text" name="pooja_name" id="pooja_name" placeholder="Enter Pooja Name" />
                    <label for="pooja_image" class="form__label">Pooja Image</label>
                    <input required type="file" name="pooja_image" id="pooja_image" />

                    <button type="submit">Submit</button>
                </div>
            </div>
        </section>
    </body>

</html>