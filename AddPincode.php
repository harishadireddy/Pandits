<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Pincodes</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/5b6117750f.js" crossorigin="anonymous"></script>s
        <link rel="stylesheet" href="./scss/Addpincode.css">
    </head>

    <body>
        <?php include('NavBar.php');?>
        <section class="main">
            <div class="content">
                <a href="Pincodes.php"><img src="./Images/bone.png" alt="" srcset="" class="back"></img></a>
                <div class="panel">
                    <form action="./" method="post">


                        <div>
                            <label for="cities">Choose a City:</label><br>
                            <select name="cities" id="cities">
                                <option value="visakhapatnam">visakhapatnam</option>
                                <option value="vijayawada">vijayawada</option>
                                <option value="Tuni">Tuni</option>
                                <option value="Hyderabad">Hyderabad</option>
                            </select>
                        </div>


                        <div class="item">
                            <!-- <label for="pincode">Pincode</label><br> -->
                            <span> <input required type="number" name="pincode" id="pincode"
                                    placeholder="Enter  Pincode" /> <i class="fa-solid fa-circle-plus fa-2xl"
                                    id='plus'></i>


                            </span>

                        </div>

                        <button type="submit">Submit</button>
                    </form>







                </div>
            </div>
        </section>

        <script src="./JS/Addpincode.js"></script>
    </body>

</html>