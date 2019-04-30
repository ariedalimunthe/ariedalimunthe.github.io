<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="tPbwnmjZw9fgMrUws8EIn0AQInbnufPDgdbjHpLuu5w"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Personal website of Arie Dalimunthe, computer science engineer working as a web developer.">
<meta name="keywords" content="Zlatan Stajic, CV, Curriculum Vitae, Computer Science, Web Developer, PHP, Engineer, Programmer">
<meta name="author" content="Zlatan Stajić">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<link rel="apple-touch-icon" sizes="86x86" href="<?php echo base_url ()?>assets/images/ariedalimunthe.ico"/>
<link rel="shortcut icon" href="<?php echo base_url ()?>assets/images/ariedalimunthe.ico" type="image/png">
<title>Ari Dalimunthe, A.md.Kom</title>
<!-- HEAD -->
<link rel="stylesheet" href="<?php echo base_url ()?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url ()?>assets/css/style.min.css">
<link rel="stylesheet" href="<?php echo base_url ()?>assets/fancybox/jquery.fancybox.css">
<script src="<?php echo base_url ()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url ()?>assets/js/bootstrap.min.js"></script>
<!-- /HEAD -->
</head>

<body>
<div class="scrollable-section" data-section-title="HOME">

    <div id="home">
	    <div class="container">
		<header id="header">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <h1><a href="#" onclick="$('#loading').show();"><img src="<?php echo base_url ()?>assets/images/ariedalimunthe.jpeg" class="img-responsive center" style="width:150px;height:150px;" alt="Photo drawing of Arie Dalimunthe"></a></h1>
                    </div>
                    <h1 style="font-family:serif">Ari Dalimunthe, A.md.Kom</h1>
                    <h3 class="rotate">WEB DEVELOPER, ENGINEER</h3>
                    <p class="white-text">If you accept life as a game, all you need to do is to play. #10397</p>
                </div>
                <div class="col-md-12 home-buttons">
                    <a onclick="document.querySelector('#work').scrollIntoView({behavior: 'smooth'});" class="btn btn-default element-border-radius-0">Get Started</a>&nbsp;<a onclick="document.querySelector('#contact').scrollIntoView({behavior: 'smooth'});" class="btn btn-default element-border-radius-0">Contact Me</a>&nbsp;                
					</div>
					
					<div class="col-md-12" style="padding-top: 30px; padding-bottom: 30px;">
                    <a href="https://www.facebook.com/ariedalimunthe77" data-toggle="tooltip" data-placement="bottom" title="Facebook" target="_blank"><span class="hb hb-sm"><i class="fa fa-facebook"></i></span></a> 
					<a href="https://wa.me/6281260721476" data-toggle="tooltip" data-placement="bottom" title="Whatsapp"target="_blank"><span class="hb hb-sm"><i class="fa fa-whatsapp"></i></span></a>
					<a href="mailto:kurniawanari191@gmail.com" data-toggle="tooltip" data-placement="bottom" title="Email"target="_blank"><span class="hb hb-sm"><i class="fa fa-envelope-o"></i></span></a> 
					<a href="https://www.instagram.com/ariedalimunthe77" data-toggle="tooltip" data-placement="bottom" title="Instagram"target="_blank"><span class="hb hb-sm"><i class="fa fa-instagram"></i></span></a> 
					<a href="https://www.twitter.com/ariedalimunthe" data-toggle="tooltip" data-placement="bottom" title="Twitter"target="_blank"><span class="hb hb-sm"><i class="fa fa-twitter"></i></span></a> 
				</div>
				<div id="fb-root"></div>
				<div class="fb-like" data-href="https://facebook.com/ariedalimunthe77" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
				<div class="fb-share-button" data-href="https://facebook.com/ariedalimunthe77/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffacebook.com%2Fariedalimunthe77%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div>
				<script async="1" defer="1" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&amp;version=v3.2&amp;appId=240572789658776&amp;autoLogAppEvents=1"></script>
			</div>
			</header>
        </div>
    </div>
    
</div>

<div class="scrollable-section" data-section-title="WHAT I DO">
    <div id="work">    
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow bounce">
                    <h2>WHAT I DO</h2>
                </div>
            </div>  
            <div class="row">                                    
                
                            <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="media">
                                    <div class="media-object media-left">
                                        <i class="fa fa-laptop"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading">Front End Development</h3>
                                        <p>Using HTML/CSS skillset for presentation and Bootstrap framework for responsive design. Adding functionality to presentation layer with JavaScript and jQuery library.</p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="media">
                                    <div class="media-object media-left">
                                        <i class="fa fa-database"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading">Back End Development</h3>
                                        <p>PHP logic construction. Applying MVC structure via CodeIgniter framework.
										Relational database design/development upon Microsoft SQL, & MySQL </p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="media">
                                    <div class="media-object media-left">
                                        <i class="fa fa-connectdevelop"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading">Full Stack Development</h3>
                                        <p>Implementing Git version control system and UML data modeling and conceptualization.
										Using Composer package manager for PHP libraries. 
										Actively contributing to GitHub and Packagist community.</p>
                                    </div>
                                </div>
                            </div>
                                    </div>
        </div>
    </div>
</div><div class="scrollable-section" data-section-title="ABOUT ME">
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="0.7s">
                    <h2>ABOUT ME</h2>
                    <p>Earned Diploma III degree in Informatics Engineering at Indonesian Post Polytechnic, Graduated since october 2017.</p>
					<p>Great analysis and multitasking skills. Constantly interested in problem solving, reviewing colleagues code and refactoring and optimising existing code. Always ready to learn new technology, update existing knowledge or work harder. Proud member of open-source community.</p>               
					</div>
                <div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="1s">
                    
                                <span class="text-top">Projects<small>25</small></span>
                                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div></div>
                            
                                <span class="">Websites<small>21</small></span>
                                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div></div>
                            
                                <span class="">Databases<small>11</small></span>
                                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div></div>
                            
                                <span class="">Applications<small>10</small></span>
                                <div class="progress"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div></div>
                                            </div>
            </div>
            <div class="row">
                <div class="col-md-12 about-buttons">
                    <a href="<?php echo base_url ()?>assets/images/ariedalimunthecv.pdf" class="btn btn-default element-border-radius-0 wow fadeInLeft about-anchors" style="width: 200px;">Curriculum Vitae Download</a>
					 </div>
        </div>
    </div>
</div>

</div><div class="scrollable-section" data-section-title="CONTACT ME">
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <address>
                        <p class="contact-title">CONTACT ME</p>
                        
                                    <p><i class="fa fa-instagram"></i>ariedalimunthe77</p>
                                    <p><i class="fa fa-whatsapp"></i>081260721476</p>                           
                                    <p><i class="fa fa-envelope-o"></i>dalimunthearie@outlook.com</p>
                                    <p><i class="fa fa-map-marker"></i>INDONESIA</p>
                                                    </address>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.5s">
                    <form id="contact_me">
                        <input  
                            type="text"
                            name="name"
                            id="name"
                            class="form-control"
                            placeholder="Your Name"
                            required="required"
                        >
                        <input 
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                            placeholder="Your Email"
                            required="required"
                        >
                        <textarea
                            name="message"
                            id="message"
                            class="form-control"
                            rows="5"
                            placeholder="Your Message"
                            required="required"
                        ></textarea>
                        <input type="submit" class="form-control" id="submit" value="SEND MESSAGE">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade element-border-radius-0" id="modal_info">
        <div class="modal-dialog element-border-radius-0">
            <div class="modal-content element-border-radius-0">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-close element-border-radius-0" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</div>    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="1s">
                    <p>Copyright &#169; 2016-2019 | <a href="#" target="_blank">Arie Dalimunthe</a></p>
                    <hr/>
                    <ul class="social-icon">
                        <li><a href="#" target="_blank" class="fa fa-linkedin"></a></li>
						<li><a href="#" target="_blank" class="fa fa-github"></a></li>
						<li><a href="#" target="_blank" class="fa fa-youtube"></a></li>
						<li><a href="#" target="_blank" class="fa fa-instagram"></a></li>                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a onclick="document.querySelector('#home').scrollIntoView({behavior: 'smooth'});" class="cd-top back-to-top"></a>
                    <div class="loading" id="loading">
                        <p>Loading content. Please wait.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- BOTTOM -->
<script src="<?php echo base_url ()?>assets/js/script.min.js"></script>
<script src="<?php echo base_url ()?>assets/fancybox/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url ()?>assets/fancybox/jquery.fancybox-media.js"></script>
<script src="<?php echo base_url ()?>assets/js/main.js"></script>


<script>$(document).ready(function(){window.onload=function(){for(var b=document.getElementsByTagName("img"),a=0;a<b.length;a++)b[a].getAttribute("data-src")&&b[a].setAttribute("src",b[a].getAttribute("data-src"))}});$(function(){(new WOW).init();$(".rotate").textrotator();$("body").sectionScroll({easing:"easeInOutQuart",scrollDuration:1200});$(".fancybox").fancybox();$(".fancybox-media").attr("rel","media-gallery").fancybox({openEffect:"none",closeEffect:"none",prevEffect:"none",nextEffect:"none",arrows:false,helpers:{media:{},buttons:{}}})});</script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-49168336-4', 'auto');ga('send', 'pageview');</script>
<!-- /BOTTOM -->
<script>
$(function () {
    //Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    //Popover
    $('[data-toggle="popover"]').popover();
})
</script>

    </footer>
</body>

</html>