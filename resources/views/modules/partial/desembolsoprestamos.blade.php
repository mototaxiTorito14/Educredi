
<div class="container">
    <div class="main-content">
        <h1>Desembolso de préstamos</h1>
        <div class="fila">
            <div class="columna">
                <div class="campos">
                    <label for="codigo" class="label1">Código</label>
                    <label for="codigo" class="label1">
                        <input type="text" id="codigo" name="codigo" required>
                    </label>
                </div>
                <div class="container-select">
                    <div class="titulo">
                        <label for="linea" class="label1">Linea</label>
                    </div>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="opcion1">Opcion 1</option>
                        <option value="opcion2">Opcion 2</option>
                    </select>
                    <span class="titulo"></span>
                    <i class="fa-solid fa-chevron-down icon"></i>
                </div>
                <div class="container-select">
                    <div class="titulo">
                        <label for="sucursal" class="label1">Sucursal</label>
                    </div>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="opcion1">Opcion 1</option>
                        <option value="opcion2">Opcion 2</option>
                    </select>
                    <span class="titulo"></span>
                    <i class="fa-solid fa-chevron-down icon"></i>
                </div>
                <div class="container-select">
                    <div class="titulo">
                        <label for="supervisor" class="label1">Supervisor</label>
                    </div>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="opcion1">Opcion 1</option>
                        <option value="opcion2">Opcion 2</option>
                    </select>
                    <span class="titulo"></span>
                    <i class="fa-solid fa-chevron-down icon"></i>
                </div>
                <div class="container-select">
                    <div class="titulo">
                        <label for="centro" class="label1">Centro</label>
                    </div>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="opcion1">Opcion 1</option>
                        <option value="opcion2">Opcion 2</option>
                    </select>
                    <span class="titulo"></span>
                    <i class="fa-solid fa-chevron-down icon"></i>
                </div>
            </div>
            <div class="columna">
                <div class="campos">
                    <label for="nombre" class="label1">Nombre</label>
                    <label for="nombre" class="label1">
                        <input type="text" id="nombre" name="nombre" required>
                    </label>
                    <label for="rotacionCli" class="label1">Rotación de cliente No</label>
                    <label for="rotacionCli" class="label1">
                        <input type="number" id="rotacionCli" name="rotacionCli" required>
                    </label>
                    <label for="rotacionGr" class="label1">Rotación del grupo No</label>
                    <label for="rotacionGr" class="label1">
                        <input type="number" id="rotacionGr" name="rotacionGr" required>
                    </label>
                </div>
                <div class="container-select">
                    <div class="titulo">
                        <label for="asesor" class="label1">Asesor</label>
                    </div>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="opcion1">Opcion 1</option>
                        <option value="opcion2">Opcion 2</option>
                    </select>
                    <span class="titulo"></span>
                    <i class="fa-solid fa-chevron-down icon"></i>
                </div>
                <div class="container-select">
                    <div class="titulo">
                        <label for="solidario" class="label1">Grupo solidario</label>
                    </div>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="opcion1">Opcion 1</option>
                        <option value="opcion2">Opcion 2</option>
                    </select>
                <span class="titulo"></span>
                <i class="fa-solid fa-chevron-down icon"></i>
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="columna">
                <div class="campos">
                    <label for="monto" class="label1">Monto</label>
                    <label for="monto" class="label1">
                        <input type="number" id="monto" name="monto" required>
                    </label>
                    <label for="interes" class="label1">Tasa de interés</label>
                    <label for="interes" class="label1">
                        <input type="number" id="interes" name="interes" required>
                    </label>
                    <label for="pagos" class="label1">Pagos</label>
                    <label for="pagos" class="label1">
                        <input type="number" id="pagos" name="pagos" required>
                    </label>
                </div>
                <div class="container-select">
                    <div class="titulo">
                        <label for="formapago" class="label1">Forma de pago</label>
                    </div>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="opcion1">Opcion 1</option>
                        <option value="opcion2">Opcion 2</option>
                    </select>
                    <span class="titulo"></span>
                    <i class="fa-solid fa-chevron-down icon"></i>
                </div>
                <label>
                <div class="check-container">
                    <input type="checkbox" id="miCheckbox">Cobrar Microseguro</label>
                </div>
            </div>
            <div class="columna2">
                <div class="campos">
                    <label for="apertura" class="label1">Fecha Apertura</label>
                    <label for="apertura" class="label1">
                        <input type="date" id="apertura" name="apertura" placeholder="/ /" required>
                    </label>
                    <label for="primerpago" class="label1">Primer pago (Interes)</label>
                    <label for="primerpago" class="label1">
                        <input type="date" id="primerpago" name="primerpago" placeholder="/ /" required>
                    </label>
                    <label for="primerpago2" class="label1">Primer Pago (Debe ser)</label>
                    <label for="primerpago2" class="label1">
                        <input type="date" id="primerpago2" name="primerpago2" placeholder="/ /" required>
                    </label>
                    <label for="vencimiento" class="label1">Fecha vencimiento</label>
                    <label for="vencimiento" class="label1">
                        <input type="date" id="vencimiento" name="vencimiento" placeholder="/ /" required>
                    </label>
                    <div class="campos-desactivados">
                        <label for="cuota" class="label1">Cuota</label>
                        <label for="cuota" class="label1">
                            <input type="number" id="cuota" name="cuota" disabled>
                        </label>
                        <label for="cuotaFDG" class="label1"><b>Cuota con FDG</b></label>
                        <label for="cuotaFDG" class="label1">
                            <input type="number" id="cuotaFDG" name="cuotaFDG" disabled>     
                        </label>
                    </div>
                </div>
            </div>
            <div class="columna2">
                <div class="campos">
                    <label for="FDG" class="label1">FDG</label>
                    <label for="FDG" class="label1">
                        <input type="FDG" id="FDG" name="FDG" required>
                    </label>
                    <label for="manejo" class="label1">Manejo</label>
                    <label for="manejo" class="label1">
                        <input type="manejo" id="manejo" name="manejo" required>
                    </label>
                    <label for="seguro" class="label1">Seguro</label>
                    <label for="seguro" class="label1">
                        <input type="seguro" id="seguro" name="seguro" required>
                    </label>
                </div>
            </div>
            <div class="columna2">
                <div class="container-select">
                    <div class="titulo">
                        <label for="formapago" class="label1">Forma de pago</label>
                    </div>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="opcion1">Opcion 1</option>
                        <option value="opcion2">Opcion 2</option>
                    </select>
                    <span class="titulo"></span>
                    <i class="fa-solid fa-chevron-down icon"></i>
                </div>
                <div class="container-select">
                    <div class="titulo">
                        <label for="aprobado" class="label1">Aprobado por</label>
                    </div>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>Seleccione una opción</option>
                        <option value="opcion1">Opcion 1</option>
                        <option value="opcion2">Opcion 2</option>
                    </select>
                    <span class="titulo"></span>
                    <i class="fa-solid fa-chevron-down icon"></i>
                </div>
                <div class="campos">
                    <label for="banco" class="label1">Banco:</label>
                    <label for="banco" class="label1">
                        <input type="banco" id="banco" name="banco" required>
                    </label>
                </div>
            </div>
        </div>   
        <div class="fila">
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" rows="4" cols="50" placeholder="Escribe tu comentario aquí..."></textarea> 
            <button class="btn-hecho">
                <i class="fas fa-save"></i> Guardar
            </button>
            </div>   
        </div>
    </div>
</div>
