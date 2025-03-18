
	<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--google-map area start-->
	<div class="google-map-area mt-80">
		<div id="googleMap" style="width:100%;height:620px;"></div>
	</div>
	<!--google-map area end-->
	
	<!--office-address-area start-->
	<!--<div class="office-address-area mt-40">-->
	<!--	<div class="container br-bottom pb-45">-->
	<!--		<div class="row">-->
	<!--			<div class="col-md-4">-->
	<!--				<div class="office-address">-->
	<!--					<h3>France</h3>-->
	<!--					<p>40 Baria Sreet 133/2 NewYork City, US</p>-->
	<!--					<p>Email: info.contact@gmail.com</p>-->
	<!--					<p>Phone: 123-456-7890</p>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-md-4">-->
	<!--				<div class="office-address">-->
	<!--					<h3>United States</h3>-->
	<!--					<p>40 Baria Sreet 133/2 NewYork City, US</p>-->
	<!--					<p>Email: info.contact@gmail.com</p>-->
	<!--					<p>Phone: 123-456-7890</p>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-md-4">-->
	<!--				<div class="office-address">-->
	<!--					<h3>Viet Nam</h3>-->
	<!--					<p>40 Baria Sreet 133/2 NewYork City, US</p>-->
	<!--					<p>Email: info.contact@gmail.com</p>-->
	<!--					<p>Phone: 123-456-7890</p>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!--office-address-area end-->
	
	<!--contact-us-area start-->
	<div class="contact-area mt-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<!--<div class="customer-supporter">-->
					<!--	<h1>How can we help you?</h1>-->
					<!--	<div class="single-supporter mt-35">-->
					<!--		<div class="row">-->
					<!--			<div class="col-md-12">-->
					<!--				<i class="fa-address-card"> </i><div class="supporter-desc mt-sm-20">-->
					<!--					<b><?php echo e($company_detail->address); ?></b>-->
					<!--					<p><?php echo e($company_detail->phone); ?></p>-->
					<!--					<p><?php echo e($company_detail->email); ?></p>-->
					<!--				</div>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
                    	<div class="office-address-area mt-40">
                    		<div class="container br-bottom pb-45">
                    			<div class="row">
                    				<div class="col-md-12">
                    					<div class="office-address">
                    						<h4><i class="fa fa-address-card"></i> Address</h4>
                    						<p><?php echo e($company_detail->address); ?></p>
										    <p><?php echo e($company_detail->email); ?></p>
                    					</div>
                    				</div>
                    				<div class="col-md-12">
                    					<div class="office-address">
                    						<h4><i class="fa fa-phone"></i> Toll Free No</h4>
                    						<p><?php echo e($company_detail->conatct_no); ?></p>
                    					</div>
                    				</div>
                    				<div class="col-md-12">
                    					<div class="office-address">
                    						<h4><i class="fa fa-whatsapp"></i> WhatsApp No</h4>
                    						<p><?php echo e($company_detail->phone); ?> , <?php echo e($company_detail->whatsapp_no); ?></p>
                    					</div>
                    				</div>
                    				<div class="col-md-12">
                    					<div class="office-address">
                    						<h4><i class="fa fa-phone"></i> Atmanirbhar Mahila Foundation</h4>
                    						<p><?php echo e($company_detail->aatmnirbhar_mahila_no); ?></p>
                    					</div>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
				</div>
				<div class="col-lg-7">
				                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
					<div class="contact-form mt-sm-30">
					    <h4>Complaint/Suggestion</h4>
						<form id="contactForm" data-toggle="validator" method="POST" action="<?php echo e(route('save-contact-us')); ?>">
						    <?php echo csrf_field(); ?>
							<div class="row">
								<div class="col-sm-12">
									<input type="text" placeholder="Name" id="name" required data-error="NEW ERROR MESSAGE"  name="name"/>
								</div>
								<div class="col-sm-12 mt-30">
									<input type="text" placeholder="Email" id="email" name="email" />
								</div>
								<div class="col-sm-12 mt-30">
									<input type="text" placeholder="Subject" id="subject" name="subject" />
								</div>
								<div class="col-sm-12 mt-30">
									<textarea placeholder="Message" id="message" name="message"></textarea>
								</div>
								<div class="col-sm-12 mt-40">
									<button class="btn-common" id="form-submit">Send message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--contact-us-area end-->
	<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!--google-map-->
	<!--<script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>-->
	<script>
		google.maps.event.addDomListener(window, 'load', init);
		function init() {
			var mapOptions = {
				zoom: 15,
				scrollwheel: true,
				center: new google.maps.LatLng(26.8031740, 80.9972680), // New York

				styles: 
					[
						{
							"featureType": "all",
							"elementType": "labels.text.fill",
							"stylers": [
								{
									"saturation": 36
								},
								{
									"color": "#333333"
								},
								{
									"lightness": 40
								}
							]
						},
						{
							"featureType": "all",
							"elementType": "labels.text.stroke",
							"stylers": [
								{
									"visibility": "on"
								},
								{
									"color": "#ffffff"
								},
								{
									"lightness": 16
								}
							]
						},
						{
							"featureType": "all",
							"elementType": "labels.icon",
							"stylers": [
								{
									"visibility": "off"
								}
							]
						},
						{
							"featureType": "administrative",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"color": "#fefefe"
								},
								{
									"lightness": 20
								}
							]
						},
						{
							"featureType": "administrative",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#fefefe"
								},
								{
									"lightness": 17
								},
								{
									"weight": 1.2
								}
							]
						},
						{
							"featureType": "landscape",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#f5f5f5"
								},
								{
									"lightness": 20
								}
							]
						},
						{
							"featureType": "poi",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#f5f5f5"
								},
								{
									"lightness": 21
								}
							]
						},
						{
							"featureType": "poi.park",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#dedede"
								},
								{
									"lightness": 21
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry.fill",
							"stylers": [
								{
									"color": "#ffffff"
								},
								{
									"lightness": 17
								}
							]
						},
						{
							"featureType": "road.highway",
							"elementType": "geometry.stroke",
							"stylers": [
								{
									"color": "#ffffff"
								},
								{
									"lightness": 29
								},
								{
									"weight": 0.2
								}
							]
						},
						{
							"featureType": "road.arterial",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#ffffff"
								},
								{
									"lightness": 18
								}
							]
						},
						{
							"featureType": "road.local",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#ffffff"
								},
								{
									"lightness": 16
								}
							]
						},
						{
							"featureType": "transit",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#f2f2f2"
								},
								{
									"lightness": 19
								}
							]
						},
						{
							"featureType": "water",
							"elementType": "geometry",
							"stylers": [
								{
									"color": "#e9e9e9"
								},
								{
									"lightness": 17
								}
							]
						}
					]
			};
			var mapElement = document.getElementById('googleMap');

			var map = new google.maps.Map(mapElement, mapOptions);

			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(26.8031740, 80.9972680),
				map: map
			});
		}
	</script>
  
</body>
</html>
<?php /**PATH /home/nngogxwm/yourearningshop.com/resources/views/contact.blade.php ENDPATH**/ ?>