$(function () {
    $('.dataTable').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    });
      //Date picker
      $('.datepicker').datepicker({
        autoclose: true
      });
       //Initialize Select2 Elements
    $('.select2').select2();
  })
