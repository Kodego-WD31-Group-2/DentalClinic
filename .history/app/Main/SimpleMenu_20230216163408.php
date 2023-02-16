<?php

namespace App\Main;

class SimpleMenu
{
    /**
     * List of simple menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'home' => [
                'icon' => 'home',
                'route_name' => 'home',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Home'
            ],
            'doctors' => [
                'icon' => 'users',
                'route_name' => 'doctors',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Doctors'
            ],
            'services' => [
                'icon' => 'shopping-bag',
                'route_name' => 'services',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Services'
            ],
            'book-appointment' => [
                'icon' => 'calendar',
                'route_name' => 'book-appointment',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Book an Appointment'
            ],
            'account' => [
                'icon' => 'trello',
                'route_name' => 'profile-overview-1',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Account Profile'
            ],
            'calendar' => [
                'icon' => 'calendar',
                'route_name' => 'calendar',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Calendar'
            ],
            'chat' => [
                'icon' => 'message-square',
                'route_name' => 'chat',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Chat'
            ],
            'settings' => [
                'icon' => 'settings',
                'route_name' => 'update-profile',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Settings'
            ],
            'menu-layout' => [
                'icon' => 'box',
                'title' => 'Menu Layout',
                'sub_menu' => [
                    'side-menu' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Side Menu'
                    ],
                    'simple-menu' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Simple Menu'
                    ],
                    'top-menu' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Top Menu'
                    ]
                ]
            ],
            'devider',
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu',
                        ],
                        'title' => 'Overall Summary'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-2',
                        'params' => [
                            'layout' => 'simple-menu',
                        ],
                        'title' => 'Appointment Reports'
                    ],
                    'dashboard-overview-3' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-3',
                        'params' => [
                            'layout' => 'simple-menu',
                        ],
                        'title' => 'Billing Reports'
                    ],
                    'dashboard-overview-4' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-4',
                        'params' => [
                            'layout' => 'simple-menu',
                        ],
                        'title' => 'Patient Info Reports'
                    ]
                ]
            ],
            'management' => [
                'icon' => 'users',
                'title' => 'Management',
                'sub_menu' => [
                    'manage-appointments' => [
                        'icon' => '',
                        'route_name' => 'appointments-list',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Appointments'
                    ],
                    'manage-doctors' => [
                        'icon' => '',
                        'route_name' => 'doctors.show',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Doctors'
                    ],
                    'manage-employees' => [
                        'icon' => '',
                        'route_name' => 'employees',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Employees'
                    ],
                    'manage-services' => [
                        'icon' => '',
                        'route_name' => 'services-list',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Services'
                    ]
                ]
            ],
            'billing' => [
                'icon' => 'shopping-bag',
                'title' => 'Billing',
                'sub_menu' => [
                    'add-transaction' => [
                        'icon' => '',
                        'route_name' => 'add-billing',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Add a Transaction'
                    ],
                    'list-transaction' => [
                        'icon' => '',
                        'route_name' => 'transaction-list',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Transactions',
                    ],
                ]
            ],
            'inbox' => [
                'icon' => 'inbox',
                'route_name' => 'inbox',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Inbox'
            ],
            'devider',
            'logout' => [
                'icon' => 'log-out',
                'route_name' => 'logout',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Logout'
            ],
            'devider',
                ]
            ]
        ];
    }
}
