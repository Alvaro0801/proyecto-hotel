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

            <div class="ps-2 pt-3 content-body">
                
                <!-- Contenido -->

                <div class="full-box page-header">
                    <h3 class="text-start">
                        <i class="fas fa-sync-alt fa-fw"></i> ACTUALIZAR HABITACION
                    </h3>
                </div>
            
                <div class="container-fluid">
                    <div class="container-nav">
                        <div class="box-nav"> <a href="#"><i class="fas fa-plus fa-fw"></i> AGREGAR HABITACION</a></div>
                        <div class="box-nav"> <a href="#"><i class="fas fa-clipboard-list fa-fw"></i> LISTA DE HABITACIONES</a> </div>
                        <div class="box-nav"> <a href="#"><i class="fas fa-search fa-fw"></i> BUSCAR HABITACION</a> </div>
                    </div>
                                
                </div>

                <div class="container-fluid">
                    <form action="" class="row g-3" autocomplete="off">
                        <fieldset>
                            <legend><i class="far fa-plus-square"></i> Información</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="num_hab" class="bmd-label-floating">Numero</label>
                                            <input type="text" pattern="[0-9-]{1,27}" class="form-control" name="num_hab" id="num_hab"  maxlength="4">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="precio_hab" class="bmd-label-floating">Precio</label>
                                            <input type="text" disabled="" class="form-control" name="precio_hab" id="precio_hab">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="item_tipo" class="bmd-label-floating">Tipo Habitación</label>
                                            <select class="form-control" name="item_tipo" id="item_tipo">
                                                <option value="" selected="" disabled="">Seleccione una opción</option>
                                                <option value="Simple">Simple</option>
                                                <option value="Doble">Doble</option>
                                                <option value="Triple">Triple</option>
                                                <option value="Suit">Suit</option>
                                                <option value="Familiar">Familiar</option>
                                                <option value="Matrimonial">Matrimonial</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <p style="margin:10px 0px"class="text-center">Para poder guardar los cambios en esta cuenta debe de ingresar su nombre de usuario y contraseña</p>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="usuario_admin" class="bmd-label-floating">Nombre de usuario</label>
                                            <input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="usuario_admin" id="usuario_admin" maxlength="35" required="" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="clave_admin" class="bmd-label-floating">Contraseña</label>
                                            <input type="password" class="form-control" name="clave_admin" id="clave_admin" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <p class="text-center" style="margin-top: 40px;">
                            <button type="submit" class="btn btn-success">
                            <i class="fa-regular fa-floppy-disk"></i> GUARDAR</button>
                        </p>
                    </form>
                </div>
        
            </div>

        </div>
   </div>

   <?php include "include/script.php"?>
</body>
</html>