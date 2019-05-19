<?php 
	return [
		'search' => 'search/index',
		'news/page-([0-9]+)'=>'news/index/$1',
		'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
		'news/([0-9]+)' => 'news/view/$1',
		'news' => 'news/index',
		'about' => 'about/view/$1',				
		'main'=>'main/index',
		'main/([a-z]+)/([0-9]+)' => 'main/view/$1/$2',
		'main/([0-9]+)' => 'main/view/$1',
		'uz'=>'main/index',
		'ru'=>'main/index',		
		'user/login' => 'user/index',
		//'cabinet/news/([a-z]+)' => 'cabinet/news_edit',		
		'cabinet/edit/([a-z]+)' => 'cabinet/news_edit',		
		'cabinet/edit' => 'cabinet/view',
		'cabinet/news' => 'cabinet/news',
		'cabinet' => 'cabinet/index',
		'menues' => 'menues/index',
		''=>'main/index'		
	];
 ?>