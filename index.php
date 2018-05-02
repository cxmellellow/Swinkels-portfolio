<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="charset=uft-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Christine Swinkels</title>
    
    <script src="scripts/nav.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>

    
    <link href="css/styles.css"  type="text/css" rel="stylesheet" />
    <link rel="STYLESHEET" type="text/css" href="css/contact.css" />
    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- HEADER Section -->
    <main>
    
    <?php get_header(); ?>
        
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
            <?php get_contact(); ?>
            <section id="returntop">
                <a href="#top"><p>Return To Top</p></a>
            </section><!-- Return to Top-->
        </section><!--  /Content --> 
        <?php get_footer(); ?>
    </main>
</body>
</html>


