@extends('landing.layout.homelayout') @section('header') @include('landing.sections.header')
@endsection 








@section('form')

<style>
    .wrapper {
        width: 900px;
        max-width: 100%;
        margin: auto;
    }
    
    form.multi-form {
        padding: 20px;
    }
    
    form.multi-form fieldset:not(.active) {
        display: none;
    }
    
    form.multi-form fieldset.active:first-of-type~ .buttons .prev,
    form.multi-form fieldset.active:first-of-type~ .buttons .submit {
        display: none;
    }
    
    form.multi-form fieldset.active:not(:last-of-type)~ .buttons .submit {
        display: none;
    }
    
    form.multi-form fieldset.active:last-of-type~ .buttons .next {
        display: none;
    }
    
    select.btn-mini {
        height: auto;
        line-height: 14px;
    }
    /* this is optional (see below) */
    
    select.btn {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        padding-right: 16px;
    }
    
    select.btn-mini+ .caret {
        margin-left: -20px;
        margin-top: 9px;
    }
    
    .fitin {
        width: 70%;
    }
</style>




<div style="padding-top: 100px;">
  

    <div class="left-content" data-scroll-index="4">
        <div class="container-fluid">
            <div class="row">
                 <center id="ttl"> <h1  class="text-info">Create An account</h1></center>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 no-padding">
                        
                        <div class="left-content-content">
                            <center>
                           <h2>Signin Quick with your social login</h2>
                           </center>
                           <hr></hr>
                              <div class="col-lg-3 col-md-3 "></div>
                            <div class="col-lg-7 col-md-7 ">
                                <a class="btn btn-block btn-social btn-google-plus">
                            <i class="fa fa-google-plus"></i> Sign in with Google
                            </a>
                        <a class="btn btn-block btn-social btn-facebook">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a>
                        </div>
                        <div class="col-lg-2 col-md-2 "></div>
                        </div>
                    
                </div>
                <!-- /End Column -->
            <div class="row visible-xs">
                 <center id="ttl2"> <h1  class="text-info">Create An account</h1></center>
            </div>
                
                <div class="col-lg-6 col-md-6 no-padding">
                    <div class="left-content-image">
                        <div class="container">
                            <div class="row">
                                <div class="wrapper">
                                    <form class="multi-form" action="#" method="POST" id="ffr">
                                        <fieldset class="active">
                                            <legend>Account details</legend>

                                            <div class="row">

                                                <div class="form-group fitin">
                                                    <label class="col-md-12">Email</label>
                                                    <div class="col-md-12">
                                                        <input type="Email" class="form-control form-control-line" placeholder="jon-doe@email.com">
                                                    </div>
                                                </div>

                                                <div class="form-group fitin">
                                                    <label class="col-md-12">Password</label>
                                                    <div class="col-md-12">
                                                        <input type="password" class="form-control" value="password">
                                                    </div>
                                                </div>

                                            </div>

                                        </fieldset>



                                        <fieldset>
                                            <legend>Business Details</legend>

                                            <div class="row">
                                                <div class="form-group fitin">
                                                    <label class="col-md-12">First Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="firstname" class="form-control" placeholder="Your Firstname">
                                                    </div>
                                                </div>

                                                <div class="form-group fitin">
                                                    <label class="col-md-12">Last Name</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="lastname" class="form-control" placeholder="Your Lastname">
                                                    </div>
                                                </div>
                                                




                                                <div class="form-group fitin">
                                                    <label class="col-sm-12">City</label>
                                                    <div class="col-sm-12 ">
                                                        <select name="city" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group fitin">
                                                    <label class="col-sm-12">State</label>
                                                    <div class="col-sm-12">
                                                        <select name="State" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group fitin">
                                                    <label class="col-sm-12">Country</label>
                                                    <div class="col-sm-12">
                                                        <select name="Country" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group fitin">
                                                    <label class="col-md-12">Pin Code/Zip Code</label>
                                                    <div class="col-md-12">
                                                        <input type="text" name="zipcode" class="form-control" placeholder="5100">
                                                    </div>
                                                </div>




                                            </div>



                                        </fieldset>



                                        <fieldset>
                                            <legend>Phone details</legend>

                                            <div class="row">
                                                <div class="form-group fitin">
                                                    <label class="col-md-12">Phone number</label>
                                                    <div class="col-md-12">
                                                        <input type="tel" name="phone_number" class="form-control" placeholder="Phone number">
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>
                                        <br />
                                        <div class="buttons">
                                            <a class="btn btn-default button secondary prev left">Prev</a>
                                            <a class="btn btn-default button secondary next right">Next</a>
                                            <button type="submit" class="btn btn-default  button submit right">Submit</button>
                                        </div>

                                    </form>
                                </div>
                                <!-- /.row -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /End Column -->
            </div>
            <!-- /End Row -->
        </div>
        <!-- /End Container -->
    </div>
    <div>
<hr></hr>

        @endsection
        <!-- Content end -->





















        <!-- /Start Subscribe -->
        @section('subscribe') @include('landing.sections.subscribe') @endsection
        <!-- /End Subscribe -->

        <!-- /Start Footer -->
        @section('footer') @include('landing.sections.footer') @endsection
        <!-- /End Footer -->



        <!-- /Start Custom Js -->

        @section('js')
        <script>
            $('form.multi-form a.next').click(function() {
                $('fieldset.active').fadeOut(500).removeClass('active')
                    .next('fieldset').fadeIn(500).addClass('active');

                    $('html, body').animate({
                        scrollTop: $("#ttl").offset().top
                 }, 500)
            });

            $('form.multi-form a.prev').click(function() {
                $('fieldset.active').fadeOut(500).removeClass('active')
                    .prev('fieldset').fadeIn(500).addClass('active');
                    $('html, body').animate({
                        scrollTop: $("#ttl").offset().top
                 }, 500)
            })

            $("#features").click(function() {
                window.location.href = '/#fts';

            });
        </script>
        @endsection