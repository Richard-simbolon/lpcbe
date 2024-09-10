@extends('layouts.app')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <div class="img-profile rounded-circle" style="    background-color: #83f0a7;color: white;font-weight: bold;justify-content: center;text-align: center;">
                                   <span style="font-size: larger;">{{substr(Auth::user()->name, 0, 1)}}</span>
                                </div>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Leads Event</h1>
                    <p class="mb-4">Data ini mencakup informasi kontak penting seperti nama, email, dan nomor telepon peserta, serta detail tambahan seperti alamat, username instagram, dan sumber kampanye pemasaran.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Leads</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  id="leadsTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>                
                                        <th>email</th>
                                        <th>No HP</th>
                                        <th>Alamat</th>
                                        <th>UTM Campaign</th>
                                        <!-- <th>Actions</th> -->
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
@endsection

@section('script')
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
                // { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

    $('#pekerjaan, #utm_campaign').keyup(function() {
        table.draw();
    });
});
</script>
@endsection