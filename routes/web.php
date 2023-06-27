<?php

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

Route::get('/welcom', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/documents', function () {
    return redirect('documents/1');
});
Route::get('/documents/{id}', function ($id) {
    if($id == 1){
        $title = "เอกสารการดำเนินการ";
    }
    else if($id == 2){
        $title = "แผนดำเนินงาน/งบประมาณประจำปี";
    }
    else if($id == 3){
        $title = "แผนการใช้จ่ายงบประมาณประจำปี";
    }
    else if($id == 4){
        $title = "รายงานผลการดำเนินงานประจำปี";
    }
    else if($id == 5){
        $title = "มาตรฐานการปฏิบัติงาน/บริการ";
    }
    else if($id == 6){
        $title = "ข้อมูลเชิงสถิติการให้บริการ";
    }
    else if($id == 7){
        $title = "รายงานผลการสำรวจความพึงพอใจ";
    }
    else if($id == 8){
        $title = "รายงานการประชุม";
    }
    return view('documents',['title'=>$title]);
});
Route::get('/eservice', function () {
    return view('e-services');
});
Route::get('/e-services.html', function () {
    return redirect('eservice');
});
Route::get('/', function () {
    return view('entry');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/events/{id}', function () {
    return view('event_detail');
});
Route::get('/info', function () {

    $request = view('info');

    return $request;
});
Route::get('/ita', function () {
    return view('ita');
});
Route::get('/laws', function () {
    return view('laws');
});
Route::get('/news', function () {

    return redirect('/news/1');
});
Route::get('/news/{id}', function ($id) {

    if($id == 6){
        $title = 'ศูนย์ข้อมูลข่าวสาร';
    }else if($id == 2){
        $title  = 'ข่าวจัดซื้อจัดจ้าง';

    }
    else if($id == 3){
        $title  = 'ข่าวรับสมัครงาน';
    }
    else if($id == 4){
        $title  = 'ข่าวในเครือ อปท. จังหวัดปัตตานี';
    }
    else if($id == 5){
        $title  = 'ข่าวที่หน้าสนใจในจังหวัด';
    }else{
        $title = 'ข่าวประชาสัมพันธ์';
    }

    return view('news',['title' => $title]);
});
Route::get('/news/{id}/{content}', function ($id,$content) {

    return view('news_detail',['id' => $id]);
});
Route::get('/policy', function () {
    return view('policy');
});
Route::get('/policy/{id}', function () {
    return view('policy_detail');
});
Route::get('/struct', function () {
    return view('struct');
});
Route::get('/travel', function () {
    return view('travel');
});
Route::get('/power', function () {
    return view('power');
});
Route::get('/manage', function () {
    return view('manage');
});
