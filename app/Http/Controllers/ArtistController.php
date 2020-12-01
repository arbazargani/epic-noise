<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artist;
use App\Models\Media;
use App\Models\Album;

class ArtistController extends Controller
{
    public function Preset_AddArtist()
    {
        $artist = new Artist();
        $artist->name = 'Sting';
        $artist->slug = 'sting';
        $artist->nationality = 'United Kingdom';
        $artist->artist_info = json_encode([
            'born' => 'October 2, 1951',
            'cover' => 'https://www.gannett-cdn.com/presto/2019/07/31/PNDN/92a20f86-68c5-443b-b651-d0012813ca1f-SAS1Brd_07-11-2019_StandardTimes_1_B007__2019_07_10_IMG_Sting_3_1_IEOU2N7C_L1394214929_IMG_Sting_3_1_IEOU2N7C.jpg?crop=3999,2250,x0,y159&width=3200&height=1801&format=pjpg&auto=webp',
            'avatar' => 'https://i1.sndcdn.com/avatars-000380305682-swrgkm-t500x500.jpg',
            'url' => 'https://www.sting.com/',
            'spotify_url' => 'https://open.spotify.com/artist/0Ty63ceoRnnJKVEYP0VQpk',
            'youtube_url' => 'https://www.youtube.com/playlist?playnext=1&list=PLs_foHKW3RNk0SA7eEcaU4C62Ky4UaESY&feature=gws_kp_artist',
            'youtube_music_url' => 'https://music.youtube.com/channel/UCHhKCdsmx9t-PSqlSfa-VKA?feature=gws_kp_artist&feature=gws_kp_artist',
            'deezer_url' => 'https://www.deezer.com/artist/368/radio?autoplay=true',
        ]);
        $artist->description = 'Gordon Matthew Thomas Sumner CBE, known as Sting, is an English musician, singer, songwriter, and actor. He was the principal songwriter, lead singer, and bassist for new wave rock band the Police from 1977 to 1984, and launched a solo career in 1985.';
        $artist->save();

        $artist = new Artist();
        $artist->name = 'Lana Del Rey';
        $artist->slug = 'lana_del_rey';
        $artist->nationality = 'United States';
        $artist->artist_info = json_encode([
            'born' => 'June 21, 1985',
            'cover' => 'https://hdmusic.cc/uploads/posts/2019-08/1567014919_lana-del-rey.jpg',
            'avatar' => 'https://nypost.com/wp-content/uploads/sites/2/2014/06/lanadelrey.jpg?quality=80&strip=all',
            'url' => 'https://lanadelrey.com/',
            'spotify_url' => 'https://open.spotify.com/artist/00FQb4jTyendYWaN8pK0wa',
            'youtube_url' => 'https://www.youtube.com/playlist?playnext=1&list=PLt3WBh3heAPt_0ZYvglBahw824MIMlNJX&feature=gws_kp_artist',
            'youtube_music_url' => 'https://music.youtube.com/channel/UCyqq-aiu3vEHuf5NhwmOJcw?feature=gws_kp_artist&feature=gws_kp_artist',
            'deezer_url' => 'https://www.deezer.com/artist/1424821/radio?autoplay=true',
        ]);
        $artist->description = 'Elizabeth Woolridge Grant, known by her stage name Lana Del Rey, is an American singer-songwriter. Her music is noted for its stylized, cinematic quality; themes of sadness, tragic romance, glamor, and melancholia; and references to pop culture, particularly 1950s and 1960s Americana.';
        $artist->save();

        return 'artists added.';
    }

    public function ShowArtist($identifier) {
        $artist = Artist::where('id', $identifier)->orWhere('slug', $identifier)->first();
        return ($artist) ? $artist : abort(404);
    }

    public function ShowArtistById($id) {
        $artist = Artist::findOrFail($id);
        return redirect(route('Artist > Show Artist', $artist->slug));
    }

    public function ShowArtistBySlug($slug) {
        $artist = Artist::Where('slug', $slug)->first();
        // the last album should be the featured one. $artist_albums[0]
        $artist_albums = $artist->album()->orderBy('release_date', 'desc')->get();
        return ($artist) ? $artist_albums : abort(404);
    }
}
