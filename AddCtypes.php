<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./scss/AddCtypes.css">
        <title>Add Items</title>
    </head>

    <body>
        <?php include('NavBar.php');?>
        <section class="main">
            <div class="content">
                <a href="ManageCtypes.php"><img src="./Images/bone.png" alt="" srcset=""></img></a>

                <form action="./">
                    <div class="panel"><label for="Ctype" class="form__label">Catering Types</label>
                        <input required type="text" name="Ctype" id="Ctype" placeholder="Enter Cater Type" />
                        <label for="Ctype_image" class="form__label">Catering type Image</label>
                        <input required type="file" name="Ctype_image" id="Ctype_image" />
                        <button type="submit">Submit</button>
                    </div>
                </form>


            </div>
        </section>
    </body>

</html>