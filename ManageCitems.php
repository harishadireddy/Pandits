<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Catering Items</title>
        <link rel="stylesheet" href="./scss/ManageCitems.css">
    </head>

    <body>
        <?php include('NavBar.php');?>

        <section class="main">

            <table class="styled-table">
                <a href="AddCitems.php"><button class="new">Add Catering Items
                        <img src="./Images/aone.png" alt="" srcset="">
                    </button></a>
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Item Name</th>
                        <th>Catering Type</th>

                        <th>
                            Actions
                        </th>



                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Chicken</td>
                        <td>Non-veg</td>

                        <td>

                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Brinjal</td>
                        <td>Veg</td>

                        <td>

                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mutton</td>
                        <td>Non-Veg</td>
                        <td>

                            <button>Edit</button>
                            <button>Delete</button>
                        </td>


                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Fish </td>
                        <td>Non-veg</td>


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