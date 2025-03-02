import './bootstrap';
import $ from 'jquery'; // Importar jQuery
import 'datatables.net-bs5'; // Importar DataTables con Bootstrap 5

// Inicializar DataTables
$(document).ready(function() {
    $('#mitabla').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true
    });
});