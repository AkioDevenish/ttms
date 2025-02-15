<?php
	/**
	 * @global $admin BigTreeAdmin
	 * @global $analytics BigTreeGoogleAnalyticsAPI
	 */
	
	$token = $analytics->oAuthSetToken($_GET["code"]);

	if ($analytics->OAuthError) {
		$admin->growl("Google Analytics",$analytics->OAuthError,"error");
		BigTree::redirect(MODULE_ROOT."configure/");
	} else {
		$admin->growl("Analytics","Successfully Authenticated");
		BigTree::redirect(MODULE_ROOT);
	}
