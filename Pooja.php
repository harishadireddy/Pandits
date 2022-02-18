<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Poojas</title>
        <link rel="stylesheet" href="./scss/Pooja.css">
    </head>

    <body>
        <?php include('NavBar.php');?>
        <div class="main">
            <table class="styled-table">
                <a href="Addpooja.php"><button class="new">Add New Pooja
                        <img src="./Images/aone.png" alt="" srcset="">
                    </button></a>
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Pooja Name</th>
                        <th>Pooja image</th>
                        <th>
                            Actions
                        </th>



                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pooja1</td>
                        <td><img src="./Images/homam.png" alt="pooja" srcset="" height="130px" width="200px"></td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pooja 2</td>
                        <td><img src="./Images/pooja.jpg" alt="pooja" srcset="" height="130px" width="200px"></td>

                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Pooja 3</td>
                        <td><img src="./Images/homam.png" alt="pooja" srcset="" height="130px" width="200px"></td>

                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>




                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Pooja 4</td>
                        <td><img src="./Images/pooja.jpg" alt="pooja" srcset="" height="130px" width="200px"></td>

                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>





                    </tr>




                    <!-- and so on... -->
                </tbody>
            </table>
        </div>
    </body>

</html>