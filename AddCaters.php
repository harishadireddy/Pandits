<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Caterings</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/5b6117750f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./scss/Addc.css">
    </head>

    <body>
        <?php include('NavBar.php');?>

        <section class="main">

            <div class="panel">
                <form action="./" method="POST">
                    <div class="gridl">
                        <div class="item">
                            <select name="cities" id="cities">
                                <option value="" disabled selected hidden>Cities</option>
                                <option value="visakhapatnam">visakhapatnam</option>
                                <option value="vijayawada">vijayawada</option>
                                <option value="Tuni">Tuni</option>
                                <option value="Hyderabad">Hyderabad</option>
                            </select>
                        </div>
                        <div class="item">
                            <div class="pincontent">
                                <select name="pincodes" id="pincodes">
                                    <option value="" disabled selected hidden>Pincodes</option>
                                    <option value="530045">530045</option>
                                    <option value="530041">530041</option>
                                    <option value="530014">530014</option>
                                    <option value="530012">530012</option>
                                </select>
                                <i class="fa-solid fa-circle-plus fa-2xl" id='pin'></i>
                            </div>

                        </div>
                        <div class="item">
                            <div class="flexcontent">
                                <div class="ctypes" id="one"><select name="catertype" id="catertype">
                                        <option value="" disabled selected hidden>Catering Types</option>
                                        <option value="Vegetarian">Vegetarian</option>
                                        <option value="Non-Vegetrian">Non-Vegetrian</option>
                                        <option value="Baverages">Baverages</option>
                                        <option value="Shamiyana">Shamiyana</option>
                                    </select>
                                    <i class="fa-solid fa-circle-plus fa-2xl" id='plus'></i>
                                </div>


                            </div>


                        </div>
                    </div>
                    <div class="grid2">
                        <div class="item">
                            <label for="Name" class="form__label">Username</label>
                            <input required type="text" name="Name" id="Name" placeholder="Enter UserName" />
                        </div>
                        <div class="item">
                            <label for="phone" class="form__label">Phone Number</label>
                            <input required type="text" name="phone" id="phone" placeholder="Enter Phone number" />
                        </div>
                        <div class="item">
                            <label for="email" class="form__label">Email</label>
                            <input required type="text" name="email" id="email" placeholder="Enter Email Id" />
                        </div>
                        <div class="item">
                            <label for="cost" class="form__label">Cost </label>
                            <input required type="text" name="cost" id="cost" placeholder="Enter Pandit Cost" />
                        </div>
                        <div class="item">
                            <label for="image" class="form__label">Image</label>
                            <input required type="file" name="image" id="image" placeholder="Enter Image" />
                        </div>
                        <div class="item">
                            <textarea id="address" name="address" rows="5" cols="38">
                                 Enter Address
                        </textarea>
                        </div>
                    </div>
                    <div class="grid3">
                        <div class="additem" id="first">
                            <div class="item">
                                <label for="Name" class="form__label">Add Item</label>
                                <select name="pincodes" id="pincodes">

                                    <option value="Pappu">Pappu</option>
                                    <option value="Chicken">Chicken</option>
                                    <option value="Sambar">Sambar</option>
                                    <option value="Fish">Fish</option>
                                </select>
                            </div>
                            <div class="item">
                                <label for="cost" class="form__label">Cost</label>
                                <input required type="text" name="cost" id="cost" placeholder="Enter Cost" />
                            </div>

                            <div class="item">
                                <i class="fa-solid fa-circle-plus fa-2xl" id="add"
                                    style="margin-top: 27px;cursor:pointer;"></i>
                            </div>

                        </div>
                    </div>

                    <button type="submit" id="submit"> Submit</button>
                </form>

            </div>
        </section>
        <script src="./JS/Addcaters.js"></script>
    </body>

</html>