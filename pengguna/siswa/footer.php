<html>

<head>
   <title></title>
</head>

<body>
   <!-- Start = Isi Footer -->
   <footer>
      <div class="col">
         <center> SPPGB </center>
      </div>
   </footer>
   <!-- End = Isi Footer -->

   <!-- jQuery -->
   <script src="../src/assets/vendors/jquery/dist/jquery.min.js"></script>
   <!-- Bootstrap -->
   <script src="../src/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Custom Theme Scripts -->
   <script src="../src/assets/js/custom.min.js"></script>

   <!-- DataTables -->
   <script src="../src/assets/plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="../src/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../src/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
   <script src="../src/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script>
   $(function() {
      $("#example1").DataTable({
         "responsive": true,
         "autoWidth": false,
      });
      $('#example2').DataTable({
         "paging": true,
         "lengthChange": false,
         "searching": false,
         "ordering": true,
         "info": true,
         "autoWidth": false,
         "responsive": true,
      });
   });
   </script>
</body>

</html>