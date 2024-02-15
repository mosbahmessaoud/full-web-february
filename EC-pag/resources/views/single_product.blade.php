@extends("layouts.app")
@section("single_product")




<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See more Details</p>
                    <h1>Single Product</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3>Green apples have polyphenols</h3>
                <div class="single-product-img">
                    <img src="assets/img/products/product-img-5.jpg" alt="">
                </div>
                <br>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sint dignissimos, rem commodi cum voluptatem quae reprehenderit repudiandae ea tempora incidunt ipsa, quisquam animi perferendis eos eum modi! Tempora, earum.</p>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <div class="rating">

                        <br>
                        <br>

                          <a >  <i class="fa fa-star"></i> <strong style="font-size: 20px">   2500 <sub>Dz</sub></strong> </a> <a class="m-lg-5" style="font-size: 18px" ><del >2800  </del><sub>Dz</sub></a>
                        <a href="#"><i class="fa fa-heart"></i></a>
                        {{-- <i class="fa fa-star"></i> --}} <mark><strong>(Discount 11%)</strong></mark>
                    </div>
<br>
<br>
                    <div class="single-product-form">

                        <h5>Add your information below to order this product</h5>



                        <form id="contactForm">

                            <!-- Full Name -->
                            <div class="form-group">
                                <label for="fullName">Full Name:</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" required>
                            </div>

                            <!-- Phone Number -->
                            <div class="form-group">
                                <label for="phoneNumber">Phone Number:</label>
                                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                            </div>

                            <!-- City -->
                            <div class="form-group">
                                <label for="city">City:</label>
                                <select class="form-control" id="city" name="city" onchange="updateMunicipalities()">
                                    <option value="" disabled selected>Select a city</option>
                                    {{-- @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>

                            <!-- Municipality -->
                            <div class="form-group">
                                <label for="municipality">Municipality:</label>
                                <select class="form-control" id="municipality" name="municipality" disabled>
                                    <option value="" disabled selected>Select a city first</option>
                                </select>
                            </div>
                            <br>

                            <!-- Submit Button -->
                            <a href="#" class="cart-btn" onclick="validateForm()"><i class="fas fa-shopping-cart"></i> bay now </a>

                        </form>

                        <script>
                            function validateForm() {
                                var fullName = document.getElementById('fullName').value;
                                var phoneNumber = document.getElementById('phoneNumber').value;
                                var city = document.getElementById('city').value;
                                var municipality = document.getElementById('municipality').value;
                                var formElements = document.getElementById('contactForm').elements;

                                if (!fullName ) {
                                    formElements[0].style.borderColor = 'red';

                                } else {
                                    formElements[0].style.borderColor = '';
                                    // Submit the form or perform other actions
                                    // Example: document.getElementById('contactForm').submit();
                                }
                                if ( !phoneNumber ) {
                                    formElements[1].style.borderColor = 'red';

                                } else {
                                    formElements[1].style.borderColor = '';

                                    // Submit the form or perform other actions
                                    // Example: document.getElementById('contactForm').submit();
                                }
                                if ( !city ) {
                                    formElements[2].style.borderColor = 'red';

                                } else {
                                    formElements[2].style.borderColor = '';

                                    // Submit the form or perform other actions
                                    // Example: document.getElementById('contactForm').submit();
                                }

                                if ( !municipality) {
                                    formElements[3].style.borderColor = 'red';
                                } else {
                                    formElements[3].style.borderColor = '';

                                    // Submit the form or perform other actions
                                    // Example: document.getElementById('contactForm').submit();
                                }


                            }


                        </script>


<br>

                        <p><strong>Categories: </strong>Fruits, Organic</p>

                    </div>




                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->

<!-- more products -->
<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Related</span> Products</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
                    </div>
                    <h3>Strawberry</h3>
                    <p class="product-price"><span>Per Kg</span> 85$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
                    </div>
                    <h3>Berry</h3>
                    <p class="product-price"><span>Per Kg</span> 70$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
                    </div>
                    <h3>Lemon</h3>
                    <p class="product-price"><span>Per Kg</span> 35$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end more products -->




<script>
    function updateMunicipalities() {
        var citySelect = document.getElementById('city');
        var municipalitySelect = document.getElementById('municipality');
        var selectedCityId = citySelect.value;

        // Clear existing options
        municipalitySelect.innerHTML = '<option value="" disabled selected>Select a city first</option>';

        // Add options based on the selected city
        if (selectedCityId !== '') {
            fetch('/get-municipalities/' + selectedCityId)
                .then(response => response.json())
                .then(data => {
                    data.forEach(municipality => {
                        addMunicipalityOption(municipality.name);
                    });

                    // Enable the municipality select
                    municipalitySelect.disabled = false;
                });
        }
    }

    function addMunicipalityOption(municipalityName) {
        var municipalitySelect = document.getElementById('municipality');
        var option = document.createElement('option');
        option.value = municipalityName;
        option.text = municipalityName;
        municipalitySelect.add(option);
    }



    ////////////////////////////////

</script>
@endsection
