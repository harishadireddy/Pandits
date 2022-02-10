<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pincodes</title>
        <link rel="stylesheet" href="./scss/Pincodes.css">
    </head>

    <body>
        <?php include('NavBar.php');?>
        <section class="main">
            <table class="styled-table">
                <a href="AddPincode.php">
                    <button class="new">Add new Pincode
                        <img src="./Images/aone.png" alt="" srcset="">
                    </button>
                </a>
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>City</th>
                        <th>Pincodes</th>

                        <th>
                            Actions
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>City one</td>
                        <td>500401,53301,54401 <br>500401,53301,54401</td>


                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>City one</td>
                        <td>500401,53301,54401 <br>500401,53301,54401</td>


                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>City one</td>
                        <td>500401,53301,54401 <br>500401,53301,54401</td>


                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>



                    </tr>
                    <tr>
                        <td>1</td>
                        <td>City one</td>
                        <td>500401,53301,54401 <br>500401,53301,54401 <br>523401</td>


                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>



                    </tr>




                    <!-- and so on... -->
                </tbody>
            </table>
        </section>
    </body>

</html>