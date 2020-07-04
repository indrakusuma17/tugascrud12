<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel
{
    public static function save($data)
    {
        $new_item = DB::table('jawabans')->insert($data);
        return $new_item;
    }

    public static function find_by_pertanyaan_id($id_pertanyaan)
    {
        $items = DB::table('jawabans')->where('pertanyaan_id', $id_pertanyaan)->get();
        return $items;
    }


    // public function jawaban()
    // {
    //     return $this->hasMany(JawabanModel::class);
    // }

}
?>