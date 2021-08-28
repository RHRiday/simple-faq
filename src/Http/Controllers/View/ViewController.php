<?php

namespace Rifat\SimpleFaq\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Rifat\SimpleFaq\Models\Faq;

class ViewController extends Controller
{
    public function index()
    {
        // return view('faq::test');
        $faqs = Faq::where('publication_status',1)
            ->orderBy('priority','ASC')
            ->take(10)
            ->get();
            
        return view('faq::home.index', [
            'faqs' => $faqs
        ]);
    }
}
