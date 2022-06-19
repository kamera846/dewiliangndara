@extends('layouts.main') @section('page-content')
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                <h1 class="mb-3">Our Blogs</h1>
                <p class="lead px-lg-5 px-xxl-8">
                    Welcome to our journal. Here you can find the latest company
                    news and business articles.
                </p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light wrapper-border">
    <div class="container inner py-8">
        <div class="row justify-content-center gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
            <div class="col-xl-6 col-lg-8 col-md-10 sidebar">
                <form class="search-form">
                    <div class="form-floating mb-0">
                        <input
                            id="search-form"
                            type="text"
                            class="form-control"
                            placeholder="Search"
                        />
                        <label for="search-form">Search</label>
                    </div>
                </form>
                <!-- /.search-form -->
            </div>
            <!-- /column .sidebar -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
                <div class="blog classic-view">
                    <article class="post">
                        <div class="card">
                            <figure
                                class="card-img-top overlay overlay-1 hover-scale"
                            >
                                <a href="/blog-detail"
                                    ><img
                                        src="./assets/img/photos/b1.jpg"
                                        alt=""
                                /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category"
                                            >Teamwork</a
                                        >
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title mt-1 mb-0">
                                        <a class="link-dark" href="/blog-detail"
                                            >Amet Dolor Bibendum Parturient
                                            Cursus</a
                                        >
                                    </h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>
                                        Duis mollis, est non commodo luctus,
                                        nisi erat porttitor ligula, eget lacinia
                                        odio sem nec elit. Nullam quis risus
                                        eget urna mollis ornare vel. Nulla vitae
                                        elit libero, a pharetra augue. Praesent
                                        commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Sed posuere
                                        consectetur est at lobortis. Cras mattis
                                        consectetur purus sit amet fermentum.
                                        Fusce dapibus, tellus ac cursus commodo,
                                        tortor mauris condimentum nibh. Cras
                                        mattis consectetur purus.
                                    </p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                            <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i
                                        ><span>5 Jul 2021</span>
                                    </li>
                                    <li class="post-author">
                                        <a href="#"
                                            ><i class="uil uil-user"></i
                                            ><span>By Sandbox</span></a
                                        >
                                    </li>
                                    <li class="post-comments">
                                        <a href="#"
                                            ><i class="uil uil-comment"></i
                                            >3<span> Comments</span></a
                                        >
                                    </li>
                                    <li class="post-likes ms-auto">
                                        <a href="#"
                                            ><i class="uil uil-heart-alt"></i
                                            >3</a
                                        >
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </article>
                    <!-- /.post -->
                </div>
                <!-- /.blog -->
                <div class="row justify-content-center">
                    <div class="col">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a
                                    class="page-link"
                                    href="#"
                                    aria-label="Previous"
                                >
                                    <span aria-hidden="true"
                                        ><i class="uil uil-arrow-left"></i
                                    ></span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"
                                        ><i class="uil uil-arrow-right"></i
                                    ></span>
                                </a>
                            </li>
                        </ul>
                        <!-- /.pagination -->
                    </div>
                </div>
            </div>
            <!-- /column -->
            <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
                <div class="widget">
                    <h4 class="widget-title mb-3">Recent Post</h4>
                    <ul class="image-list">
                        <li>
                            <figure class="rounded">
                                <a href="/blog-detail"
                                    ><img
                                        src="./assets/img/photos/a1.jpg"
                                        alt=""
                                /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2">
                                    <a class="link-dark" href="/blog-detail"
                                        >Magna Mollis Ultricies</a
                                    >
                                </h6>
                                <ul class="post-meta">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i
                                        ><span>26 Mar 2021</span>
                                    </li>
                                    <li class="post-comments">
                                        <a href="#"
                                            ><i class="uil uil-comment"></i>3</a
                                        >
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                        <li>
                            <figure class="rounded">
                                <a href="/blog-detail"
                                    ><img
                                        src="./assets/img/photos/a2.jpg"
                                        alt=""
                                /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2">
                                    <a class="link-dark" href="/blog-detail"
                                        >Ornare Nullam Risus</a
                                    >
                                </h6>
                                <ul class="post-meta">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i
                                        ><span>16 Feb 2021</span>
                                    </li>
                                    <li class="post-comments">
                                        <a href="#"
                                            ><i class="uil uil-comment"></i>6</a
                                        >
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                        <li>
                            <figure class="rounded">
                                <a href="/blog-detail"
                                    ><img
                                        src="./assets/img/photos/a3.jpg"
                                        alt=""
                                /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2">
                                    <a class="link-dark" href="/blog-detail"
                                        >Euismod Nullam Fusce</a
                                    >
                                </h6>
                                <ul class="post-meta">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i
                                        ><span>8 Jan 2021</span>
                                    </li>
                                    <li class="post-comments">
                                        <a href="#"
                                            ><i class="uil uil-comment"></i>5</a
                                        >
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                    </ul>
                    <!-- /.image-list -->
                </div>
                <!-- /.widget -->
            </aside>
            <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

@endsection
