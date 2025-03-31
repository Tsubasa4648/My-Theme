function mytheme_register_menus() {
  register_nav_menu('header-menu', 'ヘッダーメニュー');
}
add_action('after_setup_theme', 'mytheme_register_menus');
