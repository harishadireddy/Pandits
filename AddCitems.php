<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./scss/AddCitems.css">
        <title>Add Items</title>
    </head>

    <body>
        <?php include('NavBar.php');?>
        <section class="main">
            <div class="content">
                <a href="ManageCitems.php"><img src="./Images/bone.png" alt="" srcset=""></img></a>
                <form action="./" method="post">
                    <div class="panel">
                        <div>
                            <label for="Ctypes">Choose Catering type:</label><br>
                            <select name="Ctypes" id="Ctypes">
                                <option value="Vegetarian">Vegetarian</option>
                                <option value="Vegetarian">Non-Vegetarian</option>
                                <option value="Bevarages">Bevarages</option>
                                <option value="Shamiyana">Shamiyana</option>
                            </select>
                        </div>

                        <label for="itemname" class="form__label">Item Name</label>
                        <input required type="text" name="itemname" id="itemname" placeholder="Enter Item Name" />
                        <button type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </section>
    </body>

</html>