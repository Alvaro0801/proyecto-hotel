<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include "include/link.php" ?>
</head>
<body>
   <div class="d-flex">
        <?php include "include/navLateral.php"?>     
       
        <div class="w-100" style="background-color: #F1F3F5">
            <?php include "include/navBar.php"?>

                      <!-- Contenido -->
            <div class="ps-2 pt-3 content-body">
                
                <!-- Contenedor de Registros -->
                  
                  <div class="content p-5" style="background: white;">
                       <!---->
                       <!-- Contenedor de Registros -->
                  
                    <div class="" >
                        <section>
                            <h3 class="pb-2">Registro / Clientes</h3>

                        <!-- MENU DE OPCIONES-->
                            <div class="container-fluid">
                                <div class="container-nav">
                                    <div class="box-nav"> <a href="#"><i class="fas fa-plus fa-fw"></i> AGREGAR CLIENTE</a></div>
                                    <div class="box-nav"> <a class="active" href="#"><i class="fas fa-clipboard-list fa-fw"></i> LISTA DE CLIENTES</a> </div>
                                    <!--<div class="box-nav"> <a href="#"><i class="fas fa-search fa-fw"></i> BUSCAR CLIENTE</a> </div> -->
                                    <div class="box-nav"> <a href="#"><i class="fa-solid fa-print"></i> IMRPIMIR</a></div>
                                    <div class="box-nav">
                                        <form class="d-flex">
                                        <input class="input-buscar me-2" type="search" placeholder="Buscar" aria-label="Search">
                                        <button class="btn-buscar btn btn-dark" type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        <!-- TABLE RESPONSIVE-->
                            <div class="table-responsive mt-2">
                            <table class="table bg-white">
                                <thead class="bg-dark text-light">
                                    <tr class="text-center">
                                        <th>N°</th>
                                        <th>DNI</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>Ciudad</th>
                                        <th>Direccion</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr class="text-center">
                                        <td>1</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>2</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>3</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>4</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>5</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>6</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>7</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>8</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>9</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>10</td>
                                        <td>76144145</td>
                                        <td>Arturo</td>
                                        <td>Mayta</td>
                                        <td>933462846</td>
                                        <td>ccc@gmail.com</td>
                                        <td>Tacna</td>
                                        <td>Calle Blondell Mz.29</td>
                                        <td>
                                            <a class="btn btn-success" href="#" role="button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                            <p class="text-end">Mostrando Empleados 1 al 10 de un total de 27</p>
                            <!---- navegacion de pag ------>
                            <nav class="foot-nav" aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </section>  
                  </div>
                      
                      <!----->
                  </div>
                  
            </div>
        </div>
   </div>

   <?php include "include/script.php"?>
</body>
</html>