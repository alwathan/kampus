<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

function cut($s, $limit=10) {
    return Str::words(html_entity_decode(strip_tags($s)), $limit);  
}

function get_menu($parent_id){
    $data = DB::table('menus')
                ->where('parent_id',$parent_id)
                ->orderBy('id','asc')->get();
    if(count($data)){
        return $data;
    }else{
        return false;
    }
}

function menu_select_input($parent_id,$level=0,$active) {
    $query = "SELECT * FROM menus  WHERE  parent_id=".$parent_id;
    $res = DB::select($query);
    if(empty($res)) return;
    
    foreach($res as $r)
    {   
        $level_str = str_repeat("- ", $level);
        if($r->id == $active){
            echo '<option value="'.$r->id.'" selected>'.$level_str.$r->nama.'</option>';
        }else{
            echo '<option value="'.$r->id.'">'.$level_str.$r->nama.'</option>';
        }
        menu_select_input($r->id,$level+1,$active);
    }
}

function menu_views_content($parent_id,$level=0,$active=0) {
    $query = "SELECT * FROM menus  WHERE  parent_id=".$parent_id." ORDER BY id ASC";
    $res = DB::select($query);
    if(empty($res)) return;
    foreach($res as $r)
    {   
        $level_str = str_repeat("-- ", $level);
        
        //echo '<div ="'.$r->id.'" selected>'.$level_str.$r->nama.'</option>';

        echo "<div class='py-1 d-flex justify-content-between'>
								
                <div>
                    <a href='/$r->slug' class='mt-0 font-weight-bold'>".$level_str.$r->nama."</a> / <span> $r->jenis</span>
                </div>

                <form action='/admin/menus/$r->id' method='POST'>
                    <input type='hidden' name='_method' value='DELETE' />
                    <input type='hidden' name='_token' value='".csrf_token()."' />
                    <a class='btn btn-outline btn-info btn-xs' href='/admin/menus/$r->id/edit'>Sunting</a> 
                    <button type='submit' onclick='return confirm(\"Anda yakin mau menghapus data ini?\")' class='btn btn-outline btn-danger btn-xs' >Hapus</button>
                </form>
                
            </div>";
                
        menu_views_content($r->id,$level+1,$active);
    }
}


