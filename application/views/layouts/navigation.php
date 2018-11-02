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
					<?php for($i=0;$i<=10;$i++): ?>
						<a href="#" class="item">Random category</a>
					<?php endfor; ?>
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
