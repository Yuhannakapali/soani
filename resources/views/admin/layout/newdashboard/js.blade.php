<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('./js/fileinput.js')}}"></script>
{{-- test script --}}
<script src="{{asset('js/alert.js')}}"></script>
{{-- tiny mce --}}
<script src="{{asset('./js/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('./js/tinymce.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>



<!-- Page Script -->


<script type="text/javascript" >
  $(function () {
    //Add text editor
   
    $('#message').summernote()
  })
</script>