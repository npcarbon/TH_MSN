<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'MM88TH MSN',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>MM88TH MSN</b>',

    'logo_mini' => '<b>MSN</b>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'red',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'รายงานผู้สมัครสมาชิค',
        [
            'text'    => 'ยอดผู้สมัครสมาชิค',
            'icon_color' => 'red',
            'submenu' => [
                [
                    'text' => 'สรุปยอดผู้สมัครรวม',
                    'url'  => 'report/result-register',
                    'icon' => 'file',
                ],
                [
                    'text'        => 'สรุปยอด MM88TH.COM',
                    'url'         => 'report/THCOM',
                    'icon'        => 'file',
                ],
                [
                    'text'        => 'สรุปยอด MM88TH.ORG',
                    'url'         => 'report/THORG',
                    'icon'        => 'file',
                ],
                [
                    'text'        => 'สรุปยอด duballcup.com',
                    'url'         => 'report/duballcup',
                    'icon'        => 'file',
                ],
                [
                    'text'        => 'สรุปยอด duballhd.com',
                    'url'         => 'report/duballhd',
                    'icon'        => 'file',
                ],
                [
                    'text'        => 'สรุปยอด duballmobile.com',
                    'url'         => 'report/duballmobile',
                    'icon'        => 'file',
                ],
                [
                    'text'        => 'สรุปยอด duballhdfree.com',
                    'url'         => 'report/duballhdfree',
                    'icon'        => 'file',
                ],
                [
                    'text'        => 'สรุปยอด LANDING PAGE',
                    'url'         => 'report/landingpage',
                    'icon'        => 'file',
                ],
                [
                    'text'        => 'สรุปยอด rakastep.com',
                    'url'         => 'report/rakastep',
                    'icon'        => 'file',
                ],
                [
                    'text'        => 'สรุปยอด steptaek.com',
                    'url'         => 'report/steptaek',
                    'icon'        => 'file',
                ],
                [
                    'text'        => 'สรุปยอด td-ball.com',
                    'url'         => 'report/tdball',
                    'icon'        => 'file',
                ],
            ],
        ],
        'การจัดการระบบ',
        [
            'text' => 'รวมลิ้งค์',
            'url'  => 'linkball',
            'icon' => 'link',
        ],
        [
            'text' => 'บอลเต็ง',
            'url'  => 'ballteng',
            'icon' => 'expeditedssl',
        ],
        [
            'text' => 'ทีเด็ดบอล',
            'url'  => 'tded',
            'icon' => 'connectdevelop',
        ],
        [
        'text'    => 'ทรรศนะบอล',
        'icon' => 'trophy',
        'submenu' => [
                [
                    'text' => 'rakastep',
                    'url'  => 'review/rakastep',
                    'icon' => 'trophy',
                ],
                [
                    'text' => 'steptaek',
                    'url'  => 'review/steptaek',
                    'icon' => 'trophy',
                ],
            ],
        ],
        'ข้อมูลระบบ',
        [
            'text'        => 'ผู้ใช้งาน',
            'url'         => 'users',
            'icon' => 'user',
        ],
        [
            'text' => 'เซียน',
            'url'  => 'zean',
            'icon' => 'users',
        ],
        [
            'text' => 'ชื่อเว็บ',
            'url'  => 'allweb',
            'icon' => 'file-text',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class, 
        // MyApp\MyMenuFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
