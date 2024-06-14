  <!-- start post content section --> 
  <section style="background-image: url({{ asset('asset/images/testimonial-bg.png') }}); background-position: 0px 44.05px;" class="wow fadeIn hover-option4 blog-post-style3">
  	<div class="container"> 

	  <div class="row">
            <div class="col-12 text-center">
                <h5 class="text-uppercase alt-font text-black margin-20px-bottom font-weight-700 md-width-100"><img src="{{ asset('asset/faviconBlack.png') }}" style="margin-right: 6px;padding-bottom: 30px;" data-no-retina="">Actualités</h5>
                <span class="margin-50px-bottom separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
            </div>
        </div>
  		<div class="row">






  			@foreach (App\Models\Actualite::whereAccueil(1)->take(3)->get() as $data)





  			<div class="col-12 col-lg-4 col-md-6 grid-item text-center text-md-left wow fadeInUp">
  				<div class="blog-post bg-light-gray inner-match-height">
  					<div class="blog-post-images overflow-hidden position-relative">
  						<a href="{{ route('media-details', ['actualite' => $data->id]) }}">
  							<img src="{{ $data->image->url('thumbails-450') }}" alt="">
  							<div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
  						</a>
  					</div>
  					<div class="post-details padding-40px-all md-padding-20px-all">
  						<a href="{{ route('media-details', ['actualite' => $data->id]) }}" class="alt-font post-title text-medium text-extra-dark-gray width-100 d-block lg-width-100 margin-15px-bottom">{{ $data->title }}</a>
  						<p><div class=" text-large" style="height: 80px;overflow: hidden;">
  							{!! $data->content !!}
  						</div>
  					</p>
  					<div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>

  				</div>
  			</div>
  		</div>



  		@endforeach










			 <!--start post item 
			<div class="col-12 col-lg-4 col-md-6 grid-item text-center text-md-left wow fadeInUp">
				<div class="blog-post bg-light-gray inner-match-height">
					<div class="blog-post-images overflow-hidden position-relative">
						<a href="#">
							<img src="{{ asset('asset/images/ac1.jpg') }}" alt="">
							<div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
						</a>
					</div>
					<div class="post-details padding-40px-all md-padding-20px-all">
						<a href="#" class="alt-font post-title text-medium text-extra-dark-gray width-100 d-block lg-width-100 margin-15px-bottom">PROFITEZ DE NOTRE CARTE FIDILITÉ</a>
						<p>Découvrez notre Carte qui vous accés à des avantages exclusifs toute l'année...</p>
						<div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
						
					</div>
				</div>
			</div>-->
			<!-- end post item -->




			<!-- start post item 
			<div class="col-12 col-lg-4 col-md-6 grid-item text-center text-md-left wow fadeInUp" data-wow-delay="0.2s">
				<div class="blog-post bg-light-gray inner-match-height">
					<div class="blog-post-images overflow-hidden position-relative">
						<a href="#">
							<img src="{{ asset('asset/images/ac2.jpg') }}" alt="">
							<div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
						</a>
					</div>
					<div class="post-details padding-40px-all md-padding-20px-all">
						<a href="#" class="alt-font post-title text-medium text-extra-dark-gray width-100 d-block lg-width-100 margin-15px-bottom"> VARTA, Notre Marque EXCLUSIVE Chez AutoPlus</a>
						<p>Des produits de qualité pour l avenir de réparation. Les produits "VARTA" ...</p>
						<div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
						
					</div>
				</div>
			</div>-->
			<!-- end post item -->
			<!-- start post item 
			<div class="col-12 col-lg-4 col-md-6 grid-item text-center text-md-left wow fadeInUp" data-wow-delay="0.4s">
				<div class="blog-post bg-light-gray inner-match-height">
					<div class="blog-post-images overflow-hidden position-relative">
						<a href="#">
							<img src="{{ asset('asset/images/ac3.jpg') }}" alt="">
							<div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
						</a>
					</div>
					<div class="post-details padding-40px-all md-padding-20px-all">
						<a href="#" class="alt-font post-title text-medium text-extra-dark-gray width-100 d-block lg-width-100 margin-15px-bottom">Accédez à votre espace  catalogue de pièce auto</a>
						<p>Réservez vos pièces en ligne: Une meilleur rapport qualité prix - Une Offre compléte</p>
						<div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
						
					</div>
				</div>
			</div>-->
			<!-- end post item -->




			
		</div>
	</section>
	<!-- end blog content section -->  