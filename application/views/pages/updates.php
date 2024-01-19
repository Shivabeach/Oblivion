<body id="update">
	<container id="updates">
	<header class="top white">
		<?php $this->load->view("menus/menu.html");?>
	</header>
	<h1 class="update-title center-align full-width">Update record</h1>
	<div id="left-columns">
		<!-- form goes here -->

		<fieldset>
			<legend>Update History</legend>
			<?php
			$args = [
				"id" => "form_update"
			];
			echo form_open("forms/updater", $args);?>
			<label for="machine">Machine</label>
			<?php echo form_error('computer'); ?>
			<select name="computer" id="machine">
				<option value="">Pick One</option>
				<option value="Mrwilson">MrWilson</option>
				<option value="Hober Mallow">Hober Mallow</option>
			</select>
			<label for="date">Date</label>
			<?php echo form_error('date'); ?>
			<input type="date" name="date" id="date" required>
			<label for="knowledge">Knowledge base #</label>
			<?php echo form_error('Kbase'); ?>
			<input type="text" name="Kbase" id="Kbase" required minlength="8">
			<label for="reason">Update</label>
			<?php echo form_error('reason'); ?>
			<textarea name="reason" id="reason" required></textarea>
			<button type="submit" class="submit">Submit</button>
		</form>
		<div id="shows"></div>
	</fieldset>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo base_url('assets/src/script-dist.js');?>"></script>
<script src="<?php echo base_url('assets/src/update-dist.js');?>"></script>
</body>