<!DOCTYPE html>
<html>
<head>
    <title>bootstrap datepicker examples</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Bootstrap CSS and bootstrap datepicker CSS used for styling the demo pages-->
    <link rel="stylesheet" href="../Periode%202/bowling/css/datepicker.css">
    <link rel="stylesheet" href="../Periode%202/bowling/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="hero">
        <input  type="text" placeholder="Datum"  id="example1">
    </div>
</div>



<!-- Load jQuery and bootstrap datepicker scripts -->
<script src="../Periode%202/bowling/js/jquery-1.9.1.min.js"></script>
<script src="../Periode%202/bowling/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#example1').datepicker({
            format: "dd/mm/yyyy"
        });

    });
</script>
</body>
</html>
