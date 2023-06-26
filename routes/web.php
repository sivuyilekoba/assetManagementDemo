<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailAvailable;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssessorController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\AssessmentController;

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

Route::view('/', 'auth.login');
require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth']], function(){

        //Stats
    Route::get('/CommunityInfo/stats2', [InfoController::class, 'stats2'])->name('CommunityInfo.stats2');
    Route::get('/CommunityInfo/stats/{id}', [InfoController::class, 'stats'])->name('CommunityInfo.stats');
    Route::post('/CommunityInfo/report', [InfoController::class, 'report'])->name('CommunityInfo.report');
    Route::get('/CommunityInfo/generator', [InfoController::class, 'generator'])->name('CommunityInfo.generator');


    // Home Controller
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/dashboard-filter/{year}', [HomeController::class, 'filter'])->name('CommunityHome.filter');

    // Community Admin
    Route::get('/CommunityAdmin', [AdminController::class, 'index']);
    Route::get('/CommunityAdmin/all', [AdminController::class, 'all']);
    Route::get('/Community/groupEdit/{id}', [AdminController::class, 'groupEdit']);
    Route::get('/Community/notes/{id}', [AdminController::class, 'groupEdit']);

    // CommunityController
    Route::get('/Community/add/{id}', [CommunityController::class, 'add'])->name('Community.add');
    Route::get('/Community/yajra', [CommunityController::class, 'yajra'])->name('Community.yajra');
    Route::get('/Community/images/{id}', [CommunityController::class, 'images'])->name('Community.images');
    Route::get('/Community/groupEdit/{id}', [CommunityController::class, 'groupEdit'])->name('Community.groupedit');
    Route::post('/Community/groupUpdate/{id}', [CommunityController::class, 'groupUpdate'])->name('Community.groupUpdate');
    Route::post('/Community/componentStore/{id}', [CommunityController::class, 'componentStore'])->name('Community.componentStore');
    Route::post('/Community/addStore/{id}', [CommunityController::class, 'addStore'])->name('Community.addStore');
    Route::get('/Community/notesAdd/{id}', [CommunityController::class, 'notesAdd'])->name('Community.notesAdd');
    Route::get('/Community/notesEdit/{id}', [CommunityController::class, 'notesEdit'])->name('Community.notesEdit');
    Route::get('/Community/notesDestroy/{id}', [CommunityController::class, 'notesDestroy'])->name('Community.notesDestroy');
    Route::post('/Community/notesStore/{id}', [CommunityController::class, 'notesStore'])->name('Community.notesStore');
    Route::get('/Community/notes/{id}', [CommunityController::class, 'notes'])->name('Community.notes');
    Route::get('/Community/fileAdd/{id}', [CommunityController::class, 'fileAdd'])->name('Community.fileAdd');
    Route::get('/Community/fileDestroy/{id}', [CommunityController::class, 'fileDestroy'])->name('Community.fileDestroy');
    Route::get('/Community/fileUpdate/{id}', [CommunityController::class, 'fileUpdate'])->name('Community.fileUpdate');
    Route::get('/Community/fileEdit/{id}', [CommunityController::class, 'fileEdit'])->name('Community.fileEdit');
    Route::get('/Community/fileStore/{id}', [CommunityController::class, 'fileStore'])->name('Community.fileStore');
    Route::get('/Community/file/{id}', [CommunityController::class, 'file'])->name('Community.file');
    //Community Assessment
    Route::get('/CommunityAssessment/navigator/{id}', [AssessmentController::class, 'navigator'])->name('CommunityAssessment.navigator');
    Route::get('/CommunityAssessment/bulk/{id}', [AssessmentController::class, 'bulk'])->name('CommunityAssessment.bulk');
    Route::post('/CommunityAssessment/bulked', [AssessmentController::class, 'bulked'])->name('CommunityAssessment.bulked');
    Route::get('/CommunityAssessment/today', [AssessmentController::class, 'today'])->name('CommunityAssessment.today');
    Route::get('/CommunityAssessment', [AssessmentController::class, 'index'])->name('CommunityAssessment.index');
    Route::get('/CommunityAssessment/completed', [AssessmentController::class, 'completed'])->name('CommunityAssessment.completed');
    Route::get('/CommunityAssessment/incompleted', [AssessmentController::class, 'incompleted'])->name('CommunityAssessment.incompleted');
    Route::get('/CommunityAssessment/edit/{id}', [AssessmentController::class, 'edit'])->name('CommunityAssessment.edit');
    Route::get('/CommunityAssessment/destroy/{id}', [AssessmentController::class, 'destroy'])->name('CommunityAssessment.destroy');
    Route::get('/CommunityAssessment/progress/{id}', [AssessmentController::class, 'progress'])->name('CommunityAssessment.progress');
    Route::get('/CommunityAssessment/assessment/{id}', [AssessmentController::class, 'assessment'])->name('CommunityAssessment.assessment');
    Route::get('/CommunityAssessment/view/{id}', [AssessmentController::class, 'view'])->name('CommunityAssessment.view');
    Route::get('/CommunityAssessment/pdf/{id}', [AssessmentController::class, 'pdf'])->name('CommunityAssessment.pdf');
    Route::get('/CommunityAssessment/signed', [AssessmentController::class, 'signed'])->name('CommunityAssessment.signed');
    Route::get('/CommunityAssessment/director/{id}', [AssessmentController::class, 'director'])->name('CommunityAssessment.director');
    Route::get('/CommunityAssessment/deputyDirector/{id}', [AssessmentController::class, 'deputyDirector'])->name('CommunityAssessment.deputyDirector');
    Route::get('/CommunityAssessment/superIntendent/{id}', [AssessmentController::class, 'superIntendent'])->name('CommunityAssessment.superIntendent');
    Route::get('/CommunityAssessment/images/{id}/{assessment}', [AssessmentController::class, 'images'])->name('CommunityAssessment.images');
    Route::get('/email_available', 'EmailAvailable@index');
    Route::post('/email_available/check', [EmailAvailable::class], 'check')->name('email_available.check');
    // Route::get('/identity_available', 'IdentityAvailable@index');
    // Route::post('/identity_available/check', 'IdentityAvailable@check')->name('identity_available.check');
    //Notes
    Route::resource('Community', CommunityController::class);
    Route::resource('CommunityAssessor', AssessorController::class);

});
