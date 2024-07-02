<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Facades\UtilityFacades;
use App\Models\Faq;
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\App;

>>>>>>> Stashed changes
class Faqs_frontController extends Controller
{
    public function index()
    {
        $lang = UtilityFacades::getActiveLanguage();
<<<<<<< Updated upstream
        \App::setLocale($lang);
=======
        App::setLocale($lang);
>>>>>>> Stashed changes
        $faqs = Faq::orderBy('order')->get();
        return view('front/faqs.index', compact('lang', 'faqs'));
    }
}
