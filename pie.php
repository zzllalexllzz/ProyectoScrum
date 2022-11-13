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
                            <select name="plataforma">
                                <option value="Windows">Windows</option>
                                <option value="MacOs">MacOs</option>
                                <option value="Play Station">Play Station</option>
                                <option value="Xbox">Xbox</option>
                                <option value="Steam">Steam</option>
                                <option value="Epic Games">Epic Games</option>
                                <option value="Battle Net">Battle Net</option>
                                <option value="Origin">Origin</option>

                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='genero'>Genero:</label>
                                <select name="genero">
                                    <option value="Moba">Moba</option>
                                    <option value="Shooter">Shooter</option>
                                    <option value="Auto Battler">AutoBattler</option>
                                    <option value="Juego de Cartas">JuegodeCartas</option>
                                    <option value="Battle Royal">BattleRoyal</option>
                                    <option value="Rol">Rol</option>
                                    <option value="Sand Box">Sand Box</option>
                                </select>
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