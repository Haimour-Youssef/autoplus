<?php

namespace App\Http\Controllers\Admin;

use App\Models\Promotion;
use App\Http\Requests\PromotionStore;
use App\Http\Requests\PromotionUpdate;
use App\Models\Image;
use App\Traits\PromotionTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Image as Intervention;

class PromotionController extends Controller
{

    use PromotionTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view(
            'back.promotions.index', 
            [
                'promotions' => Promotion::orderBy('id','desc')->get(), 
            ]
        );
    }





    public function create()
    {
        //$this->authorize('create');
        return view('back.promotions.create');
    }

    

    public function store(PromotionStore $request)
    {

        $validatedData = $request->validated();
        $promotion = Promotion::create($validatedData);

       $this->saveImageTrait($request->picture,$promotion);

        return redirect()->route('promotions.index');

    }

    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('back.promotions.edit', ['promotion' => $promotion]);
    }

    public function update(PromotionUpdate $request, $id)
    {
        $promotion = Promotion::findOrFail($id);

        $validatedData = $request->validated();

        $promotion->fill($validatedData);
        $promotion->save();

         $this->saveImageTrait($request->picture,$promotion);


        return redirect()->route('promotions.index');
    }

    public function destroy(Request $request, $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();


        return redirect()->route('promotions.index');
    }

}
