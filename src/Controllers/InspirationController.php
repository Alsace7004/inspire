<?php

namespace Alsace7004\Inspire\Controllers;

use Alsace7004\Inspire\Inspire;

/* use Illuminate\Http\Request; */


class InspirationController{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();
        //return $quote;
        return view('inspire::index', compact('quote'));
    }
}

?>