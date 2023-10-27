<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    //'logo' => '<b>Admin</b>LTE',
    'logo' => '<b>Works</b> - DX',
    //'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img' => 'img/Works_A1.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'img/Rascal.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    //'classes_sidebar' => 'sidebar-light-primary elevation-1',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    //'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav' => 'navbar navbar-dark bg-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => true,
    'right_sidebar_icon' => 'fas fa-cogs',
    //'right_sidebar_theme' => 'gray elevation-1',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'key'        => 'g_Dashboard_admin_only',
            'text'       => 'Dashboard',
            'route'      => 'dashboard',
            'icon'       => 'fas fa-fw fa-home',
        ],
//-------------------- 追加Menu start------------------------
        //ToDo
        [
            'key'        => 'ToDo_admin_only',
            'text'       => 'ToDo',
            'url'        => '#',
            'icon'       => 'fas fa-solid fa-list',
            //'icon_color' => 'cyan',
        ],
		//My Tool
        [
            'key'        => 'My Tool_admin_only',
            'text'       => 'My Tool',
            'icon'       => 'fas fa-fw fa-home',
            //'icon_color' => 'orange',
            'submenu' => [
                //行動計画
                [
                    'text' => 'my_action_plan',
					'icon_color' => 'cyan',
                    'url'  => '#',
                ],
            ],
        ],
		//店舗Management（店舗管理）
        [
            'key'        => 'store_management_admin_only',
            'text'        => 'store_management',
            'icon'        => 'fas fa-store',
            //'icon_color' => 'blue',
            'submenu' => [
                //年間ロードマップ
                [
                    'text' => 'y_road_map',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //期間ロードマップ
                [
                    'text' => 'p_road_map',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //方針書 進捗管理
                [
                    'text' => 'p_policy_commit',
					//'icon_color' => 'yellow',
                    'url'  => '#',
                ],
                //期間(行動/目標)計画
                [
                    'text' => 'p_act_goal',
					//'icon_color' => 'green',
                    'url'  => '#',
                ],
                //月間(行動/目標)計画
                [
                    'text' => 'm_act_goal',
					//'icon_color' => 'green',
                    'url'  => '#',
                ],
                //四半期(行動/目標)計画
                [
                    'text' => 'q_act_goal',
					//'icon_color' => 'green',
                    'url'  => '#',
                ],
                //上下期(行動/目標)計画
                [
                    'text' => 'h_act_goal',
					//'icon_color' => 'green',
                    'url'  => '#',
                ],
                //年間(行動/目標)計画
                [
                    'text' => 'y_act_goal',
					//'icon_color' => 'green',
                    'url'  => '#',
                ],
                //メンテナンス計画
                [
                    'text' => 'maintenance',
					//'icon_color' => 'purple',
                    'url'  => '#',
                ],
            ],
        ],
		//店舗Operation（店舗運営）
        [
            'key'         => 'g_store_operation_admin_only',
            'text'        => 'store_operation',
            'icon'        => 'fas fa-cash-register',
            //'icon_color' => 'green',
            'submenu' => [
                //営業日報
                [
                    'text' => 'business_daily_report',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //水光熱使用量
                [
                    'text' => 'amount_of_water_and_heat_used',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //勤務シフト表
                [
                    'key'        => 'work_shift_table_admin_only',
                    'text' => 'work_shift_table',
					//'icon_color' => 'yellow',
                    'url'  => '#',
                ],
                //出勤簿管理
                [
                    'key'        => 'attendance_management_admin_only',
                    'text' => 'attendance_management',
					//'icon_color' => 'yellow',
                    'url'  => '#',
                ],
                //販促計画
                [
                    'key'        => 'promotion_admin_only',
                    'text' => 'promotion',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //清掃計画
                [
                    'key'        => 'cleaning_plan_admin_only',
                    'text' => 'cleaning_plan',
					//'icon_color' => 'blue',
                    'url'  => '#',
                ],
                //店舗現状認識
                [
                    'key'        => 'store_situation_admin_only',
                    'text' => 'store_situation',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //現金事故報告書
                [
                    'text' => 'cash_accident_report',
					//'icon_color' => 'red',
                    'url'  => '#',
                ],
                //修理申請書
                [
                    'text' => 'repair_application',
					//'icon_color' => 'red',
                    'url'  => '#',
                ],
            ],
        ],
		//予算・実績Management（予算計画・実績）
        [
            'key'         => 'g_budget_planning_performance_admin_only',
            'text'        => 'budget_plan_result',
            'icon'        => 'fas fa-money-check',
            //'icon_color' => 'yellow',
            'submenu' => [
                //予算計画/実績
                [
                    'key'        => 'budget_planning_performance_admin_only',
                    'text' => 'budget_planning_performance',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //売上目標
                [
                    'key'        => 'sales_target_admin_only',
                    'text' => 'sales_target',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //売上見込
                [
                    'key'        => 'sales_forecast_admin_only',
                    'text' => 'sales_forecast',
					//'icon_color' => 'yellow',
                    'url'  => '#',
                ],
                //PL表
                [
                    'key'        => 'pl_table_admin_only',
                    'text' => 'pl_table',
					//'icon_color' => 'green',
                    'url'  => '#',
                ],
                //本部評価Tool
                [
                    'text' => 'headquarters_evaluation_tool',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
            ],
        ],
		//Document Management（本社提出書類）
        [
            'key'         => 'g_document_management_admin_only',
            'text'        => 'document_management',
            'icon'        => 'fas fa-paste',
            //'icon_color' => 'red',
            'submenu' => [
                //新規採用者書類
                [
                    'key'        => 'new_hire_documents_admin_only',
                    'text' => 'new_hire_documents',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //労働契約書更新
                [
                    'key'        => 'labor_contract_renewal_admin_only',
                    'text' => 'labor_contract_renewal',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //PA状況報告書
                [
                    'key'        => 'pa_status_report_admin_only',
                    'text' => 'pa_status_report',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //面接シート
                [
                    'key'  => 'staff_My Tool',
                    'text' => 'interview_sheet',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //休暇届
                [
                    'text' => 'leave_notice',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //出張旅費申請書
                [
                    'text' => 'business_trip_travel_expenses_application_form',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //立替経費申請書
                [
                    'text' => 'reimbursement_expense_application_form',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //労災事故報告書
                [
                    'key'        => 'work_accident_report_admin_only',
                    'text' => 'work_accident_report',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //退職届
                [
                    'text' => 'resignation_notice',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
            ],
        ],
		//Human Management（人材育成計画）
        [
            'key'          => 'g_human_management_admin_only',
            'text'         => 'human_management',
            'icon'         => 'fas fa-users-cog',
            //'icon_color' => 'purple',
            'submenu' => [
                //社員育成
                [
                    'key'        => 'employee_development_admin_only',
                    'text' => 'employee_development',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //社員現状認識
                [
                    'key'        => 'employee_status_recognition_admin_only',
                    'text' => 'employee_status_recognition',
					//'icon_color' => 'cyan',
                    'url'  => '#',
                ],
                //PA育成
                [
                    'text' => 'pa_training',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //PA現状認識
                [
                    'text' => 'pa_status_recognition',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
            ],
        ],
        //-------------------- プロフィール------------------------

        [    'header'  => 'account_settings'],
        [
            'key'  => 'profile_admin_only',
            'text' => 'profile',
            'url'  => 'profile',
            'icon' => 'fas fa-fw fa-user',
        ],
        //-------------------- Setting------------------------
        [
            'key'  => 'system_settings_admin_only',
            'text' => 'system_settings',
            //'url'  => 'settings',
            'url'  => '#',
            'icon' => 'fas fa-fw fa-cogs',
            'submenu' => [
                //登録ユーザー管理
                [
                    'key'        => 'users_information_admin_only',
                    'text'       => 'users_information',
                    'route'      => 'users.index',
					//'icon_color' => 'orange',
                    //'url'  => 'roles',
                    'active'     => ['user/*'],
                ],
                //社員一覧
                [
                    'key'        => 'employee_list_admin_only',
                    'text'       => 'employee_list',
                    'route'      => 'employees.index',
					//'icon_color' => 'orange',
                    //'url'  => '#',
                    'active'     => ['em/*'],
                ],
                //権限管理
                [
                    'key'        => 'authority_management_admin_only',
                    'text' => 'authority_management',
                    'route'  => 'roles.index',
					//'icon_color' => 'orange',
                    //'url'  => 'roles',
                    'active' => ['role/*'],
                ],
                //店舗基本情報
                [
                    'text' => 'shop_information',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //PA一覧
                [
                    'text' => 'pa_list',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //休日カレンダー
                [
                    'text' => 'holiday_calendar',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //社員休日カレンダー
                [
                    'text' => 'employee_holiday_calendar',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //シフトポジション一覧
                [
                    'text' => 'shift_position_list',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //社員異動履歴
                [
                    'key'        => 'employee_transfer_history_admin_only',
                    'text' => 'employee_transfer_history',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //賃料条件
                [
                    'key'        => 'rent_conditions_admin_only',
                    'text' => 'rent_conditions',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
                //Database Link
                [
                    'key'        => 'database_link_admin_only',
                    'text' => 'database_link',
					//'icon_color' => 'orange',
                    'url'  => '#',
                ],
        ],

    ]],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
