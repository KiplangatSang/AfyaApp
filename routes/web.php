<?php

use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\Admin\DiagnosisController as AdminDiagnosisController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\DonationController as AdminDonationController;
use App\Http\Controllers\Admin\HospitalController as AdminHospitalController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\VisitController as AdminVisitController;
use App\Http\Controllers\Auth\DoctorRegisterController;
use App\Http\Controllers\Doctor\AppointmentController;
use App\Http\Controllers\Doctor\DiagnosisController;
use App\Http\Controllers\Doctor\DonationController as DoctorDonationController;
use App\Http\Controllers\Doctor\HospitalController;
use App\Http\Controllers\Doctor\MessageController;
use App\Http\Controllers\Doctor\VisitController;
use App\Http\Controllers\Hospital\DonationController as HospitalDonationController;
use App\Http\Controllers\Hospital\VisitController as HospitalVisitController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Patient\AppointmentController as PatientAppointmentController;
use App\Http\Controllers\Patient\DiagnosisController as PatientDiagnosisController;
use App\Http\Controllers\Patient\DonationController;
use App\Http\Controllers\Patient\HospitalController as PatientHospitalController;
use App\Http\Controllers\Patient\MessageController as PatientMessageController;
use App\Http\Controllers\Patient\VisitController as PatientVisitController;
use App\Repositories\Schedule;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
})->name('welcome');;

Route::get('/schedule', function () {
    $schedule = new Schedule();
    $schedule->schedule();

    return view('datepicker');
});
Auth::routes();

Route::get('/notifications/{notification}', [NotificationController::class, 'show'])->name('notifications.show');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/doctor')->name('doctor.')->middleware(['doctor',])->group(
    function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        //Appointments
        Route::resource('appointments', AppointmentController::class);

        //Hospital
        Route::resource('hospitals', HospitalController::class);

        //Visits
        Route::resource('visits', VisitController::class);
        Route::get('visits/create/{appointment}', [VisitController::class, 'create'])->name('visits.create');

        //diagnosis
        Route::resource('diagnoses', DiagnosisController::class);
        Route::get('diagnoses/create/{visit}', [DiagnosisController::class, 'create'])->name('diagnoses.create');

        //messages
        Route::resource('messages', MessageController::class);

        //donantion
        Route::resource('donations', DoctorDonationController::class);
    }
);
Route::prefix('/patient')->name('patient.')->middleware(['patient',])->group(
    function () {
        //home
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


        //Appointments
        Route::resource('appointments', PatientAppointmentController::class);

        //Hospital
        Route::resource('hospitals', PatientHospitalController::class);

        //Visits
        Route::resource('visits', PatientVisitController::class);

        //diagnosis
        Route::resource('diagnoses', PatientDiagnosisController::class);

        //messages
        Route::resource('messages', PatientMessageController::class);

        //donantion
        Route::resource('donations', DonationController::class);
    }
);
Route::prefix('/hospital')->name('hospital.')->middleware(['hospital',])->group(
    function () {
        //visits
        Route::resource('visits', HospitalVisitController::class);
        //donantion
        Route::resource('donations', HospitalDonationController::class);
    }
);

Route::prefix('/admin')->name('admin.')->middleware(['admin',])->group(
    function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        //Appointments
        Route::resource('appointments', AdminAppointmentController::class);

        //Hospital
        Route::resource('hospitals', AdminHospitalController::class);

        //Visits
        Route::resource('visits', AdminVisitController::class);
        Route::get('visits/create/{appointment}', [AdminVisitController::class, 'create'])->name('visits.create');

        //diagnosis
        Route::resource('diagnoses', AdminDiagnosisController::class);
        Route::get('diagnoses/create/{visit}', [AdminDiagnosisController::class, 'create'])->name('diagnoses.create');

        //messages
        Route::resource('messages', AdminMessageController::class);

        //donantion
        Route::resource('donations', AdminDonationController::class);

        //doctor
        Route::resource('doctors', DoctorController::class);
    }
);



//doctor register account
Route::get('doctor/register', [DoctorRegisterController::class, 'create'])->name('admin.doctors.register');
Route::post('doctor/register', [DoctorRegisterController::class, 'store'])->name('admin.doctors.register');
