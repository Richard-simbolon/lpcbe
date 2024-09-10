<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <title>Leads DataTable</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="container mt-4">
    <h1>Leads Event Larutan Penyegar Cap Badak</h1>
    <!-- <div class="mb-3">
        <label for="pekerjaan">Email:</label>
        <input type="text" id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="utm_campaign">UTM Campaign:</label>
        <input type="text" id="utm_campaign" class="form-control">
    </div> -->
    <table id="leadsTable" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>                
                <th>email</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>UTM Campaign</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#leadsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route('leads.data') }}',
            data: function (d) {
                d.pekerjaan = $('#pekerjaan').val();
                d.utm_campaign = $('#utm_campaign').val();
            }
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phone', name: 'phone' },
            { data: 'address', name: 'address' },
            { data: 'utm_campaign', name: 'utm_campaign' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    $('#pekerjaan, #utm_campaign').keyup(function() {
        table.draw();
    });
});
</script>
    </body>
</html>
