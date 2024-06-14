<!-- start blog slider section -->
<section class="wow fadeIn half-section p-0 top-space">
	<div class="">
		<div class="swiper-full-screen swiper-container width-100">
			<div class="swiper-wrapper">

				@foreach (App\Models\Banniere::orderBy("classement")->get() as $data)
				<!-- start slider item -->
				<div class="swiper-slide" >
					<a href="{{ $data->lien }}">
					<img src="{{ $data->image->url() }}" style="width: 100%">
					</a>
				</div>
				@endforeach
				
				
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagination-white swiper-full-screen-pagination"></div>
			<div class="swiper-button-next swiper-next-style5"></div>
			<div class="swiper-button-prev swiper-prev-style5"></div>
		</div>
	</div>
</section>
<!-- end blog slider section -->