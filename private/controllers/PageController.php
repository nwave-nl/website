<?php
class PageController {

	function over(){
        $template_engine = get_template_engine();
        echo $template_engine->render('over');

	}

	function notfound(){
        $template_engine = get_template_engine();
        echo $template_engine->render('notfound');

	}
}
