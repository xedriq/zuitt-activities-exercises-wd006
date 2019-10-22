<?php 

	session_start();
	if (isset($_GET['sort'])) {
		if ($_GET['sort'] == "asc") {
			$_SESSION['sort'] = " ORDER BY price ASC";
		} else {
			$_SESSION['sort'] = " ORDER BY price DESC";
		}
	}
	// HTTP REFERRER is the page that called this file
	header("Location: ". $_SERVER['HTTP_REFERER']);
?>