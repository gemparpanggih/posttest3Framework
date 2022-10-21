<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Listrik Biru</title>
    <link href="styles/dashboard.css" rel="stylesheet">
    <link href="sidebars.css" rel="stylesheet">
</head>
<body>
    
    <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 bg-primary" href="/">{{ Auth::user()->name ?? "Home Page"}}</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
            <a class="nav-link px-3 text-bg-primary" href="/"><-- Back</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Pembayaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Tarif
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Pelanggan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Admin
                    </a>
                </li>
               
                </ul>
            </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <h2>Data Tarif</h2>
                <br>
                <a class="btn btn-success btn-block mb-4" href="/tarif/tambah">+ Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <tr class="mode">
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nometer</th>
                            <th scope="col">Voltase</th>
                        </tr>
                        @foreach ($pelanggans as $pelanggan)
                            <tr class="mode">
                                <th scope="row">{{ $pelanggan->id}}</th>
                                <td>{{ $pelanggan->nama}}</td>
                                <td>{{ $pelanggan->alamat}}</td>
                                <td>{{ $pelanggan->nometer}}</td>
                                <td>{{ $pelanggan->tarif->voltase}}</td>
                            </tr>
                        @endforeach
                    </table>
                    
                </div>
            </main>
        </div>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>
</body>
</html>