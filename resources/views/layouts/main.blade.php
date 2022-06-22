<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website."
        />
        <meta
            name="keywords"
            content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template"
        />
        <meta name="author" content="elemis" />
        <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
        <link rel="shortcut icon" href="{{ asset('./assets/img/favicon.png') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/plugins.css') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/style.css') }}" />
        <link
            rel="preload"
            href="{{ asset('./assets/css/fonts/dm.css') }}"
            as="style"
            onload="this.rel='stylesheet'"
        />
    </head>

    <body>
        <div class="content-wrapper">
            <header class="wrapper">
                <nav
                    class="navbar navbar-expand-lg classic transparent navbar-light"
                >
                    <div
                        class="container flex-lg-row flex-nowrap align-items-center"
                    >
                        <div class="navbar-brand w-100">
                            <a href="./index.html">
                                <img
                                    src="{{ asset('./assets/img/logo.png') }}"
                                    srcset="{{ asset('./assets/img/logo@2x.png') }} 2x"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div
                            class="navbar-collapse offcanvas offcanvas-nav offcanvas-start"
                        >
                            <div class="offcanvas-header d-lg-none d-xl-none">
                                <a href="./index.html"
                                    ><img
                                        src="{{ asset('./assets/img/logo-light.png') }}"
                                        srcset="
                                            {{ asset('./assets/img/logo-light@2x.png') }} 2x
                                        "
                                        alt=""
                                /></a>
                                <button
                                    type="button"
                                    class="btn-close btn-close-white"
                                    data-bs-dismiss="offcanvas"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div
                                class="offcanvas-body ms-lg-auto d-flex flex-column h-100"
                            >
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/"
                                            >Beranda</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about"
                                            >Tentang</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/blog"
                                            >Artikel</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/gallery"
                                            >Galeri</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact"
                                            >Kontak</a
                                        >
                                    </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div
                                    class="d-lg-none mt-auto pt-6 pb-6 order-4"
                                >
                                    <a
                                        href="mailto:first.last@email.com"
                                        class="link-inverse"
                                        >info@email.com</a
                                    >
                                    <br />
                                    +62 812 4614 8901 <br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"
                                            ><i class="uil uil-twitter"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="uil uil-facebook-f"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="uil uil-instagram"></i
                                        ></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                                <!-- /offcanvas-nav-other -->
                            </div>
                            <!-- /.offcanvas-body -->
                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="navbar-other ms-lg-4">
                            <ul
                                class="navbar-nav flex-row align-items-center ms-auto"
                            >
                                <li class="nav-item d-lg-none">
                                    <button class="hamburger offcanvas-nav-btn">
                                        <span></span>
                                    </button>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.container -->
                </nav>
                <!-- /.navbar -->
            </header>
            <!-- /header -->

            @yield('page-content')

        </div>
        <!-- end content wrapper -->

        <footer class="bg-dark text-inverse">
            <div class="container pt-12 pb-9 text-center">
                <div class="row mt-md-7 mt-lg-0">
                    <div class="col-xl-10 mx-auto">
                        <p>© {{ date('Y') }} Liang Ndara - powered by <a href="http://jongkreatif.id" target="_blank">JongKreatif</a>.</p>
                        <nav class="nav social justify-content-center">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </footer>
        <div class="progress-wrap">
            <svg
                class="progress-circle svg-content"
                width="100%"
                height="100%"
                viewBox="-1 -1 102 102"
            >
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <script src="{{ asset('./assets/js/plugins.js') }}"></script>
        <script src="{{ asset('./assets/js/theme.js') }}"></script>
        <script src="{{ asset('./assets/js/custom.js') }}"></script>
    </body>
</html>
