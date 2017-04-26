<?php

$xmlfile = "kathyRoseAdmin/index.xml"; /* xml file to read */
$filename = "index.html";  	/* file that is generated */

$newMoonSign = $newMoonYear = $newMoonURL = $insightMonth = $insightYear = $insightURL = "";
$message = "";

$params = array();
$params = simplexml_load_file($xmlfile);


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  	$newMoonSign  = test_input($_POST["newMoonSign"]);
  	$newMoonYear  = test_input($_POST["newMoonYear"]);
  	$newMoonURL   = test_input($_POST["newMoonURL"]);
  	$insightMonth = test_input($_POST["insightMonth"]);
  	$insightYear  = test_input($_POST["insightYear"]);
	$insightURL   = test_input($_POST["insightURL"]);
}
else
{
	$newMoonSign  = $params[0]->newMoonSign;
	$newMoonYear  = $params[0]->newMoonYear;
	$newMoonURL   = $params[0]->newMoonURL;
	$insightMonth = $params[0]->insightMonth;
	$insightYear  = $params[0]->insightYear;
	$insightURL   = $params[0]->insightURL;
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<style>
.input
{
    padding: 5px;
    /* border: 1px solid #0000ff; */
    height: auto;
    width: 50px;
    background-color:red;
}
.frame
{ 	width: auto;
padding: 1px;
/* border: 1px solid red; */
float: left;
margin-left:2px;
}
.label
{
width: 100px;
/* border: 1px solid green; */
font-size: 14px;
font-weight: bold;

}

.div1
{
/* border: 1px solid yellow; */
float: left;
height:100%;
}

.div1a
{
/* border: 1px solid yellow; */
float: left;
margin-left:25px;
height:100%;
}

.div2
{
background-color:gray;
padding:12px;
height:80px;
/* border: 1px solid white; */
}

.message
{
	color: red;
	font-weight: bold;
	font-size:12px;
}

.passwd
{
	font-size:10px; font-weight:normal; height:16px;
}

</style>

<!--
<div class='div2'>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="div1">
<div class='label'>New Moon</div>
<div class='frame'>
Sign: <input type="text" name="newMoonSign" size='15' value='<? echo $newMoonSign ?>'>
</div>
<div class='frame'>
Year:
<input type="text" name="newMoonYear" maxlength='4' size='4' value='<? echo $newMoonYear ?>'>
</div>
<div class='frame'>
YouTube:
<input type="text" name="newMoonURL" size='15' value='<? echo $newMoonURL ?>'>
</div></div>


<div class="div1a">
<div class='label'>Insight</div>
<div class='frame'>Month: <input type="text" name="insightMonth" size='15' value='<? echo $insightMonth ?>'>
</div>
<div class='frame'>Year:
<input type="text" name="insightYear" maxlength='4' size='4' value='<? echo $insightYear ?>'>
</div>
<div class='frame'>YouTube:
<input type="text" name="insightURL" size='15' value='<? echo $insightURL ?>'>
</div>
</div>
<div class="div1a">

<input type="submit" name="submit" value="Try It">


<div class='frame'>
<span class="passwd">Password:</span><br><span class="message">
<?php echo $message;?></span>
<input type="password" name="passwd" size='14'>
</div>


<input type="submit" name="submit" value="Publish">

</div>

</form>
</div>
-->

<section id="updateForm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <form id="ic_signupform2" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="elcontainer normal stacked" style="margin-right: auto;
	margin-left: auto; ">
        <div class="sortables">
            <h2>New Moon</h2>
            <div class="formEl fieldtype-input required" id="ftrEmail" data-validation-type="1" data-label="Email" style="display: inline-block; width: 100%;">
                <label style="width: 5em;">Sign: </label> 
                <input type="text" style="height: 3em; padding:0 .75em; width:60%; margin-bottom:3px;" placeholder="" type="text" name="newMoonSign" size='15' value='<? echo $newMoonSign ?>'><br />
                <label style="width: 5em;">Year: </label> 
                <input type="text" style="height: 3em; padding:0 .75em; width:60%; margin-bottom:3px;" placeholder="" name="newMoonYear" maxlength='4' size='4' value='<? echo $newMoonYear ?>'><br />
                <label style="width: 5em;">YouTube: </label> 
                <input type="text" style="height: 3em; padding:0 .75em; width:60%; margin-bottom:3px;" placeholder="" name="newMoonURL" size='15' value='<? echo $newMoonURL ?>'><br />
            </div>
        </div>
            <div class="sortables">
                <h2>Insight</h2>
            <div class="formEl fieldtype-input required" id="ftrEmail" data-validation-type="1" data-label="Email" style="display: inline-block; width: 100%;">
                <label style="width: 5em;">Sign: </label> 
                <input type="text" style="height: 3em; padding:0 .75em; width:60%; margin-bottom:3px;" placeholder="" name="insightMonth" size='15' value='<? echo $insightMonth ?>'><br />
                <label style="width: 5em;">Year: </label> 
                <input type="text" style="height: 3em; padding:0 .75em; width:60%; margin-bottom:3px;" placeholder="" name="insightYear" maxlength='4' size='4' value='<? echo $insightYear ?>'><br />
                <label style="width: 5em;">YouTube: </label> 
                <input type="text" style="height: 3em; padding:0 .75em; width:60%; margin-bottom:3px;" placeholder="" name="insightURL" size='15' value='<? echo $insightURL ?>'><br />
            </div>
            <div class="sortables">
                <label style="width: 5em;">Password: </label> 
                <input type="text" style="height: 3em; padding:0 .75em; width:60%; margin-bottom:3px;" placeholder="" name="passwd" size='14'>
            </div>
            <div class="sortables">
                <label>Message: <?php echo $message;?></label>
            </div>
                
            <div class="submit-container">
                <input type="submit" name="submit" value="Try It" class="btn btn-submit">
                <input type="submit" name="submit" value="Pbulish" class="btn btn-submit">
            </div>
             <div id='ftrFormMessage' class="bg-danger" >
                <p style="color:white"><b>message</b></p>
            </div>
        </div>
        <div class="hidden-container"></div>
    </div>
</form>
          </div>     
        </div>
    </div>
</section>


<?
$HTMLbeg = <<<HTMLbeg
<!DOCTYPE html>
<html>

  <head>
    
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kathy Rose Astrology</title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.">
    <link rel="canonical" href="https://y7kim.github.io/">


    <!-- Custom CSS & Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link rel="stylesheet" href="/style.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



    <body id="page-top" class="index">

    <!-- Navigation -->


    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
         
       <a class="navbar-brand page-scroll" href="/">Kathy Rose Astrology</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
        
                    
                    
                    
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#consultations">Consultations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#videos">Monthy Videos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#articles">Articles</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#about">My Story</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#contact">contact</a>
                    </li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header class="menu-displace" >
        <div class="container">
            <div class="intro-text" style="padding:0 0 30vw 0">
                <a href="#services" id='tellMeMore' class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
<!--
        
          <a class="page-link" href="./articles/">Articles</a>
        
          <a class="page-link" href="./blog/">Blog</a>
        
          <a class="page-link" href="./charts/">Charts</a>
        
          
        
          
        
          
        
          <a class="page-link" href="./videos/">Forecast Videos</a>
        
 -->


    <!-- Services Section -->
    <section id="services" style="padding: 50px 0px 0px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h4 class="service-heading">Consultations</h4>
                    <p class="text-muted"><b>Intuitive Insight for Conscious Growth<br/>and Personal Development.</b><br/>
For 35 years, I've had the privilege of working with many thousands of clients around the world to help them understand the guidance and the gifts revealed through their horoscopes. 
In your 60-minute astrological consultation, we will explore the influences, tendencies, strengths and vulnerabilities suggested by your chart. In examining how the planetary placements and patterns are linked to your life purpose, we will discuss and determine strategies for opening opportunities and dealing with challenges as you seek personal fulfillment.<br/>
Please <a href="mailto:roseastrology@yahoo.com?Subject=Schedule a Consultation">email</a> me at <a href="mailto:roseastrology@yahoo.com?Subject=Schedule a Consultation">roseastrology@yahoo.com</a> or call me at <b><span style="white-space: nowrap;">757-340-5516</span></b> to schedule your appointment.</p>
                </div>   
HTMLbeg;




$HTMLmid = "";

$HTMLmid .= "<a href='http://www.youtube.com/watch?v=" . $newMoonURL . "'target='new'><br />";
$HTMLmid .= "<strong>New Moon in " . $newMoonSign . " " . $newMoonYear . "</strong></a><br />";
$HTMLmid .= "Here's Kathy Rose with the background you need to put your needs into focus.</p>";
$HTMLmid .= "<iframe width='374' height='250' src='http://www.youtube.com/embed/" . $newMoonURL;
$HTMLmid .= "' frameborder='0' allowfullscreen></iframe>";
$HTMLmid .= "<p>&nbsp;</p><br />";

$HTMLmid .= "<p><strong><a href='http://www.youtube.com/watch?v=" . $insightURL . "' target='new'>";
$HTMLmid .= "Astrological Insights for " . $insightMonth . " " . $insightYear . "</a></strong><br />";
$HTMLmid .= "What life-enhancing practices does the astrology of " . $insightMonth . " support? Find out in the latest forecast from Kathy Rose.</p>";
$HTMLmid .= "<iframe width='374' height='250' src='http://www.youtube.com/embed/" . $insightURL . "' frameborder='0' allowfullscreen></iframe>";
$HTMLmid .= "<p>&nbsp;</p>";



$HTMLmid = "                <div class='col-md-4'>
                    <h4 class='service-heading'>Monthly Videos</h4>
                    <p class='text-muted'>Every month, on my <a href='https://www.youtube.com/user/roseastrology' target='_blank'>YouTube Channel</a>, you can watch new videos on the astrology forecast for that month. You can also see the energetic influences of the New Moon as it passes through the twelve signs of the Zodiac. Professionally produced and always free, these short videos are packed full of useful information and practical guidance to help you anticipate and integrate the important astrological patterns the month holds in store.</p>
                    <p class='text-muted'>Subscribe to my <a href='https://www.youtube.com/user/roseastrology' target='_blank'>YouTube Channel</a><br /> by <a href='https://www.youtube.com/user/roseastrology' target='_blank'>clicking here</a>.</p>
                   
                    
                </div>";




$HTMLend1 = <<<HTMLend1
                  <div class="col-md-4">
                    <h4 class="service-heading">Newsletter</h4>
                    <p style="font-weight: bold;">Sign up for my Free Newsletter.</p>
                   <div>
 <!--                    <script type="text/javascript" src="//app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=41&cid=872462&lid=7947"></script>
-->
                       <div>
   
<!--
<script type="text/javascript" src="https://app.icontact.com/icp/static/form/javascripts/validation.js"></script>
-->

                           
<form id="ic_signupform" method="POST" action="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/?id=41&amp;cid=872462&amp;lid=7947">
    <div class="elcontainer normal stacked left-aligned">
        <div class="sortables">
            <div class="formEl fieldtype-input required" id="hdrEmail" data-validation-type="1" data-label="Email" style="display: inline-block; width: 100%;">
                <label>Email<span class="indicator required">*</span></label>
                <input type="text" placeholder="" name="data[email]" onfocus="$('#hdrFormMessage').hide()">
            </div>
            <div class="formEl fieldtype-checkbox required" dataname="listGroups" data-validation-type="1" data-label="Lists" style="display: none; width: 100%;">
                <h3>Lists<span class="indicator required">*</span></h3>
                <div class="option-container">
                    <label class="checkbox"><input type="checkbox" alt="" name="data[listGroups][]" value="14154" checked="checked">Rose Astrology Newsletter</label>
                </div>
            </div>
            <div class="submit-container">
                <input type="submit" value="Submit" id="hdrSubmit" class="btn btn-submit">
            </div>
            <div id='hdrFormMessage' class="bg-danger" >
                <p style="color:white"><b>message</b></p>
            </div>
        </div>
        <div class="hidden-container"></div>
    </div>
</form>
<img alt="" src="https://app.icontact.com/icp/core/signup/tracking.gif?id=41&amp;cid=872462&amp;lid=7947">
</div></div></div></div> </div> </section>
        <!-- Clients Aside -->
    <aside class="clients ">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 col-xs-1">
                   
                        <img src="img/art/aries.jpg" class="img-responsive" alt="">
                    
                </div>
                <div class="col-sm-1 col-xs-1">
                  
                        <img src="img/art/TarusFacbk.jpg" class="img-responsive" alt="">
                  
                </div>
                <div class="col-sm-1 col-xs-1">
                  
                        <img src="img/art/gemini.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
             
                        <img src="img/art/CancerFacbk.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
                    
                        <img src="img/art/leo.jpg" class="img-responsive img-centered" alt="">
                  
                </div>
                <div class="col-sm-1 col-xs-1">
                 
                        <img src="img/art/virgo.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
                   
                        <img src="img/art/libra.jpg" class="img-responsive img-centered" alt="">
                 
                </div>
                <div class="col-sm-1 col-xs-1">
                  
                        <img src="img/art/ScorpioFacbk.jpg" class="img-responsive img-centered" alt="">
                 
                </div>
                <div class="col-sm-1 col-xs-1">
                   
                        <img src="img/art/sag.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
                   
                        <img src="img/art/capricorn.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
                  
                        <img src="img/art/AquarFbook.jpg" class="img-responsive img-centered" alt="">
                 
                </div>
                <div class="col-sm-1 col-xs-1   ">
                   
                        <img src="img/art/Pisces2.jpg" class="img-responsive img-centered" alt="">
                  
                </div>
            </div>
        </div>
    </aside>
    <!-- Services Section -->
    <section id="consultations" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Consultations</h2>
                    <h3 class="section-subheading text-muted">Please <a href="mailto:roseastrology@yahoo.com?Subject=Schedule a Consultation">email</a> me at <a href="mailto:roseastrology@yahoo.com?Subject=Schedule a Consultation">roseastrology@yahoo.com</a> to schedule an appointment. <p>Or call <b>757-340-5516.</b> </p></h3>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-md-12">            
                    <h4 class="service-heading">Natal Astrology Consultation</h4>
                    <img class="img-responsive" style="float: right; width:300px; margin:0px 0px 30px 30px;" src="img/art/Adventure.jpg" alt=""><p class="text-muted"> Identifying the astrological significance of the positions and relationships of the planets at the moment of your birth provides a wealth of information that, professionally interpreted, can offer invaluable insight into your past, present and future. </p>
<p class="text-muted">Part of your 60-minute private consultation will be devoted to understanding your present situation, emotional patterns and relevant behaviors. We will discuss key astrological energies impacting your life now and how you can best use these planetary aspects to create a more supportive personal and professional environment for enhanced success. </p>
<p class="text-muted">I will also project your planetary cycles and horoscope activity forward for the next 2-3 years. You’ll get an easy-to-understand, helpful, and uplifting picture of your life potential, as well as a look ahead to the major events, changes and opportunities as suggested by your horoscope. </p>
<p class="text-muted">This consultation is a two-way discussion that's not only free of technical jargon but also rich with accessible insight and useful advice you can actually put into practice. Our interaction is very much a dialogue - you are invited to ask questions or seek clarifications at any time. </p>

<p class="text-muted">Please <a href="mailto:roseastrology@yahoo.com?Subject=Schedule a Consultation">email</a> me at <a href="mailto:roseastrology@yahoo.com?Subject=Schedule a Consultation">roseastrology@yahoo.com</a> or call <b><span style="white-space: nowrap;">757-340-5516</span></b> to schedule an appointment, which is generally handled over the phone. </p>
                    
                    <p class="text-muted"> <b>Fee: $150 for 60 minutes</b><br/>
                    
Payment can be made by MasterCard or Visa, or by check (check must be received before the appointment). </p>
 <p class="text-muted">&nbsp;</p>
                    
                    <h4 class="service-heading">Astrology for Newborns and Older Children</h4>
                    <img class="img-responsive" style="float:left; width:150px; margin:5px 20px 10px 0px;" src="img/art/AngelJoy2.jpg" alt=""><p class="text-muted">An astrological analysis for a newborn or young child is a great gift for parents and can provide a unique understanding of the child's entry into the world, or what to expect in the early years and beyond.  </p>
                    <p class="text-muted">This consultation focuses on identifying and explaining the reigning needs of the child as well as the basic nature and structure of their identity and development. A comprehensive understanding of the life purpose opportunities and issues will be discussed, along with strategies that will provide practical guidance and help steer the child toward success. </p>
<p class="text-muted">This can be done by phone or in person with the parents, or provided electronically as a digital recording. </p>
 
 <p class="text-muted"> <b>Fee: $150 for 60 minutes</b><br/>
                    
Payment can be made by MasterCard or Visa, or by check (check must be received before the appointment). </p>
 <p class="text-muted">&nbsp;</p>
                    <h4 class="service-heading">For Best Results </h4>
                    <p class="text-muted">An accurate birth date, time and location (by city or town preferably) are very important in order for an astrological consultation to be most helpful. Generally, a birth time is available on your birth certificate. </p>
                </div>             
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section id="videos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Latest Monthly Videos</h2>
                    
                </div>
            </div>
            <div class="row">
              <div style="display:flex; flex-wrap:wrap; justify-content:center;">
                
             
                
             
                
             
                
             
                
             
                
             
                
             
                
             
                
             
                
             
                
             
                
             
                
             
                
             
                
             
                
                
                <div class="col-md-4 col-sm-6 portfolio-item" style="width:374px; margin:15px">
                    
                       
                        <iframe width='374' height='250' src='https://www.youtube.com/embed/8g4t9S9kTdQ' frameborder='0' allowfullscreen></iframe>
                      
                    </a>
                    <div style="text-align: center;">
                        <h5>New Moon in Aries 2017</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                
             
                
                
                <div class="col-md-4 col-sm-6 portfolio-item" style="width:374px; margin:15px">
                    
                       
                        <iframe width='374' height='250' src='https://www.youtube.com/embed/3sbMQMQmnlw' frameborder='0' allowfullscreen></iframe>
                      
                    </a>
                    <div style="text-align: center;">
                        <h5>Astrological Insights for April 2017</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                
             
                
             
                
             
                
             
                
             
                
            
            </div>
                <br style="clear:left">
            <h5>&nbsp;</h5> <h4 class="service-heading">Check out my <a href="https://www.youtube.com/user/roseastrology" target="_blank">YouTube channel...</a></h4><div style="font-weight:bold; width:35%;margin:0px; padding:0px;"><h3 class="section-subheading text-muted" style="line-height:150%;margin-bottom:0;">to see other original videos, including my popular series on The Rings You Wear as well as two videos on Cleansing and Charging Your Aura.</h3></div>
            </div>           
        </div>
            
    </section>

    <!-- Services Section -->
    <section id="articles" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">My Published Articles</h2>
                    <h3 class="section-subheading text-muted">A few of the more recent...</h3>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-md-12">   
                    <ul style="list-style-type: none;">
                       
                

    
        
        
            
                        <li>
                            <div class="timeline-image">
                                <img class="img-responsive" style="float:left; height:100px; width:100px; margin:8px 15px 15px 15px;" src=./img/articles/CancerFacbk.jpg alt="">
                            </div>
                        
          
                            <div>
                                <h4  class="service-heading"><a href="./article/2017/02/09/TheAstrologyOfPregnancy/">The Astrology of Pregnancy</a></h4>
                                <p class="text-muted">What do you say to a woman who asks you to look at her horoscope to see if a pregnancy is in her future? Often stressed and anxious, she inquires emotionally, “Will I have a baby? And if so, when?”&nbsp;&nbsp; <b><a href="./article/2017/02/09/TheAstrologyOfPregnancy/">more...</a></b>
                </p><br clear="all">
                            </div>
                        </li>
           
    
                    
    
        
        
            
                        <li>
                            <div class="timeline-image">
                                <img class="img-responsive" style="float:left; height:100px; width:100px; margin:8px 15px 15px 15px;" src=./img/articles/AquarFbook.jpg alt="">
                            </div>
                        
          
                            <div>
                                <h4  class="service-heading"><a href="./article/2017/02/08/EmbracingUranus/">Embracing the Adventure of a Uranus Cycle</a></h4>
                                <p class="text-muted">Have you ever experienced a small electric shock, giving you that sharp jolt of energy that causes you to jump? No doubt you have. You know how it energizes your senses and snaps your attention fully into the moment, so that you're completely aware and alert. That sudden, shocking surprise triggers a sensorial rush, while your adrenaline surges because of the zap coming out of the blue.&nbsp;&nbsp; <b><a href="./article/2017/02/08/EmbracingUranus/">more...</a></b>
                </p><br clear="all">
                            </div>
                        </li>
           
    
                    
    
        
        
            
                        <li>
                            <div class="timeline-image">
                                <img class="img-responsive" style="float:left; height:100px; width:100px; margin:8px 15px 15px 15px;" src=./img/articles/Pisces2.jpg alt="">
                            </div>
                        
          
                            <div>
                                <h4  class="service-heading"><a href="./article/2017/02/07/NavigatingNeptune/">Navigating through the Neptune Fog</a></h4>
                                <p class="text-muted">Have you ever become assertive and energized when talking about Mars transits? Or wild and adventurous when discussing Uranus? When you look at your own horoscope cycles or those of your clients, does your behavior begin to resonate with the planetary signature energies?&nbsp;&nbsp; <b><a href="./article/2017/02/07/NavigatingNeptune/">more...</a></b>
                </p><br clear="all">
                            </div>
                        </li>
           
    
                    
    
        
        
                    
    
        
        
                    
    
        
        
                    
    
        
        
                    
    
        
        
                    
    
                    
    
                    
    
                    
    
                    
    
                    
    
                    
    
                    
    
                    
    
                    
    
                    
    
                    
    
                    
    
                      </ul>  <br>     
                    
                
            <h4 class="service-heading"><a href="articles/">more articles...</a></h4>
            </div></div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" style="padding: 50px 0px 0px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">My Story</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-responsive" src="img/about/ScorpioFacbk.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                            <h3>&nbsp;</h3>
                                    <h4 class="subheading">I have been in love with astrology...</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">I have been in love with astrology - and all things metaphysical, really - since 3rd grade. After pestering my mom for an astrology book, she finally bought me Linda Goodman's Sun Signs. In reading and becoming immersed in that landmark work, I felt like I was remembering something I already knew…as though I had studied astrology in a previous life. It was an ancient art with which I had a wonderful feeling of familiarity and a craft that I have been honing ever since.<br/>
                                        After graduating with Highest Honors in Noel Tyl's Master's Degree Certification Program in 2009, I developed and produced with my husband the 9 DVD Tyl MasterWork set, which has been sold worldwide. I am now Noel's teaching associate for the Master's course.

</p><br/><p class="text-muted">
Since becoming a full-time astrologer in 1983, I have interpreted tens of thousands of charts for clients in all walks of life all around the world.</p>
                                </div>
                            </div>
                        </li>
    <!--
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/freesoul.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                 
                                    <h4 class="subheading">When I was 24...</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">

When I was 24, I started my practice as a full-time astrologer and intuitive. I also met Pete Sanders, founder of Free Soul. Connecting with Free Soul gave me the methods and techniques to  advance my intuitive abilites.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                
                                    <h4 class="subheading">I trained as a Free Soul instructor...</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">I trained as a Free Soul instructor  and began teaching other people to understand their own intuition. Since 1984, I have traveled all over the nation helping people activate their psychic senses "on command" and to realize their full soul potential. </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                  
                                    <h4 class="subheading">It's been over twenty years...</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">It's been over twenty years since I started my astrology practice and began teaching Free Soul. I'm still enjoying every minute!</p>
                                </div>
                            </div>
                        </li>
                       < <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>

                    </ul>
                    -->
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Aside -->
    <aside class="clients ">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 col-xs-1">
                   
                        <img src="img/art/aries.jpg" class="img-responsive" alt="">
                    
                </div>
                <div class="col-sm-1 col-xs-1">
                  
                        <img src="img/art/TarusFacbk.jpg" class="img-responsive" alt="">
                  
                </div>
                <div class="col-sm-1 col-xs-1">
                  
                        <img src="img/art/gemini.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
             
                        <img src="img/art/CancerFacbk.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
                    
                        <img src="img/art/leo.jpg" class="img-responsive img-centered" alt="">
                  
                </div>
                <div class="col-sm-1 col-xs-1">
                 
                        <img src="img/art/virgo.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
                   
                        <img src="img/art/libra.jpg" class="img-responsive img-centered" alt="">
                 
                </div>
                <div class="col-sm-1 col-xs-1">
                  
                        <img src="img/art/ScorpioFacbk.jpg" class="img-responsive img-centered" alt="">
                 
                </div>
                <div class="col-sm-1 col-xs-1">
                   
                        <img src="img/art/sag.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
                   
                        <img src="img/art/capricorn.jpg" class="img-responsive img-centered" alt="">
                   
                </div>
                <div class="col-sm-1 col-xs-1">
                  
                        <img src="img/art/AquarFbook.jpg" class="img-responsive img-centered" alt="">
                 
                </div>
                <div class="col-sm-1 col-xs-1   ">
                   
                        <img src="img/art/Pisces2.jpg" class="img-responsive img-centered" alt="">
                  
                </div>
            </div>
        </div>
    </aside>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Me</h2>
                    <h3 class="section-subheading text-muted">Please <a href="mailto:roseastrology@yahoo.com?Subject=Schedule a Consultation">email</a> me at <a href="mailto:roseastrology@yahoo.com?Subject=Schedule a Consultation">roseastrology@yahoo.com</a> to schedule an appointment.
         <p>           Or call <b><span style="white-space: nowrap;">757-340-5516.</span></b></h3></p>
               
                
                <form id="ic_signupform2" method="POST" action="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/?id=41&amp;cid=872462&amp;lid=7947">
    <div class="elcontainer normal stacked" style="margin-right: auto;
	margin-left: auto; ">
        
                    <h4 >Sign up for my Free Newsletter</h4>
                 
        <div class="sortables">
            <div class="formEl fieldtype-input required" id="ftrEmail" data-validation-type="1" data-label="Email" style="display: inline-block; width: 100%;">
                <label>Email<span class="indicator required">*</span></label><br />
                <input type="text" style="height: 3em; padding:0 .75em; width:90%; margin-bottom:3px;" placeholder="" name="data[email]" onfocus="$('#ftrFormMessage').hide()">
             
            </div>
            <div class="formEl fieldtype-checkbox required" dataname="listGroups" data-validation-type="1" data-label="Lists" style="display: none; width: 100%;">
                <h3>Lists<span class="indicator required">*</span></h3>
                <div class="option-container">
                    <label class="checkbox"><input type="checkbox" alt="" name="data[listGroups][]" value="14154" checked="checked">Rose Astrology Newsletter</label>
                </div>
            </div>
            <div class="submit-container">
                <input type="submit" value="Submit" id="ftrSubmit"  name="ftrSubmit" class="btn btn-submit">
            </div>
             <div id='ftrFormMessage' class="bg-danger" >
                <p style="color:white"><b>message</b></p>
            </div>
        </div>
        <div class="hidden-container"></div>
    </div>
</form>
                </div>
               
            </div>
            
            <!--
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="control-group form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
-->
        </div>
    </section>


      <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Kathy Rose Astrology 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        
                        <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        </li>
                        
                        <li><a href="https://www.facebook.com/kathy.rose.330"><i class="fa fa-facebook"></i></a>
                        </li>
                        
                        <li><a href="http://youtube.com/roseastrology"><i class="fa fa-youtube-play"></i></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
     <!-- Portfolio Modals -->
 
    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>The Astrology of Pregnancy</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p>What do you say to a woman who asks you to look at her horoscope to see if a pregnancy is in her future? Often stressed and anxious, she inquires emotionally, “Will I have a baby? And if so, when?”</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">article</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Embracing the Adventure of a Uranus Cycle</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p>Have you ever experienced a small electric shock, giving you that sharp jolt of energy that causes you to jump? No doubt you have. You know how it energizes your senses and snaps your attention fully into the moment, so that you're completely aware and alert. That sudden, shocking surprise triggers a sensorial rush, while your adrenaline surges because of the zap coming out of the blue.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">article</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Navigating through the Neptune Fog</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p>Have you ever become assertive and energized when talking about Mars transits? Or wild and adventurous when discussing Uranus? When you look at your own horoscope cycles or those of your clients, does your behavior begin to resonate with the planetary signature energies?</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">article</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Midpoint Madness and the Orlando Massacre</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p>The tragic mass shooting that recently stunned Orlando, Florida and the rest of the United States — as well as impacting people in far parts of the world — is still producing shock waves of sadness and grief for us all.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">article</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Appreciating Aries Energy in Women</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p>I am a female with Moon in Aries. I also have a prominent Mars in Taurus, sitting right on the Ascendant in strong aspect to Jupiter and Uranus. I am highly attuned with and inclined to warrior energy, competition, independence and enthusiasm.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">article</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>The Aries Point Bloom</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p>There is an extremely sensitive and powerful zone in the zodiac located at the 0 degrees point of the four cardinal signs - a special area that relates to high public visibility. Actually, we could say that the Aries Point has an orb that starts at 29 degrees mutable and ends at 1 degree cardinal. Planets or angles at the Aries Point in our natal chart have the potential for high visibility in life. Sometimes this can suggest fame or notoriety. The AP indicates the presence of energy insistence that pushes a planet or angle into public view.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">article</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Moon Sense</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p>Every month the Moon makes an orbit around the Earth, passing through the twelve signs of the zodiac. As it changes signs every 2 1/2 days, emotional attitudes change, too. This has an impact on your personality, sometimes causing you to feel powerful, at other times sensitive and vulnerable.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">article</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Saturn and Guilt</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p>In my practice, I've noticed that Saturn in hard aspect to the Sun or Moon in the natal chart can dramatically signal sensitivity to feeling guilt; to taking on responsibility for things which are out of one's control.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">article</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Midpointmadness</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Saturnandguilt</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Theastrologyofpregnancy</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Dreams</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p>Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">blog</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Escape</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/escape.png" class="img-responsive img-centered" alt="image-alt">
                            <p>Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">blog</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Golden</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/golden.png" class="img-responsive img-centered" alt="image-alt">
                            <p>Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">blog</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>New Moon in Aries 2017</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/treehouse.png" class="img-responsive img-centered" alt="image-alt">
                            <p>Here's Kathy Rose with the background you need to put your needs into focus.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Astrological Insights for April 2017</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/treehouse.png" class="img-responsive img-centered" alt="image-alt">
                            <p>Here's Kathy Rose with the background you need to put your needs into focus.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">August 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Round Icons</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/roundicons.png" class="img-responsive img-centered" alt="image-alt">
                            <p>Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">blog</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Startup Framework</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/startup-framework.png" class="img-responsive img-centered" alt="image-alt">
                            <p>Lorem ipsum dolor sit amet, usu cu alterum nominavi lobortis. At duo novum diceret. Tantas apeirian vix et, usu sanctus postulant inciderint ut, populo diceret necessitatibus in vim. Cu eum dicam feugiat noluisse.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">blog</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Ariespointbloom</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Embracinguranus</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Navigatingneptune</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/" class="img-responsive img-centered" alt="">
                            <p></p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com"></a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

<!-- jQuery Version 1.11.0 -->
    <script src="/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/js/jqBootstrapValidation.js"></script>
    <script src="/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/agency.js"></script>


<!-- custom react file for YouTube component -->
<script defer src="/js/bundle.js"></script>



<script src="/js/icv_validation.js"></script>
<script type="text/javascript" src="https://app.icontact.com/icp/static/form/javascripts/tracking.js"></script>
<link type="text/css" href="https://app.icontact.com/icp/static/human/css/signupBuilder/formGlobalStyles.css" rel="stylesheet" media="all">
<style type="text/css" id="signupBuilderAdvancedStyles">

</style>
<style type="text/css" id="signupBuilderStyles">
#ic_signupform  .elcontainer,
#ic_signupform2 .elcontainer {
   background: #ffffff;
   text-align: left;
   max-width: 450px;
   padding: 30px 30px;
   border-radius: 3px;
   border: 1px none #acacac;
   font-size: 12px;
   color: #5a5a5e;
   font-family: lucida grande;
}

#ic_signupform  .elcontainer.center-aligned .formEl, 
#ic_signupform2 .elcontainer.center-aligned .formEl { 
	margin-right: auto;
	margin-left: auto; 
}

#ic_signupform  .elcontainer.right-aligned .formEl,
#ic_signupform2 .elcontainer.right-aligned .formEl{ 
	margin-left: auto; 
}

#ic_signupform  .form-header,
#ic_signupform2 .form-header{
   
      display: none;
   
   background: #ffffff;
   margin-top: -30px;
   margin-left: -30px;
   margin-right: -30px;
   margin-bottom: 30px; /* using padding on purpose */
   padding-top: 20px;
   padding-right: 30px;
   padding-bottom: 20px;
   padding-left: 30px;
   border-radius: calc(3px - 1px) calc(3px - 1px) 0 0;
   text-align: center;
   font-size: 150%;
   color: #333333;
   border-bottom: 1px solid #dddddd;
}

#ic_signupform  .elcontainer.inline-label-left .formEl.fieldtype-input label,
#ic_signupform2 .elcontainer.inline-label-left .formEl.fieldtype-input label,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-dropdown label,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-checkbox h3,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-input label,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-dropdown label,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-checkbox h3 {
   width: 30%;
}
	   
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-checkbox h3,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-checkbox h3 {
   line-height: 3em; 
}

#ic_signupform .elcontainer.tight.inline-label-left .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.tight.inline-label-left .formEl.fieldtype-checkbox h3,
#ic_signupform .elcontainer.tight.inline-label-right .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.tight.inline-label-right .formEl.fieldtype-checkbox h3 {
   line-height: 2em; 
}

#ic_signupform .elcontainer.generous.inline-label-left .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.generous.inline-label-left .formEl.fieldtype-checkbox h3,
#ic_signupform .elcontainer.generous.inline-label-right .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer.generous.inline-label-right .formEl.fieldtype-checkbox h3 {
   line-height: 4em; 
}

#ic_signupform .elcontainer.inline-label-left .formEl input[type="text"],
#ic_signupform2 .elcontainer.inline-label-left .formEl input[type="text"],
#ic_signupform .elcontainer.inline-label-left .formEl select,
#ic_signupform2 .elcontainer.inline-label-left .formEl select,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-radio .option-container,
#ic_signupform .elcontainer.inline-label-left .formEl.fieldtype-checkbox .option-container,
#ic_signupform .elcontainer.inline-label-right .formEl input[type="text"],
#ic_signupform2 .elcontainer.inline-label-right .formEl input[type="text"],
#ic_signupform .elcontainer.inline-label-right .formEl select,
#ic_signupform2 .elcontainer.inline-label-right .formEl select,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-radio .option-container,
#ic_signupform .elcontainer.inline-label-right .formEl.fieldtype-checkbox .option-container {
   width: 70%;
}

#ic_signupform  .elcontainer.hidden-label .formEl.required:before, 
#ic_signupform2 .elcontainer.hidden-label .formEl.required:before {
   color: #bdbdbf;
}
	   
#ic_signupform  .elcontainer .formEl,
#ic_signupform2 .elcontainer .formEl{
   font-size: 1em;
}

#ic_signupform  .elcontainer .formEl.fieldtype-input label,
#ic_signupform2 .elcontainer .formEl.fieldtype-input label,
#ic_signupform .elcontainer .formEl.fieldtype-dropdown label,
#ic_signupform .elcontainer .formEl.fieldtype-radio h3,
#ic_signupform .elcontainer .formEl.fieldtype-checkbox h3 {
   font-size: 100%;
   font-weight: bold;
   color: #5a5a5e;
}

#ic_signupform  .elcontainer .formEl.fieldtype-input input[type="text"],
#ic_signupform2 .elcontainer .formEl.fieldtype-input input[type="text"],
#ic_signupform .elcontainer .formEl.fieldtype-dropdown select {
   background-color: #f5f5f5;
   border: 1px solid #e7e7e7;
   border-radius: 3px;
}
	   
#ic_signupform  .elcontainer .formEl.fieldtype-input input[type="text"],
#ic_signupform2 .elcontainer .formEl.fieldtype-input input[type="text"],
#ic_signupform .elcontainer .formEl.fieldtype-dropdown select,
#ic_signupform .elcontainer .formEl.fieldtype-radio label,
#ic_signupform .elcontainer .formEl.fieldtype-checkbox label {
   font-size: 100%;
}

#ic_signupform  .elcontainer .formEl input[type="text"]::-moz-placeholder,
#ic_signupform2 .elcontainer .formEl input[type="text"]::-moz-placeholder{
   color: #bdbdbf;
   font-family: inherit;
}

#ic_signupform  .elcontainer .formEl input[type="text"]::-webkit-input-placeholder,
#ic_signupform2 .elcontainer .formEl input[type="text"]::-webkit-input-placeholder {
   color: #bdbdbf;
   font-family: inherit;
}

#ic_signupform  .elcontainer .formEl input[type="text"]:-ms-input-placeholder,
#ic_signupform2 .elcontainer .formEl input[type="text"]:-ms-input-placeholder {
   color: #bdbdbf;
   font-family: inherit;
}

#ic_signupform  .elcontainer .formEl input[type="text"],
#ic_signupform  .elcontainer .formEl select,
#ic_signupform  .elcontainer .formEl .option-container label,
#ic_signupform2 .elcontainer .formEl input[type="text"],
#ic_signupform2 .elcontainer .formEl select,
#ic_signupform2 .elcontainer .formEl .option-container label{
   color: #bdbdbf;
   font-family: inherit;
}
	   
#ic_signupform  .elcontainer.inline-button .submit-container,
#ic_signupform2 .elcontainer.inline-button .submit-container{
	display: inline-block;
	box-sizing: border-box;
	right: -.5em;
	padding: 0 1em 0 0;
	position: relative;
	vertical-align: bottom;
	margin-bottom: 1em;
}
	
#ic_signupform  .elcontainer.inline-button.tight .sortables,
#ic_signupform2 .elcontainer.inline-button.tight .sortables{
	margin-bottom: -.5em;
}
	
#ic_signupform .elcontainer.inline-button .sortables,
#ic_signupform2 .elcontainer.inline-button .sortables{
	margin-bottom: -1em;
}
	
#ic_signupform .elcontainer.inline-button.generous .sortables,
#ic_signupform2 .elcontainer.inline-button.generous .sortables{
	margin-bottom: -1.5em;
}

#ic_signupform  .elcontainer .submit-container,
#ic_signupform2 .elcontainer .submit-container{
   text-align: left;
}

#ic_signupform .elcontainer .submit-container input[type="submit"],
#ic_signupform2 .elcontainer .submit-container input[type="submit"]{
   background: #e7cd4d;
   border: 0px solid #e7ce4d;
   border-radius: 3px;
   line-height: 1em;
   padding: 10px 25px;
   color: #ffffff;
   font-size: 100%;
   font-family: inherit;
   width: auto;
}

#hdrFormMessage{
    padding:10px 10px 1px; margin:10px; border-radius:3px; display:none; text-align: center;
}
#ftrFormMessage{
    padding:10px 10px 1px; margin:10px 10px 10px -2px; border-radius:3px; display:none; width:90%; text-align: center;
}
</style>

    </body>
</html>
HTMLend1;

if( $_POST["submit"] == "Publish" )
{
	$message = "";

	if($_POST["passwd"] == 'scorp29')
	{

		if (!$file = fopen($filename, 'w')) { echo "Cannot open file ($filename)"; exit; }

		if (fwrite($file, $HTMLbeg) === FALSE) { echo "Cannot write to file ($filename)"; exit; }
		if (fwrite($file, $HTMLmid) === FALSE) { echo "Cannot write to file ($filename)"; exit; }
		if (fwrite($file, $HTMLend1) === FALSE) { echo "Cannot write to file ($filename)"; exit; }
		fclose($file);

		$params[0]->newMoonSign = $newMoonSign;
		$params[0]->newMoonYear = $newMoonYear;
		$params[0]->newMoonURL = $newMoonURL;
		$params[0]->insightMonth = $insightMonth;
		$params[0]->insightYear = $insightYear;
		$params[0]->insightURL = $insightURL;

		$params[0]->asXML($xmlfile);

		$message = "Published " . date("m/d h:i");

	}
	else
	{
		if($_POST["passwd"] == "")
		{ $message = "Password Required";}
		else
		{ $message = "Password Incorrect";}
	}
}

echo $HTMLbeg;
echo $HTMLmid;
echo $HTMLend1;



?>