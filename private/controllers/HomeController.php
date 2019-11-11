<?php
class HomeController {
	function homepage() {
		$template_engine = get_template_engine();
		echo $template_engine->render('homepage');
	}

}
