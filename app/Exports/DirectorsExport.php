<?php

namespace App\Exports;

use App\Director;
use Maatwebsite\Excel\Concerns\FromCollection;

class DirectorsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $directors = Director::all();
        foreach ($directors as $director){
            $director->countries;
        }
        //return response()->json($directors);
        return $directors;
    }
}
