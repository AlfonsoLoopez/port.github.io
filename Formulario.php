<!DOCTYPE html>
<html>
<head>
    <title>Registro de aspirantes </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>

    <div class="container">    
        <h1>Registrse para uno o más cursos</h1>
        <p>Puede seleccionar 1 o más cursos, es requisito el RFC</p>
        <form name="formulario" id="formulario" action="#" method="post" onsubmit="return valida_aspirante();">
                <div id="row">
                        <div class="col-25">
                                <label>RFC:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="13" class="mayusculas" type="text" name="f_rfc" id="f_rfc" value="" placeholder="Ingrese su RFC">    
                        </div>
                </div>

 

                <div id="row">
                        <div class="col-25">
                                <label>Nombre:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="30" class="mayusculas" type="text" name="f_nombre" id="f_nombre" value="" placeholder="Ingrese su Nombre">    
                        </div>
                </div>

                <div id="row">
                        <div class="col-25">
                                <label>Paterno:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="30" class="mayusculas" type="text" name="f_paterno" id="f_paterno" value="" placeholder="Ingrese su Apellido Paterno ">    
                        </div>
                </div>

                <div id="row">
                        <div class="col-25">
                                <label>Materno:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="30" class="mayusculas" type="text" name="f_materno" id="f_materno" value="" placeholder="Ingrese su Apellido Materno ">    
                        </div>
                </div>

 
                <div id="row">
                        <div class="col-25">
                                <label>Empresa:</label>
                        </div>
                        <div class="col-75">    
                                <select name="f_id_empresa" id="f_id_empresa">
                                    <option value="0">Seleccione</option>
                                </select>    
                        </div>
                    
                </div>                                                                

                <div id="row">
                        <div class="col-25">
                                <label>Teléfono:</label>
                        </div>
                        <div class="col-75">    
                                <input  maxlength="10" type="tel" name="f_telefono" id="f_telefono" value="" placeholder="Ingrese su teléfono personal">    
                        </div>
                </div>

                <div id="row">
                        <div class="col-25">
                                <label>E-mail:</label>
                        </div>
                        <div class="col-75">    
                                <input maxlength="100" type="email" name="f_email" id="f_email" value="" placeholder="Ingrese su correo electrónico personal">    
                        </div>
                </div>

                <div id="row">
                        <div class="col-25">
                                <label>Curso:</label>
                        </div>
                        <div class="col-75">    
                                <select name="f_id_curso" id="f_id_curso">
                                    <option value="0">Seleccione</option>
                                    <option value="PYTHON">PYTHON</option>
                                    <option value="REACT">REACT</option>
                                    <option value="CSS">CSS</option>
                                </select>    
                        </div>
                </div>                

                <div id="row2">
                            <input class="boton_menu" type="submit" name="add" value="Registrar">
                </div>                
        </form>
    </div><!--CONTENEDOR-->
    <script type="text/javascript" src="js/validations.js"></script>
    <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
</body>
</html>
