<?php
    $config = array(
        /* MySQL Configuration - End User NEEDS to configure this */
        'mysql' => array(
            'host' => '127.0.0.1',
            'user' => 'uploadx',
            'pass' => 'uploadx',
            'database' => 'uploadx',
        ),

	'general' => array(
            'domain' => 'https://enter.your.site.here.com/',
        ),

        'uploads' => array(
            'location' => '/data/',  //Change this line to reflect your full path to your upload directory
            'viewer_delete' => false,
        ),

        'limits' => array(
            'file_size' => 'unlimited',
            'count' => '0',
            'views' => '0',
        ),

        /*
         * Security-related (MOSTLY Auto Generated!)
         * You can modify the session value, but do not modify any others!
        */
        'security' => array(
            'password_hash' => '',
            'last_changed' => '',
            'session' => 'uploadx_admin',
            'disallowed_files' => array(),
            'disallowed_mime_types' => array(),
        ),

        /* Viewer Config. Do NOT Touch */
        'viewer' => array(
            'show_uploader' => true,
            'show_views' => true,
            'show_ip' => false,
            'video_show_controls' => true,
            'video_loop' => false,
            'video_autoplay' => true,
            'theme' => 'red.css',
        ),

        /* Generator Settings - Do NOT Touch */
        'generator' => array(
            'characters' => '4',
            'mode' => '1',
        ),

        /* This following section is intended for developers only! */
        'developer' => array(
            'all' => false,
            'file' => false,
            'upload' => false,
            'mysql' => false,
            'settings' => false,
            'user' => false,
        ),

    );
