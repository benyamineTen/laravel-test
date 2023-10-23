<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\User\AllUserController;
use App\Http\Controllers\Backend\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //return view('frontend.index');
//});

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');

    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');

    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

    Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password');

}); // Gorup Milldeware End

//Route::get('/dashboard', function () {
   // return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';


///Admin Dashboard
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
    route::get('/admin/logout',[AdminController::class,'AdminDestroy'])->name('admin.logout');
    route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
    route::post('/admin/profile/store',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
    route::get('/admin/change/password',[AdminController::class,'AdminChangePassword'])->name('admin.change.password');
    route::post('/admin/update/password',[AdminController::class ,'AdminChangePaswword'])->name('update.password');
});


Route::get('/admin/login',[AdminController::class,'AdminLogin']);



Route::middleware(['auth','role:admin'])->group(function() {

//Client
Route::controller(ClientController::class)->group(function(){
    Route::get('/all/client' , 'AllClient')->name('all.client');
    Route::get('/add/client' , 'AddClient')->name('add.client');
    Route::post('/store/client' , 'StoreClient')->name('store.client');
    Route::get('/edit/client/{id}' , 'EditClient')->name('edit.client');
    Route::post('/update/client' , 'UpdateClient')->name('update.client');
    Route::get('/delete/client/{id}' , 'DeleteClient')->name('delete.client');

 

});



 // User Dashboard All Route 
 Route::controller(AllUserController::class)->group(function(){
    Route::get('/user/account/page' , 'UserAccount')->name('user.account.page');
    Route::get('/user/change/password' , 'UserChangePassword')->name('user.change.password');

   
    
   
   
   }); 

   // Permission All Route 
Route::controller(RoleController::class)->group(function(){

    Route::get('/all/permission' , 'AllPermission')->name('all.permission');
    Route::get('/add/permission' , 'AddPermission')->name('add.permission');
    Route::post('/store/permission' , 'StorePermission')->name('store.permission');
    Route::get('/edit/permission/{id}' , 'EditPermission')->name('edit.permission');
   
    Route::post('/update/permission' , 'UpdatePermission')->name('update.permission');
   
     Route::get('/delete/permission/{id}' , 'DeletePermission')->name('delete.permission');
    
   });
   
   
   // Roles All Route 
   Route::controller(RoleController::class)->group(function(){
   
    Route::get('/all/roles' , 'AllRoles')->name('all.roles');
    Route::get('/add/roles' , 'AddRoles')->name('add.roles');
    Route::post('/store/roles' , 'StoreRoles')->name('store.roles');
    Route::get('/edit/roles/{id}' , 'EditRoles')->name('edit.roles');
   
    Route::post('/update/roles' , 'UpdateRoles')->name('update.roles');
   
    Route::get('/delete/roles/{id}' , 'DeleteRoles')->name('delete.roles');
   
    // add role permission 
   
    Route::get('/add/roles/permission' , 'AddRolesPermission')->name('add.roles.permission');
   
    Route::post('/role/permission/store' , 'RolePermissionStore')->name('role.permission.store');
    
     Route::get('/all/roles/permission' , 'AllRolesPermission')->name('all.roles.permission');
   
     Route::get('/admin/edit/roles/{id}' , 'AdminRolesEdit')->name('admin.edit.roles');
   
     Route::post('/admin/roles/update/{id}' , 'AdminRolesUpdate')->name('admin.roles.update');
   
    Route::get('/admin/delete/roles/{id}' , 'AdminRolesDelete')->name('admin.delete.roles');
   
   });
   // Admin User All Route 
Route::controller(AdminController::class)->group(function(){

    Route::get('/all/admin' , 'AllAdmin')->name('all.admin');
    Route::get('/add/admin' , 'AddAdmin')->name('add.admin');
    Route::post('/admin/user/store' , 'AdminUserStore')->name('admin.user.store');
   
    Route::get('/edit/admin/role/{id}' , 'EditAdminRole')->name('edit.admin.role');
   
    Route::post('/admin/user/update/{id}' , 'AdminUserUpdate')->name('admin.user.update');
     Route::get('/delete/admin/role/{id}' , 'DeleteAdminRole')->name('delete.admin.role');
   
   });


});
   

