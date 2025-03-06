import './bootstrap';
import $ from 'jquery'; // Importar jQuery
import 'datatables.net-dt'; 
import 'datatables.net-colreorder';
import 'datatables.net-keytable-dt';
import 'datatables.net-scroller-dt';

// Inicializar DataTables
$(document).ready(function() {
    $('#mitabla').DataTable({
        "paging": true,  // Habilita la paginación
        "lengthChange": true,  // Permite cambiar la cantidad de registros por página
        "searching": true,  // Habilita la búsqueda
        "ordering": true,  // Habilita el orden de las columnas
        "info": true,  // Muestra información sobre los registros
        "autoWidth": false,  // Desactiva el ajuste automático de anchos de columnas
        "responsive": true,  // Hace la tabla responsive
        "colReorder":true,
        "language": {
            "decimal": ",",  // Configuración del separador decimal
            "thousands": ".",  // Configuración del separador de miles
            "lengthMenu": "Mostrar _MENU_ registros por página",  // Menú para seleccionar cuántos registros mostrar
            "zeroRecords": "No se encontraron resultados",  // Mensaje si no hay registros
            "info": "Mostrando página _PAGE_ de _PAGES_",  // Mensaje de información sobre las páginas
            "infoEmpty": "No hay registros disponibles",  // Mensaje cuando no hay registros
            "infoFiltered": "(filtrado de _MAX_ registros totales)",  // Mensaje si hay filtros aplicados
            "search": "Buscar:",  // Texto del campo de búsqueda
            "paginate": {
                "first": "Primera",  // Botón para ir a la primera página
                "previous": "Anterior",  // Botón para ir a la página anterior
                "next": "Siguiente",  // Botón para ir a la página siguiente
                "last": "Última"  // Botón para ir a la última página
            },
            "aria": {
                "sortAscending": ": activar para ordenar la columna de manera ascendente",  
                "sortDescending": ": activar para ordenar la columna de manera descendente"  
            }
        },
        "lengthMenu": [5, 10, 25, 50, 100], 
        "pageLength": 5 
    });
});


    document.addEventListener("DOMContentLoaded", function() {
        // Seleccionamos todos los enlaces dentro de la clase 'menu'
        const menuItems = document.querySelectorAll('.menu > a');

        // Iteramos sobre cada uno de los elementos 'a'
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                // Seleccionamos el siguiente elemento hermano (el <ul> con las opciones)
                const submenu = item.nextElementSibling;

                // Si el submenu está visible, lo ocultamos; si está oculto, lo mostramos
                if (submenu.style.display === 'none' || submenu.style.display === '') {
                    submenu.style.display = 'block'; // Mostrar
                } else {
                    submenu.style.display = 'none'; // Ocultar
                }
            });
        });
    });
const menUItemDropDown = document.querySelectorAll('.menu-item-dropdown');

menUItemDropDown.forEach((menuItem)=>{
    menuItem.addEventListener('click',()=>{
        const subMenu = menuItem.querySelector('.sub-menu');
        const isActive = menuItem.classList.toggle('sub-menu-toggle');

        if (subMenu) {
            if(isActive){
                subMenu.style.height = `${subMenu.scrollHeight + 6}px`;
                subMenu.style.paging = '0.2rem 0';
            }else{
                subMenu.style.height = '0';
                subMenu.style.paging = '0';
            }
            
        }
        menUItemDropDown.forEach((item)=>{
            if (item !== menuItem) {
                const otherSubmenu = item.querySelector('.sub-menu');
                if(otherSubmenu){
                    item.classList.remove('sub-menu-toggle');
                    otherSubmenu.style.height = '0';
                    otherSubmenu.style.paging = '0';
                }
            }
        })
    })
})