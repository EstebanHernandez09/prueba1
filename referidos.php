<?php
if (isset($_POST["check"])) {
  $cedact = $_POST["cedula_act"];
  $nomapeact = $_POST["nom_ape"];
  $contactoact = $_POST["cel_c"];
  $selzona = $_POST["sel_Zona"];
  $cedcli = $_POST["ced_c"];
  $nomapecli = $_POST["nom_ape_c"];
  $celcli = $_POST["cel_c"];
  $dircli = $_POST["dir_c"];
  $selczona = $_POST["selcZona"];
  $observaciones = $_POST["observaciones"];
  $check =$_POST["check"];

  if (empty($observaciones) || preg_match('/^[a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nom_ape"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["observaciones"]) && 
                preg_match('/^[a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nom_ape_c"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ#°.\-\ ]+$/', $_POST["dir_c"])) {
                       $conn = oci_connect("ESTEBAN_C", "12345678", "localhost/XE");
                       if($conn){
                        $check = 'Acepto';
                        if(empty($observaciones)){
                            $stid = oci_parse($conn, "INSERT INTO referidosggplus VALUES (secuenciaidggplus.nextval, '$cedact' , '$nomapeact', '$contactoact', '$selzona','$cedcli','$nomapecli','$celcli','$dircli','$selczona', 'Ninguna', systimestamp, default, '$check' )");
                         }else{
                             $stid = oci_parse($conn, "INSERT INTO referidosggplus VALUES (secuenciaidggplus.nextval, '$cedact' , '$nomapeact', '$contactoact','$selzona','$cedcli','$nomapecli','$celcli','$dircli','$selczona', '$observaciones', systimestamp, default, '$check' )");
                         }

                        
                        if(oci_execute($stid)){
                          echo ('<script>

                        Swal.fire({
                            title: "Excelente",
                            text: "La informacion se ha registrado con exito y enviada al personal encargado",
                            icon: "success",
                            confirmButtonText: "Cerrar",
                            confirmButtonColor: "#0B6B4D",
                              closeOnConfirm: false
                          }).then(function(result) {
                            if (result.value) {
        
                            window.location = "formulario.php";
        
                            }
                        })
        
                        </script>');
                        }else{
                            echo ('<script>

                            Swal.fire({
                                title: "Error!",
                                text: "ocurrio un error en el sistema",
                                icon: "error",
                                confirmButtonText: "Cerrar",
                                confirmButtonColor: "#d33",
                                  closeOnConfirm: false
                              }).then(function(result) {
                                if (result.value) {
            
                                window.location = "formulario.php";
            
                                }
                            })
            
                            </script>');
                        }
    
                       }else{
                        echo ('<script>

                        Swal.fire({
                            title: "Error!",
                            text: "No se ha podido conectar a la base de datos",
                            icon: "error",
                            confirmButtonText: "Cerrar",
                            confirmButtonColor: "#d33",
                              closeOnConfirm: false
                          }).then(function(result) {
                            if (result.value) {
        
                            window.location = "formulario.php";
        
                            }
                        })
        
                        </script>');
                      }
                      }else{
                        echo ('<script>

                        Swal.fire({
                            title: "Error!",
                            text: "No se permite el ingreso de caracteres especiales",
                            icon: "error",
                            confirmButtonText: "Cerrar",
                            confirmButtonColor: "#d33",
                              closeOnConfirm: false
                          }).then(function(result) {
                            if (result.value) {
        
                            window.location = "formulario.php";
        
                            }
                        })
        
                        </script>');
                        }
                    }
                 
