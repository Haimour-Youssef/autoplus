<!-- start contact section -->
<section id="contact" class="wow fadeIn p-0 bg-extra-dark-gray">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 p-0 col-lg-6 cover-background md-height-550px sm-height-350px wow fadeIn" >
				<iframe class="w-100 h-100"  src="https://www.google.com/maps/d/embed?mid=13rkGjWasbFHzlt6hpXArYO8kUI50aWG-" ></iframe>
				
				
			</div>
			<div class="col-12 col-lg-6 padding-five-tb padding-six-lr md-padding-eleven-all text-center sm-padding-15px-lr wow fadeIn">
				<div class="row">
	<div class="col-12 text-center">
		<h5 class="text-uppercase alt-font text-white margin-20px-bottom font-weight-700 md-width-100"><img src="{{ asset('asset/favicon.png') }}" style="margin-right: 6px;padding-bottom: 30px;" data-no-retina="">Nous contacter</h5>
		<span class="margin-50px-bottom separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
	</div>
</div>
				<div>
					<form id="contact-form-2" action="javascript:void(0)" method="post">
						<div id="success-contact-form-2" class="mx-0 p-3"></div>
						<input type="text" name="name" id="name" placeholder="Nom / RS*" class="input-border-bottom">
						<input type="text" name="email" id="email" placeholder="E-mail*" class="input-border-bottom">
						<input type="text" name="tel" id="tel" placeholder="Tel*" class="input-border-bottom">
						<input type="text" id="subject" name="subject" placeholder="Sujet" class="input-border-bottom">
						<textarea name="message" id="comment" placeholder="Message" class="input-border-bottom"></textarea>
						<button id="contact-us-button-2" data-routing='{{ route("sendEmail") }}' type="submit" class="btn btn-small btn-deep-pink margin-30px-top sm-margin-three-top">envoyer</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end contact section -->




