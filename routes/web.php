<?php

use App\Http\Controllers\Web\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuestionController::class, 'index'])->name('questions.index');

Route::resource('questions', QuestionController::class)->except(['index']);
