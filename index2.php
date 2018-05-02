<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
require_once("./include/fgcontactform.php");
require_once("./include/simple-captcha.php");

$formproc = new FGContactForm();
$sim_captcha = new FGSimpleCaptcha('scaptcha');

$formproc->EnableCaptcha($sim_captcha);

//You can add more than one receipients.
$formproc->AddRecipient('beachgirl411@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('Lji8iQdtWiYQyAp');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>

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
        
            <section id="contact"><!-- Form -->
                <header>
                    <h3>Contact Form</h3>
                </header>
                <article>
                    <form id="contact us" method="post" action="contactform.php" accept-charset='UTF-8'>
                        <fieldset>
                            <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $formproc->SafeDisplay('name') ?>">
                            <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $formproc->SafeDisplay('email') ?>">
                            <select name="reason">
                                <option value="temp">Select Reason</option>
                                <option name="job" value="job">Job</option>
                                <option name="employer" value="employer>">Employer</option>
                                <option name="other" value="other>">Other</option>
                            </select>
                            <textarea name="message" placeholder="Message" rows="3"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                            
                            <fieldset id='antispam'>
                                <legend >Anti-spam question</legend>
                                <span class='short_explanation'>(Please answer the simple question below. This to prevent spam bots from submitting this form)</span>
                                <div class='container'>
                                    <label for='scaptcha' ><?php echo $sim_captcha->GetSimpleCaptcha(); ?></label>
                                    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
                                    <span id='contactus_scaptcha_errorloc' class='error'></span>
                                </div>
                            </fieldset>
                            <button type="submit" class="submit" value="Submit">Send!</button>
                        </fieldset>
                    </form>
                    <script type='text/javascript'>
                    // <![CDATA[

                        var frmvalidator  = new Validator("contactus");
                        frmvalidator.EnableOnPageErrorDisplay();
                        frmvalidator.EnableMsgsTogether();
                        frmvalidator.addValidation("name","req","Please provide your name");

                        frmvalidator.addValidation("email","req","Please provide your email address");

                        frmvalidator.addValidation("email","email","Please provide a valid email address");

                        frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");


                        frmvalidator.addValidation("scaptcha","req","Please answer the anti-spam question");

                    // ]]>
                    </script>
                </article>
            </section><!-- /contact -->
            <section id="returntop">
                <a href="#top"><p>Return To Top</p></a>
            </section><!-- Return to Top-->
        </section><!--  /Content --> 
        <footer id="clearit">
            <p>Copyright © 2018 | Christine Swinkels</p>
        </footer>
    </main>
</body>
</html>
