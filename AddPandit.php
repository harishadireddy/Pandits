<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Pandit</title>
        <link rel="stylesheet" href="./scss/Addpandit.css">
    </head>

    <body>
        <?php include('NavBar.php');?>
        <div class="main">
            <a href="Pandits.php"><img src="./Images/bone.png" alt="" srcset=""></img></a>




            <div class="panel">

                <form action="./">
                    <h1>Add Pandit</h1>
                    <div class="drop">
                        <select name="cities" id="cities">
                            <option value="" disabled selected hidden>Cities</option>
                            <option value="volvo">Visakhapatnam</option>
                            <option value="saab">Vijayawada</option>
                            <option value="opel">Vizianagaram</option>
                            <option value="audi">Hyderabad</option>
                        </select> <select name="pincode" id="pincode">
                            <option value="" disabled selected hidden>Pincode</option>
                            <option value="volvo">533410</option>
                            <option value="saab">500100</option>
                            <option value="opel">500001</option>
                            <option value="audi">500060</option>
                        </select> <select name="poojaT" id="poojaT">
                            <option value="" disabled selected hidden>Pooja Types</option>
                            <option value="volvo">Type1</option>
                            <option value="saab">Type 2</option>
                            <option value="opel">Type 3</option>
                            <option value="audi">Type 4</option>
                        </select>
                    </div>
                    <div class="details">
                        <div class="item">
                            <label for="userid" class="form__label">UserID</label>
                            <input required type="text" name="userid" id="userid" placeholder="Enter UserID" />
                        </div>
                        <div class="item">
                            <label for="Name" class="form__label">Username</label>
                            <input required type="text" name="Name" id="Name" placeholder="Enter Name" />
                        </div>
                        <div class="item">
                            <label for="Email" class="form__label">Email ID</label>
                            <input required type="text" name="Email " id="Email " placeholder="Enter Email Id" />
                        </div>
                        <div class="item">
                            <label for="Phone" class="form__label">Phone Number</label>
                            <input required type="text" name="Phone" id="Phone" placeholder="Enter Phone number" />
                        </div>
                        <div class="item">
                            <label for="Age" class="form__label">Age</label>
                            <input required type="text" name="Age" id="Age" placeholder="Enter Age" />
                        </div>
                        <div class="item">
                            <label for="Experience" class="form__label">Experience</label>
                            <input required type="text" name="Experience" id="Experience"
                                placeholder="Enter Experience" />
                        </div>
                        <div class="item">
                            <label for="PoojaCost" class="form__label">Pooja Cost</label>
                            <input required type="text" name="PoojaCost" id="PoojaCost"
                                placeholder="Enter Pooja Cost" />
                        </div>
                        <div class="item">
                            <label for="MaterialCost" class="form__label">Mateial Cost</label>
                            <input required type="text" name="MaterailCost" id="MaterailCost"
                                placeholder="Enter Materail Cost" />
                        </div>
                        <div class="item">
                            <label for="othercost" class="form__label">Other Cost</label>
                            <input required type="text" name="othercost" id="othercost"
                                placeholder="Enter Materail Cost" />
                        </div>
                        <div class="item">
                            <label for="lang" class="form__label">Languages</label>
                            <input required type="text" name="lang" id="lang" placeholder="Enter Pooja Cost" />
                        </div>
                        <div class="item">


                            <textarea id="story" name="story" rows="5" cols="38">
                                 Enter Address
                         </textarea>
                        </div>
                        <div class="item">
                            <label for="lang" class="form__label">Image</label>
                            <input type="file" id="myFile" name="filename">
                        </div>

                    </div>
                    <button id="sbtn" type="submit">Submit </button>
                </form>
            </div>
        </div>

    </body>

</html>