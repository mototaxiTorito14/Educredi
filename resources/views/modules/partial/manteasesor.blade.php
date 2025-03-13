<link href="{{ Vite::asset('node_modules/datatables.net-dt/css/dataTables.dataTables.min.css') }}" rel="stylesheet">
@include('modules.modals.modalcliente')
<div class="container">
    <div class="main-content">
        <div class="container mt-4">
            <h1>Mantenimiento de Asesores</h1>
            <div class="btn-grupos" style="display: flex; margin-bottom: 10px; margin-top: 10px; margin-left: 10px;">
                <a href="" id="openModalBtn" class="btn-agregar" style="margin-right: 15px;"><span>Nuevo Grupo</span></a>
                <a href="" id="openModalBtn" class="btn-eliminar"><span>Eliminar Grupo</span></a>


            </div>
            <div class="">
                <div class="modal-ge">
                    <div class="input-group">
                        <label for="sfdm" class="label1">
                            <select id="sfdm" name="sfdm" required>
                                <option value="">Seleccione SFDM</option>  <!-- Opción por defecto -->
                                <option value="option1">Opción 1</option>
                                <option value="option2">Opción 2</option>
                                <option value="option3">Opción 3</option>
                                <!-- Puedes añadir más opciones aquí -->
                            </select>
                        </label>
                    </div>
                    <div class="input-group">
                        <label for="grupo" class="label1">
                            <select id="grupo" name="grupo" required>
                                <option value="">Seleccione un Grupo</option>  <!-- Opción por defecto -->
                                <option value="grupo1">Grupo 1</option>
                                <option value="grupo2">Grupo 2</option>
                                <option value="grupo3">Grupo 3</option>
                                <!-- Puedes añadir más opciones aquí -->
                            </select>
                        </label>
                    </div>
                </div>
                       
            </div>
            <table id="mitabla" class="table table-striped" style="width:100%">
                
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th></th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>Apellidos</td>
                        <td><a href="" id="openModalBtn" class="btn-eliminar"><span>Insertar</span></a>
                            <a href="" id="openModalBtn" class="btn-eliminar"><span>Eliminar</span></a>

                        </td>
                        
                        
                        
                       
                    </tr>

                </tbody>
                
            </table>
        </div>
    </div>

</div>
