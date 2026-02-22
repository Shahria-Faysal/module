<?php
namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        return view('blog::category');
    }

    public function create()
    {
        return view('blog::create');
    }

    public function store(Request $request)
    {
        // store logic
    }

    public function show($id)
    {
        return view('blog::show');
    }

    public function edit($id)
    {
        return view('blog::edit');
    }

    public function update(Request $request, $id)
    {
        // update logic
    }

    public function destroy($id)
    {
        // delete logic
    }
}
