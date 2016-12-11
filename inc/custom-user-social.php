<?php
	function modify_contact_methods($profile_fields) {

		// Add new fields
		$profile_fields['linkedin'] = 'Linkedin URL';
		$profile_fields['twitter'] = 'Twitter URL';
		$profile_fields['gplus'] = 'Google+ URL';
		$profile_fields['github'] = 'Github URL';
		$profile_fields['codepen'] = 'CodePen URL';

		return $profile_fields;
	}
	add_filter('user_contactmethods', 'modify_contact_methods');
?>