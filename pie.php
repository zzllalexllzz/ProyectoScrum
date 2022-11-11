            </div>
        </div>
    </div>

<!-- Formulario modal -->
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
                        <div class='form-group'>
                        <button type='submit' class='btn btn-primary btn-user btn-block'>
                            Insertar juego
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>