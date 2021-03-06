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
                 <div class="content p-5" style="background: white;">
                      <div>
                      <!--<h3 class="pb-4">Registro / TipoHabitaciones</h3> -->
                        <section>
                            <div class="full-box page-header">
                                <h3 class=" pb-2 text-start">
                                    Registro / Tipos de Habitacion
                                </h3>
                            </div>
                        
                            <div class="container-fluid">
                                <div class="container-nav">
                                    <div class="box-nav"> <a href="#"><i class="fas fa-plus fa-fw"></i> NUEVO REGISTRO</a></div>
                                    <div class="box-nav"> <a class="active" href="#"><i class="fas fa-clipboard-list fa-fw"></i> LISTA TIPO HABITACIONES</a> </div>
                                    <div class="box-nav"> <a href="#"><i class="fa-solid fa-print"></i> IMPRIMIR</a></div>
                                    <div class="box-nav">
                                        <form class="d-flex">
                                        <input class="input-buscar me-2" type="search" placeholder="Buscar" aria-label="Search">
                                        <button class="btn-buscar btn btn-dark" type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>


                            <!-- TABLA RESPONSIVE -->
                           
                            <div class="table-responsive mt-2">
                            <table class="table bg-white">
                                <thead class="bg-dark text-light">
                                    <tr class="text-center">
                                        <th>N??</th>
                                        <th>Tipo<th>
                                        <th>Precio</th>
                                        <th>Caracteristicas</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($tipo as $tipos):?>
                                    <tr class="text-center">
                                        <td><?= $tipos['idTipo'] ?></td>
                                        <th><?= $tipos['tipo'] ?><th>
                                        <td>S/. <?= $tipos['precio'] ?></td>
                                        <td>TV con Cable, Cama de plaza y media, Ba??o Privado</td>
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
                                <?php endforeach;?>
                                    
                                </tbody>
                            </table>
                            </div>
                            
                            <!---<p class="text-end">1-6 de 6</p> --->
                            <?= $pager->links('group1','botts_pagination'); ?>
                            
                        </section>  
                  </div>
                </div>
                </div>
        </div>
   </div>

   <?php include "include/script.php"?>
</body>
</html>