<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Catering Types</title>
        <link rel="stylesheet" href="./scss/ManageCtypes.css">
    </head>

    <body>
        <?php include('NavBar.php');?>
        <section class="main">

            <table class="styled-table">
                <a href="AddCtypes.php"><button class="new">Add Catering Type
                        <img src="./Images/aone.png" alt="" srcset="">
                    </button></a>
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>
                            Actions
                        </th>



                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Vegetarian</td>
                        <td>Image</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Non-Vegitarian</td>
                        <td>Image</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Baverages</td>
                        <td>Image</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Shamiyana</td>
                        <td>Image </td>
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