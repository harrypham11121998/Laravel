<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use App\Models\Companies;

class SearchCategory extends Controller
{
    public function search(Request $request){
        $obj = new Companies();
        $key = $request->input('category_id');
        if($key){
            $search_result = $obj->search($key);
            return view('searchCompanies', ['search_result' => $search_result]);
        }
        return view('searchCompanies', []);
    }
}
