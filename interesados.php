<?php

if (isset($_POST["check1"])) {
    $cedcli = $_POST["ced_c1"];
    $nomapecli = $_POST["nom_ape_c1"];
    $celcli = $_POST["cel_c1"];
    $dircli = $_POST["dir_c1"];
    $selczona = $_POST["selcZona1"];
    $observaciones = $_POST["observaciones1"];
    $check =$_POST["check1"];
  
    if (empty($observaciones) || preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["observaciones1"]) && 
                  preg_match('/^[a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nom_ape_c1"]) &&
                  preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ#°.\-\ ]+$/', $_POST["dir_c1"])) {
                         $conn = oci_connect("ESTEBAN_C", "12345678", "localhost/XE");
                         if($conn){
                           $check = 'Acepto';
                             if(empty($observaciones)){
                                $stid = oci_parse($conn, "INSERT INTO referidosggplus VALUES (secuenciaidggplus.nextval, default , default, default, default,'$cedcli','$nomapecli','$celcli','$dircli','$selczona', 'Ninguna', sysdate, default, '$check')");
                             }else{
                                 $stid = oci_parse($conn, "INSERT INTO referidosggplus VALUES (secuenciaidggplus.nextval, default , default, default, default,'$cedcli','$nomapecli','$celcli','$dircli','$selczona', '$observaciones', sysdate, default, '$check')");
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
                            echo 'la cago';
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
                   
  