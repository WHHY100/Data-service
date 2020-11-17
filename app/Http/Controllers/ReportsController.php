<?php


namespace App\Http\Controllers;


class ReportsController
{
    const EXT_FILE = '.html';
    const PATH_FILE = '../reports/';

    public function show($slug){

        return view('reports', [
            'arrayFiles' => $this->takeArray($slug),
            'title' => $slug
        ]);
    }

    protected function takeArray($slug)
    {
        $slug = filter_var($slug, FILTER_SANITIZE_STRING);
        $slug = strip_tags($slug);

        $path = substr( self::PATH_FILE . $slug, 3, strlen(self::PATH_FILE . $slug));

        if(!file_exists($path)){
            abort(404);
        }

        $entries = scandir($path);

        $arrayFile = [];

        for($i=0;$i<count($entries);$i++){

            if(substr($entries[$i], strpos($entries[$i], '.'), strlen($entries[$i]) - strpos($entries[$i],
                        '.')) === self::EXT_FILE)
            {
                $arrayFile[$i]['path'] = self::PATH_FILE . $slug . '/' . $entries[$i];
                $arrayFile[$i]['name'] = substr($entries[$i], - 13, 8);
            }
        }

        return $arrayFile;
    }
}
