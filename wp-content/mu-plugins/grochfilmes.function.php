<?php
/*
*	Funcção para adição do FAVICON em toda rede
*/
add_action('login_headerurl', 'grochfilmes_favicon');
add_action('admin_head', 'grochfilmes_favicon');
add_action('wp_head', 'grochfilmes_favicon');
if (!function_exists('grochfilmes_favicon')){
	function grochfilmes_favicon()
	{
	echo '
		<link rel="apple-touch-icon" href="'.get_site_url().'/wp-content/mu-plugins/global-assets/images/favicon/apple-touch-icon.png" sizes="192x192">
		<link rel="android-chrome-192x192" href="'.get_site_url().'/wp-content/mu-plugins/global-assets/images/favicon/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="'.get_site_url().'/wp-content/mu-plugins/global-assets/images/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="'.get_site_url().'/wp-content/mu-plugins/global-assets/images/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="manifest" href="'.get_site_url().'/wp-content/mu-plugins/global-assets/images/favicon/manifest.json">
		<link rel="shortcut icon" href="'.get_site_url().'/wp-content/mu-plugins/global-assets/images/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#813095">
		<meta name="msapplication-TileImage" content="'.get_site_url().'/wp-content/mu-plugins/global-assets/images/favicon/mstile-150x150.png">
		<meta name="msapplication-config" content="'.get_site_url().'/wp-content/mu-plugins/global-assets/images/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
	';
	}
}

/*
*	Função para alterar a URL do wp-login do WP
*/
add_filter('login_headerurl', 'grochfilmes_url_login');
if (!function_exists('grochfilmes_url_login')){
	function grochfilmes_url_login()
	{
		return get_site_url();
	}
}

/*
*	Função para chamada de CSS da área de Login
*/
add_action('login_enqueue_scripts', 'grochfilmes_css_login');
if (!function_exists('grochfilmes_css_login')){
	function grochfilmes_css_login() {
		wp_enqueue_style( 'grochfilmes_css_login', content_url() . '/mu-plugins/grochfilmes.function/css/wp-login.css', null, '1.0', 'all' );
	}
}

/*
*	Função para customizar a barra de administração na dashboard de cada site da rede
*/
add_action('wp_before_admin_bar_render','grochfilmes_customize_admin_bar');
if (!function_exists('grochfilmes_customize_admin_bar')){
	function grochfilmes_customize_admin_bar()
	{
		// Removing Nodes
		global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('wp-logo');
	}
}

/*
* Função para remover a admin bar para todos exceto administradores
*/
add_action('init','grochfilmes_disable_admin_bar');
if (!function_exists('grochfilmes_disable_admin_bar')) {
	function grochfilmes_disable_admin_bar()
	{
		if (!current_user_can('manage_options')) {

			// for the admin page
			remove_action('admin_footer', 'wp_admin_bar_render', 1000);
			// for the front-end
			remove_action('wp_footer', 'wp_admin_bar_render', 1000);

			// css override for the admin page
			function remove_admin_bar_style_backend() {
				echo '<style>body.admin-bar #wpcontent, body.admin-bar #adminmenu { padding-top: 0px !important; }</style>';
			}
			add_filter('admin_head','remove_admin_bar_style_backend');

			// css override for the frontend
			function remove_admin_bar_style_frontend() {
				echo '<style type="text/css" media="screen">
				html { margin-top: 0px !important; }
				* html body { margin-top: 0px !important; }
				</style>';
			}
			add_filter('wp_head','remove_admin_bar_style_frontend', 99);

		}
	}
}

/*
*	Função para adicionar uma widget na dashboard de cada site da rede com informações básicas
*/
add_action('wp_dashboard_setup', 'grochfilmes_add_dashboard_widget');
if (!function_exists('grochfilmes_dashboard_widget')){
	function grochfilmes_dashboard_widget()
	{
		echo "
		<ul>
			<li id='dashboard_widget_author'>Autor da Rede: <a href='https://grochfilmes.com' target='_blank'>Camila Groch</a></li>
			<li id='dashboard_widget_hosting'>Provedor de Hospedagem: <a href='https://br.godaddy.com/' target='_blank'>GoDaddy</a></li>
			<li id='dashboard_widget_domain'>Provedor de Domínio: <a href='http://www.locaweb.com.br' target='_blank'>LocaWeb</a></li>
			<li id='dashboard_widget_date'>Data de Lançamento da Rede: Setembro de 2016</li>
		</ul>
		";
	}
}
if (!function_exists('grochfilmes_add_dashboard_widget')){
	function grochfilmes_add_dashboard_widget()
	{
		wp_add_dashboard_widget('wp_dashboard_widget', 'Informações Técnicas', 'grochfilmes_dashboard_widget');
	}
}

/*
*	Função para chamada de JS Konami Code de brunoluizgr
*/
add_action( 'wp_enqueue_scripts', 'brunoluizgr_js_konami' );
if (!function_exists('brunoluizgr_js_konami')){
	function brunoluizgr_js_konami()
	{
		wp_enqueue_script( 'brunoluizgr-konami-code', content_url() . '/mu-plugins/grochfilmes.function/js/brunoluizgr-konami.js', null, '1.4.2', 'all' );
	}
}

?>
