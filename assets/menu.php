<div class="container-fluid menu">
	<div class="row">

		<!-- Le logo s'affiche au centre ou à gauche selon mobile ou tablette verticale -->
		<div class="logo col-xs-12 col-sm-6 column-1 visible-xs visible-sm">
			<a href="../../home/index.php"><img src="<?php echo $url ?>../../assets/img/Logo.png" /></a>
		</div>

		<!-- Apparition d'un toggle en version tablette verticale -->
		<div class="col-sm-6 column-2 hidden-xs hidden-md hidden-lg">
			<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			    <i class="fa fa-bars fa-3x"></i>	
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			  	<div class="dropdown-links">
				    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $url ?>../../categories/category1/index.php">Communication et Signalétique</a></li>
				    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $url ?>../../categories/category2/index.php">Articles de mairie</a></li>
				    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $url ?>../../categories/category3/index.php">Drapeaux, mâts et supports</a></li><br>
				    <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $url ?>../../home/index.php#form">Demande de devis</a></li> -->
			 	</div>
			  </ul>
			</div>
		</div>

		<!-- Menu exhaustif des versions md et lg -->
		<div class="col-md-4 column-1 hidden-xs hidden-sm">
			<ul class="menu-md">
				<div class="row">
					<div class="col-md-6 link-1">
						<li><h2><a href="<?php echo $url ?>../../categories/category1/index.php">Communication et signalétique</a></h2></li>
					</div>
					<div class="col-md-6 link-2">
						<li><h2><a href="<?php echo $url ?>../../categories/category2/index.php">Articles de mairie</a></h2></li>
					</div>
				</div>
			</ul>
		</div>
		<div class="logo col-md-4 column-2 hidden-xs hidden-sm">
			<a href="<?php echo $url ?>../../home/index.php"><img src="<?php echo $url ?>../../assets/img/Logo.png" /></a>
		</div>
		<div class="col-md-4 column-3 hidden-xs hidden-sm">
			<ul class="menu-md">
				<div class="row">
					<div class="col-md-6 link-3">
						<li><h2><a href="<?php echo $url ?>../../categories/category3/index.php"	>Drapeaux, mâts et supports</a></h2></li>
					</div>
					<div class="col-md-6 link-4">
						<li><h2><a href="<?php echo $url ?>../../home/index.php#form">Demande de devis</a></h2></li>
					</div>
			</ul>
		</div>

	</div>
</div>