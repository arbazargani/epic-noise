<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artist;
use App\Models\Media;
use App\Models\Album;

class PublicController extends Controller
{
    public function Boot()
    {
        $featured_media = Media::latest()->first();
        $medias = Media::latest()->get();
        return view('themes.' . env('THEME_NAME') . '.index', compact(['featured_media', 'medias']));
    }

    public function RenderAsset($type, $media)
    {
        return response()->file('storage/{$type}/{$media}');
    }
}
