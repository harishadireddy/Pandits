<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pandits</title>
        <link rel="stylesheet" href="./scss/Cities.css">
    </head>

    <body>

        <?php include('NavBar.php');?>

        <div class="main">


            <table class="styled-table">
                <a href="Addcities.php"><button class="new">Add New City
                        <img src="./Images/aone.png" alt="" srcset="">
                    </button></a>
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>City Name</th>
                        <th>
                            Actions
                        </th>



                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Vizag</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Vijayanagaram</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>3</td>
                        <td>vijayawada</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hyderabad</td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>





                    </tr>




                    <!-- and so on... -->
                </tbody>
            </table>
            <!-- <div class="panel"></div> -->
        </div>
    </body>

</html>