<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class address extends Model
{
   protected $table = 'address';

    //入库
    public function add($param){
        //先查一下 如果没有入库 如果有更新
        $res=DB::table($this->table)->where('receiverName',$param['receiverName'])->get(); //多个条件
        $arrInfo = json_decode($res, true);
        if(empty($arrInfo)){
            return DB::table($this->table)->insert($param);
        }else{
            return DB::table($this->table)->where('receiverName',$param['receiverName'])->update($param);

        }
    }
    //联表查询
    public function select(){
        $arr =  json_decode(DB::table($this->table)->get(), true);
        foreach($arr as $k =>$v){
            $ids = $v['receiverState'].','.$v['receiverCity'].','.$v['receiverDistrict'];
            $ids = explode(',',$ids);
            $a = json_decode(DB::table('region')->whereIn('region_id',$ids)->get(), true);

            $arr[$k]['state'] =$a[0]['region_name'];
            @$arr[$k]['city'] =$a[1]['region_name'];
            @$arr[$k]['district'] =$a[2]['region_name'];
        }
        return $arr;

    }
    //单条查询
    public function find($id){
        $arr =DB::table($this->table)->where('orderShippingId',$id)->first();
      
        $ids = $arr->receiverState.','.$arr->receiverCity.','.$arr->receiverDistrict;
        $ids = explode(',',$ids);
        $a = json_decode(DB::table('region')->whereIn('region_id',$ids)->get(), true);

        $arr->state =$a[0]['region_name'];
        $arr->city =$a[1]['region_name'];
        $arr->district =$a[2]['region_name'];
        return $arr;
    }
}
