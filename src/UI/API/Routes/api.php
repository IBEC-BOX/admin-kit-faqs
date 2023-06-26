<?php

use AdminKit\Faqs\UI\API\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/faqs', [FaqController::class, 'index']);
Route::get('/faqs/{id}', [FaqController::class, 'show']);
