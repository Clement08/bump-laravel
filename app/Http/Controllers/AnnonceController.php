<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnnonceController extends Controller
{
    public function __construct(Annonce $annonce){
        $this->middleware('auth')->only(['edit']);
    }

    public function index(){
        $list = Annonce::paginate(5);
        return view('annonces.index', compact('list'));
    }

    public function create(){
        return view('annonces.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'annonce_name' => 'required',
//            'annonce_info' => 'required',
            'annonce_email' => 'required',
            'annonce_numberphone' => 'required',
            'annonce_prix' => 'required',
//            'annonce_image' => 'required',
            'annonce_type' => 'required',
            'annonce_pointure' => 'required',
        ]);

        $annonce = new Annonce();
        $input = $request->input();
//        $input['annonce_author'] = Auth::user()->id;

        $annonce -> fill($input)->save();

        return redirect()->route('annonce.index');

    }

    public function show($id){
        $annonce = Annonce::findOrFail($id);

        return view('annonce.show', compact ('annonce'));
    }

    public function edit($id){
        $annonce = Annonce::findOrFail($id);
        return view('annonce.edit', compact('annonce'));

    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'annonce_name' => 'required'
        ]);

        $annonce = Annonce::findOrFail($id);
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;

        $annonce -> fill($input)->save();

        return redirect()
            ->route('annonce.show', $id)
            ->with('success', 'Votre annonce a bien été éditée');
    }

    public function destroy($id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->delete();
        return redirect()
            ->route('annonce.index', $id)
            ->with('success', 'Votre annonce a bien été supprimée');
    }
}
