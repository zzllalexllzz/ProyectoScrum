            </div>
        </div>
    </div>

<!-- Formulario modal nuevo juego -->
<div class='modal fade' id='nuevoJuego'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <div class='modal-title'>
                    <h1 class='h4 text-gray-900 mb-4'>Nuevo juego</h1>
                </div>            
            </div>
            <div class='modal-body'>
                <div class='container-fluid'>
                    <form method='post' class='user' action='controlador.php'>
                        <div class='form-group'>
                            <input type='hidden' name='nuevoJuego' class='form-control form-control-user'
                                value='nuevoJuego'>
                        </div>
                        <div class='form-group'>
                            <label for='nombre'>Nombre:</label>
                            <input type='text' name='nombre' class='form-control form-control-user'
                                id='' placeholder='Introduce el nombre...'>
                        </div>
                        <div class='form-group'>
                            <label for='descripcion'>Descripcion:</label>
                            <textarea name='descripcion' class='form-control form-control-user'
                                id='' cols="30" rows="5"></textarea>
                        </div>
                        <div class='form-group'>
                            <label for='plataforma'>Plataforma:</label>
                            <input type='text' name='plataforma' class='form-control form-control-user'
                                id='' placeholder='Introduce la plataforma...'>
                        </div>
                        <div class='form-group'>
                            <label for='genero'>Genero:</label>
                            <input type='text' name='genero' class='form-control form-control-user'
                                id='' placeholder='Introduce el genero...'>
                        </div>
                        <button type='submit' class='btn btn-primary btn-user btn-block'>
                            Insertar juego
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--

<div class='modal fade' id='nuevaLocalizacion'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <div class='modal-title'>
                    <h1 class='h4 text-gray-900 mb-4'>Nueva localizacion</h1>
                </div>            
            </div>
            <div class='modal-body'>
                <div class='container-fluid'>
                    <form id='formInsertarLocalizacion'>
                        <div class='form-group'>
                            <input type='hidden' name='nuevaLocalizacion' class='form-control form-control-user'
                                value='nuevaLocalizacion'>
                        </div>
                        <div class='form-group'>
                            <label for='nombre'>Nombre:</label>
                            <input type='text' name='nombre' class='form-control form-control-user'
                                id='' placeholder='Introduce el nombre...'>
                        </div>
                        <div class='form-group'>
                            <label for='descripcion'>Descripcion:</label>
                            <textarea name='descripcion' class='form-control form-control-user'
                                id='' cols="30" rows="5" placeholder='Introduce la descripcion...'></textarea>
                        </div>
                        <div class='form-group'>
                            <label for='importancia'>Importancia:</label>
                            <input type='text' name='importancia' class='form-control form-control-user'
                                id='' placeholder='Introduce la importancia...'>
                        </div>
                        <button type='submit' name='insertarLocalizacion' form='formInsertarLocalizacion' formaction='controlador.php' formmethod='get' class='btn btn-primary btn-user btn-block'>
                            Insertar localizacion
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>-->
</div>
</body>
</html>