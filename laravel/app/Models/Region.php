<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Region extends Model
{
    protected $table = 'region';
    //省
    public function sheng(){

        return json_decode(DB::table($this->table)->where('parent_id', 1)->get(), true);
    }
    //三级联动
    public function liandong($region_id){

        return json_decode(DB::table($this->table)->where('parent_id', $region_id)->get(), true);
    }
    //查
    public function select($param){

        //in方法
        $ids = explode(',',$param['ids']);

        return json_decode(DB::table($this->table)->whereIn('region_id',$ids)->pluck('region_name'), true);

    }

}
