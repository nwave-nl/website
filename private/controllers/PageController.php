<?php
class PageController {

	function over(){
        $template_engine = get_template_engine();
        echo $template_engine->render('over');

	}

	function portfolio(){
        $template_engine = get_template_engine();
        echo $template_engine->render('portfolio');

	}

	function offerte(){
        $template_engine = get_template_engine();
        echo $template_engine->render('offerte');

	}

	function contact(){
        $template_engine = get_template_engine();
        echo $template_engine->render('contact');

	}

	function notfound(){
        $template_engine = get_template_engine();
        echo $template_engine->render('notfound');

	}
}
