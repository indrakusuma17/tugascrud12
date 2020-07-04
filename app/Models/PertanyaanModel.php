<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $items = DB::table('pertanyaans')->get();
        return $items;
    }

    public static function save($data)
    {
        $new_items = DB::table('pertanyaans')->insert($data);
        return $new_items;
    }
    public static function find_by_id($id)
    {
        $item = DB::table('pertanyaans')->where('id', $id)->first();
        return $item;
    }
    public static function delete($id_pertanyaan)
    {
        $pertanyaan = DB::table('pertanyaans')->where('id', $id_pertanyaan)->first();
        return 'deleted';
    }
    public static function update($id, $request)
    {
        // $update_item = DB::table('pertanyaans')->where('id', $data)->update($data);
        // return $update_item;
        $new_pertanyaan = DB::table('pertanyaans')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'pertanyaan' => $request['pertanyaan']
            ]);
        return $new_pertanyaan;
    }
    public static function destroy($id)
    {
        $delete_pertanyaan = DB::table('pertanyaans')->where('id', $id)->delete();
        return $delete_pertanyaan;
    }
}
?>