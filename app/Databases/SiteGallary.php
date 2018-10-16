<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiteGallary extends Model
{
    protected $table = "site_gallery_photos";

    public static function getAlbums($gallery_id){
        $ret = array();
        foreach (DB::table('site_gallery_meta')->where('gallery_id','=',$gallery_id)->get() as $album)
        {
            $ret = array_add($ret,count($ret),$album->album_id);
        }
        return $ret;
    }

    public static function getPhotos($albums)
    {
        $ret = array();
        foreach ($albums as $album)
        {
            foreach (DB::table('site_gallery_photos_meta')->where('album_id','=',$album)->get()  as $photo)
            {
                if(in_array($photo->photo_id,$ret) == false)
                {
                    $ret = array_add($ret,count($ret),$photo->photo_id);
                }
            }
        }

        return collect($ret)->sort()->reverse()->all();
    }

    public static function getAlbumInfo($album_id)
    {
       return DB::table('site_gallery_albums')->find($album_id);
    }

    public static function getGallery($gallery_id)
    {
        return DB::table('site_gallery')->find($gallery_id);
    }

    public static function getPhotoSlugs($photo_id)
    {
        $ret = "";
        foreach (DB::table('site_gallery_photos_meta')->where('photo_id','=',$photo_id)->get() as $photo)
        {
            $album = self::getAlbumInfo($photo->album_id);
            if($album != null)
            {
                $ret .= $album->slug . " ";
            }
        }

        return $ret;
    }
}
