<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PortfolioController::class,'home'])->name('home');
Route::get('/work-experiences', [PortfolioController::class, 'workExperiences'])->name('work-experiences');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/projects/{id}', [PortfolioController::class, 'projectDetail'])->name('project-detail');