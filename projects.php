<header>
    <h3>Projects</h3>
</header>
<article>
    <section class="slider">
        <section class="row scroll center">
            
          <section class="column filler">
            <div class="card">
              <img src="img/swinkies_screenshot500.png" alt="asset1">
              <div class="container">
                <h2>Swinkies Longboards</h2>
                
              </div>
            </div>
            <div class="middle">
               <a class="btn btn-info btn-lg cta-open" href="https://www.swinkiesprecisiontrucks.com/project"><button id="myBtn" onclick="openModal()" class="button text">View</button></a>    
            </div>

          </section><!--/.column-->
            <!--/Asset 1-->
    
            
          <section class="column filler">
            <div class="card">
              <img src="img/nifty_screenshot500.jpg" alt="asset1">
              <div class="container">
                <h2>Nifty Project</h2>
                
              </div>
            </div>
            <div class="middle">
		      <a class="btn btn-info btn-lg cta-open" href="https://www.swinkiesprecisiontrucks.com/nifty"><button id="myBtn" onclick="openModal()" class="button text">View</button></a>

            </div>
            
            <!--Modal asset 2-->
<!--              <script src="scripts/external-popup.js"></script>-->
           
        <!-- /Modal asset 2-->
          </section><!--/.column-->
            <!--/Asset 2-->
            
            <section class="column filler">
            <div class="card">
              <img src="img/ergo101_screenshot500.jpg" alt="asset">
              <div class="container">
                <h2>Ergo101</h2>
                
                
              </div>
            </div>
            <div class="middle">
               <a class="btn btn-info btn-lg cta-open" href="https://www.ergo101.com"><button id="myBtn" onclick="openModal()" class="button text">View</button></a>
            </div>
          </section><!--/.column-->
            <!--/Asset 3-->
            
            <section class="column filler">
            <div class="card">
              <img src="img/oishiiramen_screenshot500.jpg" alt="asset4">
              <div class="container">
                <h2>Oishii Ramen</h2>
              </div>
            </div>
            <div class="middle">
               <a class="btn btn-info btn-lg cta-open" href="https://invis.io/SMEAP98TG#/262082992_Allfinale"><button id="myBtn" onclick="openModal()" class="button text">View Mobile</button></a>
                
                <a class="btn btn-info btn-lg cta-open" href="https://invis.io/D9EHPWLUR#/264230565_Oishii_Web"><button id="myBtn" onclick="openModal()" class="button text">View Desktop</button></a>
            </div>
          </section><!--/.column-->
            <!--/Asset 4-->
            
            <section class="column filler">
            <div class="card">
              <img src="img/underworld500.jpg" alt="asset4">
              <div class="container">
                <h2>Underworld Games</h2>
              </div>
            </div>
            <div class="middle">
               <a class="btn btn-info btn-lg cta-open" href="https://invis.io/PCJZEFND48F#/300646766_Gallery-Scorecards"><button id="myBtn" onclick="openModal()" class="button text">View Mobile</button></a>
                
                <a class="btn btn-info btn-lg cta-open" href="https://invis.io/8PJZEYN4H5A#/300647804_Home_Mobile"><button id="myBtn" onclick="openModal()" class="button text">View Desktop</button></a>
            </div>
          </section><!--/.column-->
            <!--/Asset 5-->
            
        </section><!--/.row-->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="scripts/slick/slick.min.js"></script>
        <script>
        $('.center').slick({
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 3,
          autoplay: true,
          autoplaySpeed: 2500,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });
        </script>
    </section> <!--/.filler-->
                  <!--- MODAL --->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                    <div class="modal-content modal fade" id="speedbump" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                                
                              <h4 class="modal-title">Notice</h4>
                            </div>
                            <div class="modal-body">
                              <p>You are now leaving our website.</p>
                            </div>
                            <div class="modal-footer text-center">
                              <button type="button" title="continue" class="btn btn-modal btn-continue" data-dismiss="modal">Continue</button>
                              <button type="button" title="go back" class="btn btn-modal btn-close" data-dismiss="modal">Go Back</button>
                            </div>
                          </div>
                        </div>
                    </div>
            </div><!--/.modal-->

              <script src="scripts/modal.js"></script>
</article>