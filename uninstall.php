<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('rigwppz_title');
delete_option('rigwppz_width');
delete_option('rigwppz_theme');
delete_option('rigwppz_dir');
delete_option('rigwppz_dir1');
delete_option('rigwppz_dir2');
delete_option('rigwppz_dir3');
delete_option('rigwppz_dir4');
delete_option('rigwppz_dir5');
delete_option('rigwppz_title_yes');
 
// for site options in Multisite
delete_site_option('rigwppz_title');
delete_site_option('rigwppz_width');
delete_site_option('rigwppz_theme');
delete_site_option('rigwppz_dir');
delete_site_option('rigwppz_dir1');
delete_site_option('rigwppz_dir2');
delete_site_option('rigwppz_dir3');
delete_site_option('rigwppz_dir4');
delete_site_option('rigwppz_dir5');
delete_site_option('rigwppz_title_yes');