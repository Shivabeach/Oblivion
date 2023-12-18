<body id="update">
	<container id="updates">
		<header class="top white">
		<?php $this->load->view("menus/menu.html");?>
		</header>
		<h1 class="update-title center-align full-width">Update record</h1>

		<div id="left-columns">
			<!-- form goes here -->
			<?php $this->load->view("forms/update-form");?>
			<hr>
			<p id="datey"></p>
			<p class="copy"></p>
			<p class="project">Project start 8/27/2023</p>
			<p class="color-display"></p>
		</div>

		<main class="update-display">
			<!-- adding update displays here -->
			<div class="up">
				<p class="mach-updated fs-3 bold-7">Hober</p>
				<p class="event-date">8/4/2015 </p>
				<p class="knowledge">KB159753</p>
				<p class="update-text">Machine updated</p>
			</div>


		</main>
	</container>
<script src="<?php echo base_url('assets/src/script-dist.js');?>"></script>
<script src="<?php echo base_url('assets/src/update-dist.js');?>"></script>
</body>