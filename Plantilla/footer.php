</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Supermercado 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Listo para irte?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Salir" si estas listo para salir de la pagina.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../Controladores/logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../Plantilla/vendor/jquery/jquery.min.js"></script>
    <script src="../Plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../Plantilla/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../Plantilla/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../Plantilla/vendor/chart.js/Chart.min.js"></script>
    <script src="../Plantilla/vendor/datatables/jquery.dataTables.min.js"></script> <!--NEW-->
    <script src="../Plantilla/vendor/datatables/dataTables.bootstrap4.min.js"></script> <!--NEW-->

    <!-- Page level custom scripts -->
    <script src="../Plantilla/js/demo/chart-area-demo.js"></script>
    <script src="../Plantilla/js/demo/chart-pie-demo.js"></script>
    <script src="../Plantilla/js/demo/datatables-demo.js"></script><!--NEW-->

    <script src="../Plantilla/js/productos/logicaProductos.js"></script><!--NEW-->

    <!-- Script de añadir fila añadido Brayan -->
    <script src="../Plantilla/js/codigoVentas.js"></script>

    <script>

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'
        
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                alert("Campos vacios o relleandos incorrectamente")
                }
        
                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>

</body>

</html>