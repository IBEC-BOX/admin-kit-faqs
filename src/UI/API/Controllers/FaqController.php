<?php

declare(strict_types=1);

namespace AdminKit\Faqs\UI\API\Controllers;

use AdminKit\Faqs\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        return Faq::all();
    }

    public function show(int $id)
    {
        return Faq::findOrFail($id);
    }
}
