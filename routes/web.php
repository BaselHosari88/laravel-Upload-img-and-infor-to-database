<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;



route::get('/admin/projects/create', [App\Http\Controllers\AdminProjectsController::class, 'create'])->name('admin.projects.create');
route::post('/admin/projects/store', [App\Http\Controllers\AdminProjectsController::class, 'store'])->name('admin.projects.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
