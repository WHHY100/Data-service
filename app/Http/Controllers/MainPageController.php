<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MainPageController
{
    public function show()
    {
        $titleMain = $this->takeMainValue('titleMain');
        $contentMain = $this->takeMainValue('descMain');

        return view('mainpage', [
            'title'=>$titleMain->value,
            'content'=>$contentMain->value
        ]);
    }

    protected function takeMainValue($part){
        return DB::table('lvcontent')->where('slug', $part)->first();
    }

}
