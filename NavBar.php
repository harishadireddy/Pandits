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


                <li> <button class="dropdown-btn">Pandits
                        <img src="./Images/drop.png" alt="">
                    </button>
                    <div class="dropdown-container">
                        <a href="Pooja.php">Manage Pooja Types</a>
                        <a href="Pandits.php">Manage Pandits</a>

                    </div>
                </li>
                <li><button class="dropdown-btn">Caters
                        <img src="./Images/drop.png" alt="">
                    </button>
                    <div class="dropdown-container">
                        <a href="ManageCtypes.php">Manage Caters Types</a>
                        <a href="ManageC.php">Manage Caters</a>
                        <a href="ManageCitems.php">Manage Items</a>

                    </div>
                </li>
                <li><button class="dropdown-btn">Pincodes
                        <img src="./Images/drop.png" alt="">
                    </button>
                    <div class="dropdown-container">
                        <a href="Cities.php">Manage Cites</a>
                        <a href="Pincodes.php">Manage Pincodes</a>

                    </div>


            </ul>
        </div>
        <!-- Side Menu Bar ends here  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>
        <script src="./JS/navbar.js"></script>
    </body>

</html>