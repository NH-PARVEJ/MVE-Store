  <!-- Bootstrap bundle JS -->
  <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  {{-- vectormap cdn   --}}
  <script src="{{asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{asset('backend/assets/js/pace.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/chartjs/js/Chart.extension.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
  {{-- jquery datatable cdn --}}
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <!-- notifecation js -->
  <script src="{{asset(('backend/assets/plugins/notifications/js/lobibox.min.js'))}}"></script>
	<script src="{{asset(('backend/assets/plugins/notifications/js/notifications.min.js'))}}"></script>
	<script src="{{asset(('backend/assets/plugins/notifications/js/notification-custom-script.js'))}}"></script>

  <script src="{{asset('backend/assets/js/app.js')}}"></script>
  <script src="{{asset('backend/assets/js/index2.js')}}"></script> 
  {{-- text edtor --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
  {{-- toastr cnd --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  

  <script>
    //product Start
    new PerfectScrollbar(".best-product")
    // text edtor End
  </script>

  <script>
    // text edtor Start
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
    console.log( editor );
    } )
    .catch( error => {
    console.error( error );
    } );
    // text edtor End
  </script>

  <script>
    // Autocomplite Start
    $( function() {
    var availableTags = [
    "Dhaka",
    "Chattogram",
    "Sylhet",
    "Khulna",
    "Rajshahi",
    "Rangpur",
    "Mymensingh",
    "Barishal",
    ];
    $( "#tags" ).autocomplete({
    source: availableTags
    });
    } );
    // Autocomplite End
  </script>

  <script>
    // datatable Start
    $(document).ready(function () {
    $('#example').DataTable();

    } );
    // datatable End
  </script>

  <script type="text/javascript">
  
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "2000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;

    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;

    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
    }
    @endif
</script>
