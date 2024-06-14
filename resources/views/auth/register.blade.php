@extends('front.layouts.app')


@section('title', 'Espace candidats | ')

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
            <div class="row">
                <div class="col-12 col-lg-6 padding-four-lr padding-six-half-tb lg-padding-five-tb lg-padding-six-lr md-padding-six-all sm-padding-50px-tb sm-padding-15px-lr wow fadeInLeft">






                  <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf





                    <div class=" tab-style2">

                        <h5 class="alt-font text-extra-dark-gray text-center text-lg-left margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom font-weight-600"><span class="font-weight-300 d-block sm-margin-15px-bottom">Espace Candidat</span> Merci de remplir le formulaire ci-dessous</h5>



                        @if($errors->any())

                        <div class="errorHandler alert alert-danger ">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li><i class="fa fa-remove-sign"></i>{{ $error }}</li>
                                @endforeach
                            </ul>


                        </div>

                        @endif


                        
                        <div class="">
                            <div class="col-12">
                                <!-- start tab navigation -->
                                <ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
                                    <li class="nav-item"><a class="nav-link active" href="#tab_sec1" data-toggle="tab"><i class="far fa-address-card text-extra-dark-gray "></i> Informations</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_sec2" data-toggle="tab"><i class="fa fa-sign-in-alt text-extra-dark-gray  "></i> Connexion</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_sec3" data-toggle="tab"><i class="icon-pricetags text-extra-dark-gray"></i> CV</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_sec4" data-toggle="tab"><i class="icon-desktop text-extra-dark-gray "></i> P.J</a></li>
                                    
                                </ul>
                                <!-- end tab navigation -->
                            </div>
                        </div>                                
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane med-text fade in active show" id="tab_sec1">
                                <div class="row align-items-center">
                                    <div class="col-12">

                                        <div>




                                            <input id="name" type="text" class="input-bg  @error('name') is-invalid @enderror" name="name" placeholder="Nom *" value="{{ old('name') }}" autocomplete="name" autofocus>



                                            <input  type="text" class="input-bg  @error('prenom') is-invalid @enderror" name="prenom" placeholder="Prénom *" value="{{ old('prenom') }}" autocomplete="prenom" autofocus>


                                            <input id="email" type="email" class="input-bg  @error('email') is-invalid @enderror" name="email" placeholder="Email *" value="{{ old('email') }}" autocomplete="email">




                                            <input  type="text" class="input-bg  @error('tel') is-invalid @enderror" name="tel" placeholder="Tél *" value="{{ old('tel') }}" autocomplete="Tel" autofocus>


                                            <input  type="text" class="input-bg  @error('adresse') is-invalid @enderror" name="adresse" placeholder="Adresse *" value="{{ old('adresse') }}"  >

                                            <a href="#"  class="btn btn-dark-gray btn-small float-right text-extra-small btn-rounded margin-5px-top btn-tab1-suivant">Suivant <i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->

                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_sec2">
                                <div class="row align-items-center">
                                    <div class="col-12">

                                        <div>

                                            <input id="username" placeholder="Login *" type="username" class="input-bg  @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username">



                                            <input id="password" placeholder="Mot de passe *" type="password" class="input-bg  @error('password') is-invalid @enderror" name="password" autocomplete="new-password">




                                            <input id="password-confirm" placeholder="Confirmation *" type="password" class="input-bg " name="password_confirmation" autocomplete="new-password">


                                            <a href="#"  class="btn btn-dark-gray btn-small float-right text-extra-small btn-rounded margin-5px-top btn-tab2-suivant">Suivant <i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab_sec3">
                                <div class="row align-items-center">
                                    <div class="col-12">

                                        <div>



                                            Mobilité géographique
                                            <select name="mobilite" class="input-bg">
                                              @foreach(App\Models\User::MOBILITES as $mobilite)
                                              <option value="{{ $mobilite }}" 
                                              {{ old("mobilite") === $mobilite ? 'selected' : '' }}
                                              >{{ $mobilite }}</option>
                                              @endforeach
                                          </select>

                                          Métier recherché
                                           <select name="metier" class="input-bg">
                                              @foreach(App\Models\User::METIERS as $metier)
                                              <option value="{{ $metier }}"
                                               {{ old("metier") === $metier ? 'selected' : '' }}
                                               >{{ $metier }}</option>
                                              @endforeach
                                          </select>

                                        Type de contrat
                                         <select name="contrat" class="input-bg">
                                              @foreach(App\Models\User::CONTRATS as $contrat)
                                              <option value="{{ $contrat }}"
                                              {{ old("contrat") === $contrat ? 'selected' : '' }}
                                              >{{ $contrat }}</option>
                                              @endforeach
                                          </select>






                                        <a href="#"  class="btn btn-dark-gray btn-small float-right text-extra-small btn-rounded margin-5px-top btn-tab3-suivant">Suivant <i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_sec4">
                            <div class="row align-items-center">
                                <div class="col-12">

                                    <div>

                                        CV (Type : DOC, PDF, JPG)
                                        <input type="file" name="cv"  placeholder="CV*" class="input-bg">
                                        Lettre de Motivation
                                        <input type="file" name="motivation" placeholder="Lettre de motivation*" class="input-bg">


                                        <button type="submit"  class="btn btn-dark-gray btn-small float-right text-extra-small btn-rounded margin-5px-top ">
                                            Enregistrer
                                        </button>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->

                    </div>       
                </div>


            </form>


























        </div>
        <div class="col-12 col-lg-6 cover-background md-height-500px sm-height-350px wow fadeInRight" style="background:url({{ asset('asset/images/india-career-male-standing-ipad.jpg') }})"></div>
    </div>
</div>
</section>
<!-- end accordion section -->





@endsection

