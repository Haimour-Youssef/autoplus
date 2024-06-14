@extends('front.layouts.app')


@section('title', 'Espace candidats | Mot de passe oublié | ')


@section('content')





















<section class="wow fadeIn border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center alt-font">
            <div class="col-lg-8 col-md-6 text-center text-md-left">
                <!-- start page title -->
                <h1 class=" font-weight-600 mb-0">ESPACE CANDIDATS</h1>
                <!-- end page title -->
                <!-- start sub title 
                    <span class="d-block margin-5px-top">Contacter AUTOPLUS</span>-->
                    <!-- end sub title -->
                </div>
                <div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
                    <!-- start breadcrumb -->
                    <ul>
                        <li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>

                        <li class="text-gray">ESPACE CANDIDATS</li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </section>















    <!-- start accordion section -->
    <section class="bg-light-gray border-none p-0 wow fadeIn">
        <div class="container-fluid">
            <div class="row  justify-content-md-center">



                <div class=" col-md-6 padding-four-lr padding-six-half-tb lg-padding-five-tb lg-padding-six-lr md-padding-six-all sm-padding-50px-tb sm-padding-15px-lr wow fadeInTop">




                    <div class=" tab-style2">

                        <h5 class="alt-font text-extra-dark-gray text-center text-lg-left margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom font-weight-600"><span class="font-weight-300 d-block sm-margin-15px-bottom">Espace Candidat</span> Rénitialier le mot de passe</h5>
                        
                        <div class="tab-pane med-text fade in active show" id="tab_sec1">
                            <div class="row align-items-center">
                                <div class="col-12">

                                    <div>



                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif

                                        @if($errors->any())
                                        
                                        <div class="errorHandler alert alert-danger ">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                <li><i class="fa fa-remove-sign"></i>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            
                                            
                                        </div>
                                        
                                        @endif



                                        <form method="POST" action="{{ route('password.update') }}">
                                            @csrf

                                            <input type="hidden" name="token" value="{{ $token }}">

                                            

                                            <input id="email" placeholder="Email *" type="email" class="input-bg @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>


                                            <input id="password" placeholder="Nouveau mot de passe *" type="password" class="input-bg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">


                                            <input id="password-confirm" placeholder="Confirmation *" type="password" class="input-bg " name="password_confirmation" required autocomplete="new-password">



                                            <button type="submit" class="btn btn-dark-gray btn-small float-right text-extra-small btn-rounded margin-5px-top">
                                                Rénitialiser <i class="fa fa-arrow-circle-right"></i>
                                            </button>


                                        </form>







                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>


























                </div>

            </div>
        </div>
    </section>
    <!-- end accordion section -->




























    @endsection
