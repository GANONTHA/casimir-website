<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Me contacter</span>
					<h2 class="mb-4">Voulez vous me contacter?</h2>
					{{-- show submit message from session variable --}}
					@if (session('message'))
						<div class="alert alert-success">
							{{ session('message') }}
						</div>
					@endif
					{{-- show validation error --}}
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<p>Utilisez ce formulaire pour entrer en contact avec moi pour tous vos besoins.</p>
				</div>
			</div>

			<div class="row block-9">
				<div class="col-md-8">
					<form action="/contact" class="bg-light p-4 p-md-5 contact-form" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Votre Nom">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="Votre Email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" name="objet" class="form-control" placeholder="Objet">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Envoyer le Message" class="btn btn-primary py-3 px-5">
								</div>
							</div>
						</div>
					</form>
					
				</div>

				<div class="col-md-4 d-flex pl-md-5">
					<div class="row">
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-map-marker"></span>
							</div>
							<div class="text">
								<p><span>Adresse:</span> <a href="#">Maroc</a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-phone"></span>
							</div>
							<div class="text">
								<p><span>Téléphone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-paper-plane"></span>
							</div>
							<div class="text">
								<p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-globe"></span>
							</div>
							<div class="text">
								<p><span>Site web: </span> <a target="_blank" href="https://www.casimirkf.com">casimirkf.com</a></p>
							</div>
						</div>
					</div>
					<!-- <div id="map" class="map"></div> -->
				</div>
			</div>
		</div>
	</section>