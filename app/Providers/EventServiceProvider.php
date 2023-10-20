<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            //staff role
            if (auth()->user()->role == 'staff'){
                $event->menu->remove('ToDo_admin_only');
                $event->menu->remove('My Tool_admin_only');
                $event->menu->remove('store_management_admin_only');
                $event->menu->remove('work_shift_table_admin_only');
                $event->menu->remove('attendance_management_admin_only');
                $event->menu->remove('promotion_admin_only');
                $event->menu->remove('cleaning_plan_admin_only');
                $event->menu->remove('store_situation_admin_only');
                $event->menu->remove('budget_planning_performance_admin_only');
                $event->menu->remove('sales_target_admin_only');
                $event->menu->remove('sales_forecast_admin_only');
                $event->menu->remove('pl_table_admin_only');
                $event->menu->remove('new_hire_documents_admin_only');
                $event->menu->remove('labor_contract_renewal_admin_only');
                $event->menu->remove('pa_status_report_admin_only');
                $event->menu->remove('work_accident_report_admin_only');
                $event->menu->remove('employee_development_admin_only');
                $event->menu->remove('employee_status_recognition_admin_only');
                $event->menu->remove('system_settings_admin_only');
            }
            //SS(社員) role
            if (auth()->user()->role == 'SS'){
                $event->menu->remove('employee_list_admin_only');
                $event->menu->remove('authority_management_admin_only');
                $event->menu->remove('rent_conditions_admin_only');
                $event->menu->remove('database_link_admin_only');
                $event->menu->remove('employee_transfer_history_admin_only');
                $event->menu->remove('users_information_admin_only');
            }
            //Ast(副店長) role
            if (auth()->user()->role == 'Ast'){
                $event->menu->remove('employee_list_admin_only');
                $event->menu->remove('authority_management_admin_only');
                $event->menu->remove('rent_conditions_admin_only');
                $event->menu->remove('database_link_admin_only');
                $event->menu->remove('employee_transfer_history_admin_only');
                $event->menu->remove('users_information_admin_only');
            }
            //St(店長) role
            if (auth()->user()->role == 'St'){
                $event->menu->remove('employee_list_admin_only');
                $event->menu->remove('authority_management_admin_only');
                $event->menu->remove('rent_conditions_admin_only');
                $event->menu->remove('database_link_admin_only');
                $event->menu->remove('employee_transfer_history_admin_only');
                $event->menu->remove('users_information_admin_only');
            }
            //Mgr(マネージャー) role
            if (auth()->user()->role == 'Mgr'){
                $event->menu->remove('employee_list_admin_only');
                $event->menu->remove('authority_management_admin_only');
                $event->menu->remove('rent_conditions_admin_only');
                $event->menu->remove('database_link_admin_only');
                $event->menu->remove('users_information_admin_only');
            }
            //Srmgr(シニア・マネージャー) role
            if (auth()->user()->role == 'Srmgr'){
            }
            //Gmgr(ゼネラル・マネージャー) role
            if (auth()->user()->role == 'Gmgr'){
            }
            //Shop(店舗) role
            if (auth()->user()->role == 'Shop_TypeA'){
                $event->menu->remove('pa_list_admin_only');
                $event->menu->remove('employee_list_admin_only');
                $event->menu->remove('authority_management_admin_only');
                $event->menu->remove('rent_conditions_admin_only');
                $event->menu->remove('users_information_admin_only');
            }
            //Shop(店舗/営業報告・水光熱あり) role
            if (auth()->user()->role == 'Shop_TypeB'){
                $event->menu->remove('pa_list_admin_only');
                $event->menu->remove('employee_list_admin_only');
                $event->menu->remove('authority_management_admin_only');
                $event->menu->remove('rent_conditions_admin_only');
                $event->menu->remove('users_information_admin_only');
            }
        }
    );
    }
    /**
     * Determine if events and listeners should be automatically discovered.
     */
        public function shouldDiscoverEvents(): bool
        {
            return false;
        }
}