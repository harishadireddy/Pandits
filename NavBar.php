<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./scss/navbar.css" type="text/css">
    </head>

    <body>
        <!-- navbar starts here -->
        <div class="nav">
            <h2>ADMIN PANEL</h2>
            <img src="Images/Logo1.png" alt="" class="logo" />
            <img src="Images/person.png" alt="" class="profile" onclick="openForm()" />
            <img src="Images/logout.png" alt="" class="logout" />
        </div>
        <!-- navbar ends here -->

        <!-- popup stars here -->
        <div class="popup" id="popup">
            <button onclick="closeForm()" class="close">❌</button>
            <form action="./">
                <img src="Images/Logo1.png" alt="" srcset="" />
                <div class="formitem">
                    <input type="text" name="fname" id="fname" placeholder="First Name" />
                    <input type="text" name="lname" id="lname" placeholder="Last Name" />
                </div>
                <input type="number" name="phone" id="phone" placeholder="Phone" />
                <input type="text" name="email" id="email" placeholder="Email" />
                <input type="text" name="password" id="password" placeholder="Update Password" />

                <button class="sbtn">Submit</button>
            </form>
        </div>
        <!-- poup ends here -->
        <!-- Side Menu Bar starts here  -->
        <div class="sidebar">
            <ul>
                <li><a href="Apanel.php">Home</a></li>
                <li><a href="Pandits.php">Pandits</a></li>
                <li><a href="Caterings.php">Caterings</a></li>
                <li><a href="Pooja.php">Pooja Types</a></li>
                <li><a href="Cities.php">Cities</a></li>

                <li>
                    <button id="dropdown" onclick="dropdown()">
                        Catering Types
                        <img src="Images/drop.png" alt="" />
                    </button>
                    <div id="dcontainer">
                        <ul class="inner">
                            <li><a href="#">Add caterings</a></li>
                            <li><a href="#">Add Items</a></li>
                        </ul>
                        <!-- <p>Add caterings</p>
                        <p>Add Items</p> -->
                    </div>
                </li>

            </ul>
        </div>
        <!-- Side Menu Bar ends here  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
        <script src="./JS/navbar.js"></script>
    </body>

</html>