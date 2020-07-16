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




// Route::get('showform', 'guzzlepost@show')->name('show');
 Route::get('', 'Front\mainController@index')->name('index');
 Route::post('payment/a5a990c57d76979bf50bbf545f8a166ff6dde96ckeyas
 dgaiugdg736874wiueid7328472364gigshgdsyjgdfsjhgerywluegyrl
 u3t2764872rgwehfbw8t983475000okey7836428o7rgwygusygdwo7634
 sjhefgksuhdgfksjhdgfkjshgfjkdhsgfjksh834trwgefh', 'guzzlepost@index')->name('viano');


     Route::get('/news', 'Front\newsController@index')->name('news.index');
     Route::get('/news/{id}', 'Front\newsController@fullstory')->name('news.fullstory');
     route::get('/shuttle', 'Front\newsController@shuttle')->name('news.shuttle');

     Route::get('user/cart','Front\CartController@showcart')->name('user.cart');


     Route::get('/gallery', 'Front\GalleryController@index')->name('gallery.index');
     Route::get('/gallery/{id}', 'Front\GalleryController@fullstory')->name('gallery.fullstory');

route::group(['prefix'=>'tour'],function() {
    Route::get('', 'Front\DonationController@index')->name('donation.index');
    Route::post('pay', 'API\TbcController@process')->name('donation.process');
    Route::get('kaxeti', 'Front\DonationController@fullstory')->name('donation.kaxeti');
    Route::get('baxmaro', 'Front\DonationController@baxmaro')->name('donation.baxmaro');
    Route::get('svaneti', 'Front\DonationController@svaneti')->name('donation.svaneti');
    Route::get('racha', 'Front\DonationController@racha')->name('donation.racha');
    Route::get('vianotour', 'Front\DonationController@vianotour')->name('donation.vianotour');



});

route::group(['prefix'=>'transport'],function() {
Route::get('vianotbilisi', 'Front\DonationController@vianotbilisi')->name('donation.vianotbilisi');
Route::get('sclass', 'Front\DonationController@sclass')->name('donation.sclass');
Route::get('eclass', 'Front\DonationController@eclass')->name('donation.eclass');
Route::get('camry', 'Front\DonationController@camry')->name('donation.camry');
Route::get('lx450', 'Front\DonationController@lx450')->name('donation.lx450');
Route::get('landCruiser', 'Front\DonationController@landcruiser')->name('donation.landCruiser');
Route::get('sprinter11', 'Front\DonationController@sprinter11')->name('donation.sprinter11');
Route::get('sprinter16', 'Front\DonationController@sprinter16')->name('donation.sprinter16');
Route::get('maybach', 'Front\DonationController@maybach')->name('donation.maybach');

});

route::group(['prefix'=>'event'],function() {

   Route::get('lopota', 'Front\DonationController@lopota')->name('donation.lopota');

});
     Route::get('/about', 'Front\AboutController@index')->name('about.index');

     Route::get('/videos', 'Front\VideoController@index')->name('video.index');

     Route::get('/scholarships', 'Front\ScholarshipController@index')->name('scholarship.index');

     Route::get('/contributors', 'Front\ContributorsController@index')->name('contributors.index');



 route::group(['prefix'=>'user'],function() {
     Route::get('login', 'UserloginController@showLoginForm');
    // Route::get('login/test', 'UserloginController@testLogin');
     Route::post('login', 'UserloginController@login')->name('user.login');
     Route::post('logout', 'UserloginController@userlogout')->name('user.logout');
     Route::get('register', 'UserregisterController@showregisterForm');
     Route::post('register', 'UserregisterController@create')->name('user.register');
     Route::get('home','Front\mainController@index')->name('user.home');;


 });


route::group(['prefix'=>'admin'],function() {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('dashboard','Admin\DashboardController@index')->name('dashboard');

});




Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){


    Route::group(['prefix'=>'videos','namespace'=>'Admin'],function(){
        Route::get('','VideoController@index')->name('admin.videos.index');
        Route::get('{id}/edit','VideoController@edit')->name('admin.videos.edit');
        Route::get('create','VideoController@create')->name('admin.videos.create');
        Route::post('store','VideoController@store')->name('admin.videos.store');
        Route::post('{id}/update','VideoController@update')->name('admin.videos.update');
        Route::delete('{id}/delete','VideoController@delete')->name('admin.videos.delete');
    });


    Route::group(['prefix'=>'gallery','namespace'=>'Admin'],function(){
        Route::get('','GalleryController@index')->name('admin.gallery.index');
        Route::get('create','GalleryController@create')->name('admin.gallery.create');
        Route::get('{id}/edit','GalleryController@edit')->name('admin.gallery.edit');
        Route::post('create','GalleryController@store')->name('admin.gallery.store');
        Route::post('{id}/update','GalleryController@update')->name('admin.gallery.update');
        Route::delete('{id}/deleteImage','GalleryController@deleteImage')->name('admin.gallery.deleteImage');
        Route::delete('{id}/delete','GalleryController@delete')->name('admin.gallery.delete');
    });


    Route::group(['prefix' => 'news', 'namespace' => 'Admin'], function(){
        Route::get('', 'NewsController@index')->name('admin.news.index');
        Route::get('create', 'NewsController@create')->name('admin.news.create');
        Route::post('store', 'NewsController@store')->name('admin.news.store');
        Route::get('edit/{id}', 'NewsController@edit')->name('admin.news.edit');
        Route::post('update/{id}', 'NewsController@update')->name('admin.news.update');
        Route::get('delete/{id}', 'NewsController@destroy')->name('admin.news.delete');
        Route::post('','NewsController@setNewsStatus')->name('admin.news.setStatus');
    });

    Route::group(['prefix'=>'Main','namespace'=>'Admin'],function(){
        Route::get('','MainpageController@index')->name('admin.mainpage.index');
        Route::post('','MainpageController@image')->name('admin.mainpage.image');
    });


    Route::group(['prefix'=>'About','namespace'=>'Admin'],function(){
        Route::get('','AboutController@index')->name('admin.about.index');
        Route::get('create','AboutController@create')->name('admin.about.create');
        Route::post('create','AboutController@store')->name('admin.about.store');
        Route::delete('{id}/image','AboutController@deleteText')->name('admin.about.deleteText');
        Route::delete('{id}/text','AboutController@deleteImage')->name('admin.about.deleteImage');
        Route::get('{id}/edit','AboutController@editText')->name('admin.about.editText');
        Route::post('{id}/update','AboutController@updateText')->name('admin.about.updateText');
        Route::get('{id}/addimage','AboutController@addImagePage')->name('admin.about.addImagePage');
        Route::post('{id}/addimage','AboutController@addImage')->name('admin.about.addImage');
    });


    Route::group(['prefix'=>'Contributors','namespace'=>'Admin'],function(){
        Route::get('','ContributorsController@index')->name('admin.contributors.index');
        Route::get('Create','ContributorsController@create')->name('admin.contributors.create');
        Route::post('Create','ContributorsController@store')->name('admin.contributors.store');
        Route::delete('{id}','ContributorsController@delete')->name('admin.contributors.delete');
        Route::get('{id}/Edit','ContributorsController@edit')->name('admin.contributors.edit');
        Route::post('{id}/Update','ContributorsController@update')->name('admin.contributors.update');
    });

    Route::group(['prefix'=>'Scholarships','namespace'=>'Admin'],function(){
        Route::get('','ScholarshipController@index')->name('admin.scholarship.index');
        Route::post('/Update','ScholarshipController@update');
    });

    Route::group(['prefix'=>'Students','namespace'=>'Admin'],function(){
        Route::get('','StudentsController@index')->name('admin.students.index');
        Route::get('{id}/edit','StudentsController@edit')->name('admin.students.edit');
        Route::post('{id}/edit','StudentsController@update')->name('admin.students.update');
        Route::get('create','StudentsController@create')->name('admin.students.create');
        Route::post('create','StudentsController@store')->name('admin.students.store');
        Route::delete('{id}/delete','StudentsController@delete')->name('admin.students.delete');
    });

    Route::group(['prefix'  => 'cards', 'namespace'    => 'Admin'], function(){
        Route::get('', 'CardController@index')->name('admin.cards.index');
    });

    Route::group(['prefix'  => 'orders', 'namespace'    => 'Admin'], function(){
       Route::get('', 'OrderController@index')->name('admin.orders.index');
    });

});
