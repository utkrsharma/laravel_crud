<!DOCTYPE html>
<html>
<head>
    <title>Datatables Server Side Processing in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>       
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <br />
    <h3 align="center">Datatables Server Side Processing in Laravel</h3>
    <br />
    <table id="employee_table" class="table table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th>S. No.</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
    </table>
</div>
<script type="text/javascript">
$(document).ready(function() {
     $('#employee_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo e(route('ajaxdata.getdata')); ?>",
        "columns":[
            {"data": "id"},
            { "data": "first_name" },
            { "data": "last_name" },
        ]
     });
});
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_crud\datatables_crud\resources\views/crud/ajaxdata.blade.php ENDPATH**/ ?>