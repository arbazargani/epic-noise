<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artist;
use App\Models\Media;
use App\Models\Album;

class MediaController extends Controller
{
    public function Preset_AddSingleMedia()
    {
        $media = new Media();
        $media->name = 'Shape Of My Heart';
        $media->url = 'sting_hape_of_my_heart.mp3';
        $media->cover = 'sting_shape_of_my_heart.png';
        $media->metadata = json_encode([
            'time' => '3:20',
            'mime' => 'mp3',
            'quality' => '320'
        ]);
        $media->type = 'single';
        $media->genres = 'Rock, Pop rock, Pop';
        $media->release_date = '1993';
        $media->artist_id = 1;
        $media->save();

        return 'single added.';
    }
    
    public function Preset_AddAlbumSong() {
        $media = new Media();
        $media->name = 'Born to Die';
        $media->url = 'lana_del_ray_born_to_die.mp3';
        $media->cover = 'data:image/jpeg;base64,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';
        $media->metadata = json_encode([
            'time' => '4:50',
            'mime' => 'mp3',
            'quality' => '320',
            'lyrics' => "
                Why, who me, why?
                Feet don't fail me now
                Take me to your finish line
                Oh my heart it breaks every step that I take
            ",
            'songwriters' => 'Richard Nowels / Elizabeth Grant'
        ]);
        $media->type = 'album';
        $media->genres = 'IPop music, Rock, Indie rock, Hip hop music';
        $media->release_date = 2012;
        $media->artist_id = 2;
        $media->album_id = 1;
        $media->save();

        $media = new Media();
        $media->name = 'Dark Paradise';
        $media->url = 'lana_del_ray_dark_paradise.mp3';
        $media->cover = 'https://i1.sndcdn.com/artworks-000351647856-ts7vqh-t500x500.jpg';
        $media->metadata = json_encode([
            'time' => '4:50',
            'mime' => 'mp3',
            'quality' => '320',
            'lyrics' => "
                All my friends tell me I should move on
                I'm lying in the ocean, singing your song
                Ahh
            ",
            'songwriters' => 'Richard Nowels / Elizabeth Grant'
        ]);
        $media->type = 'album';
        $media->genres = 'Indie pop, Pop';
        $media->release_date = 2012;
        $media->artist_id = 2;
        $media->album_id = 1;
        $media->save();

        $media = new Media();
        $media->name = 'National Anthem';
        $media->url = 'lana_del_ray_national_anthem.mp3';
        $media->cover = 'https://i1.sndcdn.com/artworks-000260234600-727l9t-t500x500.jpg';
        $media->metadata = json_encode([
            'time' => '4:50',
            'mime' => 'mp3',
            'quality' => '320',
            'lyrics' => "
                Swinging in the backyard
                Pull up in your fast car
                Whistling my name
            ",
            'songwriters' => 'Richard Nowels / Elizabeth Grant'
        ]);
        $media->type = 'album';
        $media->genres = 'Alternative/Indie, Pop';
        $media->release_date = 2012;
        $media->artist_id = 2;
        $media->album_id = 1;
        $media->save();

        $media = new Media();
        $media->name = 'Born to Die';
        $media->url = 'lana_del_ray_born_to_die.mp3';
        $media->cover = 'data:image/jpeg;base64,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';
        $media->metadata = json_encode([
            'time' => '4:50',
            'mime' => 'mp3',
            'quality' => '320',
            'lyrics' => "
                Money is the anthem, of success, so before we go out
                What's your address?
                I'm your National Anthem
            ",
            'songwriters' => 'Richard Nowels / Elizabeth Grant'
        ]);
        $media->type = 'album';
        $media->genres = 'Alternative/Indie, Pop';
        $media->release_date = 2012;
        $media->artist_id = 2;
        $media->album_id = 1;
        $media->save();

        return 'item added to album.';
    }

    public function StreamSingle($id)
    {
        $media = Media::FindOrFail($id);
        return view('public.player', compact(['media']));
    }
}
