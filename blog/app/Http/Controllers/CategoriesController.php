<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Categories;

class CategoriesController extends Controller
{
    public function categories(){
        $obj = new Categories();
        // $companies = $obj->all();
        $categories = $obj->paginate(15);
        return view('categories', ['categories' => $categories]);
    }
}
