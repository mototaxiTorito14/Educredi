<div class="container">
    <div class="main-content">
        <h1>Desembolso de préstamos</h1>
        <div class="campos-grupos">
            <div class="input-group">
                <label for="codigo" class="label1">
                    <input type="codigo" id="codigo" name="codigo" placeholder="Código:" required>
                </label>
            </div>
            <div class="input-group">
                <label for="nombre" class="label1">
                    <input type="nombre" id="nombre" name="nombre" placeholder="Nombre:" required>
                </label>
            </div>
        </div>
        <div class="campos-grupos">
            <div class="input-group">
                <label for="linea" class="label1">
                    <input type="linea" id="linea" name="linea" placeholder="Linea:" required>
                </label>
            </div>
            <div class="input-group">
                <label for="rotacion" class="label1">
                    <input type="rotacion" id="rotacion" name="rotacion" placeholder="Rotación de cliente No." required>
                </label>
            </div>
        </div>
        <div class="campos-grupos">
            <div class="input-group">
                <label for="sucursal" class="label1">
                    <input type="sucursal" id="sucursal" name="sucursal" placeholder="Sucursal:" required>
                </label>
            </div>
            <div class="input-group">
                <label for="asesor" class="label1">
                    <input type="asesor" id="asesor" name="asesor" placeholder="Asesor:" required>
                </label>
            </div>
        </div>
        <div class="campos-grupos">
            <div class="input-group">
                <label for="centro" class="label1">
                    <input type="centro" id="centro" name="centro" placeholder="Centro:" required>
                </label>
            </div>
            <div class="input-group">
                <label for="solidario" class="label1">
                    <input type="solidario" id="solidario" name="solidario" placeholder="Grupo solidario:" required>
                </label>
            </div>
        </div>
        
        <div class="campos-grupos">
            <div class="columna">
                <div class="input-group">
                    <label for="monto" class="label1">
                        <input type="monto" id="monto" name="monto" placeholder="Monto:" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="tasa" class="label1">
                        <input type="tasa" id="tasa" name="tasa" placeholder="Tasa de interés:" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="pagos" class="label1">
                        <input type="pagos" id="pagos" name="pagos" placeholder="Pagos:" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="formapago" class="label1">
                        <input type="formapago" id="formapago" name="formapago" placeholder="Forma de pago:" required>
                    </label>
                </div>
                <label>
                    <input type="checkbox" id="miCheckbox">
                    Cobrar Micro Seguro
                </label>
            </div>
            <div class="columna">
                <div class="input-group">
                    <label for="fechaapertura" class="label1">
                        <input type="fechaapertura" id="fechaapertura" name="fechaapertura" placeholder="Fecha apertura:" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="primerpago" class="label1">
                        <input type="primerpago" id="primerpago" name="primerpago" placeholder="Primer Pago (Debe ser):" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="fechavencimiento" class="label1">
                        <input type="fechavencimiento" id="fechavencimiento" name="fechavencimiento" placeholder="Fecha vencimiento:" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="cuota" class="label1">
                        <input type="cuota" id="cuota" name="cuota" placeholder="Cuota:" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="cuotafdg" class="label1">
                        <input type="cuotafdg" id="cuotafdg" name="cuotafdg" placeholder="Cuota con FDG:" required>
                    </label>
                </div>
            </div>
            <div class="columna">
                <div class="input-group">
                    <label for="fdf" class="label1">
                        <input type="fdg" id="fdg" name="fdg" placeholder="FDG:" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="manejo" class="label1">
                        <input type="manejo" id="manejo" name="manejo" placeholder="Manejo:" required>
                    </label>
                </div>
                <div class="input-group">
                    <label for="seguro" class="label1">
                        <input type="seguro" id="seguro" name="seguro" placeholder="Seguro:" required>
                    </label>
                </div>
            </div>
        </div>
        <label for="comentarios">Comentarios:</label>
        <textarea id="comentarios" name="comentarios" rows="4" cols="50" placeholder="Escribe tu comentario aquí..."></textarea>    
    </div>
</div>