      <?php

      try {

        $servidor_lakerbis = 'lakerbis';
        $conexion_locales = array( "Database"=>"LOCALES_LAKERS", "UID"=>"sa", "PWD"=>"Axoft", "CharacterSet" => "UTF-8");
        $cid_locales = sqlsrv_connect($servidor_lakerbis, $conexion_locales);
          
      } catch (PDOException $e){
              echo $e->getMessage();
      }

      ?>
          
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <title>Alta de sucursales</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

      <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

      <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style2.css">

    </head>

    <body>
    <form action="/action_page.php" class="needs-validation mt-4" autocomplete="off" novalidate>
      <div class="container cont_group mt-4 mb-2 pb-2">
        <h2 id="titulo">Alta de sucursales</h2>
        <div class="container cont_1">

         
            <div class="row">
              <div>

                <div class="form-group">
                  <div class="input-group">
                    <div>
                      <label class="label_form" for="uname">N° sucursal:</label>
                      <input type="text" class="form-control soloNum" oninput="validarTextoEntrada(this, '[0-9]')" id="numsuc" placeholder="Ingrese número" required>
                    </div>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                    <div>
                      <label class="label_form_2 ml-5" for="pwd">Código cliente:</label>
                      <input type="text" id="cliente" name="cliente" class="form-control ml-5 input_2 soloText mayusc" autocapitalize="characters" oninput="validarTextoEntrada(this, '[a-záéíóúñ ]')" placeholder="Ingrese código" required>
                    </div>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="container">
          <div class="row">
            <div>
              <!-- <form action="/action_page.php" class="needs-validation mt-4" novalidate> -->
              <div class="form-group">
                <div class="input-group">
                  <div>
                    <label class="label_form" for="uname">Sucursal:</label>
                    <input type="text" class="form-control input_1 soloText mayusc" oninput="validarTextoEntrada(this, '[a-záéíóúñ ]')" id="suc" placeholder="Ingrese nombre" required>
                  </div>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                  <div>
                    <label class="label_form_2 ml-5" for="pwd">Dirección:</label>
                    <input type="text" class="form-control ml-5 input_2 mayusc" value="" id="dire" placeholder="Ingrese calle y número" required>
                  </div>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div>
              <!--   <form action="/action_page.php" class="needs-validation mt-4" novalidate> -->
              <div class="form-group">
                <div class="input-group">
                  <div>
                    <label class="label_form" for="uname">Localidad:</label>
                    <input type="text" class="form-control input_1 soloText mayusc" oninput="validarTextoEntrada(this, '[a-záéíóúñ ]')" id="localidad" placeholder="Ingrese localidad" required>
                  </div>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                  <div>
                    <label class="label_form_2 ml-5" for="pwd">Provincia:</label>
                    <select type="text" class="custom-select  form-control ml-5 input_2" value="" id="prov" required>
                      <option value="" disabled selected>Seleccione Provincia</option>
                      <option value="1">BUENOS AIRES</option>
                      <option value="2">CAPITAL FEDERAL</option>
                      <option value="3">CATAMARCA</option>
                      <option value="4">CHACO</option>
                      <option value="5">CHUBUT</option>
                      <option value="6">CORDOBA</option>
                      <option value="7">CORRIENTES</option>
                      <option value="8">ENTRE RIOS</option>
                      <option value="9">FORMOSA</option>
                      <option value="10">JUJUY</option>
                      <option value="11">LA PAMPA</option>
                      <option value="12">LA RIOJA</option>
                      <option value="13">MENDOZA</option>
                      <option value="14">MISIONES</option>
                      <option value="15">NEUQUEN</option>
                      <option value="16">RIO NEGRO</option>
                      <option value="17">SALTA</option>
                      <option value="18">SAN JUAN</option>
                      <option value="19">SAN LUIS</option>
                      <option value="20">SANTA CRUZ</option>
                      <option value="21">SANTA FE</option>
                      <option value="22">SANTIAGO DEL ESTERO</option>
                      <option value="23">TIERRA DEL FUEGO</option>
                      <option value="24">TUCUMAN</option>
                    </select>
                  </div>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div>
              <!-- <form action="/action_page.php" class="needs-validation mt-4" novalidate> -->
              <div class="form-group">
                <div class="input-group">
                  <div>
                    <label class="label_form" for="uname">Teléfono:</label>
                    <input type="text" class="form-control input_1 soloNum mayusc" oninput="validarTextoEntrada(this, '[0-9]')" id="suc" placeholder="Ingrese numero" required>
                  </div>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                  <div>
                    <label class="label_form_2 ml-5" for="pwd">Mail:</label>
                    <input type="mail" class="form-control ml-5 input_2" value="" id="email" name="email" placeholder="Ingrese mail" required>
                  </div>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div>
              <!--  <form action="/action_page.php" class="needs-validation mt-4" novalidate> -->
              <div class="form-group">
                <div class="input-group">
                  <div>
                    <label class="label_form" for="uname">Tipo local:</label>
                    <select type="text" class="custom-select  form-control input_1" value="" id="tipo" required>
                      <option value=""  disabled selected>Seleccione tipo</option>
                      <option value="1">CALLE</option>
                      <option value="2">SHOPPING</option>
                    </select>
                  </div>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                  <div>
                    <label class="label_form_2 ml-5" for="pwd">Canal:</label>
                    <select type="text" class="custom-select  form-control ml-5" value="" id="tipo" required>
                      <option value="" disabled selected>Seleccione canal</option>
                      <option value="1">PROPIO</option>
                      <option value="2">FRANQUICIA</option>
                      <option value="3">CERRADO</option>
                    </select>
                  </div>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback mt-4">Este campo es obligatorio</div>
                </div>
              </div>
            </div>
          </div>
        </div>




        <div class="container mt-2">
           <div class="pb-2">
              <label>Ferreteria</label>
              <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-height="10">
           
              <label class="label" id="sucMadre">N° sucursal madre:</label>
              <input type="text" class="form-control soloNum" oninput="validarTextoEntrada(this, '[0-9]')" id="numMadre" placeholder="Ingrese número" required>
            
          </div>
        </div>

        <div class="form-group form-check mt-2">

          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Habilitado
          </label>

          <label class="form-check-label label_check">
            <input class="form-check-input" type="checkbox" name="remember"> Tango
          </label>

          <label class="form-check-label label_check">
            <input class="form-check-input" type="checkbox" name="remember"> Promociones
          </label>

          <label class="form-check-label label_check">
            <input class="form-check-input" type="checkbox" name="remember"> Dashboard PBI
          </label>

        </div class="container">
          <button type="submit" class="btn btn-primary mt-4">Alta</button>
          <button type="submit" class="btn btn-warning mt-4">Editar</button>
          <button type="submit" class="btn btn-success mt-4">Guardar</button>
        </div>
          </form>
        </div>


      <script src="main.js" charset="utf-8"></script>

      <script>

        // Disable form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();

                
      </script>

        
    </body>

    </html>