<?php

namespace App\Traits;

use App\Models\Referencement;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Intervention;

trait ReferencementTrait
{
    public function saveImageTrait($picture, $seo)
    {
        if ($picture) {
            $originalImage = $picture;
            $path = time() . '.' . $originalImage->getClientOriginalExtension();
            $folder = 'referencement';

            // Define the original image name (if needed)
            $original = ''; // Set this to the desired value

            // Delete existing image if it exists
            if ($seo->image) {
                Storage::delete($seo->image->module . '/' . $original . $seo->image->path);
                $seo->image->path = $path;
                $seo->image->save();
            } else {
                // Create a new image record in the database
                $seo->image()->save(Image::make(['path' => $path, 'module' => $folder]));
            }

            // Resize and save the image
            Intervention::make($originalImage)
                ->resize(200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path("storage/{$folder}/{$original}{$path}"));
        }
    }

    // ... (rest of the code remains unchanged)
}
