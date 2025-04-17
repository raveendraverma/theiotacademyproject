<!Doctype HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>
			<?php
			if (wp_title('', false)) {
				wp_title(' | ', true, 'right');
			} else {
				bloginfo('description');
			}
			?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="dns-prefetch" href="https://fonts.gstatic.com" />
		<link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
		<link rel="preload" as="image" type="image/svg" href="https://www.theiotacademy.co/assets/dit/images/navbar/logo.svg">
		<link rel="icon" href="https://www.theiotacademy.co/assets/images/iot-academy-favicon-32x32.png" type="image/x-icon" />
		
		<?php wp_head(); ?>
		
<style>
    @font-face {
        font-display: swap;
        font-family: "Nunito", sans-serif;
        font-weight: normal;
        font-style: normal
    }
</style>
<!-- Google Tag Manager -->
<script>
    setTimeout(function(){
        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
            j.async=true; j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P57SX2T');
    }, 5000); // Delay for 5 seconds (5000 ms)
</script>
<!-- End Google Tag Manager -->
	</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P57SX2T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--
	<header id="header">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md navbar-light bg-faded">
			<?php //if( has_custom_logo() ) { 
  //the_custom_logo(); 
	//} else { ?>
	<h1 class="navbar-brand mb-0"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
<?php //} ?>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <?php
  //  wp_nav_menu([
  //    'menu'            => 'top',
  //    'theme_location'  => 'top',
  //    'container'       => 'div',
  //    'container_id'    => 'bs4navbar',
  //    'container_class' => 'collapse navbar-collapse',
  //    'menu_id'         => false,
  //    'menu_class'      => 'navbar-nav ml-auto mr-auto',
  //    'depth'           => 2,
  //    'fallback_cb'     => 'bs4navwalker::fallback',
  //    'walker'          => new bs4navwalker()
  //  ]);
   ?>
</nav>
		</div>
	</header>
  -->
  <div id="enqform-overlay">
    <div class="enqform-cv-spinner">
        <span class="enqform-spinner"></span>
    </div>
</div>
<header>
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.theiotacademy.co/">
                <img src="https://www.theiotacademy.co/assets/dit/images/navbar/logo.svg" alt="the IoT Academy Logo" class="img-fluid" width="122" height="75" id="navlogo">
            </a>
			
			<img src="https://www.theiotacademy.co/blog/wp-content/uploads/2024/12/moon.webp" alt="mode icon" class="img-fluid" width="25" height="25" id="dark-mode-icon2"> 
            <button class="navbar-toggler btn-open" type="button" aria-label="toggler">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="allCourseBtnfp">Programs</button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-lg-0">
              <li class="nav-item">
                <a class="nav-link dropdown-toggle allCourseBtn" href="#">Programs</a>
              </li>
				<!--
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Resources
                </a>
                <ul class="dropdown-menu sub-menu">
                  <li><a class="dropdown-item" href="https://www.upskillcampus.com/salary-predictor">Salary Predictor</a></li>
                  <li><a class="dropdown-item" href="https://job.uctconsulting.com/" rel="nofollow">Job Portal</a></li>
                  <li><a class="dropdown-item" href="https://www.theiotacademy.co/careers">Careers</a></li>
                  <li><a class="dropdown-item" href="https://www.upskillcampus.com/ticket-to-corporate">Ticket To Corporate</a></li>
                  <li><a class="dropdown-item" href="https://www.forum.upskillcampus.com/">Discussion Forum</a></li>
                </ul>
              </li>
				-->
              <li class="nav-item">
                <a href="https://job.uctconsulting.com/" class="nav-link" target="_blank" rel="nofollow noopener">Job Portal</a>
              </li>
              <li class="nav-item">
                <a href="https://www.theiotacademy.co/our-placements" class="nav-link">Placements</a>
              </li>
              <li class="nav-item">
                <a href="https://www.theiotacademy.co/blog/" class="nav-link">Blog</a>
              </li>
            </ul>
            <form class="nav-form">
                <label for="navinput" class="visually-hidden">Search courses</label>
                <input class="nhs-search-input" id="navinput" name="keyValue" onkeyup="SearchDataForm(this)" autocomplete="off" placeholder="Search courses" aria-label="Search product" required/>
                <button type="submit" class="hidden-xs rs-search" aria-label="name" onclick="document.getElementById('navinput').classList.toggle('active');">
                    <img src="https://www.theiotacademy.co/assets/dit/images/navbar/search-icon.svg" alt="search" class="img-fluid" width="20" height="20">
                </button>
            </form>
            <div class="btn-group">
                <a href="https://www.theiotacademy.co/all-courses" class="custom-btn theam-btn">Explore Programs</a>
                <a href="https://uniconvergetech9893.spayee.com/s/mycourses" class="custom-btn theam-border-btn">Login</a>
				<img src="https://www.theiotacademy.co/blog/wp-content/uploads/2024/12/moon.webp" alt="mode icon" class="img-fluid" width="25" height="25" id="dark-mode-icon">
            </div>
          </div>
        </div>
        <div class="searchData">
            <ul class="search-menu" id="search-menu">
            </ul>
        </div>
    </nav>
</header>
<!--megamenu-->
<section class="nsh-all-courses-hover">
    <div class="container-fluid">
        <div class="nsh-ach-inner">
            <div class="nsh-ach-left">
                <div class="nsh-achl-each courses-active-tab2 finanace">
                    <span>Data Science/ Machine Learning</span>
                    <span class="icon courses-active-icon"></span>
                </div>
                <div class="nsh-achl-each generativeaicoursetb">
                    <span>Generative AI <span class="new">Top Trending</span></span>
                    <span class="icon"></span>
                </div>
                <div class="nsh-achl-each damlgenaicoursetb">
                    <span>Self Paced Course</span>
                    <span class="icon"></span>
                </div>
                <div class="nsh-achl-each newanalyticscourse">
                    <span>Data Analyst </span>
                    <span class="icon"></span>
                </div>
                <div class="nsh-achl-each analytics">
                    <span>Java Full Stack</span>
                    <span class="icon"></span>
                </div>
                <div class="nsh-achl-each technology">
                    <span>Digital Marketing</span>
                    <span class="icon"></span>
                </div>
                <div class="nsh-achl-each marketing">
                    <span>Python</span>
                    <span class="icon"></span>
                </div>
                <div class="nsh-achl-each management">
                    <span>Embedded Systems & IoT</span>
                    <span class="icon"></span>
                </div>
            </div>
            <div class="nsh-ach-right finanace d-flex">
                <a href="https://www.theiotacademy.co/advanced-certification-in-data-science-machine-learning-and-iot-by-eict-iitg">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iit.webp" alt="eict-logo" class="img-fluid">
                    <span class="content">
                        <span>Advanced Certification in Applied Data Science, Machine Learning & AI By E&ICT Academy, IIT Guwahati</span>
                        <span class="duration">9 months</span>
                    </span>
                </a>
                <a href="https://www.theiotacademy.co/online-certification-in-applied-data-science-machine-learning-edge-ai-by-eict-academy-iit-guwahati">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iit.webp" alt="eict-logo" class="img-fluid">
                    <span class="content">
                        <span>Online Certification in Applied Data Science, Machine Learning and Edge AI By E&ICT Academy, IIT Guwahati </span>
                        <span class="duration">6 months</span>
                    </span>
                </a>
                <a href="https://www.theiotacademy.co/machine-learning-with-python-training-in-noida">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iot.webp" alt="mindset-logo" class="img-fluid">
                    <span class="content">
                        <span>Certification in Data Science and Machine Learning With Python By The
                            IoT Academy Noida</span>
                        <span class="duration clock">180 Hrs</span>
                    </span>
                </a>
            </div>
            <div class="nsh-ach-right generativeaicoursetb d-none">
                <a href="https://www.theiotacademy.co/advanced-generative-ai-course">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iit.webp" alt="eict-logo" class="img-fluid">
                    <span class="content">
                        <span>Advanced Generative AI Certification Course by E&ICT Academy, IIT Guwahati</span>
                        <span class="duration">6 months</span>
                    </span>
                </a>
            </div>
            <div class="nsh-ach-right damlgenaicoursetb d-none">
                <a href="https://www.theiotacademy.co/data-analytics-machine-learning-ai-course">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iot.webp" alt="da,ml" class="img-fluid">
                    <span class="content">
                        <span>Data Analytics, Machine Learning & Generative AI Course</span>
                        <span class="duration">6 months</span>
                    </span>
                </a>
            </div>
            <div class="nsh-ach-right newanalyticscourse d-none">
                <a href="https://www.theiotacademy.co/data-analyst-certification-course">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iot.webp" alt="data-analytics" class="img-fluid">
                    <span class="content">
                        <span>Data Analyst Certification Course by The IoT Academy</span>
                        <span class="duration">4 months</span>
                    </span>
                </a>
            </div>
    
            <div class="nsh-ach-right analytics d-none">
                <a href="https://www.theiotacademy.co/advanced-certification-program-in-full-stack-java-development-by-eict-academy-iit-guwahati">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iit.webp" alt="java-logo" class="img-fluid">
                    <span class="content">
                        <span>Full Stack Java Developer Course by E&ICT Academy, IIT Guwahati</span>
                        <span class="duration">6 months</span>
                    </span>
                </a>

                <a href="https://www.theiotacademy.co/java-certification-course-in-noida">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iot.webp" alt="java-icon" class="img-fluid">
                    <span class="content">
                        <span>Certification Course for Java Full Stack Developer by The IoT Academy</span>
                        <span class="duration">6 months</span>
                    </span>
                </a>
            </div>
            <div class="nsh-ach-right technology d-none">
                <a href="https://www.theiotacademy.co/digital-marketing-training">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iot.webp" alt="speaker-tv" class="img-fluid">
                    <span class="content">
                        <span>Digital Marketing Certification Course By The IoT Academy</span>
                        <span class="duration">3/7 months</span>
                    </span>
                </a>
            </div>
            <div class="nsh-ach-right marketing d-none">
                <a href="https://www.theiotacademy.co/python-training">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iot.webp" alt="python-logo" class="img-fluid">
                    <span class="content">
                        <span>Python Certification Course By The IoT Academy</span>
                        <span class="duration">45 Days</span>
                    </span>
                </a>
            </div>
    
            <div class="nsh-ach-right management d-none">
                <a href="https://www.theiotacademy.co/embedded-systems-training">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iot.webp" alt="kit" class="img-fluid">
                    <span class="content">
                        <span>Embedded System Course In Noida By The IoT Academy</span>
                        <span class="duration">1.5/3/6 months</span>
                    </span>
                </a>
                <a href="https://www.theiotacademy.co/iot-training">
                    <img decoding="async" loading="lazy" src="https://www.theiotacademy.co/assets/dit/images/navbar/nav-iot.webp" alt="system netwroking" class="img-fluid">
                    <span class="content">
                        <span>Internet Of Things Course In Noida By TheIoT Academy</span>
                        <span class="duration">1.5/3/6 months</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="zeynep-overlay"></div>
<div class="zeynep-overlay2"></div>

<div class="zeynep" id="zeynep">
    <ul>
        <li><a href="https://www.theiotacademy.co/blog">Blog</a></li>
		<li><a href="https://www.theiotacademy.co/our-placements">Our Placements</a></li>
        <li class="has-submenu"><a href="#" data-submenu="resources">Resources </a>
            <div id="resources" class="submenu">
                <div class="submenu-header"><a href="#" data-submenu-close="resources">Resources</a></div>
                <ul>
                    <li><a target="_blank" href="https://www.upskillcampus.com/salary-predictor">Salary Predictor</a>
                    </li>
                    <li><a target="_blank" href="https://www.forum.upskillcampus.com/">Discussion Forum</a></li>
                    <li><a target="_blank" href="https://job.uctconsulting.com/">Job Portal</a></li>
                    <li><a target="_blank" href="https://www.upskillcampus.com/ticket-to-corporate">Ticket To
                            Corporate</a></li>
                </ul>
            </div>
        </li>

        <li class="has-submenu"><a href="#" data-submenu="internshipr">Internship </a>
            <div id="internshipr" class="submenu">
                <div class="submenu-header"><a href="#" data-submenu-close="internshipr">Internship</a></div>
                <ul>
                    <li><a href="https://learn.upskillcampus.com/s/pages/basic-internships" target="_blank">Basic</a>
                    </li>
                    <li><a href="https://learn.upskillcampus.com/s/pages/online-paid-internship"
                            target="_blank">Premium</a></li>
                </ul>
            </div>
        </li>
        <li class="has-submenu"><a href="#" data-submenu="stuntemplg">Login </a>
            <div id="stuntemplg" class="submenu">
                <div class="submenu-header"><a href="#" data-submenu-close="stuntemplg">Login</a></div>
                <ul>
                    <li><a href="https://uniconvergetech9893.spayee.com/s/mycourses">Student Login</a></li>
                    <li><a href="https://theiotacademy.co:2096/">Employer Login</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>

<div class="zeynep" id="zeynep2">
        <div class="submenu-header" id='custum-close'>
            <a href="#" data-submenu-close="zeynep2">Course Categories</a>
        </div>
        <ul>
            <li class="has-submenu">
                <a href="#" data-submenu="medical2">
                    Data Science/ Machine Learning
                </a>
                <div id="medical2" class="submenu">
                    <div class="submenu-header submenu-header-phone"><a href="#" data-submenu-close="medical2">Data
                            Science / Machine Learning</a></div>
                    <div class="top-course">Top Courses</div>
                    <ul>
                        <li>
                            <a
                                href="https://www.theiotacademy.co/advanced-certification-in-data-science-machine-learning-and-iot-by-eict-iitg">
                                <div>
                                    <img decoding="async" loading="lazy"
                                        src="https://www.theiotacademy.co/assets/images/master-course-image/eict-guwahati-logo.jpg"
                                        alt="the iot academy" width="100" height="25"><span>|</span>
                                    <span class="mobile-duration">&nbsp;9
                                        Months</span>
                                </div>
                                Advanced Certification in Applied Data Science, Machine Learning & AI By E&ICT Academy,
                                IIT Guwahati
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://www.theiotacademy.co/online-certification-in-applied-data-science-machine-learning-edge-ai-by-eict-academy-iit-guwahati">
                                <div>
                                    <img decoding="async" loading="lazy"
                                        src="https://www.theiotacademy.co/assets/images/master-course-image/eict-guwahati-logo.jpg"
                                        alt="the iot academy" width="100" height="25"><span>|</span>
                                    <span class="mobile-duration">&nbsp;6
                                        Months</span>
                                </div> Online Certification in Applied Data Science, Machine Learning and Edge AI By
                                E&ICT Academy, IIT Guwahati
                            </a>
                        </li>
                        <li>
                            <a href="https://www.theiotacademy.co/machine-learning-with-python-training-in-noida">
                                <div>Offline
                                    <span>|</span>
                                    <span class="mobile-duration">&nbsp;180
                                        Hrs</span>
                                </div> Certification in Data Science and Machine Learning With Python By The IoT Academy
                                Noida
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="has-submenu">
                <a href="#" data-submenu="generativeai2">
                Generative AI  <span class="badge badge-danger">Top Trending</span>
                </a>
                <div id="generativeai2" class="submenu">
                    <div class="submenu-header submenu-header-phone"><a href="#" data-submenu-close="generativeai2">Generative AI</a></div>
                    <div class="top-course">Top Courses</div>
                    <ul>
                        <li>
                            <a href="https://www.theiotacademy.co/advanced-generative-ai-course">
                                <div>
                                <span class="mobile-duration">&nbsp;6
                                        months</span>
                                      
                                </div>
                                Advanced Generative AI Certification Course by E&ICT Academy, IIT Guwahati
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="has-submenu">
                <a href="#" data-submenu="anudaksh2">
                Self Paced Course
                </a>
                <div id="anudaksh2" class="submenu">
                    <div class="submenu-header submenu-header-phone"><a href="#" data-submenu-close="anudaksh2">Self Paced Course</a></div>
                    <div class="top-course">Top Courses</div>
                    <ul>
                        <li>
                            <a href="https://www.theiotacademy.co/data-analytics-machine-learning-ai-course">
                                <div>
                                <span class="mobile-duration">&nbsp;6
                                        months</span>
                                      
                                </div>
                                Data Analytics, Machine Learning & Generative AI Course
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="has-submenu">
                <a href="#" data-submenu="proanatdevelop">
                    Data Analyst
                </a>
                <div id="proanatdevelop" class="submenu">
                    <div class="submenu-header submenu-header-phone"><a href="#" data-submenu-close="proanatdevelop">
                            Data Analyst Certification Course</a></div>
                    <div class="top-course">Top Courses</div>
                    <ul>

                        <li>
                            <a href="https://www.theiotacademy.co/data-analyst-certification-course">
                                <div>
                                    <span class="mobile-duration">&nbsp;4
                                        months</span><span> |</span>
                                    <span class="mobile-duration">&nbsp;Offline</span>
                                </div>Data Analyst Certification Course By The IoT Academy
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="has-submenu">
                <a href="#" data-submenu="Java-develop2">
                    <div></div>Java Full Stack
                </a>
                <div id="Java-develop2" class="submenu">
                    <div class="submenu-header submenu-header-phone"><a href="#" data-submenu-close="Java-develop2">Java
                            Development</a></div>
                    <div class="top-course">Top Courses</div>
                    <ul>
                        <li>
                            <a
                                href="https://www.theiotacademy.co/advanced-certification-program-in-full-stack-java-development-by-eict-academy-iit-guwahati">
                                <div>
                                    <img decoding="async" loading="lazy"
                                        src="https://www.theiotacademy.co/assets/images/master-course-image/eict-guwahati-logo.jpg"
                                        alt="the iot academy" width="100" height="25"><span>|</span>
                                    <span class="mobile-duration">&nbsp;6
                                        Months</span>
                                </div>Full Stack Java Developer Course By E&ICT Academy IIT Guwahati
                            </a>
                        </li>
                        <li>
                            <a href="https://www.theiotacademy.co/java-certification-course-in-noida">
                                <div>
                                    <span class="mobile-duration">&nbsp;6
                                        Months</span><span> |</span>
                                    <span class="mobile-duration">&nbsp;Offline</span>
                                </div>Certification Course for Java Full Stack Developer by The IoT Academy
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="has-submenu">
                <a href="#" data-submenu="anudaksh2">
                    Digital Marketing
                </a>
                <div id="anudaksh2" class="submenu">
                    <div class="submenu-header submenu-header-phone"><a href="#" data-submenu-close="anudaksh2">Digital
                            Marketing</a></div>
                    <div class="top-course">Top Courses</div>
                    <ul>
                        <li>
                            <a href="https://www.theiotacademy.co/digital-marketing-training">
                                <div>
                                    <span class="mobile-duration">&nbsp;7
                                        Months</span><span> |</span>
                                    <span class="mobile-duration">&nbsp;Online</span>
                                </div>
                                Digital Marketing Certification Course By The IoT Academy
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="has-submenu">
                <a href="#" data-submenu="offline2">
                    Python
                </a>
                <div id="offline2" class="submenu">
                    <div class="submenu-header submenu-header-phone"><a href="#" data-submenu-close="offline2">Python
                            Training</a></div>
                    <div class="top-course">Top Courses</div>
                    <ul>
                        <li>
                            <a href="https://www.theiotacademy.co/python-training">
                                <div>
                                    <span class="mobile-duration">&nbsp;45
                                        Days</span><span> |</span>
                                    <span class="mobile-duration">&nbsp;Online</span>
                                </div>
                                Python Certification Course By The IoT Academy
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="has-submenu">
                <a href="#" data-submenu="engineering2">Embedded System and IoT</a>
                <div id="engineering2" class="submenu">
                    <div class="submenu-header submenu-header-phone"><a href="#"
                            data-submenu-close="engineering2">Embedded Systems and IoT</a></div>
                    <div class="top-course">Top Courses</div>
                    <ul>
                        <li>
                            <a href="https://www.theiotacademy.co/embedded-systems-training">
                                <div class=" box-hover-effect">
                                    <div>
                                        <span class="mobile-duration">1.5M/3M/6M</span> <span> |</span> <span
                                        class="mobile-duration">Offline</span>
                                        <p>Embedded System Course In Noida By The IoT Academy</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.theiotacademy.co/iot-training">
                                <div class=" box-hover-effect">
                                    <div>
                                        <span class="mobile-duration">1.5M/3M/6M</span> <span> |</span> <span class="mobile-duration">Offline</span>
                                        <p>Internet Of Things Course In Noida By The IoT Academy</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
</div>
<!--navbar end-->