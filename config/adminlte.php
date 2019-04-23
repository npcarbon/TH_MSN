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
            'icon' => 'users',
            'submenu' => [
                [
                    'text' => 'สรุปยอดผู้สมัครรวม',
                    'url'  => 'report/result-register',
                    'icon_color' => 'green',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด MM88TH.COM',
                    'url'         => 'report/THCOM',
                    'icon_color' => 'yellow',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด MM88TH.ORG',
                    'url'         => 'report/THORG',
                    'icon_color' => 'blue',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด duballcup.com',
                    'url'         => 'report/duballcup',
                    'icon_color' => 'aqua',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด duballhd.com',
                    'url'         => 'report/duballhd',
                    'icon_color' => 'white',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด duballmobile.com',
                    'url'         => 'report/duballmobile',
                    'icon_color' => 'black',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด duballhdfree.com',
                    'url'         => 'report/duballhdfree',
                    'icon_color' => 'purple',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด LANDING PAGE',
                    'url'         => 'report/landingpage',
                    'icon_color' => 'yellow',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด rakastep.com',
                    'url'         => 'report/rakastep',
                    'icon_color' => 'blue',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด steptaek.com',
                    'url'         => 'report/steptaek',
                    'icon_color' => 'red',
                    'icon' => 'users',
                        ],
                [
                    'text'        => 'สรุปยอด td-ball.com',
                    'url'         => 'report/tdball',
                    'icon_color' => 'green',
                    'icon' => 'users',
                        ],
            ],
        ],
        'การจัดการระบบ',
        [
            'text' => 'รวมลิ้งค์',
            'icon_color' => 'blue',
            'url'  => 'content/linkball',
            'icon' => 'link',
        ],
        [
            'text' => 'บอลเต็ง',
            'icon_color' => 'red',
            'url'  => 'content/ballteng',
            'icon' => 'expeditedssl',
        ],
        [
            'text' => 'ทีเด็ดบอล',
            'icon_color' => 'red',
            'url'  => 'content/tded',
            'icon' => 'connectdevelop',
        ],
        [
        'text'    => 'ทรรศนะบอล',
        'icon_color' => 'yellow',
        'icon' => 'trophy',
        'submenu' => [
                [
                    'text' => 'rakastep',
                    'url'  => 'review/rakastep',
                    'icon_color' => 'green',
                    'icon' => 'trophy',
                ],
                [
                    'text' => 'steptaek',
                    'url'  => 'review/steptaek',
                    'icon_color' => 'yellow',
                    'icon' => 'trophy',
                ],
            ],
        ],
        'ข้อมูลระบบ',
        [
            'text'        => 'ผู้ใช้งาน',
            'icon_color' => 'red',
            'url'         => 'manage/users',
            'icon' => 'user',
        ],
        [
            'text' => 'เซียน',
            'icon_color' => 'green',
            'url'  => 'manage/zean',
            'icon' => 'users',
        ],
        [
            'text' => 'ชื่อเว็บ',
            'icon_color' => 'yellow',
            'url'  => 'manage/allweb',
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
