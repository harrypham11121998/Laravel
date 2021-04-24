<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use App\Models\Trainers;

class SearchController extends Controller
{
    public function search(Request $request){
        $obj = new Trainers();
        $key = $request->input('data_search');
        if($key){
            $search_result = $obj->search($key);
            return view('search', ['search_result' => $search_result]);
        }
        return view('search', []);
    }
}
