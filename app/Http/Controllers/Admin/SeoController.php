<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Models\Referencement;
use App\Traits\ReferencementTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReferencementStore;
use App\Http\Requests\ReferencementUpdate;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class SeoController extends Controller
{
    use ReferencementTrait;


    //
    public function index()
    {
        return view(
            'back.referencements.index',
            [
                'seo' => Referencement::orderBy('id', 'desc')->paginate(15),
            ]
        );
    }

    public function create()
    {
        return view('back.referencements.create');
    }

    public function store(ReferencementStore $request)
    {

        $validatedData = $request->validated();
        ($request->indexation == "on") ? $validatedData['indexation'] = true : $validatedData['indexation'] = false;

        $seo = Referencement::create($validatedData);

        $this->saveImageTrait($request->picture, $seo);

        return redirect()->route('referencements.index');
    }

    public function edit($id)
    {
        $seo = Referencement::findOrFail($id);
        return view('back.referencements.edit', ['seo' => $seo]);
    }

    public function update(ReferencementUpdate $request, $id)
    {
        $seo = Referencement::findOrFail($id);

        $validatedData = $request->validated();
        ($request->indexation == "on") ? $validatedData['indexation'] = true : $validatedData['indexation'] = false;

        $seo->fill($validatedData);
        $seo->save();

        $this->saveImageTrait($request->picture, $seo);

        // $this->saveIconTrait($request->icon,$seo);

        return redirect()->route('referencements.index');
    }

    public function destroy(Request $request, $id)
    {
        $seo = Referencement::findOrFail($id);
        $seo->delete();

        return redirect()->route('referencements.index');
    }

    // *****************

    public static function generateSeo($url)
    {

        $metaList = [
            "url" => "url",
            "name" => "title",
            "content" => "description",
            "property" => "keywords",
            "rel" => "rel",
            "href" => "href",
        ];
        $file = "";
        $index = "";
        $title = true;
        $referencements = Referencement::where("url", "$url")->whereNull('deleted_at')->get(['id', 'url', 'name', 'content', 'property', 'rel', 'href', 'indexation']);

        foreach ($referencements as $data) {
            if ($data->image) {
                $path = $data->image->url('');
                $info = pathinfo($path);
                $extension = $info['extension'];
            }


            foreach ($data->getAttributes() as $key => $value) {
                if ($key == "id") {
                    continue;
                }
                if ($key == "url") {
                    continue;
                }
                if ($key == "name") {
                    if ($value == '') {
                        $title = false;
                        continue;
                    }else {
                        $file .= "<title>$value</title>";
                    }
                }
                if ($key == "indexation") {
                    if ($value == true) {
                        $index = "<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>";
                    }
                    continue;
                }
                if ($value != "") {
                    $file .= "<meta name = '" . $metaList["$key"] . "' content = '$value' >";
                }
            }
            if ($data->image) {
                $file .= "<meta property='og:image' content='https://autoplus.net.ma$path'>";
                $file .= "<meta property='og:image:type' content='$extension'>";
                $file .= "<meta property='og:image:width' content='200'>";
                $file .= "<meta property='og:image:height' content='null'>";
            }
        }

        if (!$referencements->isNotEmpty()) {
            $title = false;
        }
            echo $index . "" . $file;
        return $title;
    }
}
