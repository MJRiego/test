<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequirementsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\AllowanceController;
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

Route::get('/members', [MembersController::class, 'showMembers']);
Route::get('/members-add', [MembersController::class, 'addMembers']);
Route::get('/profile', [ProfileController::class, 'showProfile']);
Route::get('/reqs-page', [RequirementsController::class, 'showRequirements']);
Route::get('/grades-page', [GradesController::class, 'showGrades']);
Route::get('/dashboard', [DashboardController::class, 'Dashboard']);
Route::get('/allowance-page', [AllowanceController::class, 'showAllowance']);

Route::post('/members-add', [MembersController::class, 'addNewMembers'])->name('members-add.addNewMembers');

Route::get('/profile-edit', [ProfileController::class, 'editProfile']);
Route::post('/profile', [ProfileController::class, 'updateProfile']);

Route::get('/grades', [GradesController::class, 'showProfile']);
Route::post('/grades', [GradesController::class, 'selectYearSem']);
Route::get('/grades-add', [GradesController::class, 'addGrades']);
Route::get('/grades-edit', [GradesController::class, 'editGrades']);
Route::get('/grades-delete', [GradesController::class, 'deleteGrades']);

Route::get('/req s_list-add', function () {
    return view('reqs_list-add');
});



// Route::get('/profile-edit/{memberID}', [ProfileController::class, 'editProfile'])->name('profile-edit.editProfile');







// Route::get('/', [MembersController::class, 'index']);
// Route::get('/welcome', [MembersController::class, 'show']);


// Route::get('/', [StudentController::class, 'index']);


// Route::get('/users', [UserController::class, 'index']) -> name('login');

// Route::get('/user/{id}', [UserController::class, 'show']);
// Route::get('/students', [StudentController::class, 'index']);
