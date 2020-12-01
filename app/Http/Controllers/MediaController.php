<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function Preset_AddSingleMedia()
    {
        $media = new Media();
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
        $media->url = 'lana_del_ray_summertime_sadness.mp3';
        $media->cover = 'lana_del_ray_summertime_sadness.png';
        $media->metadata = json_encode([
            'time' => '4:50',
            'mime' => 'mp3',
            'quality' => '320',
            'lyrics' => "
                Kiss me hard before you go
                Summertime sadness
                I just wanted you to know
                That baby, you the best
                I got my red dress on tonight
                Dancin' in the dark, in the pale moonlight
                Done my hair up real big, beauty queen style
                High heels off, I'm feelin' alive
                Oh, my God, I feel it in the air
                Telephone wires above are sizzlin' like a snare
                Honey, I'm on fire, I feel it everywhere
                Nothin' scares me anymore
                (One, two, three, four)
                Kiss me hard before you go
                Summertime sadness
                I just wanted you to know
                That baby, you the best
                I got that summertime, summertime sadness
                Su-su-summertime, summertime sadness
                Got that summertime, summertime sadness
                Oh, oh-oh, oh-oh
                I'm feelin' electric tonight
                Cruisin' down the coast, goin' about 99
                Got my bad baby by my heavenly side
                I know if I go, I'll die happy tonight
                Oh, my God, I feel it in the air
                Telephone wires above are sizzlin' like a snare
                Honey, I'm on fire, I feel it everywhere
                Nothin' scares me anymore
                (One, two, three, four)
                Kiss me hard before you go
                Summertime sadness
                I just wanted you to know
                That baby, you the best
                I got that summertime, summertime sadness
                Su-su-summertime, summertime sadness
                Got that summertime, summertime sadness
                Oh, oh-oh, oh-oh
                Think I'll miss you forever
                Like the stars miss the sun in the morning sky
                Later's better than never
                Even if you're gone, I'm gonna drive (drive), drive
                I got that summertime, summertime sadness
                Su-su-summertime, summertime sadness
                Got that summertime, summertime sadness
                Oh, oh-oh, oh-oh
                Kiss me hard before you go
                Summertime sadness
                I just wanted you to know
                That baby, you the best
                I got that summertime, summertime sadness
                Su-su-summertime, summertime sadness
                Got that summertime, summertime sadness
                Oh, oh-oh, oh-oh",
                'songwriters' => 'Richard Nowels / Elizabeth Grant'
        ]);
        $media->type = 'album';
        $media->genres = 'Indie pop, Pop';
        $media->release_date = 2012;
        $media->artist_id = 2;
        $media->album_id = 1;
        $media->save();

        return 'item added to album.';
    }
}
