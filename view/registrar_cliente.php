<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include "include/link.php" ?>
    <style>
        .container-fluid{
            padding-right: 25px;
            padding-left: 25px;
        }
        label{
            margin: 0!important;
        }
    </style>
</head>
<body>
   <div class="d-flex">
        
      <?php include "include/navLateral.php"?>     
       
      <div class="w-100" style="background-color: #F1F3F5">
           
           <?php include "include/navBar.php"?>

           <!--------------CONTENIDO-------------->
            
            <div class="ps-2 pt-3 content-body">
                  <div class="content p-5" style="background: white;">
                       <h3 class="cli-title pb-2">
                       <i class="icon-user-add me-1"></i>Registrar Cliente</h3>
                       
                       <div class="container-fluid">
                        <div class="container-nav">
                            <div class="box-nav"> <a class="active" href="#"><i class="fas fa-plus fa-fw"></i> AGREGAR CLIENTE</a></div>
                            <div class="box-nav"> <a href="registro_emp.php"><i class="fas fa-clipboard-list fa-fw"></i> LISTA DE CLIENTE</a> </div>
                            <div class="box-nav"> <a href="#"><i class="fas fa-search fa-fw"></i> BUSCAR CLIENTES</a> </div>
                        </div>
                        </div>
                        
                        <section class=" row cli-content">
                        <form class="row g-3 col-md-12">
                             <legend><i class="far fa-address-card"></i> Información Personal</legend>
                             
                            <div class="container-fluid">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cli_dni" class="bmd-label-floating">DNI</label>
                                            <input type="text" pattern="[0-9-]{1,27}" name="cli_dni_reg" id="cli_dni" maxlength="27">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cli_nombre" class="bmd-label-floating">Nombre</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}"  name="cli_nombre_reg" id="cli_nombre" maxlength="40">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cli_apellidop_reg" class="bmd-label-floating">Apellido Paterno</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}"  name="cli_apellidop_reg" id="cli_apellidop_reg" maxlength="40">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cli_apellidom_reg" class="bmd-label-floating">Apellido Materno</label>
                                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}"  name="cli_apellidom_reg" id="cli_apellidom_reg" maxlength="40">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cli_telefono" class="bmd-label-floating">Teléfono</label>
                                            <input type="text" pattern="[0-9()+]{8,20}" name="cli_telefono_reg" id="cli_telefono" maxlength="15">
                                        </div>
                                    </div>
                                    
                                      <div class="col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <div class="d-flex cli-form-input">
                                        <input type="email" id="inputEmail">
                                        </div>
                                      </div>
                                </div>
                            </div>
                              
                              
                              <div class="col-12 pt-4">
                               <div class="d-flex">
                                <div class="w-100 d-flex justify-content-end">
                                   <button type="button" class="btn-guardar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      Guardar
                                    </button>
                                    <!--- modal de confirmación----->
                                    <div class="m-confirmacion modal fade" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-body">
                                           <h5 class="modal-title mb-2" >Confirmación</h5>
                                           <p class="mb-3"> ¿Estas seguro de guardar?</p>
                                             <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn-guardar me-1">Guardar</button>
                                                <button type="button" class="btn-cancelar" data-bs-dismiss="modal">Cerrar</button>
                                             </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <!--- modal ----->
                                    <button type="reset" class="btn-cancelar ms-3">Cancelar</button>
                                </div>
                               </div>
                              </div>
                            </form>
                        </section>  
                  </div>
                  
                </div>
        </div>
   </div>
    <?php include "include/script.php"?>
</body>
</html>