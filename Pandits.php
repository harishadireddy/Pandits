<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pandits</title>
        <link rel="stylesheet" href="./scss/Pandits.css">
    </head>

    <body>
        <?php include('NavBar.php');?>

        <div class="main">
            <!-- adding pandits panel  -->

            <!-- this is a codepen link for a table that can change its column attribute ascending or descending order -->
            <!-- https://codepen.io/nathancockerill/pen/OQyXWb -->

            <a href="AddPandit.php"><button class="new">New Entry
                    <img src="./Images/aone.png" alt="" srcset="">
                </button></a>

            <!-- Table starts Here -->

            <table class="styled-table">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>User ID</th>
                        <th>Mobile</th>
                        <th>PoojaTypes</th>
                        <th>Address</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>HarishA</td>
                        <td>8096495504</td>
                        <td>Type1</td>
                        <td>Adress line of some n number of letters</td>
                        <td>threebuttons</td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>HarishA</td>
                        <td>8096495504</td>
                        <td>Type1</td>
                        <td>Adress line of some n number of letters</td>
                        <td>threebuttons</td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>HarishA</td>
                        <td>8096495504</td>
                        <td>Type1</td>
                        <td>Adress line of some n number of letters</td>
                        <td>threebuttons</td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>HarishA</td>
                        <td>8096495504</td>
                        <td>Type1</td>
                        <td>Adress line of some n number of letters</td>
                        <td>threebuttons</td>



                    </tr>




                    <!-- and so on... -->
                </tbody>
            </table>
        </div>
    </body>

</html>