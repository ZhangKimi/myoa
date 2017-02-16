<?php
	function checkState() {
		if(!$_SESSION['user']) {
			header("Location:".__MODULE__."/Error/loginError");
		}
	}