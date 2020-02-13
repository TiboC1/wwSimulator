<?php
    
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Exports\ExportEvents;
use App\Imports\ImportEvents;
use Maatwebsite\Excel\Facades\Excel;
   
class ImportController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExport()
    {
       return view('import');
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ExportEvents, 'events.xlsx');
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ImportEvents, request()->file('file'));
            
        return back();
    }
}
