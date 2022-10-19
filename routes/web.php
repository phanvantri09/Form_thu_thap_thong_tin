<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ObjectsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PartController;
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

Route::get('/bieu-mau/{id}',[AdminController::class,'Form'])->name('form');
Route::get('/cam-on',[AdminController::class,'end'])->name('end');
Route::POST('/bieu-mau-post',[AdminController::class,'postForm'])->name('postForm');
Route::get('/',[AdminController::class,'Home'])->name("trangchu");
//
Route::get('/dangnhap',[UserController::class,'Login'])->name('login');   
Route::get('/dangky',[UserController::class,'Register'])->name('register');
Route::POSt('/post-dangnhap',[UserController::class,'PostLogin'])->name('postLogin');
Route::POST('/post-dangky',[UserController::class,'PostRegister'])->name('postRegister');
Route::get('dang-xuat',[UserController::class, 'logout'])->name('logout');
Route::get('/quen-mk',[UserController::class,'changepass'])->name('changepass');
Route::POST('/quen-mk/lay-email',[UserController::class,'getemail'])->name('getemail');
Route::get('/quen-mk/mk-moi/{email}',[UserController::class,'newpass'])->name('newpass');
Route::POST('/quen-mk/mk-moi-post',[UserController::class,'postpasss'])->name('postpasss');
//
Route::get('/them-doi-tuong',[ObjectsController::class,'Add'])->name("addObjects");
Route::POST('/them-doi-tuong-post',[ObjectsController::class,'AddObjects'])->name("postaddObjects");
Route::get('/danh-sach-doi-tuong',[ObjectsController::class,'List'])->name("listObjects");
Route::get('/sua-doi-tuong/{id}',[ObjectsController::class,'Edit'])->name("updateObjects");
Route::PUT('/sua-doi-tuong-post/{id}',[ObjectsController::class,'EditObjects'])->name("postupdateObjects");
Route::DELETE('/xoa-doi-tuong/{id}',[ObjectsController::class,'Delete'])->name("deleteObjects");
//biểu mẫu
Route::get('/tong-quan-bieu-mau/{id}',[AdminController::class,'sumform'])->name("sumForm");
Route::get('/them-bieu-mau',[FormController::class,'AddF'])->name("addForm");
Route::POST('/them-bieu-mau-post',[FormController::class,'AddForm'])->name("postaddForm");
Route::get('/danh-sach-bieu-mau',[FormController::class,'ListF'])->name("listForm");
Route::get('/sua-bieu-mau/{id}',[FormController::class,'EditF'])->name("updateForm");
Route::PUT('/sua-bieu-mau-post/{id}',[FormController::class,'EditForm'])->name("postupdateForm");
Route::DELETE('/xoa-bieu-mau/{id}',[FormController::class,'DeleteF'])->name("deleteForm");
// câu hỏi
Route::get('/them-cau-hoi',[QuestionController::class,'Add'])->name("addQuestion");
Route::POST('/them-cau-hoi-post',[QuestionController::class,'AddQuestion'])->name("postaddQuestion");
Route::get('/danh-sach-cau-hoi',[QuestionController::class,'List'])->name("listQuestion");
Route::get('/sua-cau-hoi/{id}',[QuestionController::class,'Edit'])->name("updateQuestion");
Route::PUT('/sua-cau-hoi-post/{id}',[QuestionController::class,'EditQuestion'])->name("postupdateQuestion");
Route::DELETE('/xoa-cau-hoi/{id}',[QuestionController::class,'Delete'])->name("deleteQuestion");
//
Route::get('/them-nhom/{id_form}}',[PartController::class,'AddP'])->name("addPart");
Route::POST('/them-nhom-post',[PartController::class,'AddPart'])->name("postaddPart");
Route::get('/danh-sach-nhom/{id}',[PartController::class,'ListP'])->name("listPart");
Route::get('/sua-nhom',[PartController::class,'EditP'])->name("updatePart");
Route::PUT('/sua-nhom-post/{id}',[PartController::class,'EditPart'])->name("postupdatePart");
Route::DELETE('/xoa-nhom/{id}',[PartController::class,'DeleteP'])->name("deletePart");
//
