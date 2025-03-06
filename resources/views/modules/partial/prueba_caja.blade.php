<link href="{{ Vite::asset('node_modules/datatables.net-dt/css/dataTables.dataTables.min.css') }}" rel="stylesheet">
<div class="container">
    <div class="main-content">
        <div class="container mt-4">
            <h1>Tabla con DataTables</h1>
            <table id="mitabla" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Saldo</th>
                        <th>Ultim Movimiento</th>
                        <th>Poximo Pago</th>
                        <th>Valor</th>
                        <th>Int. Normal</th>
                        <th>Int. Morator</th>
                        <th>Micro seg</th>
                        <th>Seguro</th>
                        <th>IVA</th>
                        <th>Capital</th>
                        <th>Frecuencia</th>
                        <th>Apertura</th>
                        <th>Vencimiento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre</td>
                        <td>zxczxczxczxcasdasdasdasdasdasd</td>
                        <td>Saldo</td>
                        <td>Ultim Movimiento</td>
                        <td>Poximo Pago</td>
                        <td>Valor</td>
                        <td>Int. Normal</td>
                        <td>Int. Morator</td>
                        <td>Micro seg</td>
                        <td>Seguro</td>
                        <td>IVA</td>
                        <td>Capital</td>
                        <td>Frecuencia</td>
                        <td>Apertura</td>
                        <td>Vencimiento</td>
                    </tr>
                    <!-- Datos de la tabla -->
                    {{-- <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr> --}}
                    <!-- Más filas aquí -->
                </tbody>
                
            </table>
        </div>
    </div>

</div>
