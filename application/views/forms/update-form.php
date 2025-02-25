<!-- For updates page -->

<fieldset>
	<legend>Update History</legend>

	<?php
	$args = [
		"id" => "form_update"
	];
	
	echo form_open("forms/changes", $args);?>
		<label for="machine">Machine</label>
		<?php echo form_error('computer'); ?>
			<select name="computer" id="machine" required>
				<option value="">Pick One</option>
				<option value="Mrwilson">MrWilson</option>
				<option value="Hober Mallow">Hober Mallow</option>
			</select>

		<label for="date">Date</label>
		<?php echo form_error('date'); ?>
			<input type="date" name="date" id="date" required minlength="7" required>

		<label for="knowledge">Knowledge base #</label>
		<?php echo form_error('Kbase'); ?>
			<input type="text" name="Kbase" id="Kbase" minlength="4" required>

		<label for="reason">Update</label>
		<?php echo form_error('reason'); ?>
			<textarea name="reason" id="reason" required></textarea>

		<button type="submit" class="submit">Submit</button>
	</form>
</fieldset>