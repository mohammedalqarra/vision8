<?php

// use SiteControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\Site4Controller;


// Route::get('url' , 'Action');
// Route::post('url' , 'Action');
// Route::patch('url' , 'Action');
// Route::put('url' , 'Action');
// Route::delete('url' , 'Action');


// Route::view('/', 'Welcomme');


// Route::get('/', function () {
//     return 'HomePage';
// });


// Route::get('about', function () {
//     return 'AboutPage';
// });


// Route::post('about', function () {
//     return 'AboutPage';
// });


// Route::any('test', function () {
//     return 'Test';
// });


// Route::match(['post', 'delete', 'get'], 'newnew', function () {
//     return 'Welcome';
// });

// Route::get('/user/{name}/{age}', function ($name, $age) {
//     return 'Welcome ' . $name . ' is age ' . $age;
// })->whereAlpha('name')->whereNumber('age');


// or

// ->whereAlphaNumeric('name');


// Route::get('/news/{id?} ', function ($id = null) {
//     return 'Welcome ' . $id;
// });


// Route::get('/news/{name?} ', function ($name = null) {
//     return 'Welcome ' . $name;
// })->whereAlpha('name', ['a-zA-Z+']);

// Route::get('/greeting', function () {
//     return 'Hello World';
// });

// Route::get('/', function () {
//     $post = 10;
//     $comment = 20;
//     // $url = '/user/posts/' . $post . '/comments/' . $comment . '/show';
//     // or
//     $url = route('userinfo', [$post, $comment]);
//     return 'To show the commit of user post please go to this url ' . " <br>"  . $url;
// });


// Route::get('/user/posts/{postid}/myererererererercomments/{commentid}/show', function ($postid, $commentid) {
//     return "User post $postid Commit $commentid";
// })->name('userinfo');

// بدي اياه تيجي من ال controller
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/user/{id}', [SiteController::class, 'user'])->name('user');

//Route::get('/', 'SiteControllers@index')->name('home');

// Route::get('/About', [GetControllers::class, 'index'])->name('About');


// Route::prefix('admin')->controller('AdminController::class')->name('admin.')->group(function () {
//     Route::get('users', 'users')->name('users');
//     Route::get('about', 'about')->name('about');
//     Route::get('contact', 'contact')->name('contact');
// });


// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('users', [AdminController::class, 'users'])->name('users');
//     Route::get('about', [AdminController::class, 'about'])->name('about');
//     Route::get('contact', [AdminController::class, 'contact'])->name('contact');
// });


Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
});


Route::get('Site1', [Site1Controller::class, 'index'])->name('Site1');

Route::prefix('Site2')->name('Site2.')->group(function () {
    Route::get('/', [Site2Controller::class, 'index'])->name('index');

    Route::get('/about', [Site2Controller::class, 'about'])->name('about');

    Route::get('/contact', [Site2Controller::class, 'contact'])->name('contact');

    Route::get('/post', [Site2Controller::class, 'post'])->name('post');
});


Route::prefix('Site3')->name('Site3.')->group(function () {
    Route::get('/', [Site3Controller::class, 'index'])->name('index');
    // Route::get('/about', [Site3Controller::class, 'about'])->name('about');
    Route::get('/experience', [Site3Controller::class, 'experience'])->name('experience');
    Route::get('/education', [Site3Controller::class, 'education'])->name('education');
    Route::get('/skills', [Site3Controller::class, 'skills'])->name('skills');
    Route::get('/interests', [Site3Controller::class, 'interests'])->name('interests');
    Route::get('/awards', [Site3Controller::class, 'awards'])->name('awards');
});


Route::get('form1', [FormsController::class, 'form1'])->name('form1');
Route::post('form1', [FormsController::class, 'form1_data'])->name('form1_data');

Route::get('form2', [FormsController::class, 'form2'])->name('form2');
Route::post('form2', [FormsController::class, 'form2_data'])->name('form2_data');

Route::get('form3', [FormsController::class, 'form3'])->name('form3');
Route::post('form3', [FormsController::class, 'form3_data'])->name('form3_data');


Route::get('form4', [FormsController::class, 'form4'])->name('form4');
Route::post('form4', [FormsController::class, 'form4_data'])->name('form4_data');

Route::get('form5', [FormsController::class, 'form5'])->name('form5');
Route::post('form5', [FormsController::class, 'form5_data'])->name('form5_data');


Route::get('form6', [FormsController::class, 'form6'])->name('form6');
Route::post('form6', [FormsController::class, 'form6_data'])->name('form6_data');


Route::prefix('Site4')->name('Site4.')->group(function () {
    Route::get('/', [Site4Controller::class, 'index'])->name('index');
    Route::get('/portfolio', [Site4Controller::class, 'portfolio'])->name('portfolio');
    Route::get('/about', [Site4Controller::class, 'about'])->name('about');
    Route::get('/team', [Site4Controller::class, 'team'])->name('team');
    Route::get('/contact', [Site4Controller::class, 'contact'])->name('contact');
});

Route::post('Site4', [Site4Controller::class, 'Contact_data'])->name('Contact_data');


Route::get('send-mail', [MailController::class, 'send'])->name('send');



Route::get('contact_us', [MailController::class, 'contact_us']);
Route::post('contact_us', [MailController::class, 'contact_us_data'])->name('contact_us');


Route::get('Posts', [PostController::class, 'index'])->name('Posts.index');