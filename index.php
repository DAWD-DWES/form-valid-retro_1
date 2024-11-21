<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de Registro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta nombre="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <div class="flex-page">
            <h1>Registro de cliente</h1>
            <form class="capaform" nombre="registerform" 
                  action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" 
                  enctype="multipart/form-data" novalidate>
                <div class="flex-outer">
                    <div class="form-section">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" type="text" name="nombre" placeholder="Introduce el nombre" />
                    </div>
                    <div class="form-section">
                        <label for="nombre">DNI:</label>
                        <input id="dni" type="text" name="dni" placeholder="Introduce el DNI (12345678A)" />                       
                    </div>
                    <div class="form-section">
                        <label for="clave">Clave:</label>
                        <input id="clave" type="password" name="clave" placeholder="Introduce la clave" />             
                    </div>
                    <div class="form-section">
                        <label for="correo">Correo:</label>
                        <input id="correo" type="text"  name="correo" placeholder="Introduce el correo" />                        
                    </div>
                    <div class="form-section">
                        <label for="telefono">Teléfono:</Label> 
                        <input id="telefono" type="tel" name="tel" placeholder="Introduce el teléfono" />
                    </div>
                    <div class="form-section">
                        <label for="edad">Edad:</label> 
                        <input id="edad" type="number" name="edad" placeholder="Introduce tu edad" />
                    </div>
                    <div class="form-section">
                        <label for="fechanac">Fecha de nacimiento:</Label>
                        <input id="fechanac" type="date" name="fechanac" placeholder="Introduce la fecha de nacimiento" />
                    </div>
                    <div class="form-section">
                        <label for="tienda">Tienda Preferida:</Label> 
                        <select id="tienda" name="tienda">
                            <option value="Madrid">Madrid</option>
                            <option value="Barcelona">Barcelona</option>
                            <option value="Valencia">Valencia</option>
                        </select> 
                    </div>
                    <div class="form-section">
                        <label>Idioma preferido:</label>
                        <div class="select-section">
                            <div>
                                <input id="español" type="radio" name="idioma" value="español" /> 
                                <label for="español">Español</label>
                            </div>
                            <div>
                                <input id="inglés" type="radio" name="idioma" value="inglés" /> 
                                <label for="inglés">Inglés</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-section">
                        <label>Intereses:</label>
                        <div class="select-section">
                            <div>
                                <input id="deportes" type="checkbox" name="intereses[]" value="deportes" />
                                <label for="deportes">Deportes</label>
                            </div>
                            <div>
                                <input id="musica" type="checkbox" name="intereses[]" value="musica" />
                                <label for="musica">Música</label>
                            </div>
                            <div>
                                <input id="lectura" type="checkbox" name="intereses[]" value="lectura" />
                                <label for="lectura">Lectura</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-section">
                        <label for="suscripcion">Suscripción revista:</label>
                        <input id="suscripcion" type="checkbox"  name="suscripcion" /> 
                    </div>
                    <div class="form-section">
                        <label for="foto">Foto:</label>
                        <input id="foto" type="file" name="foto" accept=".jpg, .jpeg" />
                    </div>
                    <div class="form-section">
                        <div class="submit-section">
                            <input class="submit" type="submit" 
                                   value="Enviar" name="enviar" /> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>