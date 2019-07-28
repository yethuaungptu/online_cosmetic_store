@include('nav2')
<style>
    #contact .card:hover i,#contact .card:hover h4{
        color: #87d37c;
    }
    .ch{
        font-size: 40px;
    }
</style>
<section id="contact">
    <div class="container">
        <h3 class="text-center text-uppercase ch">Contact Us</h3>
        <p class="text-center w-100 m-auto">Dear Customer, You can contact our service</p>
        <div class="row my-5 py-5">
            <hr>
        </div>
        <div class="row my-5 py-5">
            <div class="col-sm-12 col-md-6 col-lg-3 my-5 ">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="fa fa-home fa-5x mb-3" style="font-size: 40px;" aria-hidden="true"></i>
                        <h1 class="text-uppercase mb-5">Store Name</h1>
                        <address>Three Lady </address>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="fa fa-phone fa-5x mb-3 " style="font-size: 40px;" aria-hidden="true"></i>
                        <h1 class="text-uppercase mb-5">Call Us</h1>
                        <p>+959683434349,+959683434349</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="fa fa-map-marker fa-5x mb-3" style="font-size: 40px;" aria-hidden="true"></i>
                        <h1 class="text-uppercase mb-5">Office Location</h1>
                        <address>No.7 Yal Pu San Street, Aung Chan Thar Quart, Pyay, Bago </address>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="fa fa-globe fa-5x mb-3" aria-hidden="true" style="font-size: 40px;"></i>
                        <h1 class="text-uppercase mb-5">Email</h1>
                        <a href="mailto:threelady@gmail.com">threelady@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')