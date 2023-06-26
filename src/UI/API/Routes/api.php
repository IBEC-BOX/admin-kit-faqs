<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Faqs\UI\API\Controllers\FaqController;

Route::get('/faqs', [FaqController::class, 'index']);
Route::get('/faqs/{id}', [FaqController::class, 'show']);
