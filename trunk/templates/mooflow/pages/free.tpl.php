
<h2 class="title">
<?php echo $tplDisplayData['TRACK_TEXT']; ?>
</h2>
<?php echo $tplDisplayData['TRACK_MESSAGE']; ?>
<br />
<br />

<?php echo isset($tplDisplayData['GET_EMAIL']) ? $tplDisplayData['GET_EMAIL']:""; ?>
<div id="tracks">
	<table width="100%" cellspacing="0" cellpadding="0">
		<tr height="10px" id="album_tr">
			<th align="left" width="25%"><b><?php echo $tplDisplayData['TRACK_NAME']; ?>
			</b></th>
			<th align="left" width="15%"><b><?php echo $tplDisplayData['TRACK_ALBUM']; ?>
			</b></th>
			<th align="left" width="25%"><b><?php echo $tplDisplayData['TRACK_OPTIONS']; ?>
			</b></th>
		</tr>
		<?php echo $tplDisplayData['TRACK_DATA']; ?>
	</table>
</div>
<p>
<?php echo $tplDisplayData['PAGE_NUMBERS']; ?>
</p>
<input
	name="Itemid" type="hidden"
	value="<?php echo JRequest::getVar('Itemid'); ?>" />
