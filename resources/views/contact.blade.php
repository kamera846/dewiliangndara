@extends('layouts.main') 

@section('page-content')

<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                <h1 class="mb-3">Kontak Kami</h1>
                <p class="lead px-lg-5 px-xxl-8">
                    Jika anda punya pertanyaan, bantuan, ataupun saran dan dukungan,     jangan ragu untuk menghubungi kami.
                </p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="bg-light pt-15 pt-md-17 pb-13 pb-md-15">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row gy-10 gx-lg-8 gx-xl-12">
                    <div class="col-lg-8">
                        <form
                            class="contact-form needs-validation"
                            method="post"
                            action="./assets/php/contact.php"
                            novalidate
                        >
                            <div class="messages"></div>
                            <div class="row gx-4">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input
                                            id="form_name"
                                            type="text"
                                            name="name"
                                            class="form-control"
                                            placeholder="Nama lengkap"
                                            required
                                        />
                                        <label for="form_name"
                                            >Nama *</label
                                        >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter your full name.
                                        </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input
                                            id="form_email"
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            placeholder="help@contoh.com"
                                            required
                                        />
                                        <label for="form_email">Email *</label>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid email
                                            address.
                                        </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea
                                            id="form_message"
                                            name="pesan"
                                            class="form-control"
                                            placeholder="Isi pesan"
                                            style="height: 150px"
                                            required
                                        ></textarea>
                                        <label for="form_message"
                                            >Pesan *</label
                                        >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please enter your messsage.
                                        </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-12">
                                    <input
                                        type="submit"
                                        class="btn btn-primary rounded-pill btn-send mb-3"
                                        value="Kirim Pesan"
                                    />
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /form -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1">
                                    <i class="uil uil-location-pin-alt"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Alamat</h5>
                                <address>
                                    Desa Liang Ndara Kecamatan Mbeliling Kabupaten Manggarai Barat - NTT
                                </address>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1">
                                    <i class="uil uil-phone-volume"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Telepon</h5>
                                <p>
                                    +62 812 4614 8901
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1">
                                    <i class="uil uil-envelope"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">E-mail</h5>
                                <p class="mb-0">
                                    <a
                                        href="mailto:sandbox@email.com"
                                        class="link-body"
                                        >sandbox@email.com</a
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31559.54443565818!2d119.92495192079363!3d-8.601466221288021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db488277e363fed%3A0x42137d122a3e7c15!2sLiang%20Ndara%2C%20Sano%20Nggoang%2C%20West%20Manggarai%20Regency%2C%20East%20Nusa%20Tenggara!5e0!3m2!1sen!2sid!4v1655798547309!5m2!1sen!2sid"
            style="width: 100%; height: 500px; border: 0"
            allowfullscreen
        ></iframe>
    </div>
    <!-- /.map -->
</section>
<!-- /section -->

@endsection
