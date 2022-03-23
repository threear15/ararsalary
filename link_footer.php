<script src="assets/js/sweetalert.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.v4.1.3.js"></script>
    <script src="assets/vendor/semantic-ui/semantic.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- @yield('scripts') -->
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script type="text/javascript">
        /*$("#button-a").click(function(){
            swal("Hello Worlds");
        });*/
        document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}

        $(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 5 ],
            orderData: [ 5, 0 ]
        } ]
    } );
} );
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true,
                pageLength: 15,
                lengthChange: false,
                searching: true,
            });
        });

        $('.ui.dropdown.getemail').dropdown({
            onChange: function (value, text, $selectedItem) {
                $('select[name="name"] option').each(function () {
                    if ($(this).val() == value) {
                        var e = $(this).attr('data-e');
                        var r = $(this).attr('data-ref');
                        $('input[name="email"]').val(e);
                        $('input[name="ref"]').val(r);
                    };
                });
            }
        });

        $(document).ready(function() {
            $.notify({
                icon: 'ui icon check',
                message: "DATASTIQ Digital Marketing Agency"},
                {type: 'success',timer: 400}
            );
        });
    </script>
</body>

</html>
