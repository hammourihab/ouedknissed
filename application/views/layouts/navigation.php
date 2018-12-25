<div class="ui vertical right sidebar centered borderless menu" id="small_screens_sidebar">
	<div class="item">
			<img src="<?= base_url('assets/images/logos/ouedknissed-200-50.png'); ?>" class="ui small centered image">	
	</div>
</div>
<div class="pusher">



<!-- Large screens menu -->

<!-- So the idea is, We sill have a hidden search bar in the menu, one we pass the header masthead segment we will show it, it will be cool here -->
<!-- The Stick side bar will be after the masthead --> 
<!-- And thanks for stopping me from talking ---> 
<div class="ui top fixed borderless tiny menu" id="menu">
	<div class="header item">
		<img src="<?= base_url('assets/images/logos/ouedknissed-200-50.png'); ?>" class="ui small image" alt="<?= getenv('APP_NAME'); ?>">
	</div>
	<a href="#" class="item">
		<img src="<?= base_url('assets/images/additional/autobip.png'); ?>" class="ui tiny image" alt="<?= getenv('APP_NAME'); ?>">
	</a>
	<a href="#" class="item">
		<img src="<?= base_url('assets/images/additional/cvite.png'); ?>" class="ui tiny image" alt="<?= getenv('APP_NAME'); ?>">
	</a>
	<a class="item">
		<img src="<?= base_url('assets/images/additional/forum_autobip.png'); ?>" class="ui tiny image" alt="<?= getenv('APP_NAME'); ?>">
	</a>
	<div class="right menu">
		<div class="item">
			<a href="" class="ui button ouedknissed-primary-btn"> <i class="paper plane icon"></i> Contact</a>
		</div>
		<div class="item">
			<a href="" class="ui button ouedknissed-primary-btn">Publicité</a>
		</div>
		<div class="item">
			<div class="ui simple dropdown item">
				<i class="language icon"></i>
					Language
				<i class="dropdown icon"></i>
				<div class="menu">
					<a class="item" href="/en"><i class="us flag"></i>English</a>
					<a class="item" href="/fr"><i class="fr flag"></i>Français</a>
					<a class="item" href="/ar"><i class="uae flag"></i>العربية</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- A secondary menu would really look great -->
<div class="ui stackable secondary menu margin-top" id="large_screens_secondary_menu">
	<div class="item">
			<div class="ui simple dropdown item">
			Catégories
				<i class="dropdown icon"></i>
				<div class="menu">
					<div class="item">
						<a class="ui link"> <i class="mobile big icon"></i> téléphones</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="car big icon"></i> véhicules</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="building big icon"></i> Immobilier</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="camera big icon"></i> Electronique and électroménager</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class='briefcase big icon'></i> Emploi</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="laptop big icon"></i> Informatique</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="tags big icon"></i> Mode and beauté</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="wrench big icon"></i> Services</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="plane big icon"></i> Voyages</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="home big icon"></i> Maison et fournitures</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="bicycle big icon"></i> Loisirs & Divertissements</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="cut big icon"></i> Matériaux & Equipement</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class="gift big icon"></i> Divers</a>
					</div>
					<div class="item">
						<a class="ui link"> <i class='shop big icon'></i> <span style="background-color: #39d412;color:white;padding:5px 5px 5px 5px;border:1px solid #3daf20;">STORES</span> Boutiques</a>
					</div>
				</div>
			</div>
	</div>

	<div class="right menu">
		<div class="item">
			<a href="#" class="ui button ouedknissed-secondary-btn"><i class="sign in icon"></i> Se connecter</a>
		</div>
		<div class="item">
			<a href="#" class="ui button ouedknissed-primary-btn"><i class="edit outline icon"></i> Déposer annonce</a>
		</div>
	</div>
</div>


<!-- Small screens menu -->
<div class="ui top fixed borderless tiny menu" id="small_screens_menu">
	<div class="header item">
		<img src="<?= base_url('assets/images/logos/ouedknissed-200-50.png'); ?>" class="ui small image">
	</div>
	<div class="right menu">
		<a class="toc item">
			<i class="sidebar large primary icon"></i> 
		</a>
	</div>
</div>
