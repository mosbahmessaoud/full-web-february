@extends("layouts.app")
@section("creat_product")




<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Uploid your products</p>
                    <h1>Creat Product</h1>
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

            <div class="col-md-7">
                <div class="single-product-content">


                        <h4>Add your information of product</h4>


                        <div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                            @endif

                        </div>

                        <form id="contactForm" method="post"  action="{{route("Shop.store")}}" >
                          @csrf
                            @method('post')
                            <!--  Name P -->
                            <div class="form-group">
                                <label for="product_name">Name Product:</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" required>
                            </div>

                            <!-- description of P -->
                            <div class="form-group">
                                <label for="description">description product:</label>
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                            <!-- stock of P -->
                            <div class="form-group">
                                <label for="stock">The stock :</label>
                                <input type="text" class="form-control" id="stock" name="stock" required >
                            </div>
                            <!-- price of P -->
                            <div class="form-group">
                                <label for="price ">The price  :</label>
                                <input type="number" class="form-control" id="price" name="price" required min="1">
                            </div>
                            <!-- imag of P -->
                            {{-- <div class="form-group">
                                <label for="imag">Image product  :</label>
                                <input type="image" class="form-control" id="imag" name="imag" required>
                            </div> --}}
<br>


                            <!-- Submit Button -->
                            <input type="submit"  onclick="validateForm()" value="by now">
                            {{-- <i  class="fas fa-shopping-cart"></i> --}}


                            {{-- <input  type="submit"  class="cart-btn" onclick="validateForm()" value="by now"> <i class="fas fa-shopping-cart"></i> --}}

                        </form>

                        <script>
                            function validateForm() {
                                var Name = document.getElementById('product_name').value;
                                var description = document.getElementById('description').value;
                                var stock = document.getElementById('stock').value;
                                var price = document.getElementById('price').value;
                                var imag = document.getElementById('imag').value;
                                var formElements = document.getElementById('contactForm').elements;

                                if (!Name ) {
                                    formElements[1].style.borderColor = 'red';

                                } else {
                                    formElements[1].style.borderColor = '';
                                    // Submit the form or perform other actions
                                    // Example: document.getElementById('contactForm').submit();
                                }
                                if ( !description ) {
                                    formElements[2].style.borderColor = 'red';

                                } else {
                                    formElements[2].style.borderColor = '';

                                    // Submit the form or perform other actions
                                    // Example: document.getElementById('contactForm').submit();
                                }
                                if ( !stock ) {
                                    formElements[3].style.borderColor = 'red';

                                } else {
                                    formElements[3].style.borderColor = '';

                                    // Submit the form or perform other actions
                                    // Example: document.getElementById('contactForm').submit();
                                }

                                if ( !price) {
                                    formElements[4].style.borderColor = 'red';
                                } else {
                                    formElements[4].style.borderColor = '';

                                    // Submit the form or perform other actions
                                    // Example: document.getElementById('contactForm').submit();
                                }
                                if ( !imag) {
                                    formElements[0].style.borderColor = 'red';
                                } else {
                                    formElements[0].style.borderColor = '';

                                    // Submit the form or perform other actions
                                    // Example: document.getElementById('contactForm').submit();
                                }


                            }


                        </script>


                        <br>



                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->









@endsection
