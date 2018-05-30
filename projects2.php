<header>
    <h3>Projects</h3>
</header>
<article>
    <section class="slider">
        <section class="row scroll">
            
          <section class="column filler">
            <div class="card">
              <img src="img/swinkies_screenshot.png" alt="asset1">
              <div class="container">
                <h2>Swinkies Longboards</h2>
                <p class="title">CAS 211W</p>
                <p>Designed for a longboard company during class in advanced wordpress.</p>
              </div>
            </div>
            <div class="middle">
               <a class="btn btn-info btn-lg cta-open"><button id="myBtn" onclick="openModal()" class="button text">View</button></a>
            </div>
            

              <script src="scripts/modal.js"></script>
              <script src="scripts/external-popup.js"></script>
          </section><!--/.column-->
            <!--/Asset 1-->
    
            
          <section class="column filler">
            <div class="card">
              <img src="img/dummy-img.png" alt="asset1">
              <div class="container">
                <h2>Asset 2</h2>
                <p class="title">CEO &amp; Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>example@example.com</p>
              </div>
            </div>
            <div class="middle">
                <p class="text-center">
		          <a class="btn btn-info btn-lg cta-open" href="https://www.swinkiesprecisiontrucks.com/project">View</a>
		        </p>
            </div>
            
            <!--Modal asset 2-->
              <script src="scripts/external-popup.js"></script>
           
        <!-- /Modal asset 2-->
          </section><!--/.column-->
            <!--/Asset 2-->
            
            <section class="column filler">
            <div class="card">
              <img src="img/dummy-img.png" alt="asset">
              <div class="container">
                <h2>Asset 3</h2>
                <p class="title">CEO &amp; Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                
              </div>
            </div>
            <div class="middle">
               <a class="btn btn-info btn-lg cta-open"><button id="myBtn" onclick="openModal()" class="button text">View</button></a>
            </div>
          </section><!--/.column-->
            <!--/Asset 3-->
            
            
            
        </section><!--/.row-->
        <!--Modal-->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                    <div class="modal-content modal fade" id="speedbump" role="dialog">
                        <div class="modal-dialog">
<!--                    <span class="close" onclick="closeModal()">&times;</span>-->
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
<!--                          <button type="button" class="close"  onclick="closeModal()" data-dismiss="modal">&times;</button>-->
                            <span class="close" onclick="closeModal()">&times;</span>
                          <h4 class="modal-title">Notice</h4>
                        </div>
                        <div class="modal-body">
                          <p>You are now leaving our website.</p>
                        </div>
                        <div class="modal-footer text-center">
                          <button type="button" title="continue" class="btn btn-modal btn-continue" data-dismiss="modal"><a href="https://www.swinkiesprecisiontrucks.com/project">Continue</a></button>
                          <button type="button" title="go back" class="btn btn-modal btn-close" data-dismiss="modal">Go Back</button>
                        </div>
                      </div>
                </div>
                </div>
            </div><!--/.modal-->
        <script>// Open external links in a popup modal notice
$(window).on('load', function(){
	
	$.expr[":"].external = function(a) {
		//var linkHref = a.hostname;
		//var domainHref = location.hostname;
		
		var linkhn = a.hostname.split('.').reverse();
		var linkHref = linkhn[1] + "." + linkhn[0];
		
		var domainhn = window.location.hostname.split('.').reverse();
		var domainHref = domainhn[1] + "." + domainhn[0];
	
		return !a.href.match(/^mailto\:/) && !a.href.match(/^tel\:/) && linkHref !== domainHref;
	};
	
	$("a:external").addClass("ext_link");
	
	$(function() {
		
		$('a.ext_link').click(function() {
			 // open a modal 
			$('a:external').attr('data-toggle', 'modal');
			$('a:external').attr('data-target', '#speedbump');
			//go to link on modal close
			var url = $(this).attr('href');
			$('.btn-modal.btn-continue').click(function() {
				window.open(url);
				$('.btn-modal.btn-continue').off();
			});
			$('.btn-modal.btn-close').click(function() {
				$('#speedbump').modal('hide');
				$('.btn-modal.btn-close').off();
			}); 
		});
		
	});  
});
        </script>
    </section> <!--/.filler-->
</article>



for form modal

<div id="formModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <iframe class="asset" src="http://swinkiesprecisiontrucks.com/project/"></iframe>
            </div>
            </div><!--/#formModal-->