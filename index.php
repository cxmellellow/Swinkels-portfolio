<?php include 'header.php' ?>
    <main>
<header id="header">
            <!-- NAVBAR Section -->
            <nav id="mySidenav" class="sidenav navbar navbar-default">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#about">Link1</a>
                    <a href="#education">Link2</a>
                    <a href="#projects">Link3</a>
                    <a href="#contact">Link4</a>
                <br />
                <section class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </section>
            </nav>
            <span class="burger-menu" style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776;</span>
            <!-- NAVBAR END -->
</header><!-- HEADER END -->
        
        <section id="top" class="content">
            <!-- Hero Image -->
            <section class="hero-image">
                <section class="hero-text">
                    <h1>Hero Image</h1>
                    <p>sub text </p>
                </section>
            </section>

            <section id="about">
                <header>
                        <h2>Lorem Ipsum header 2</h2>
                </header>
                <aside>
                    <img class="headshot" src="img/avatar-placeholder.png">
                    <figcaption>fig caption</figcaption>
                </aside>
                <article>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia mi nulla, in imperdiet arcu hendrerit in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia mi nulla, in imperdiet arcu hendrerit in.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia mi nulla, in imperdiet arcu hendrerit in.</p>
                </article>
                <div id="clearit"></div>
            </section><!-- /about -->
        
            <section class="color-border"></section><!-- /color-border -->
        
            <section id="education">
                <header>
                    <h3>Education</h3>
                </header>
                <article>
                    <div class="cert">
                        <img src="img/dummy-img.png">
                        <figcaption>Lorem Ipsum</figcaption>
                    </div>
                    <div class="cert">
                        <img src="img/dummy-img.png">
                        <figcaption>Lorem Ipsum</figcaption>
                    </div>
                    <div class="cert">
                        <img src="img/dummy-img.png">
                        <figcaption>Lorem Ipsum</figcaption>
                    </div>
                </article>
            </section><!-- /education -->
        
        
            <section class="color-border"></section><!-- /color-border -->
        
            <section id="projects">
                <header>
                    <h3>Header 3</h3>
                </header>
                <article>
                    <section class="filler">
                        <img src="img/dummy-img.png">
                        <figcaption>This will hold slider area for projects</figcaption>
                    </section>
                </article>
            </section><!-- /projects -->
            
            <section class="color-border"></section><!-- color-border -->
            <?php include 'contact.php' ?>
            <section id="returntop">
                <a href="#top"><p>Return To Top</p></a>
            </section><!-- Return to Top-->
        </section><!--  /Content --> 
        
        <?php include 'footer.php'?>
    


