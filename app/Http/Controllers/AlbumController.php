<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artist;
use App\Models\Media;
use App\Models\Album;

class AlbumController extends Controller
{
    public function Preset_AddAlbum()
    {
        $media = new Album();
        $media->name = 'Born to Die';
        $media->slug = 'born_to_die';
        $media->release_date = '2012';
        $media->album_info = json_encode([
            'songs_count' => 12,
        ]);
        $media->description = 'Born to Die is the second studio album and major label debut by American singer-songwriter Lana Del Rey. It was released on January 27, 2012, through Interscope Records and Polydor Records. The album was reissued on November 9, 2012, as an expanded version subtitled The Paradise Edition.';
        $media->artist_id = 2;
        $media->save();

        $media->hash = sha1($media->id);
        $media->save();

        $media = new Album();
        $media->name = 'Lust for Life';
        $media->slug = 'lust_for_life';
        $media->release_date = '2017';
        $media->album_info = json_encode([
            'songs_count' => 16,
        ]);
        $media->description = 'Lust for Life is the fifth studio album by American singer Lana Del Rey, released on July 21, 2017, through Polydor Records and Interscope Records.';
        $media->artist_id = 2;
        $media->save();

        $media->hash = sha1($media->id);
        $media->save();

        return 'album added.';
    }

    public function ShowAlbumById($id)
    {
        $album = Album::findOrFail($id);
        return $album;
    }
}
