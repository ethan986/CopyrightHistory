<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- bootstrap 5 import-->

	  		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

	  	<!-- JQuery Import-->

	  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	  	<!-- Barlow Font Import -->

	  		<link href='https://fonts.googleapis.com/css?family=Barlow' rel='stylesheet'>

	  	<!-- Favicon Import -->

	  		<link rel="shortcut icon" href="{{ asset('images/favi_img/favicon.ico') }}"/>
            
        <!-- Title -->

            <title>Copyright History @yield('title')</title>

        <!-- CSS Import -->
            
		  	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <!-- JS Import-->

            <script src="{{ asset('js/main.js') }}"></script>
    </head>
    <body>
        <!-- Navigation Bar -->
		<nav class="navbar fixed-top navbar-expand-lg shadow-sm bg-white navbar-light">
			<div class="container-fluid">
				<!-- Brand Logo -->
		  	<a class="navbar-brand" href="#"><img class="logo" src="{{ asset('images/nav_img/Logo.png') }}"></a>
		  	<!-- Menu Bar button -->
	    	<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	      	<span class="navbar-toggler-icon"></span>
	    	</button>
	    	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    	<!-- Left Aligned content on nav bar -->
		    <ul class="navbar-nav d-lg-flex align-items-center">
		      <li class="nav-item"><a class="nav-link active" href="#">FAQ</a></li>
		      <li class="nav-item"><a class="nav-link" href="#">NEWS</a></li>
		      <li class="nav-item"><a class="nav-link" href="#">EDITORIAL BOARD</a></li>
		      <li class="nav-item"><a class="nav-link" href="#">ACKNOWLEDGEMENTS</a></li>
		      <li class="nav-item"><a class="nav-link" href="#">DIGITAL ARCHIVE</a></li>
			  <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
		    </ul>
		    <!-- Right aligned content on nav bar -->
		    <ul class="navbar-nav align-items-center ms-auto">
		      <div class="dropdown-divider"></div>
		      <!-- Login Button -->
		      <li class="nav-item"><a onclick="open_login()" class="nav-link" href="#">LOGIN</a></li>
		      <!-- Search Icon -->
		      <li class="nav-item"><a onclick="open_search()" class="nav-link mr-auto" href="#"><img class="sicon" src="{{ asset('images/nav_img/Search Icon.png') }}"></a></li>
		    </ul>
	    	</div>
	  		</div>
		</nav>

        <!-- Banner and banner content -->
        <div class="jumbotron text-center vertical-center pad-top-100">
            <h1 class="display-4">PRIMARY SOURCES ON COPYRIGHT</h1>
            <h3>1450-1900</h3>
        </div>


        <!-- yielding to non-template page -->
        @yield('content')



        <!-- Login Overlay -->
	<div class="overlay" id="overlay_login">
		<div id="login-overlay">
			<span style="text-align: right !important;"><a class="nav-link" href="#"><img onclick="close_login()" class="sicon login-close-icon" src="{{ asset('images/overlay_img/Exit Icon.png') }}"></a></span>
			<h1><b>LOGIN</b></h1>
			<br>
			<br>
			<input placeholder="username" class="login-input" type="email" name="email">
			<br><br>
			<input placeholder="password" class="login-input" type="password" name="pass">
			<br><br>
			<button class="login-button">LOGIN</button>
			<br><br><br>
		</div>
	</div>

	<!-- Search box overlay -->
	<div class="overlay" id="overlay_search">
		<!-- Actual search box within overlay -->
		<div class="advanced-closed" id="search-bar">
			<!-- Empty navbar used to hold the exit button for overlay -->
			<nav class="navbar navbar-expand-sm bg-white navbar-light" style="padding-right:10px">
				<ul class="navbar-nav d-lg-flex align-items-center ms-auto">
					<li class="nav-item"><a class="nav-link" href="#"><img onclick="close_search()" class="sicon" src="{{ asset('images/overlay_img/Exit Icon.png') }}"></a></li>
				</ul>
			</nav>
			<!-- Search input bar -->
			<input placeholder="Search..." type="search" class="search-input"><br>
			<!-- Advanced Options Button -->
			<a id="advanced" onclick="toggle_advanced()">Open Advanced Options</a>
			<!-- Advanced Options content categorised by expandable menu headings -->
			<div class="options-ext">
				<!-- Browse Document By Sub heading-->
				<br><button class="a-s-style">BROWSE DOCUMENT BY ↓</button>
				<span class="a-s-content">
					<br>
					<span class="a-s-sub">
						Date <input class="date-style" type="date"> -> <input class="date-style" type="date">
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Location
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Keyword
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Publisher
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Author
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Referred Places
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Institutions
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Legislation
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Case Law
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Original Language
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> Documents For... (country)
						</label>
					</span>
				</span>
				<!-- Browse Commentaries by sub heading -->
				<br><button class="a-s-style">BROWSE COMMENTARIES BY ↓</button>
				<span class="a-s-content">
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> PLACE
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> INSTITUTION
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> LEGISLATION
						</label>
					</span>
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> CASE LAW
						</label>
					</span>
				</span>
				<!-- Browse referred Persons by sub heading -->
				<br><button class="a-s-style">BROWSE REFERRED PERSONS BY ↓</button>
				<span class="a-s-content">
					<br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> NAME</label></span><br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> OCCUPATION</label></span><br>
					<span class="a-s-sub">
						<label style="cursor:pointer;">
							<input class="checkbox-style" type="checkbox"> LIFEDATES</label></span>
				</span>
				<br><br>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer class="text-center text-white">
		<!-- Grid container -->
		<div class="container p-5">
			<section>
				<!-- Row 1 of footer -->
				<div class="row">
					<!-- Left info box in row 1 of footer-->
					<div class="col-lg-4 col-md-6 mb-4 mb-mt-5">
						<!-- footer section heading -->
						<h5 class="text-uppercase footer-heading">Members</h5>
						<!-- footer section content -->
						<div class="members-box">
							<div class="row">
								<div class="col-md-2">
									<a href="https://www.cam.ac.uk/">
									<img class="members" src="{{ asset('images/footer_img/img_members/cambridge.png') }}"></a>
									<a href="https://www.cipil.law.cam.ac.uk/">
									<img class="members" src="{{ asset('images/footer_img/img_members/cipil.png') }}"></a>
									<a href="https://www.create.ac.uk/">
									<img class="members" src="{{ asset('images/footer_img/img_members/CREATe_logo.png') }}"></a>
									<a href="https://www.gla.ac.uk/">
									<img class="members" src="{{ asset('images/footer_img/img_members/UoG_logo.png') }}"></a>

								</div>
							</div>
						</div>
					</div>

					<!-- right info box in row 1 of footer-->
					<div class="col-lg-8 col-md-6 mb-mt-5">
						<!-- footer section heading -->
						<h5 class="text-uppercase footer-heading">Partners</h5>
						<!-- footer section content -->
						<div class="row">
							<div class="col-md-3 mt-3"><a href="https://www.aladda.es/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/aladda.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.nationalarchives.gov.uk/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/ArchivesNationalesParis.png') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.bijzonderecollecties.uva.nl/en/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/BC-UoA.png') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://staatsbibliothek-berlin.de/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/Berlin.jpg') }}"></a></div>
						</div>
						<div class="row">
							<div class="col-md-3 mt-3"><a href="https://marciana.venezia.sbn.it/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/BibliotecaMarciana.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.bnf.fr/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/BiblNatdeFrance.png') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.is.bham.ac.uk/index.shtml"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/Birmingham.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.bl.uk/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/british_library.jpg') }}"></a></div>
						</div>
						<div class="row">
							<div class="col-md-3 mt-3"><a href="https://www.bsb-muenchen.de/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/BSB.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.dla-marbach.de/startseite/index.html"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/DLA.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.hab.de/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/HAB.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://kb.nl/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/kb.png') }}"></a></div>
						</div>
						<div class="row">
							<div class="col-md-3 mt-3"><a href="https://www.loc.gov/index.html"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/LOC.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.mcu.es/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/LogGobEspanaMCU_Color.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.uoc.edu/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/logo_blau_uoc.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.rg.mpg.de/en/info/start/?en"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/MaxPlanckInst.jpg') }}"></a></div>
						</div>
						<div class="row">
							<div class="col-md-3 mt-3"><a href="https://www.archivesnationales.culture.gouv.fr/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/NationalArchives.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.onb.ac.at/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/ONB.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.parliament.uk/parliamentary_publications_and_archives/parliamentary_archives.cfm"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/ParliamentArchive.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://scd.univ-poitiers.fr/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/Poitiers.jpg') }}"></a></div>
						</div>
						<div class="row">
							<div class="col-md-3 mt-3"><a href="https://www.slub-dresden.de/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/SLUB.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.stationers.org/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/StationersComp.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.utexas.edu/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/Texas.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.copyright.gov/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/USCopyrightOffice.jpg') }}"></a></div>
						</div>
						<div class="row">
							<div class="col-md-3 mt-3"><a href="https://asv.vatican.va/?lang=en"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/VaticanArchives.jpg') }}"></a></div>
							<div class="col-md-3 mt-3"><a href="https://www.archiviodistatovenezia.it/"><img class="partners-size" src="{{ asset('images/footer_img/img_partners/VenetianVirtualArchive.jpg') }}"></a></div>
						</div>
					</div>
				</div>
				<br><br><br>

			      	<!-- Row 2 of footer -->
			      	<div class="row">
			      		<!-- Left info box in row 2 of footer-->
			        	<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
			        		<!-- footer section heading -->
			          		<h5 class="text-uppercase footer-heading">Address</h5>
			          		<!-- footer section content -->
			          		<p style="text-align: left">Primary Sources<br>on Copyright (1450-1900)<br>Faculty of Law<br>University of Cambridge<br>10 West Road<br>Cambridge CB3 9DZ<br>United Kingdom</p>
			        	</div>

			        	<!-- Right info box in row 2 of footer-->
			        	<div class="col-lg-8 col-md-6 mb-4 mb-md-0">
							<!-- footer section heading -->
			          		<h5 class="text-uppercase  footer-heading">Copyright Statement</h5>
							<!-- footer section content -->
			          		<p style="text-align: left">You may copy and distribute the translations and commentaries in this resource, or parts of such translations and commentaries, in any medium, for non-commercial purposes as long as the authorship of the commentaries and translations is acknowledged, and you indicate the source as Bently & Kretschmer (eds), Primary Sources on Copyright (1450-1900) (www.copyrighthistory.org).<br><br>You may not publish these documents for any commercial purposes, including charging a fee for providing access to these documents via a network. This licence does not affect your statutory rights of fair dealing.<br><br>Although the original documents in this database are in the public domain, we are unable to grant you the right to reproduce or duplicate some of these documents in so far as the images or scans are protected by copyright or we have only been able to reproduce them here by giving contractual undertakings. For the status of any particular images, please consult the information relating to copyright in the bibliographic records.</p>
			        	</div>
			      	</div>
			    </section>
		  	</div>
		</footer>
        
    </body>
</html>