<?php

class Pages {

	public static function home()
	{
		return [
			'page_title'       => '',
			'page_name'        => 'home',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/home.php',
		];
	}

	public static function about()
	{
		return [
			'page_title'       => ' - Nosotros',
			'page_name'        => 'about',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/about.php',
		];
	}

	public static function services()
	{
		return [
			'page_title'       => ' - Servicios',
			'page_name'        => 'services',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/services.php',
		];
	}

	public static function clients()
	{
		return [
			'page_title'       => ' - Clientes',
			'page_name'        => 'clients',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/clients.php',
		];
	}

	public static function contact()
	{
		return [
			'page_title'       => ' - Contacto',
			'page_name'        => 'contact',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/contact.php',
		];
	}

	public static function thanks()
	{
		return [
			'page_title'       => ' - Gracias',
			'page_name'        => 'thanks',
			'meta_robots'      => 'noindex, nofollow',
			'meta_description' => '',
			'page_view'        => '_views/thanks.php',
		];
	}
}