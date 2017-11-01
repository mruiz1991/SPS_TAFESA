<?php 
session_start(); 
include_once('./phpsystem/database.php');
//can set get from session
$id = "000937494";
?>
<!DOCTYPE html>
<html lang="en" class="gr__tafesa_edu_au"><head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Google Tag Manager -->
    <script async="" src="./How to Apply and Enrol - TAFE SA_files/fbevents.js.download"></script><script type="text/javascript" async="" src="./How to Apply and Enrol - TAFE SA_files/analytics.js.download"></script><script async="" src="./How to Apply and Enrol - TAFE SA_files/gtm.js.download"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TQFHC39');</script>
    <!-- End Google Tag Manager -->

    <meta content="charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TODO remove before production -->
    <meta http-equiv="Pragma" content="no-cache"><title>
	How to Apply and Enrol - TAFE SA
</title>

    <!--Css libraries-->
    <link rel="icon" href="https://www.tafesa.edu.au/SiteFinity/WebsiteTemplates/TAFESABootstrap/App_Themes/TAFESA/images/favicon.ico"><link href="./css/jquery-ui.css" rel="stylesheet"><link href="./css/font-awesome.min.css" rel="stylesheet"><link href="./css/flexslider.css" rel="stylesheet" media="screen"><link href="./css/slick.css" rel="stylesheet"><link href="./css/animate.css" rel="stylesheet"><link href="./css/magnific-popup.css" rel="stylesheet"><link href="./css/shadowbox.css" rel="stylesheet">

    <!--TAFESA Styles-->
    <link href="./css/style.css" rel="stylesheet"><link href="./css/course.css" rel="stylesheet"><link href="./css/contactform.css" rel="stylesheet">

    <!--Google fonts -->
    <link href="./css/css" rel="stylesheet" type="text/css"><link href="./css/css(1)" rel="stylesheet" type="text/css"><link href="./css/css(2)" rel="stylesheet" type="text/css"><link href="./css/css(3)" rel="stylesheet"><link href="./css/css(4)" rel="stylesheet" type="text/css"><link href="./css/css(5)" rel="stylesheet"><link href="./css/css(6)" rel="stylesheet">

	<!-- Boottrap	-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="main_wrapper" id="wrapper">
            
            
            <!-- Main navigation start -->
                

<script type="text/javascript">
    function resolveScreenOrientation() {
        if (window.orientation != 0 && window.orientation != undefined) // Not Portrait
        {
            $("#navbar").removeClass("navbar-fixed-top");
            if ($(window).width() < 768) {
                $('body').css('padding-top', '0px');
            } else 
            {
                $('body').css('padding-top', '136px');
            }
        }
        else // Portrait
        {
            $("#navbar").addClass("navbar-fixed-top");
            if ($(window).width() < 768) {
                $('body').css('padding-top', '194px');
            } else {
                $('body').css('padding-top', '136px');
            }
        }
    }

    function adjustForMobileSettings() {
        $('#MainMenuPortalAnchor').css('border-right', 'none');
        $('#MainNavSearchDiv').css('margin-top', '0px');
        $('#MainNavSearchDiv').css('padding-top', '2px');
        $('#MainNavBarQuickLinksDiv').css('padding-top', '5px');
        $('#MainNavBarQuickLinksDiv').css('padding-bottom', '10px');
		
		if ($(window).width() <= 450)
		{
        $('#MainNavBarQuickLinksDiv').css('width', '100%');
		} else {
		$('#MainNavBarQuickLinksDiv').css('width', '80%');
		}
        $('#MainNavBarQuickLinksDiv').css('display', 'inline-block');
        $('#MainNavBarQuickLinksDiv').css('padding-left', '0px');
        $('#MainNavBarQuickLinksDiv').css('padding-right', '0px');
        $('#MainNavInnerHeaderDiv').css('margin-top', '0px');
        $('#MainNavInnerHeaderDiv').css('height', '132px');
        $('#MainNavInnerHeaderDiv').css('line-height', '0.5');
        $('#MainNavTAFELogo').css('padding-top', '5px');

        $('#MainNavNavBarHeaderDiv').css('height', '80px');
        $('#MainNavLogoClearFixAnchor').css('font-size', '0px');
        $('.header_inner a').each(function (anchor) {
            $(this).css('font-size', "12px");
            $(this).css('padding-left', "0px");
            $(this).css('padding-right', "0px");
        });

        $('#MainMenuLearnLi').css('padding-left', "0px");
        $('#MainMenuLearnLi').css('padding-right', "0px");
        $('#MainMenuMyTAFESALi').css('padding-left', "0px");
        $('#MainMenuMyTAFESALi').css('padding-right', "0px");
        $('#MainMenuPortalLi').css('padding-left', "0px");
        $('#MainMenuPortalLi').css('padding-right', "0px");

        $('#MainMenuNavBarul').css('text-align', 'center');
        $('#MainMenuNavBarul').css('float', 'none');

        $('#MainMenuLearnLi').addClass('col-xs-4');
        $('#MainMenuMyTAFESALi').addClass('col-xs-4');
        $('#MainMenuPortalLi').addClass('col-xs-4');

        $('#mainNav1_searchBox').css('line-height', '1.0');

        //Determine how the screen is displayed now, and adjust the navbar accordingly
        resolveScreenOrientation();

        //Bind to the event on orientation change to check what state it is in and adjust accordingly
        $(window).on("orientationchange", function (event) {
            if (!$('#MainMenuTAFEShopLi').is(':visible')) {
                resolveScreenOrientation();
            }
        });
    }

    function removeMobileSettings() {
        $('#MainMenuPortalAnchor').css('border-right', '');
        $('#MainNavSearchDiv').css('margin-top', '');
        $('#MainNavSearchDiv').css('padding-top', '');
        $('#MainNavBarQuickLinksDiv').css('padding-top', '');
        $('#MainNavBarQuickLinksDiv').css('padding-bottom', '');
        $('#MainNavBarQuickLinksDiv').css('width', '');
        $('#MainNavBarQuickLinksDiv').css('display', '');
        $('#MainNavBarQuickLinksDiv').css('padding-left', '');
        $('#MainNavBarQuickLinksDiv').css('padding-right', '');
        $('#MainNavInnerHeaderDiv').css('margin-top', '');
        $('#MainNavInnerHeaderDiv').css('height', '');
        $('#MainNavInnerHeaderDiv').css('line-height', '');
        $('#MainNavTAFELogo').css('padding-top', '');

        $('#MainNavNavBarHeaderDiv').css('height', '');
        $('#MainNavLogoClearFixAnchor').css('font-size', '');
        $('.header_inner a').each(function (anchor) {
            $(this).css('font-size', "");
            $(this).css('padding-left', "");
            $(this).css('padding-right', "");
        });

        $('#MainMenuLearnLi').css('padding-left', "");
        $('#MainMenuLearnLi').css('padding-right', "");
        $('#MainMenuMyTAFESALi').css('padding-left', "");
        $('#MainMenuMyTAFESALi').css('padding-right', "");
        $('#MainMenuPortalLi').css('padding-left', "");
        $('#MainMenuPortalLi').css('padding-right', "");

        $('#MainMenuNavBarul').css('text-align', '');
        $('#MainMenuNavBarul').css('float', '');

        $('#MainMenuLearnLi').removeClass('col-xs-4');
        $('#MainMenuMyTAFESALi').removeClass('col-xs-4');
        $('#MainMenuPortalLi').removeClass('col-xs-4');

        $('#mainNav1_searchBox').css('line-height', '');

        $("#navbar").addClass("navbar-fixed-top");
        $('body').css('padding-top', '136px');
    }

    $(document).ready(function () {
        // $("input[data-sf-role='suggestionsRoute']").each(function () {
        //     $(this).attr('value',"/Sitefinity/Public/Services/SearchCompletion/");
        //});
        var itemPos = $('ul.navbar-nav li.nav-item ul.dropdown-menu').last();
        itemPos.addClass("dropdown-menu-right");

        if (!$('#MainMenuTAFEShopLi').is(':visible')) {
            adjustForMobileSettings();
        } else {
            removeMobileSettings();
        }

        $(window).resize(function () {
            if (!$('#MainMenuTAFEShopLi').is(':visible')) {
                adjustForMobileSettings();
            } else {
                removeMobileSettings();
            }
        });
    });
</script>
<div class="navbar-static-top navbar-fixed-top" role="navigation" id="navbar">
    

<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#"><img src="./css/logo_TAFESA.png" alt="TAFESA" id="MainNavTAFELogo"></a>
		</div>
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="https://www.tafesa.edu.au/">Home</a></li>
		  <li><a href="https://learn.tafesa.edu.au/login/index.php">Learn</a></li>
		  <li><a href="https://www.tafesa.edu.au/mytafe-sa">myTAFE SA</a></li>
		  <li><a href="https://sts.tafesa.edu.au/adfs/ls/?wa=wsignin1.0&amp;wtrealm=https://portal.tafesa.edu.au&amp;wctx=bk=1393551405&amp;LoginOptions=3">Portal</a></li>
		  <li><a href="https://shop.tafesa.edu.au/LOR/Home.aspx">TAFEShop</a></li>
		  <li><a href="https://www.tafesa.edu.au/contact-us">Contact us</a></li>
		  <li><a href="https://www.tafesa.edu.au/contact-us">Freecall 1800 882 661</a></li>
		</ul>
	</div>
  <div class="container"><br/><br/></div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	<a class="navbar-brand" href="#">IT STUDY</a>
	  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Enrol<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="newEnrol.php">Enroll for New Semester</a></li>
            <li><a href="editEnrol.php">Edit Enrolment</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Time Table <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="timetable(gr).php">Grid View</a></li>
            <li><a href="timetable(tbl).php">Table View</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="result.php">Result<span class="caret"></span></a>
          <ul class="dropdown-menu">
<?php
	//select the Result from database
	$queryResult="Select * from tblStudentErolment";
	
	//run the query
	$result1 = mysqli_query($link,$queryResult);
	
	while ($row = mysqli_fetch_row($result1)){
			if (($row[0]==$id)&($row[3]==1)){
			echo "<li><a href=\"result.php\">".$row[2]."</a></li>";
			}
	}
?>
          </ul>
        </li>
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="http://www.tafesa.edu.au/courses/information-technology">About Us<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.tafesa.edu.au/courses/information-technology/digital-literacy/">Digital Literacy</a></li>
            <li><a href="http://www.tafesa.edu.au/courses/information-technology/digital-media/">Digital Media</a></li>
            <li><a href="http://www.tafesa.edu.au/courses/information-technology/it-support">IT Support</a></li>
            <li><a href="http://www.tafesa.edu.au/courses/information-technology/networking-security">Networking and Security</a></li>
            <li><a href="http://www.tafesa.edu.au/courses/information-technology/software-development">Software Development</a></li>
            <li><a href="http://www.tafesa.edu.au/courses/information-technology/website-development">Website Development</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="./phpsystem/logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>


</div>

            <!-- Main navigation end -->


<!-- MAIN CONTENT FROM HERE -- MAIN CONTENT FROM HERE-- MAIN CONTENT FROM HERE-- MAIN CONTENT FROM HERE-- MAIN CONTENT FROM HERE-- MAIN CONTENT FROM HERE  -->
<!-- Main content start -->
            <div class="mainContent clearfix">
                <div class="container">
				<br/><br/><br/>

<!--Main registered session-->
<DIV id="pagebodydivfull">
	<div id="alignLeft">
<?php
	//select the Result from database
	$queryResult="Select * from tblStudentErolment";
	$query2="Select * from tblStudyPlan";
	
	//run the query
	$result1 = mysqli_query($link,$queryResult);
	$result2 = mysqli_query($link,$query2);
	$getData = false;
	while ($row = mysqli_fetch_row($result1)){
		if (($row[0]==$id)&&($row[3]==1)){
			echo "<h4>Result for: " . $row[2] ."</h4>";
			echo "<br/>";
			echo 	"<table class=\"table table-hover\">
					<tr>
						<th>CRN</th>
						<th>Study Path</th>						
						<th>Subject Code</th>
						<th>Compentency Name</th>
						<th>Credit</th>
						<th>Result</th>				
					</tr>";
			while ($row1 = mysqli_fetch_row($result2)){
					if ($row1[0]==$row[2]){
					echo "<tr>
						<td>".$row1[1]."</td>
						<td>".$row1[2]."</td>						
						<td>".$row1[3]."</td>
						<td>".$row1[4]."</td>
						<td>".$row1[5]."</td>
						<td>".$row1[7]."</td>				
						</tr>";
				}
			}	
		echo "</table><br/>";
		$getData=true;
		break;
		}
	}
	
	if (!($getData)) {
			echo "<h4>It's seem you don't have any result. Click <a href=\"#\">here</a> to comeback</h4>";
		}
	//select the Result from database
	
	
	//run the query
	
	

?>

	</div>
</div>
<!--End register session-->

                </div>
            </div>
            <!-- Main content end -->

            <!-- menuFooter start -->
            <div class="menuFooter clearfix">
<div class="container">
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <p>
              <a href="https://www.tafesa.edu.au/"><img class="site-logo" src="./css/site-logo.png" alt="TAFESA logo"></a>
            </p>
            <p>Freecall <a href="tel:1800 882 661">1800 882 661</a></p>
            
        </div>

        <div class="col-sm-6 col-xs-12 col-md-4 border-wrap clearfix">
            <div class="row">
                <div class="col-xs-6">
                    <ul class="menuLink clearfix">
                        <li>
                            <a href="https://www.tafesa.edu.au/courses">Courses</a>
                        </li>
                        <li>
                            <a href="https://www.tafesa.edu.au/locations">Locations</a>
                        </li>
                        <li>
                            <a href="https://www.tafesa.edu.au/apply-enrol">Apply and Enrol</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <ul class="menuLink clearfix">
                        <li>
                            <a href="https://www.tafesa.edu.au/international">International</a>
                        </li>
                        <li>
                            <a href="https://www.tafesa.edu.au/about-tafesa">About us</a>
                        </li>
                        <li>
                            <a href="https://www.tafesa.edu.au/contact-us">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>


        <div class="col-sm-12 col-xs-12 col-md-5 clearfix">
            <div class="footer-col-inner">
            <div class="row">
                <div class="col-xs-12">
                   <a href="https://www.tafesa.edu.au/tafe-sa-news/2016/10/13/tafe-sa-named-large-training-provider-of-the-year-at-south-australian-training-awards" title="Winner"><img class="img-responsive winner" src="./css/winner-large-training-provider.jpg" alt="Winner"></a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


            </div>
            <!-- menuFooter end -->

<!-- container -->

            </footer>
            <!-- footer end -->
            
            
            <script type="text/javascript">
                var mediaInitValue = document.getElementById("mediaInit");
                if (mediaInitValue != null) {
                    Shadowbox.init({
                        overlayOpacity: "0.8"
                    });
                }
            </script>
        </div>
    

<script type="text/javascript">
//<![CDATA[
var sf_appPath='/';Sys.Application.add_init(function() {
    $create(Telerik.Sitefinity.Services.Search.Web.UI.Public.SearchBox, {"disableSuggestions":true,"indexCatalogue":"all","language":null,"minSuggestLength":3,"resultsUrl":"/search-results","searchButton":$get("mainNav1_searchBox_ctl00_ctl00_searchButton"),"searchTextBox":$get("mainNav1_searchBox_ctl00_ctl00_searchTextBox"),"suggestionFields":"Title","suggestionsRoute":"/restapi/search/suggestions","wordsMode":0}, null, null, $get("mainNav1_searchBox"));
});
//]]>
</script>
</form><script type="text/javascript">
	StatsClient.LogVisit('2733df76-a0b8-409e-9eb5-579e6baf1010', '3ab62d67-a7e2-467c-8aab-d18daac06659');
</script>



<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","651903538306368");fbq("track","PageView");</script>
<noscript>&lt;img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=651903538306368&amp;amp;ev=PageView&amp;amp;noscript=1"&gt;</noscript>

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="z-index: 1031; display: none;"></ul>
</body>
</html>