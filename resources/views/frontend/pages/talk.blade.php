@extends('frontend.layouts.app')

@section('style')
    <style>
        .registration-form {
            padding: 50px 0;
        }

        .registration-form form {
            max-width: 600px;
            margin: auto;
            padding: 50px 70px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }

        .registration-form .form-icon {
            text-align: center;
            font-size: 55px;
            color: rgb(0, 0, 0);
            font-weight: 800;
            margin: auto;
            margin-bottom: 50px;
            line-height: 100px;
            font-family: inherit;
        }

        .registration-form .item {
            border-radius: 20px;
            margin-bottom: 25px;
            padding: 10px 20px;
        }

        .registration-form .create-account {
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #5791ff;
            border: none;
            color: white;
            margin-top: 20px;
        }

        .registration-form .social-icons {
            margin-top: 30px;
            margin-bottom: 16px;
        }

        .registration-form .social-icons a:hover {
            text-decoration: none;
            opacity: 0.6;
        }

        .label {
            margin: 0 1px 8px 4px;
            font-size: 17px;
        }

        .btn {
            padding: 18px 40px;
            font-size: 18px;
            border: 1px solid #999;
            border-radius: 50px;
            line-height: 1;
            color: #29292b;
            font-weight: 500;
            width: 100%;
        }

        @media (max-width: 576px) {
            .registration-form form {
                padding: 50px 20px;
            }

            .registration-form .form-icon {
                width: 70px;
                height: 70px;
                font-size: 30px;
                line-height: 70px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="main-box-style1 bg-white radius-9 mx-4 my-3 mt-4">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="registration-form">
                        <form action="{{ route('talk.store') }}" method="POST">
                            @csrf
                            <div class="form-icon">
                                Let's <span class="fst-italic color-999 fw-500 fm-playfair"> Talk </span>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 col-md-6">
                                    <input type="text" name="fname" class="form-control item" id="username"
                                        placeholder="First name*">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" name="lname" class="form-control item" id="username"
                                        placeholder="Last name*">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 col-md-6">
                                    <input type="text" name="email" class="form-control item" id="username"
                                        placeholder="Email*">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="number" name="number" class="form-control item" id="username"
                                        placeholder="Phone number*">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="company" class="label">Company name</label>
                                <input type="text" name="company" class="form-control item" id="company"
                                    placeholder="Your company name">
                            </div>

                            <div class="form-group">
                                <label for="product" class="label">You need help with<span
                                        class="fst-italic color-999 fw-500 fm-playfair"> * </span></label>
                                <select name="product" class="form-control item" id="product">
                                    <option value="">Select services</option>
                                </select>
                                {{-- <input type="text" name="service" class="form-control item" id="service"> --}}
                            </div>

                            <div class="form-group">
                                <label for="details" class="label">Tell us more about your project <span
                                        class="fst-italic color-999 fw-500 fm-playfair"> * </span></label>
                                <textarea type="text" name="details" class="form-control item" id="details" placeholder="Your project details"
                                    rows="6"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn text-capitalize button_su_inner bg-black py-3 px-4" type="submit">
                                    <span class="button_text_container fsz-14 text-white"> Start Project</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
