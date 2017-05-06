<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	<!--  Scripts -->
                <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
                <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

 
<!-- For the sake of making things easier for you, instead of having your other js in another doc, just have it below -->
                <script>
                $(document).ready(function() {
                                $('#example').DataTable( {
                                "processing": true,
                    "ajax": "data/object_deep.txt",
                    "columns": [
                                { "data": "name" },
                                { "data": "hr.position" },
                                { "data": "contact.0" },
                                { "data": "contact.1" },
                                { "data": "hr.start_date" },
                                { "data": "hr.salary" }
                                           
                              ]
                       } );         
                } );
                </script>	

	<title>Test</title>
</head>
<body>

<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    
</body>
</html>