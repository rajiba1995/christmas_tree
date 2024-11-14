<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\ElementsControllere;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\UtilitiesController;


// New Code
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\{LeadManagementController,CommonController,HotelManagementController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [RegisteredUserController::class, 'admin_login']);
Route::get('/admin/dashboard', [DashboardsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::prefix('admin')->group(function(){
         // Lead Management
        Route::prefix('leads')->group(function(){
            Route::get('/', [LeadManagementController::class, 'index'])->name('admin.leads.index');
            Route::get('/create', [LeadManagementController::class, 'create'])->name('admin.leads.create');
            Route::post('/store', [LeadManagementController::class, 'store'])->name('admin.leads.store');
            Route::post('/update/status/{id}', [LeadManagementController::class, 'update_status'])->name('admin.leads.update_status');
            // Additional CRUD routes
        });

         // State Master
        Route::prefix('state')->group(function(){
            Route::get('/', [CommonController::class,'state_index'])->name('admin.state.index');
            Route::post('/store', [CommonController::class,'state_store'])->name('admin.state.store');
            Route::get('/edit', [CommonController::class,'state_edit'])->name('admin.state.edit');
            Route::post('/update', [CommonController::class,'state_update'])->name('admin.state.update');
            Route::get('/destroy/{id}', [CommonController::class,'state_destroy'])->name('admin.state.destroy');
        });

        // Division Master
        Route::prefix('division')->group(function(){
            Route::get('/', [CommonController::class,'division_index'])->name('admin.division.index');
            Route::post('/store', [CommonController::class,'division_store'])->name('admin.division.store');
            Route::get('/edit', [CommonController::class,'division_edit'])->name('admin.division.edit');
            Route::post('/update', [CommonController::class,'division_update'])->name('admin.division.update');
            Route::get('/destroy/{id}', [CommonController::class,'division_destroy'])->name('admin.division.destroy');
        });
        // Hotel Seasion Plan  Master
        Route::prefix('hotel-seasion-plan')->group(function(){
            Route::get('/', [HotelManagementController::class,'hotel_seasion_plan'])->name('admin.hotel_seasion_plan');
            Route::post('/store', [HotelManagementController::class,'hotel_seasion_plan_store'])->name('admin.hotel_seasion_plan_store');
            // Route::get('/edit', [HotelManagementController::class,'division_edit'])->name('admin.division.edit');
            // Route::post('/update', [HotelManagementController::class,'division_update'])->name('admin.division.update');
            // Route::get('/destroy/{id}', [HotelManagementController::class,'division_destroy'])->name('admin.division.destroy');
        });
        
    });
   
    
});

require __DIR__.'/auth.php';

Route::prefix('tem')->group(function () {
    Route::get('/', [DashboardsController::class, 'index']);
    Route::get('index', [DashboardsController::class, 'index']);
    Route::get('index1', [DashboardsController::class, 'index1']);
    Route::get('index2', [DashboardsController::class, 'index2']);
    Route::get('index3', [DashboardsController::class, 'index3']);
    Route::get('index4', [DashboardsController::class, 'index4']);
    Route::get('index5', [DashboardsController::class, 'index5']);
    Route::get('index6', [DashboardsController::class, 'index6']);
    Route::get('index7', [DashboardsController::class, 'index7']);
    Route::get('index8', [DashboardsController::class, 'index8']);
    Route::get('index9', [DashboardsController::class, 'index9']);
    Route::get('index10', [DashboardsController::class, 'index10']);
    Route::get('index11', [DashboardsController::class, 'index11']);


    // Icons //
    Route::get('icons', [IconsController::class, 'icons']);


    // Charts //
    Route::get('apex-area-charts', [ChartsController::class, 'apex_area_charts']);
    Route::get('apex-bar-charts', [ChartsController::class, 'apex_bar_charts']);
    Route::get('apex-boxplot-charts', [ChartsController::class, 'apex_boxplot_charts']);
    Route::get('apex-bubble-charts', [ChartsController::class, 'apex_bubble_charts']);
    Route::get('apex-candlestick-charts', [ChartsController::class, 'apex_candlestick_charts']);
    Route::get('apex-column-charts', [ChartsController::class, 'apex_column_charts']);
    Route::get('apex-heatmap-charts', [ChartsController::class, 'apex_heatmap_charts']);
    Route::get('apex-line-charts', [ChartsController::class, 'apex_line_charts']);
    Route::get('apex-mixed-charts', [ChartsController::class, 'apex_mixed_charts']);
    Route::get('apex-pie-charts', [ChartsController::class, 'apex_pie_charts']);
    Route::get('apex-polararea-charts', [ChartsController::class, 'apex_polararea_charts']);
    Route::get('apex-radar-charts', [ChartsController::class, 'apex_radar_charts']);
    Route::get('apex-radialbar-charts', [ChartsController::class, 'apex_radialbar_charts']);
    Route::get('apex-rangearea-charts', [ChartsController::class, 'apex_rangearea_charts']);
    Route::get('apex-scatter-charts', [ChartsController::class, 'apex_scatter_charts']);
    Route::get('apex-timeline-charts', [ChartsController::class, 'apex_timeline_charts']);
    Route::get('apex-treemap-charts', [ChartsController::class, 'apex_treemap_charts']);
    Route::get('chartjs', [ChartsController::class, 'chartjs']);
    Route::get('echartjs', [ChartsController::class, 'echartjs']);


    // Apps //
    Route::get('cards', [AppsController::class, 'cards']);
    Route::get('contacts', [AppsController::class, 'contacts']);
    Route::get('draggable', [AppsController::class, 'draggable']);
    Route::get('file-manager', [AppsController::class, 'file_manager']);
    Route::get('full-calendar', [AppsController::class, 'full_calendar']);
    Route::get('notifications', [AppsController::class, 'notifications']);
    Route::get('treeview', [AppsController::class, 'treeview']);
    Route::get('widgets', [AppsController::class, 'widgets']);

    // Elements //
    Route::get('alerts', [ElementsControllere::class, 'alerts']);
    Route::get('avatars', [ElementsControllere::class, 'avatars']);
    Route::get('badge', [ElementsControllere::class, 'badge']);
    Route::get('blockquotes', [ElementsControllere::class, 'blockquotes']);
    Route::get('breadcrumb', [ElementsControllere::class, 'breadcrumb']);
    Route::get('buttongroups', [ElementsControllere::class, 'buttongroups']);
    Route::get('buttons', [ElementsControllere::class, 'buttons']);
    Route::get('dropdowns', [ElementsControllere::class, 'dropdowns']);
    Route::get('images-figures', [ElementsControllere::class, 'images_figures']);
    Route::get('list', [ElementsControllere::class, 'list']);
    Route::get('listgroup', [ElementsControllere::class, 'listgroup']);
    Route::get('navbar', [ElementsControllere::class, 'navbar']);
    Route::get('navs-tabs', [ElementsControllere::class, 'navs_tabs']);
    Route::get('object-fit', [ElementsControllere::class, 'object_fit']);
    Route::get('pagination', [ElementsControllere::class, 'pagination']);
    Route::get('popovers', [ElementsControllere::class, 'popovers']);
    Route::get('progress', [ElementsControllere::class, 'progress']);
    Route::get('scrollspy', [ElementsControllere::class, 'scrollspy']);
    Route::get('spinners', [ElementsControllere::class, 'spinners']);
    Route::get('toasts', [ElementsControllere::class, 'toasts']);
    Route::get('tooltips', [ElementsControllere::class, 'tooltips']);
    Route::get('typography', [ElementsControllere::class, 'typography']);

    // Advancedui //
    Route::get('accordions-collpase', [AdvanceduiController::class, 'accordions_collpase']);
    Route::get('blog-create', [AdvanceduiController::class, 'blog_create']);
    Route::get('blog-details', [AdvanceduiController::class, 'blog_details']);
    Route::get('blog', [AdvanceduiController::class, 'blog']);
    Route::get('Indicators', [AdvanceduiController::class, 'Indicators']);
    Route::get('modals-closes', [AdvanceduiController::class, 'modals_closes']);
    Route::get('offcanvas', [AdvanceduiController::class, 'offcanvas']);
    Route::get('skeleton', [AdvanceduiController::class, 'skeleton']);
    Route::get('ratings', [AdvanceduiController::class, 'ratings']);
    Route::get('search', [AdvanceduiController::class, 'search']);
    Route::get('stepper', [AdvanceduiController::class, 'stepper']);
    Route::get('sweet-alerts', [AdvanceduiController::class, 'sweet_alerts']);
    Route::get('swiperjs', [AdvanceduiController::class, 'swiperjs']);
    Route::get('timeline', [AdvanceduiController::class, 'timeline']);
    Route::get('timeline2', [AdvanceduiController::class, 'timeline2']);
    Route::get('userlist', [AdvanceduiController::class, 'userlist']);

    // Pages //
    Route::get('about-us', [PagesController::class, 'about_us']);
    Route::get('add-products', [PagesController::class, 'add_products']);
    Route::get('chat', [PagesController::class, 'chat']);
    Route::get('check-out', [PagesController::class, 'check_out']);
    Route::get('comingsoon', [PagesController::class, 'comingsoon']);
    Route::get('create-invoice', [PagesController::class, 'create_invoice']);
    Route::get('create-password-basic', [PagesController::class, 'create_password_basic']);
    Route::get('create-password-cover', [PagesController::class, 'create_password_cover']);
    Route::get('edit-products', [PagesController::class, 'edit_products']);
    Route::get('emptypage', [PagesController::class, 'emptypage']);
    Route::get('error404', [PagesController::class, 'error404']);
    Route::get('error500', [PagesController::class, 'error500']);
    Route::get('error501', [PagesController::class, 'error501']);
    Route::get('faqs', [PagesController::class, 'faqs']);
    Route::get('gallery', [PagesController::class, 'gallery']);
    Route::get('invoice-details', [PagesController::class, 'invoice_details']);
    Route::get('invoice-list', [PagesController::class, 'invoice_list']);
    Route::get('lockscreen-basic', [PagesController::class, 'lockscreen_basic']);
    Route::get('lockscreen-cover', [PagesController::class, 'lockscreen_cover']);
    Route::get('mail-settings', [PagesController::class, 'mail_settings']);
    Route::get('mail', [PagesController::class, 'mail']);
    Route::get('maintanace', [PagesController::class, 'maintanace']);
    Route::get('order-details', [PagesController::class, 'order_details']);
    Route::get('orders', [PagesController::class, 'orders']);
    Route::get('pricing', [PagesController::class, 'pricing']);
    Route::get('product-cart', [PagesController::class, 'product_cart']);
    Route::get('product-details', [PagesController::class, 'product_details']);
    Route::get('products-list', [PagesController::class, 'products_list']);
    Route::get('products', [PagesController::class, 'products']);
    Route::get('profile', [PagesController::class, 'profile']);
    Route::get('reset-password-basic', [PagesController::class, 'reset_password_basic']);
    Route::get('reset-password-cover', [PagesController::class, 'reset_password_cover']);
    Route::get('reviews', [PagesController::class, 'reviews']);
    Route::get('sign-in-basic', [PagesController::class, 'sign_in_basic']);
    Route::get('sign-in-cover', [PagesController::class, 'sign_in_cover']);
    Route::get('sign-up-basic', [PagesController::class, 'sign_up_basic']);
    Route::get('sign-up-cover', [PagesController::class, 'sign_up_cover']);
    Route::get('task-details', [PagesController::class, 'task_details']);
    Route::get('task-kanban-board', [PagesController::class, 'task_kanban_board']);
    Route::get('task-list-view', [PagesController::class, 'task_list_view']);
    Route::get('team', [PagesController::class, 'team']);
    Route::get('terms', [PagesController::class, 'terms']);
    Route::get('todolist', [PagesController::class, 'todolist']);
    Route::get('two-step-verfication-basic', [PagesController::class, 'two_step_verfication_basic']);
    Route::get('two-step-verfication-cover', [PagesController::class, 'two_step_verfication_cover']);
    Route::get('wish-list', [PagesController::class, 'wish_list']);

    // Forms //
    Route::get('advanced-select', [FormsController::class, 'advanced_select']);
    Route::get('counters', [FormsController::class, 'counters']);
    Route::get('form-check-radios', [FormsController::class, 'form_check_radios']);
    Route::get('form-color-pickers', [FormsController::class, 'form_color_pickers']);
    Route::get('form-datetime-pickers', [FormsController::class, 'form_datetime_pickers']);
    Route::get('form-file-uploads', [FormsController::class, 'form_file_uploads']);
    Route::get('form-input-group', [FormsController::class, 'form_input_group']);
    Route::get('form-inputs', [FormsController::class, 'form_inputs']);
    Route::get('form-layout', [FormsController::class, 'form_layout']);
    Route::get('form-range', [FormsController::class, 'form_range']);
    Route::get('form-select', [FormsController::class, 'form_select']);
    Route::get('form-select2', [FormsController::class, 'form_select2']);
    Route::get('form-validation', [FormsController::class, 'form_validation']);
    Route::get('inputnumber', [FormsController::class, 'inputnumber']);
    Route::get('passwords', [FormsController::class, 'passwords']);
    Route::get('quill-editor', [FormsController::class, 'quill_editor']);

    // Tables //
    Route::get('data-tables', [TablesController::class, 'data_tables']);
    Route::get('edittable', [TablesController::class, 'edittable']);
    Route::get('grid-tables', [TablesController::class, 'grid_tables']);
    Route::get('tables', [TablesController::class, 'tables']);

    // Landing Page //
    Route::get('landing', [LandingpageController::class, 'landing']);


    // Maps //
    Route::get('google-maps', [MapsController::class, 'google_maps']);
    Route::get('leaflet-maps', [MapsController::class, 'leaflet_maps']);
    Route::get('vector-maps', [MapsController::class, 'vector_maps']);

    // Utilities //
    Route::get('borders', [UtilitiesController::class, 'borders']);
    Route::get('colors', [UtilitiesController::class, 'colors']);
    Route::get('columns', [UtilitiesController::class, 'columns']);
    Route::get('flex', [UtilitiesController::class, 'flex']);
    Route::get('grids', [UtilitiesController::class, 'grids']);
});