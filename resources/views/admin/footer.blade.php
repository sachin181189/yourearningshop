
            <footer class="footer text-center" style="color:#000;font-size:15px">
                All Rights Reserved by Your earning shop. Designed and Developed by <a href="#" target="_blank">Bugerro soft solution</a>.
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

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>-->
    <!--<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>-->
    <!--<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>-->
    <!--<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.flash.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.print.min.js"></script>-->

    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
        $('.zero_config').DataTable();
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
                columns: [1,2,3,4,5,10]
            }
       },
       {
           extend: 'csv',
           footer: false,
           exportOptions: {
                columns: [0,1,2,3,4,5,10]
            }
          
       },
       {
           extend: 'excel',
           footer: false,
           exportOptions: {
                columns: [0,1,2,3,4,5,10]
            }
       },
       {
           extend: 'print',
           footer: false,
           exportOptions: {
                columns: [0,1,2,3,4,5,10]
            }
       }       
    ]  
    });
});
    </script>
</body>

</html>

<script>
    function gotoUrl(id,url)
    {
      $.ajax({
             url: "{{ route('readnotification') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "id":id
                },
             error: function() {
                swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {
                if(data == "Changed")
                {
                    location.href=url;
                }
                else
                {
                    swal("", "Something is wrong !", "error");
                }
             }
          });
        }
        
function setProductSlug(title)
{
    var slug = title.replace(/ /g,"-");
    $("#slug").val(slug);
}
</script>