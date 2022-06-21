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
Route::get('/InnovationDetail/{id}','HomeController@innovationDetail');

Route::get('/solutionStep2/{id}','HomeController@solutionStep2');
Route::get('/solutionStep3/{id}','HomeController@solutionStep3');
Route::get('/solutionStep4/{id}','HomeController@solutionStep4');

Route::get('/applyForm_step1','HomeController@applyForm_step1');
Route::get('/applyForm_step2','HomeController@applyForm_step2');
Route::get('/applyForm_step3','HomeController@applyForm_step3');
Route::get('/applyForm_step4','HomeController@applyForm_step4');
Route::get('/applyForm_step5','HomeController@applyForm_step5');
Route::get('/applyForm_step6','HomeController@applyForm_step6');

Route::get('/contact','HomeController@contact');

Route::get('/product/{id}','HomeController@product');

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
// 2
Route::get('/backoffice/solution2','Solution2Controller@solution2');
Route::get('/backoffice/solution2/add','Solution2Controller@add');
Route::post('/backoffice/solution2/addsub','Solution2Controller@addsub');
Route::get('/backoffice/solution2/edit/{id}','Solution2Controller@edit');
Route::post('/backoffice/solution2/editsub','Solution2Controller@editsub');
Route::get('/backoffice/solution2/delete/{id}','Solution2Controller@delete');
// 3
Route::get('/backoffice/solution3','Solution3Controller@solution3');
Route::get('/backoffice/solution3/add','Solution3Controller@add');
Route::post('/backoffice/solution3/addsub','Solution3Controller@addsub');
Route::get('/backoffice/solution3/edit/{id}','Solution3Controller@edit');
Route::post('/backoffice/solution3/editsub','Solution3Controller@editsub');
Route::get('/backoffice/solution3/delete/{id}','Solution3Controller@delete');
// 4
Route::get('/backoffice/solution4','Solution4Controller@solution4');
Route::get('/backoffice/solution4/add','Solution4Controller@add');
Route::post('/backoffice/solution4/addsub','Solution4Controller@addsub');
Route::get('/backoffice/solution4/edit/{id}','Solution4Controller@edit');
Route::post('/backoffice/solution4/editsub','Solution4Controller@editsub');
Route::get('/backoffice/solution4/delete/{id}','Solution4Controller@delete');
// 5
Route::get('/backoffice/solution5','Solution5Controller@solution5');
Route::get('/backoffice/solution5/add','Solution5Controller@add');
Route::post('/backoffice/solution5/addsub','Solution5Controller@addsub');
Route::get('/backoffice/solution5/edit/{id}','Solution5Controller@edit');
Route::post('/backoffice/solution5/editsub','Solution5Controller@editsub');
Route::get('/backoffice/solution5/delete/{id}','Solution5Controller@delete');





// About
// Partner
Route::get('/backoffice/partner','PartnerController@partner');
Route::get('/backoffice/partner/add','PartnerController@add');
Route::post('/backoffice/partner/addsub','PartnerController@addsub');
Route::get('/backoffice/partner/edit/{id}','PartnerController@edit');
Route::post('/backoffice/partner/editsub','PartnerController@editsub');
Route::get('/backoffice/partner/delete/{id}','PartnerController@delete');
// vision
Route::get('/backoffice/vision','VisionController@vision');
Route::get('/backoffice/vision/add','VisionController@add');
Route::post('/backoffice/vision/addsub','VisionController@addsub');
Route::get('/backoffice/vision/edit/{id}','VisionController@edit');
Route::post('/backoffice/vision/editsub','VisionController@editsub');
Route::get('/backoffice/vision/delete/{id}','VisionController@delete');
// meet_head
Route::get('/backoffice/meet_head','MeetheadController@meet_head');
Route::get('/backoffice/meet_head/add','MeetheadController@add');
Route::post('/backoffice/meet_head/addsub','MeetheadController@addsub');
Route::get('/backoffice/meet_head/edit/{id}','MeetheadController@edit');
Route::post('/backoffice/meet_head/editsub','MeetheadController@editsub');
Route::get('/backoffice/meet_head/delete/{id}','MeetheadController@delete');
// meet_body
Route::get('/backoffice/meet_body','MeetbodyController@meet_body');
Route::get('/backoffice/meet_body/add','MeetbodyController@add');
Route::post('/backoffice/meet_body/addsub','MeetbodyController@addsub');
Route::get('/backoffice/meet_body/edit/{id}','MeetbodyController@edit');
Route::post('/backoffice/meet_body/editsub','MeetbodyController@editsub');
Route::get('/backoffice/meet_body/delete/{id}','MeetbodyController@delete');

Route::get('/backoffice/work','WorkController@work');
Route::get('/backoffice/work/add','WorkController@add');
Route::post('/backoffice/work/addsub','WorkController@addsub');
Route::get('/backoffice/work/edit/{id}','WorkController@edit');
Route::post('/backoffice/work/editsub','WorkController@editsub');
Route::get('/backoffice/work/delete/{id}','WorkController@delete');
