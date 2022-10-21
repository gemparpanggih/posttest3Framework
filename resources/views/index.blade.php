<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Listrik Biru</title>
</head>
<body>
    <main>
        <div class="container py-4">
            <header>
                <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                        <span class="fs-4">{{ Auth::user()->name ?? "Listrik Biru"}}</span>
                    </a>
                    
                    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ Auth::user() ? '/dashboard': '/'}}">{{ Auth::user() ? 'Dashboard' : 'Home'}}</a></li>
                        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
                        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Pricing</a>
                        <a class="me-3 py-2 text-dark text-decoration-none" href="{{ Auth::user() ? '/logout': '/login'}}">{{ Auth::user() ? 'Logout' : 'Login'}}</a>
                    </nav>
                </div>

            </header>
            
            <div class="container p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Listrik Biru</h1>
                        <p class="col-md-8 fs-4">Listrik Biru untuk dunia yang lebih biru. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quidem impedit minima nemo sapiente dignissimos vero commodi, autem ullam. Totam.</p>
                        <a href="/login" class="btn btn-primary btn-lg">Login</a>
                </div>
                </div>

                <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg-primary rounded-3">
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, perferendis esse ex nulla repellendus numquam mollitia hic. Quaerat, ex adipisci!.</p>
                        <button class="btn btn-outline-light" type="button">Example button</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Lorem Ipsum Dolor</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae fuga assumenda architecto, eaque quasi nesciunt inventore temporibus quibusdam consequatur numquam incidunt delectus autem repellat harum tempora soluta ab voluptates amet..</p>
                        <button class="btn btn-outline-secondary" type="button">Example button</button>
                    </div>
                </div>
            </div>

            <div class="pricing-header p-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4 fw-normal">Harga</h1>
                    <p class="fs-5 text-muted">Dengan cepat menemukan tarif listrik anda disini! <br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis exercitationem autem sapiente sunt error nulla dolor facere sit quam ipsa?.</p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">200<small class="text-muted fw-light">VA</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>Kuat untuk Rumah Kecil</li>
                        <li>Harga Terjangkau</li>
                        <li>Support Terbatas</li>
                        
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">900<small class="text-muted fw-light">VA</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li></li>
                        <li>Kuat untuk Rumah Besar</li>
                        <li>Harga Ergonomis</li>
                        <li>Akses Support Premium</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">2400<small class="text-muted fw-light">VA</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>Kuat untuk Satu Perusahaan</li>
                        <li>Harga Premium Bersaing</li>
                        <li>Akses Support Premium Unlimeted</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="text-center text-lg-start bg-white text-muted">
            <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-github"></i>
                    </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>PT. Listrik Biru
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur nobis quisquam cum quos voluptatum, ullam illo nostrum non itaque repellendus.
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home text-secondary"></i> Indoensia, Kec. Wakanda, Kel. Qidian</p>
                        <p>
                            <i class="fas fa-envelope text-secondary"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> + 62 8 22 5294 0003</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> + 62 8 22 5294 0003</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                    © 2022 Copyright:
                    <a class="text-reset fw-bold" href="gemparpanggih.github.io">Gempar Panggih D. Putra</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>