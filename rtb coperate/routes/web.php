<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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

$lang_db = \App\LanguageModel::find(4);
Route::get('/set/lang/{lang}', 'HomeController@setLang');

Route::get('/', function () use ($lang_db) {
 $default = $lang_db->set;  // -----th

 $lang = Session('lang'); // -----en



 if ($lang) {
  $check = \App\LanguageModel::where('set', $lang)->first();
  if ($check->status == "on") {
   $default = $check->set;
  } else {
   $data = \App\LanguageModel::where(['status' => "on", 'default' => "on"])->first();
   $default = $data->set;
  }
  Session::put('lang', $default);
  return redirect("/$default");
 } else {
  Session::put('lang', $default);
  return redirect("/$default");
 }
});

Route::group(['middleware' => 'Language'], function () {
 $lang_db = \App\LanguageModel::where('status', "on")->get();
 foreach ($lang_db as $lang) {
  Route::prefix($lang->set)->group(function () {

Route::get('/','HomeController@index');
Route::get('/about','HomeController@about');
Route::get('/products01','HomeController@product');
Route::get('/products-detail','HomeController@product_detail');
Route::get('/solution','HomeController@solution');
Route::get('/solution-meetingroom','HomeController@solution_meeting');
Route::get('/solution-meetingroom-Video Conferencing','HomeController@solution_videoconference');
Route::get('/solution-meetingroom-Video Conferencing-Personcal Conference','HomeController@solution_personcal');
Route::get('/news','HomeController@news');
Route::get('/newsDetails','HomeController@newsdetail');
Route::get('/innovation','HomeController@innovation');
Route::get('/InnovationDetail','HomeController@innovationdetail');

Route::get('/contact','HomeController@contact');
});
}
});
Route::get('/backoffice','AdminController@index');

Route::get('/backoffice/banner','BannerController@index');
Route::get('/backoffice/banner/add','BannerController@add');
Route::post('/backoffice/banner/addsub','BannerController@addsub');
Route::get('/backoffice/banner/delete/{id}','BannerController@delete');

Route::get('/backoffice/iconban','IconbanController@index');
Route::get('/backoffice/iconban/add','IconbanController@add');
Route::post('/backoffice/iconban/addsub','IconbanController@addsub');
Route::get('/backoffice/iconban/delete/{id}','IconbanController@delete');

Route::get('/backoffice/catagory','CatagoryController@catagory');
Route::get('/backoffice/catagory/add','CatagoryController@catagoryadd');
Route::post('/backoffice/catagory/addsub','CatagoryController@catagoryaddsub');
Route::get('/backoffice/catagory/catagoryedit/{id}','CatagoryController@catagoryedit');
Route::post('/backoffice/catagory/catagoryeditsub','CatagoryController@catagoryeditsub');
Route::get('/backoffice/catagory/delete/{id}','CatagoryController@catagorydelete');

Route::get('/backoffice/subcatagory','CatagoryController@subcatagory');
Route::get('/backoffice/subcatagory/add','CatagoryController@subcatagoryadd');
Route::post('/backoffice/subcatagory/addsub','CatagoryController@subcatagoryaddsub');
Route::get('/backoffice/subcatagory/subcatagoryedit/{id}','CatagoryController@subcatagoryedit');
Route::post('/backoffice/subcatagory/subcatagoryeditsub','CatagoryController@subcatagoryeditsub');
Route::get('/backoffice/subcatagory/delete/{id}','CatagoryController@subcatagorydelete');

Route::get('/backoffice/product type','ProductController@protype');
Route::get('/backoffice/product type/add','ProductController@typeadd');
Route::post('/backoffice/product type/addsub','ProductController@typeaddsub');
Route::get('/backoffice/product type/typeedit/{id}','ProductController@typeedit');
Route::post('/backoffice/product type/typeeditsub','ProductController@typeeditsub');
Route::get('/backoffice/product type/delete/{id}','ProductController@typedelete');

Route::get('/backoffice/product','ProductController@pro');
Route::get('/backoffice/product/add','ProductController@add');
Route::post('/backoffice/product/addsub','ProductController@addsub');
Route::get('/backoffice/product/edit/{id}','ProductController@edit');
Route::post('/backoffice/product/editsub','ProductController@editsub');
Route::get('/backoffice/product/delete/{id}','ProductController@delete');

Route::get('/backoffice/product/color/{id}','ProductController@color');
Route::get('/backoffice/product/color/add/{id}','ProductController@addcolor');
Route::post('/backoffice/product/color/addsub','ProductController@addcolorsub');
Route::get('/backoffice/product/color/edit/{id}','ProductController@editcolor');
Route::post('/backoffice/product/color/editsub','ProductController@editcolorsub');
Route::get('/backoffice/product/color/delete/{id}','ProductController@deletecolor');

Route::get('/backoffice/product/color/album/{id}','ProductController@alcolor');
Route::get('/backoffice/product/color/album/add/{id}','ProductController@alcolor_add');
Route::post('/backoffice/product/color/album/addsub','ProductController@alcolor_addsub');
Route::get('/backoffice/product/color/album/delete/{id}','ProductController@deletealbum');

Route::get('/backoffice/news','NewsController@news');
Route::get('/backoffice/news/add','NewsController@add');
Route::post('/backoffice/news/addsub','NewsController@addsub');
Route::get('/backoffice/news/edit/{id}','NewsController@edit');
Route::post('/backoffice/news/editsub','NewsController@editsub');
Route::get('/backoffice/news/delete/{id}','NewsController@delete');

Route::get('/backoffice/innovation','InnovationController@index');
Route::get('/backoffice/innovation/add','InnovationController@add');
Route::post('/backoffice/innovation/addsub','InnovationController@addsub');
Route::get('/backoffice/innovation/edit/{id}','InnovationController@edit');
Route::post('/backoffice/innovation/editsub','InnovationController@editsub');
Route::get('/backoffice/innovation/delete/{id}','InnovationController@delete');

Route::get('/backoffice/solution','SolutionController@index');
Route::get('/backoffice/solution/add','SolutionController@add');
Route::post('/backoffice/solution/addsub','SolutionController@addsub');
Route::get('/backoffice/solution/edit/{id}','SolutionController@edit');
Route::post('/backoffice/solution/editsub','SolutionController@editsub');
Route::get('/backoffice/solution/delete/{id}','SolutionController@delete');


// Solution
// Type
Route::get('/backoffice/solutiontype','SolutiontypeController@solutiontype');
Route::get('/backoffice/solutiontype/add','SolutiontypeController@add');
Route::post('/backoffice/solutiontype/addsub','SolutiontypeController@addsub');
Route::get('/backoffice/solutiontype/edit/{id}','SolutiontypeController@edit');
Route::post('/backoffice/solutiontype/editsub','SolutiontypeController@editsub');
Route::get('/backoffice/solutiontype/delete/{id}','SolutiontypeController@delete');

