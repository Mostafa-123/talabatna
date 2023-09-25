<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmbloyeesController;
use App\Http\Controllers\OfficeboyController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TitlesController;
use App\Http\Controllers\UserStatusController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    Session()->flush();
});

Route::post('auth/check', [AdminAuthController::class, 'check'])->name('auth.check');

Route::group(['middleware' => ['admin.check']], function () {

    Route::get('auth/login', [AdminAuthController::class, 'login'])->name('auth.login');

    Route::get('admin/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

    Route::get('admin/departments', [DepartmentsController::class, 'showDepartments'])->name('showDepartments');
    Route::get('admin/editdepartmet/{id}/', [DepartmentsController::class, 'editDepartment'])->name('edit_department');
    Route::post('admin/updatedepartmet/{id}/', [DepartmentsController::class, 'updateDepartment'])->name('update_department');
    Route::post('admin/adddepartment', [DepartmentsController::class, 'addNewDepartment'])->name('addDepartment');
    Route::get('admin/deletedepartment/{id}', [DepartmentsController::class, 'deleteDepartment'])->name('delete_Department');

    Route::get('admin/categories', [CategoryController::class, 'showCategories'])->name('showCategories');
    Route::get('admin/editCategory/{id}/', [CategoryController::class, 'editCategory'])->name('editCategory');
    Route::post('admin/updateCategory/{id}/', [CategoryController::class, 'updateCategory'])->name('updateCategory');
    Route::post('admin/addCategory', [CategoryController::class, 'addCategory'])->name('addCategory');
    Route::get('admin/deleteCategory/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');

    Route::get('admin/titles', [TitlesController::class, 'showTitles'])->name('showTitles');
    Route::get('admin/edittitle/{id}/', [TitlesController::class, 'update'])->name('edit_title');
    Route::post('admin/updatetitle/{id}/', [TitlesController::class, 'saveUpdate'])->name('update_title');
    Route::post('admin/addtitle', [TitlesController::class, 'addNewTitle'])->name('addTitle');
    Route::get('admin/deletetitle/{id}', [TitlesController::class, 'deleteTitle'])->name('delete_Title');

    Route::get('admin/userstatus', [UserStatusController::class, 'show'])->name('showUserStatus');
    Route::get('admin/edituserstatus/{id}/', [UserStatusController::class, 'update'])->name('editUserStatus');
    Route::post('admin/updateuserstatus/{id}/', [UserStatusController::class, 'save'])->name('updateUserStatus');
    Route::post('admin/adduserstatus', [UserStatusController::class, 'add'])->name('addUserStatus');
    Route::get('admin/deleteuserstatus/{id}', [UserStatusController::class, 'delete'])->name('deleteUserStatus');


    Route::get('admin/order/showstatus', [OrderStatusController::class, 'show'])->name('showOrderStatus');
    Route::get('admin/order/editstatus/{id}/', [OrderStatusController::class, 'update'])->name('editOrderStatus');
    Route::post('admin/order/updatestatus/{id}/', [OrderStatusController::class, 'save'])->name('updateOrderStatus');
    Route::post('admin/order/addstatus', [OrderStatusController::class, 'add'])->name('addOrderStatus');
    Route::get('admin//order/deletestatus/{id}', [OrderStatusController::class, 'delete'])->name('deleteOrderStatus');


    Route::get('admin/embloyee', [EmbloyeesController::class, 'showEmbloyee'])->name('showEmbloyee');
    Route::get('admin/newembloyee', [EmbloyeesController::class, 'newEmbloyee'])->name('newEmbloyee');
    Route::post('admin/addembloyee', [EmbloyeesController::class, 'add'])->name('addEmbloyee');
    Route::get('admin/editemployee/{id}', [EmbloyeesController::class, 'edit'])->name('editEmployee');
    Route::post('admin/updateemployee/{id}/', [EmbloyeesController::class, 'update'])->name('updateEmployee');
    Route::get('admin/deleteemployee/{id}/', [EmbloyeesController::class, 'delete'])->name('deleteEmployee');

    Route::get('admin/products', [ProductController::class, 'showProducts'])->name('showProducts');
    Route::post('admin/category/products', [ProductController::class, 'showProductsByCategory'])->name('showCategoryProducts');
    Route::get('admin/newProduct', [ProductController::class, 'newProduct'])->name('newProduct');
    Route::post('admin/addProduct', [ProductController::class, 'add'])->name('addProduct');
    Route::get('admin/editProduct/{id}', [ProductController::class, 'edit'])->name('editProduct');
    Route::post('admin/updateProduct/{id}/', [ProductController::class, 'update'])->name('updateProduct');
    Route::get('admin/deleteProduct/{id}/', [ProductController::class, 'delete'])->name('deleteProduct');


    Route::get('admin/officeboys', [OfficeboyController::class, 'showOfficeBoys'])->name('showOfficeBoy');
    Route::get('admin/newOfficeBoy', [OfficeboyController::class, 'newOfficeBoy'])->name('newOfficeBoy');
    Route::post('admin/addOfficeBoy', [OfficeboyController::class, 'addOfficeBoy'])->name('addOfficeBoy');
    Route::get('admin/editOfficeBoy/{id}', [OfficeboyController::class, 'editOfficeBoy'])->name('editOfficeBoy');
    Route::post('admin/updateOfficeBoy/{id}/', [OfficeboyController::class, 'updateOfficeBoy'])->name('updateOfficeBoy');
    Route::get('admin/deleteOfficeBoy/{id}/', [OfficeboyController::class, 'deleteOfficeboy'])->name('deleteOfficeBoy');

});
