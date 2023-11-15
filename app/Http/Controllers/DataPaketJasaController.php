<?php

namespace App\Http\Controllers;

//import Model "Post

use App\Models\PaketJasa;
use App\Models\User;
//return type View
use Illuminate\View\View;


class DataPaketJasaController extends Controller
{    
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $paketjasas = PaketJasa::latest()->paginate(5);
        $users = User::all();

        //render view with posts
        return view('paketjasa.index', compact('paketjasas','users'));
    }

    public function show(string $id): View
    {
        //get post by ID
        $paketjasa = PaketJasa::findOrFail($id);

        //render view with post
        return view('datapaketjasa.show', compact('paketjasa'));
    }
}