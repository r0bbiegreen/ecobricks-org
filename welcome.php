<?php require_once ("lang.php");
echo <<<_END

<!DOCTYPE html>

<!-- this grabs the language identifier for the page so that it can used in the meta and canonical url variables-->

<html lang="$lang">


<HEAD>

<!--Image files to preload that are unique to this page-->

<link rel="preload" as="image" href="logos/gea-horizontal.svg">
<link rel="preload" as="image" href="svgs/cloud-back.svg">
<!--<link rel="preload" as="image" href="webp/vision-bottom3b.webp">-->
<link rel="preload" as="image" href="webp/mountain-top2.webp">


_END;?>

<!-- sets page meta tags:  be sure to add page name-->

<?php require_once ("meta/welcome-$lang.php");?>

<!--page header-->

<?php require_once ("header.php");?>

<!--custom page CSS-->

<style>
#clouds {
	background: url(svgs/cloud-back.svg) center top;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
	height: 73vh;
   /* min-height: 500px;*/
	background-color: #00ffff;
    display: flex;
    align-items: flex-end;
    margin-top: 0px;
}

#cloud-banner {
	background: url(webp/vision-bottom5.webp) center top;
    background-repeat: no-repeat;
    background-size: cover;
	z-index: 4;
	position: relative;
	width: 100%;
	height: 31%;
	min-height: 25vh;
	background-color: #00ffff;
}

	

@media screen and (min-width: 770px) { 
#header-content-block {
    text-align: center;
    background-color: #59c1fdb2;
    border-radius: 12px;
	height: 100vh;
	padding: 25px 7% 50px 7%;
	margin: -85vh 10% -50px 10%;
	z-index: 5;
}
}

@media screen and (max-width: 770px) { 
#header-content-block {
    text-align: center;
    background-color: #59c1fdb2;  /*#74acffb2;*/
    border-radius: 12px;
	height: 80vh;
	padding: 25px 3% 25px 3%;
	margin-bottom: 0px;
	margin: -86vh 2.9% -60px 2.9%;
	z-index: 5;
}
}

</style>


</head>
	
	
<BODY id="full-page">
	<div id="load-background">

	<?php include 'menu-bar.php';?>


    <div id="clouds"><img src="webp/mountain-top2.webp" width="100%"></div>
	<div id="cloud-banner"><img src="webp/vision-bottom4.webp" width="100%" height="31%"></div>

<!-- SLIDER CONTENT -->
	
	<div id="sliders">

			<div id="slider1">

				<div id="slider-image"><img src="webp/2020-regen-report.webp" alt="2022 regen Report"></div>
				<div id="slider-textbox">
					<div id="slider-heading">GEA 2021 Regen Report Released</div>
					<div id="slider-date">Jan 27, 2022 | GEA Center Circle</div>
					<div id="slider-body">Our annual ecological impact accounting for the GEA's operations in the previous year.  In 2021, we removed over 30,000 kg of carbon and 10,000 kg of plastic for the biosphere 🎉.</div>
					<div id="slider-link">>> <a href="2021-regenreport.php"> 2021 Regen Report</a></div>

				</div>
		</div>

		<div id="slider2">
			<div id="slider-image"><img src="webp/catalyst.webp" width="92%" height="100%" alt="Our eco brickenterprise program"></div>
				<div id="slider-textbox">
				<div id="slider-heading">2022 Catalyst Program Launched!</div>
				<div id="slider-body">Keen green companies, organizations and projects can now use our automated plastic transition tracking, disclosure and acceleration platfrom-- all fees are waived!</div>
				<div id="slider-link"><a href="catalyst">Learn more</a></div>
				<div id="slider-date">Feb. 6, 2022 | GEA Announcements</div>
			</div>
		</div>

	<!--	<div id="slider1">
			<div id="slider-image"><img src="webp/german.webp"  width="100%" height="78%"></div>
			<div id="slider-textbox">
				<div id="slider-heading">German Resources & Courses Ready!</div>
				<div id="slider-body">Our team has completed the translation of our GEA core resources into German.  Free online starter workshop now open for Augst 14th. </div>
				<div id="slider-date">August, 2021 | GEA Courses</div>
				<div id="slider-link">>> <a href="https://www.gobrik.com/#courses/review-course/60c0ea65e9e88a001ff2d740/" target="_blank">First German Course August 14th</a></div>
			</div>
		</div>


			
		<div id="slider2">

			<div id="slider-image"><img src="webp/ayyew.webp"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Inspired by Igorot Ancestral Wisdom</div>
				<div id="slider-date">July 27th, 2021 | GEA Update Content</div>
				<div id="slider-body">Ecobricking principles are inspired by the deep green ways and wisdom of the Igorots-- the unconquered indigenous people of the Filipino Cordilleras.  Learn more about how ancient wisdom inspires a modern modvement</div>
				<div id="slider-link">>> <a href="ayyew"> Ayyew Inspired</a></div>
			
			</div>
		</div>


		<div id="slider4">
			<div id="slider-image"><img src="webp/mandalic.webp"></div>
			<div id="slider-textbox">
				<div id="slider-heading">The Ancient Future of Working Together</div>
				<div id="slider-date">July 27th, 2021 | GEA Updated Content</div>
				<div id="slider-body">Ecobricking and its spread is powered by the principles of mandalic collaboration.  Learn more about the decentralized mobilization of the plastic transition movement.</div>
				<div id="slider-link">>> <a href="mandalas"> Mandalic Collaboration</a></div>
				
			</div>
		</div>

			<div id="slider1">
			<div id="slider-image"><img src="webp/ToT-course-icon.webp"  width="100%" height="73%"></div>
			<div id="slider-textbox">
				<div id="slider-heading">September Training of Trainer Course</div>
				<div id="slider-body">
					Join an intensive, five week online course that will get you up and running as a GEA Ecobrick Trainer. Learn the principles and techniques behind ecobricking, how to build, and how to share ecobricks. </div>
				<div id="slider-date">September 16th, 2021 | GEA Courses</div>
				<div id="slider-link">>> <a href="https://www.gobrik.com/#courses/review-course/6127c35fe67f24001e6f60c4/" target="_blank">Intro Course Sept. 11th</a></div>
			</div>
		</div>


		-->


		<div id="slider3">
			<div id="slider-image"><img src="photos/earth-rumoer.png"  width="100%" alt="eco brick round house"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Featured Project</div>
				<div id="slider-body">
                The Earth & Ecobrick Roundhouse project in Bwyd Bendigedig Portmadog was featured in Rumoer magazine's Earth building issue as an example of negative carbon building </div>
				<div id="slider-date">Jan 27, 2022 | GEA News</div>
				<div id="slider-link">>> <a href="https://issuu.com/rumoer/docs/issue78-2/96" target="_blank">Rumoer Earth Feature</a></div>
			</div>
		</div>

		<div id="slider4">

			<div id="slider-image"><img src="webp/ayyew.webp" alt="The eco brick ayyew philosophy"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Inspired by Igorot Ancestral Wisdom</div>
				<div id="slider-date">Sep 15th, 2021 | GEA Update Content</div>
				<div id="slider-body">Ecobricking principles are inspired by the deep green ways and wisdom of the Igorots the indigenous people of Northern Luzon.  Learn how their Ayyew ecological ethos inspires a modern movement</div>
				<div id="slider-link">>> <a href="ayyew"> Ayyew Inspired</a></div>
			
			</div>
		</div>
<!--
		<div id="slider2">
			<div id="slider-image"><img src="webp/starter-course-icon.webp"  width="100%" height="73%"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Learn the Basics of Ecobricking</div>
				<div id="slider-body">Join a Starter Workshop!  This September our Indian trainers are running an open online presentation of 'Plastic, the Biosphere & Ecobricks'.  Learn the fundamentals from experts!</div>
				<div id="slider-date">September 11th, 2021 | GEA Courses</div>
				<div id="slider-link">>> <a href="https://gobrik.com/#courses/review-course/60f243eacd377c001faa6c57/" target="_blank">Intro Course Sept. 11th</a></div>
			</div>

				<div id="slider4">

			<div id="slider-image"><br><img src="svgs/aes.svg"  width="100%" height="85%"></div>
			<div id="slider-textbox">
				<div id="slider-heading">Offset Your Plastic</div>
				<div id="slider-date">GEA Services</div>
				<div id="slider-body">Our plastic offsetting system allows you to take personal responsibility for your household or enterprise plastic generation... and energize the global plastic transition movement!</div>
				<div id="slider-link">>> <a href="aes"> AES Plastic & Offsetting</a></div>
			
			</div>
		</div>
		</div>-->

		
		

	

	</div>

   
        		
		</div>
	</div>
 


	<div id="content-sect1">
	 	<div id="main-content">
			<div id="dolphin-graphic"><img src="svgs/dolphin-top-optimized.svg"width="100%" height="76%" alt="eco bricks help keep plastic out of the ocean"></div>
			<div class="big-header">Welcome to Plastic Transition</div>
			<!--<div class="lead-paragraph">Together we can keep our plastic out of the oceans.  With ecobricks we can secure plastic to build our greenest visions and ignite regenerative transition.</div>-->
			<div class="sub-text">
			<p>Together we can keep our plastic out of the oceans.  With eco bricks we can secure plastic to build our greenest visions and ignite regenerative transition.</p>
			<!--<p>When we save, segregate and pack plastics into bottles, we can make building blocks that can be reused over and over again. Together we can build green spaces that enrich our community and safely secure plastic out of the biosphere.  Together we can transition from plastic to ever greener harmony with Earth’s cycles.</p>-->
			</div>
			 <a href="faqs.php" button class="main-button">All About Ecobricks</a>
			<h6><a href="what">What is an Ecobrick?</a> | <a href="how">How to Make?</a> | <a href="why">Why Make?</a></h6>
		</div>	
	
	</div>

	  
<div id="content-sect2">
	<div id="main-content">
		<div class="lead-graphic"><img src="svgs/earth-service3.svg" width="100%" height="96%" alt="eco bricks follow the Earth's example."></div>
		<div class="big-header">Follow the Earth's Example</div>
        <!--<div class="lead-paragraph">Join the Regenerative Movement</div>-->
		<div class="sub-text">
		<p>Ecobricking follows the Earth's example of concentrating and securing carbon out of the biosphere.  Following the science of plastic degradation and Earthen principles, ecobricking is a non-capital, net-zero means of plastic sequestration.</p></div>
		<a href="sequest" button class="main-button">Plastic Sequestration</a>
		<h6><a href="/ayyew">Ayyew Inspired</a> | <a href="/circular">Circular by Design</a> | <a href="/plastic">Towards Transition</a> | <a href="/principles">Regenerative</a> <!--| <a href="/reports">Reports & Whitepapers</a>--></h6>
	</div>
</div>	
	  

<div id="content-sect3">
	<div id="main-content">
		<div class="lead-graphic"><img src="webp/build-circular4.webp" width="100%" height="90%" alt="eco brick plastic brick building"></div>
		<div class="big-header">The Problem is the Solution.</div>
		<!--<div class="lead-paragraph">Using Ecobricked Plastic we can Build our Greenest Visions.</div>-->
		<div class="sub-text"><p>Ecobricks turn used plastic into reusable building blocks ideal for building green spaces.  Use them make modules, home furniture, play parks, and food-forest gardens.  Using the problem, we can build our greenest visions.</p>
		</div> 
		<a href="build" class="main-button">Building Applications</a>
		
		<h6><a href="earth">Earth & Ecobrick Building</a> | <a href="earth-methods">E&B Methods</a> | <a href="modules">Milstein Modules</a> | <a href="dms">Dieleman Modules</a> | <a href="openspaces">Open Spaces</a> | <a href="fire">Fire Safety</a></h6>
	</div>
</div>


<div id="content-sect4">
	<div id="main-content">
		<div class="lead-graphic"><img src="webp/balancing-green.webp"  width="100%" height="100%"></div>
		<div class="lead-graphic"><img src="svgs/aes-brk.svg" width="100%" height="40%" alt="autehtnticated eco brick sequetration"></div><!--width="300px" height="254px"-->
		<!--<div class="lead-paragraph"><br>Introducing AES Plastic Offsetting</div>-->
		<div class="sub-text"><p><br>Fast track your journey to zero-waste through plastic offsetting.  Plastic offsets are directly correlated to authenticated ecobricked plastic through the Brikcoin manual blockchain.</p></div>
		<a href="what" class="main-button">Plastic Offsetting</a>
		<h6><a href="/brikcoins">Brikcoin Blockchain</a> | <a href="/aes">AES Plastic</a> | <a href="/transition">Plastic Transition</a> | <a href="about">About the GEA</a></h6><br><br>
		<p>The Brikcoin manual blockchain enables the authentication, valuation and vitalization of ecobricks.<br><a href="https://gobrik.com/#offset" target="_blank">Offset your household or company plastic generation with us.</a></p><br>
		<img src="svgs/3brikcoins.svg" width="30%">

		<br><br>
		<h4>Eco-brick, eco brick, or ecobrick?</h4>

		<p>Back in the early days of putting plastic into a bottle we called it just that-- plastic bottle bricks!  Then when we realized it was helpful to the ecosystems around us, the name changed to eco bricks. Then we got more confident and added a hyphen: eco-bricks! However, once eco bricks were an established global phenomenon the official wikipedia page was updated to make it a full fledged word was appropriate: ecobricks! (no space, no hypen, no strange capitalization) as <a href="https://en.wikipedia.org/wiki/Ecobricks" target="_blank">the official term.</a></p>
		
	</div>
</div>


	<!--FOOTER STARTS HERE-->


	<?php include 'footer.php'; ?>


	<!--FOOTER ENDS HERE-->

	<!-- Localise translation script-->

<script src="https://global.localizecdn.com/localize.js" defer></script>
<script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","getSourceLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off","hideWidget","showWidget"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>

<script defer>
  Localize.initialize({
    key: '911e632bfc957',
    rememberLanguage: true,
  });
</script>

</div>
</body>
</html>
