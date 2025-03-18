
    <footer class="footer text-center">
                All Rights Reserved by Your earning shop. Designed and Developed by Bugerro soft solution.
            </footer>
        </div>
    </div>
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/chart/chart-page-init.js')}}"></script>
    
    <script src="{{ URL::asset('admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ URL::asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ URL::asset('admin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ URL::asset('admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ URL::asset('admin/dist/js/custom.min.js') }}"></script>
    <!-- this page js -->
    <script src="{{ URL::asset('admin/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/editors/editor.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/libs/select2/dist/js/select2.min.js') }}"></script>
    
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
        
         $(document).ready(function() {
          $('.summernote').summernote({
            height: 200
          });

        });

        $(document).ready(function() {
    $('.product_list').DataTable( {
        dom: 'Bfrtip',
        buttons: [
       {
           extend: 'pdf',
           footer: true,
           exportOptions: {
                columns: [1,2,3,4,5,6]
            }
       },
       {
           extend: 'csv',
           footer: false,
           exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
          
       },
       {
           extend: 'excel',
           footer: false,
           exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
       },
       {
           extend: 'print',
           footer: false,
           exportOptions: {
                columns: [0,1,2,3,4,5,6]
            }
       }       
    ]  
    });
});
    </script>
</body>

</html>