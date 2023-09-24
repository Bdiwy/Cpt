
   <!-- contact -->
   <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk.jpg);">
    <div class="container my-5">
        <div class="row justify-content-between">
            <div class="col-md-6 text-white">
                <h2 class="font-weight-bold">Contact Us</h2>
                <p class="my-4">
                    Te iisque labitur eos, nec sale argumentum scribentur,
                    <br> augue disputando in vim. Erat fugit sit at, ius lorem.
                </p>
                <ul class="list-unstyled">
                    <li>Email : company_email@com</li>
                    <li>Phone : 361-688-5824</li>
                    <li>Address : 4826 White Avenue, Corpus Christi, Texas</li>
                </ul>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="name" class="form-control" id="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Email">Your Email</label>
                            <input type="email" class="form-control" id="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- copyright -->
<div class="jumbotron jumbotron-fluid" id="copyright">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                Copyright © 2018 Chen, Yi-Ya.
            </div>
            <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                <a href="#" class="d-inline-block text-center ml-2">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#" class="d-inline-block text-center ml-2">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#" class="d-inline-block text-center ml-2">
                    <i class="fa fa-medium" aria-hidden="true"></i>
                </a>
                <a href="#" class="d-inline-block text-center ml-2">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- AOS -->
<script src="{{asset('js/aos.js')}}"></script>
<script>
  AOS.init({
  });
</script>
</body>

</html>