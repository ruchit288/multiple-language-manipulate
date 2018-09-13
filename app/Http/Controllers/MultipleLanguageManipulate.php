<?php

namespace App\Http\Controllers;

use App\IndustrySector;

class MultipleLanguageManipulate extends Controller
{
    /**
     * @param string $lang
     * @return \Exception|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function multipleLanguageManipulate(string $lang = 'en')
    {
        try {
            $industrySectors = IndustrySector::getAllByPluck($lang);
            return view('demo',compact('industrySectors',$industrySectors));
        } catch(\Exception $ex) {
            return $ex;
        }

    }
}
