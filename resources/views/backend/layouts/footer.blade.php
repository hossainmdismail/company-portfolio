 <!-- Required vendors -->
    <script src="{{ asset('asset/Backend/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('asset/Backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('asset/Backend/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/Backend/js/custom.min.js') }}"></script>
	<script src="{{ asset('asset/Backend/js/deznav-init.js') }}"></script>
	<script src="{{ asset('asset/Backend/vendor/owl-carousel/owl.carousel.js') }}"></script>
	

    <script src="{{ asset('asset/Backend/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('asset/Backend/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('asset/Backend/js/plugins-init/jquery.validate-init.js') }}"></script>
    <!-- Form Steps -->
    <script src="{{ asset('asset/Backend/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>


	
	<!-- Chart piety plugin files -->
    <script src="{{ asset('asset/Backend/vendor/peity/jquery.peity.min.js') }}"></script>
	
	<!-- Apex Chart -->
	<script src="{{ asset('asset/Backend/vendor/apexchart/apexchart.js') }}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{ asset('asset/Backend/js/dashboard/dashboard-1.js') }}"></script>
	<script src="{{ asset('asset/Backend/vendor/sweetalert2/dist/sweetalert2.min.js') }}" aria-hidden="true"></script>
    <script src="{{ asset('asset/Backend/js/plugins-init/sweetalert.init.js') }}"></script>
	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:30,
				nav:false,
				dots: false,
				left:true,
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
				responsive:{
					0:{
						items:1
					},
					484:{
						items:2
					},
					882:{
						items:3
					},	
					1200:{
						items:2
					},			
					
					1540:{
						items:3
					},
					1740:{
						items:4
					}
				}
			})			
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
 	  @if (session('succ'))
	   <script>
		   const Toast = Swal.mixin({
		   toast: true,
		   position: 'top-end',
		   showConfirmButton: false,
		   timer: 3000,
		   timerProgressBar: true,
		   didOpen: (toast) => {
			   toast.addEventListener('mouseenter', Swal.stopTimer)
			   toast.addEventListener('mouseleave', Swal.resumeTimer)
		   }
		   })
 
		   Toast.fire({
		   icon: 'success',
		   title: '{{ session('succ') }}'
		   })
	   </script>
	   @endif
	   @if (session('err'))
		   <script>
			   const Toast = Swal.mixin({
			   toast: true,
			   position: 'top-end',
			   showConfirmButton: false,
			   timer: 3000,
			   timerProgressBar: true,
			   didOpen: (toast) => {
				   toast.addEventListener('mouseenter', Swal.stopTimer)
				   toast.addEventListener('mouseleave', Swal.resumeTimer)
			   }
			   })
 
			   Toast.fire({
			   icon: 'warning',
			   title: '{{ session('err') }}'
			   })
		   </script>
	   @endif