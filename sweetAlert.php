<!DOCTYPE html>
<html>
    <head>
        <title>How to use sweet alert using PHP - Devnote.in</title>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body>
<script type="text/javascript">
    $(document).ready(function() {
        swal({
            title: "Are you sure!",
            text: "Do you really want to remove user!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                swal("Yaa! User successfully deleted!", {
                    icon: "success",
                });
            } else {
                swal("User not deleted your user is safe!", {
                    icon: "error",
                });
            }
        });
    });
</script>
</body>
</html>