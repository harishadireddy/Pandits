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



            <!-- Table starts Here -->

            <table class="styled-table">
                <a href="AddPandit.php">
                    <button class="new">Add new Entry
                        <img src="./Images/aone.png" alt="" srcset="">
                    </button>
                </a>
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>User Name</th>
                        <th>Mobile</th>
                        <th>PoojaTypes</th>
                        <th>Address</th>
                        <th>Pincode</th>
                        <th>
                            Actions
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pandit name</td>

                        <td>9096485504</td>
                        <td>Type1</td>
                        <td>Adress line of some n number of letters</td>
                        <td>530017</td>
                        <td><button>View</button>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>9096485504</td>

                        <td>8096495504</td>
                        <td>Type1</td>
                        <td>Adress line of some n number of letters</td>
                        <td>530017</td>
                        <td><button>View</button>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>9096485504</td>

                        <td>8096495504</td>
                        <td>Type1</td>
                        <td>Adress line of some n number of letters</td>
                        <td>530017</td>
                        <td><button>View</button>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>9096485504</td>

                        <td>9096485504</td>
                        <td>Type1</td>
                        <td>Adress line of some n number of letters</td>
                        <td>530017</td>
                        <td><button>View</button>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>



                    </tr>




                    <!-- and so on... -->
                </tbody>
            </table>
        </div>



    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>


</html>