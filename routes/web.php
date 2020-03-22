<?php

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
Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/contact-us', function()
	{
		return view('contact');
	});
	Route::get('/', 'HomeController@index')->name('mainPage');
	Route::get('/clinic/{slug}', 'ClinicController@show');
	Route::get('/doctor/{slug}', 'DoctorController@show');
	Route::get('/insurances', 'InsuranceController@show');
	Route::get('/our-portfolio', 'GalleryController@show');
	Route::get('/contact-us', 'ContactController@show');
	Route::get('/about-us', 'AboutController@show');

	Route::post('/contact', 'ContactController@store');
	Route::post('/appointment', 'AppointmentController@store');
	// Route::post('/testd', 'AppointmentController@index');
	Route::post('/add_app', 'AppointmentController@test');
	Route::get('/our-blog', 'PostController@show');
	Route::get('/our-blog/{slug}', 'PostController@showPost');


//end
});
	Auth::routes();
//admin routes

Route::group(['middleware' => 'isAdmin' ],
function()
{
Route::post('/update-admin/{admin}', 'AdminController@update');
Route::get('/edit-admin', 'AdminController@edit');
	// ==================  Clinic ==========================
  Route::get('/clinic', 'ClinicController@index')->name('clinic');
  Route::get('/new-clinic', 'ClinicController@create');
  Route::post('/add-clinic', 'ClinicController@store');
  Route::post('/update-clinic/{clinic}', 'ClinicController@update');
  Route::post('/delete-clinic', 'ClinicController@destroy');
  Route::get('/edit-clinic/{clinic}', 'ClinicController@edit');

	// ==================  Service ==========================
		Route::get('/service', 'ServiceController@index')->name('service');
		Route::get('/new-service', 'ServiceController@create');
		Route::post('/add-service', 'ServiceController@store');
		Route::post('/update-service/{service}', 'ServiceController@update');
		Route::post('/delete-service', 'ServiceController@destroy');
		Route::get('/edit-service/{service}', 'ServiceController@edit');
// ==================  Doctor ==========================
	Route::get('/doctor', 'DoctorController@index')->name('doctor');
	Route::get('/new-doctor', 'DoctorController@create');
	Route::post('/add-doctor', 'DoctorController@store');
	Route::post('/update-doctor/{doctor}', 'DoctorController@update');
	Route::post('/delete-doctor', 'DoctorController@destroy');
	Route::get('/edit-doctor/{doctor}', 'DoctorController@edit');
	// ==================  Doctor Certificate ==========================
	Route::get('/certificate', 'CertificateController@index')->name('certificate');
	Route::get('/new-certificate', 'CertificateController@create');
	Route::post('/add-certificate', 'CertificateController@store');
	Route::post('/update-certificate/{certificate}', 'CertificateController@update');
	Route::post('/delete-certificate', 'CertificateController@destroy');
	Route::get('/edit-certificate/{certificate}', 'CertificateController@edit');
// ==================  About us Informations ==========================
	Route::get('/about', 'AboutController@index')->name('about');
	Route::get('/new-about', 'AboutController@create');
	Route::post('/add-about', 'AboutController@store');
	Route::post('/update-about/{about}', 'AboutController@update');
	Route::get('/edit-about/{about}', 'AboutController@edit');
	// ================== About Gallery ==========================
	Route::get('/about-gallery', 'AboutGalleryController@index')->name('about_gallery');
	Route::get('/new-about-gallery', 'AboutGalleryController@create');
	Route::post('/add-about-gallery', 'AboutGalleryController@store');
	Route::get('/delete-about-gallery/{gallery}', 'AboutGalleryController@destroy');
	Route::post('/update-about-gallery/{gallery}', 'AboutGalleryController@update');
	Route::get('/edit-about-gallery/{gallery}', 'AboutGalleryController@edit');
// ==================  info us ==========================
	Route::get('/info', 'InfoController@index')->name('info');
	Route::get('/new-info', 'InfoController@create');
	Route::post('/add-info', 'InfoController@store');
	Route::post('/update-info/{info}', 'InfoController@update');
	Route::get('/edit-info/{info}', 'InfoController@edit');
	// ==================  Social Media ==========================
	Route::get('/new-social-media', 'InfoController@createSocial');
	Route::post('/add-social-media', 'InfoController@storeSocial');
	Route::post('/delete-social-media', 'InfoController@destroy');
	Route::post('/update-social-media/{social}', 'InfoController@updateSocial');
	Route::get('/edit-social-media/{social}', 'InfoController@editSocial');
	// ==================  Gallery ==========================
	Route::get('/gallery', 'GalleryController@index')->name('gallery');
	Route::get('/new-gallery', 'GalleryController@create');
	Route::post('/add-gallery', 'GalleryController@store');
	Route::get('/delete-gallery/{gallery}', 'GalleryController@destroy');
	Route::post('/update-gallery/{gallery}', 'GalleryController@update');
	Route::get('/edit-gallery/{gallery}', 'GalleryController@edit');
	// ==================  Testimonials ==========================
	Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
	Route::get('/new-testimonial', 'TestimonialController@create');
	Route::post('/add-testimonial', 'TestimonialController@store');
	Route::post('/delete-testimonial', 'TestimonialController@destroy');
	Route::post('/update-testimonial/{testimonial}', 'TestimonialController@update');
	Route::get('/edit-testimonial/{testimonial}', 'TestimonialController@edit');
	// ==================  insurance ==========================
	Route::get('/insurance', 'InsuranceController@index')->name('insurance');
	Route::get('/new-insurance', 'InsuranceController@create');
	Route::post('/add-insurance', 'InsuranceController@store');
	Route::get('/delete-insurance/{insurance}', 'InsuranceController@destroy');
	Route::post('/update-insurance/{insurance}', 'InsuranceController@update');
	Route::get('/edit-insurance/{insurance}', 'InsuranceController@edit');
// =========================================================
  Route::get('/home', 'AdminController@index')->name('home');
//========================= Message Appointment =======================
	Route::get('/get-appointment', 'AppointmentController@index')->name('getAppointment');
	Route::post('/delete-appointment', 'AppointmentController@destroy');

	//======================= Message Contact ===========================

	Route::get('/get-contact', 'ContactController@index')->name('getContact');
	Route::post('/delete-contact', 'ContactController@destroy');
	// ==================  Tags ==========================
	Route::get('/tags', 'TagController@index')->name('tag');
	Route::get('/new-tag', 'TagController@create');
	Route::post('/add-tag', 'TagController@store');
	Route::post('/delete-tag', 'TagController@destroy');
	Route::post('/update-tag/{tag}', 'TagController@update');
	Route::get('/edit-tag/{tag}', 'TagController@edit');
	// ==================  Category ==========================
	Route::get('/category', 'CategoryController@index')->name('Category');
	Route::get('/new-Category', 'CategoryController@create');
	Route::post('/add-Category', 'CategoryController@store');
	Route::post('/delete-Category', 'CategoryController@destroy');
	Route::post('/update-Category/{category}', 'CategoryController@update');
	Route::get('/edit-Category/{category}', 'CategoryController@edit');
	// ==================  Category ==========================
	Route::get('/Post', 'PostController@index')->name('Post');
	Route::get('/new-post', 'PostController@create');
	Route::post('/add-post', 'PostController@store');
	Route::post('/delete-post', 'PostController@destroy');
	Route::post('/update-post/{post}', 'PostController@update');
	Route::get('/edit-post/{post}', 'PostController@edit');

  //
  // Route::post('/add-certificate', 'CertificateController@store');
  // Route::post('/add-gallery', 'GalleryController@store');
  // Route::post('/add-gallery-about', 'GalleryController@store');
  // Route::post('/add-info', 'InfoController@store');
  // Route::post('/add-social', 'InfoController@storeSocial');
  // Route::post('/add-testimonial', 'TestimonialController@store');

});
