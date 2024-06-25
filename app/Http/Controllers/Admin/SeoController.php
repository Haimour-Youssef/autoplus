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

        //$validatedData = $request->validated();
        $seo = Referencement::create($request->all());

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

        $seo->fill($request->all());
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

    public function generateSeo()
    {

        $referencements = Referencement::whereNull('deleted_at')->groupBy('page')->get("page");

        foreach ($referencements as $referencement) {

            foreach (Referencement::where("page", "$referencement->page")->get(['id','url', 'name', 'content', 'property', 'rel', 'href']) as $data) {
                if ($data->image) {
                $path= $data->image->url('');
                }
                $file = "
                <!DOCTYPE html>
                <html lang='en'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta ";
                foreach ($data->getAttributes() as $key => $value) {
                    if ($key == "id") {
                        continue;
                    }
                    if ($value != "") {
                        $file .= "$key='$value' ";
                    }
                }
                $file .= ">
                <title>$referencement->page</title>
                <meta http-equiv='refresh' content=\"7; url='$data->url'\" />";
                if ($data->image) {
                    $file .="<link rel='$data->rel' href='$path'>";
                }
                $file .= "</head>
                <body>
                    <p>You will be redirected to $data->url in <span id='countdown'></span>!</p>
                    <script>
                        // Set the initial time (in seconds)
                        let timeleft = 5;

                        // Create an interval that updates the countdown every second
                        const downloadTimer = setInterval(function() {
                            if (timeleft <= 0) {
                                clearInterval(downloadTimer);
                                document.getElementById('countdown').innerHTML = 'Finished';
                            } else {
                                document.getElementById('countdown').innerHTML = timeleft + ' seconds remaining';
                            }
                            timeleft -= 1;
                        }, 1000);
                        </script>
                </body>
                </html>
                ";
            }

            File::put("Pages/$referencement->page.html", $file);
            File::put("../Pages/$referencement->page.html", $file);
        }
        
        return redirect()->route('referencements.index');
    }
}
