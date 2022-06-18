@extends('layouts.main')

@section('page-content')
<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
          <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h1 class="mb-3">Our Galleries</h1>
            <p class="lead px-lg-5 px-xxl-8">Welcome to our lorem ipsum. Here you can find the latest company news and business articles.</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
    <div class="row">
      <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mb-8">
        <h2 class="fs-15 text-uppercase text-muted text-center mb-3">Our Galleries</h2>
        <h3 class="display-4 text-center">Check out some of our awesome Galleries with creative ideas and great design.</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="grid grid-view projects-masonry">
      <div class="row gx-md-8 gy-10 gy-md-13 isotope" style="position: relative; height: 1147.05px;">
        <div class="project item col-md-6 col-xl-4 product" style="position: absolute; left: 0%; top: 0px;">
          <figure class="lift rounded mb-6"><a href="../../single-project.html"> <img src="../../assets/img/photos/cs16.jpg" alt=""></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <div class="post-category text-line mb-3 text-purple">Cosmetic</div>
              <h2 class="post-title h3">Cras Fermentum Sem</h2>
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /.project-details -->
        </div>
        <!-- /.project -->
        <div class="project item col-md-6 col-xl-4 workshop" style="position: absolute; left: 33.3333%; top: 0px;">
          <figure class="lift rounded mb-6"><a href="../../single-project2.html"> <img src="../../assets/img/photos/cs17.jpg" alt=""></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <div class="post-category text-line mb-3 text-leaf">Coffee</div>
              <h2 class="post-title h3">Mollis Ipsum Mattis</h2>
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /.project-details -->
        </div>
        <!-- /.project -->
        <div class="project item col-md-6 col-xl-4 still-life" style="position: absolute; left: 66.6667%; top: 0px;">
          <figure class="lift rounded mb-6"><a href="../../single-project3.html"> <img src="../../assets/img/photos/cs18.jpg" alt=""></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <div class="post-category text-line mb-3 text-violet">Still Life</div>
              <h2 class="post-title h3">Ipsum Ultricies Cursus</h2>
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /.project-details -->
        </div>
        <!-- /.project -->
        <div class="project item col-md-6 col-xl-4 product" style="position: absolute; left: 66.6667%; top: 499.812px;">
          <figure class="lift rounded mb-6"><a href="../../single-project2.html"> <img src="../../assets/img/photos/cs20.jpg" alt=""></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <div class="post-category text-line mb-3 text-orange">Product</div>
              <h2 class="post-title h3">Inceptos Euismod Egestas</h2>
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /.project-details -->
        </div>
        <!-- /.project -->
        <div class="project item col-md-6 col-xl-4 product" style="position: absolute; left: 0%; top: 581.125px;">
          <figure class="lift rounded mb-6"><a href="../../single-project.html"> <img src="../../assets/img/photos/cs19.jpg" alt=""></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <div class="post-category text-line mb-3 text-yellow">Product</div>
              <h2 class="post-title h3">Sollicitudin Ornare Porta</h2>
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /.project-details -->
        </div>
        <!-- /.project -->
        <div class="project item col-md-6 col-xl-4 workshop" style="position: absolute; left: 33.3333%; top: 634.797px;">
          <figure class="lift rounded mb-6"><a href="../../single-project3.html"> <img src="../../assets/img/photos/cs21.jpg" alt=""></a></figure>
          <div class="project-details d-flex justify-content-center flex-column">
            <div class="post-header">
              <div class="post-category text-line mb-3 text-green">Workshop</div>
              <h2 class="post-title h3">Ipsum Mollis Vulputate</h2>
            </div>
            <!-- /.post-header -->
          </div>
          <!-- /.project-details -->
        </div>
        <!-- /.project -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.grid -->
  </div>
  <!-- /section -->
</div>
<!-- /.content-wrapper --

@endsection