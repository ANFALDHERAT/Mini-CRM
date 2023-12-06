<!-- latest jquery-->
<script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>







<!-- Bootstrap js-->
<script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- feather icon js-->
<script src="{{ URL::asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- Sidebar jquery-->
<script src="{{ URL::asset('assets/js/sidebar-menu.js') }}"></script>

<!--chartist js-->
<script src="{{ URL::asset('assets/js/chart/chartist/chartist.js') }}"></script>

<!--chartjs js-->
<script src="{{ URL::asset('assets/js/chart/chartjs/chart.min.js') }}"></script>

<!-- lazyload js-->
<script src="{{ URL::asset('assets/js/lazysizes.min.js') }}"></script>

<!--copycode js-->
<script src="{{ URL::asset('assets/js/prism/prism.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/custom-card/custom-card.js') }}"></script>

<!--counter js-->
<script src="{{ URL::asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/counter/counter-custom.js') }}"></script>

<!--peity chart js-->
<script src="{{ URL::asset('assets/js/chart/peity-chart/peity.jquery.js') }}"></script>

<!-- Apex Chart Js -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!--sparkline chart js-->
<script src="{{ URL::asset('assets/js/chart/sparkline/sparkline.js') }}"></script>

<!--Customizer admin-->
<script src="{{ URL::asset('assets/js/admin-customizer.js') }}"></script>

<!--dashboard custom js-->
<script src="{{ URL::asset('assets/js/dashboard/default.js') }}"></script>

<!--right sidebar js-->
<script src="{{ URL::asset('assets/js/chat-menu.js') }}"></script>

<!--height equal js-->
<script src="{{ URL::asset('assets/js/height-equal.js') }}"></script>

<!-- lazyload js-->
<script src="{{ URL::asset('assets/js/lazysizes.min.js') }}"></script>

<!--script admin-->
<script src="{{ URL::asset('assets/js/admin-script.js') }}"></script>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            showCloseButton: true
        });
    @elseif (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            showConfirmButton: false,
            showCloseButton: true
        });
    @endif
</script>



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">
<!-- DataTables Buttons JS (Latest Version) -->
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>

<!-- PDFMake Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });


    $(document).ready(function() {
        // Check if DataTable is already initialized
        if ($.fn.dataTable.isDataTable('#example')) {
            // Destroy the existing DataTable instance
            $('#example').DataTable().destroy();
        }

        // Initialize DataTable with Buttons
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                 'csv', 'excel', 'pdf',
            ]
        });
    });
</script>






@yield('scripts')
