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

function kategori_select_input($selected=''){
    $data = DB::table('menus')
                ->where('jenis','kategori')
                ->orderBy('nama','asc')->get();
    foreach($data as $d){
        echo '<option value="'.$d->slug.'" '.($d->slug == $selected ? 'selected':'').'>'.$d->nama.'</option>';
    }
}

function menu_select_input($parent_id='',$level=0,$active='') {
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


function get_home_posts(){
    $records = DB::table('posts')->where('type','berita')->limit(4)->orderBy('id','desc')->get();
    echo '<div class="col-lg-8">
            <h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">Berita</strong> Terbaru</h2>
            <div class="row">';
                    foreach($records as $post){
                        echo '<div class="col-lg-6 mb-2">
                            <article class="post post-large pb-3">
                                <div class="post-image">
                                    <a href="/'.$post->type.'/'.$post->slug.'">
                                        <img src="/rimg/400/200/'. $post->media .'" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-date">
                                    <span class="day">'.\Carbon\Carbon::parse($post->published_at)->format('d').'</span>
                                    <span class="month">'.\Carbon\Carbon::parse($post->published_at)->isoFormat('MMM').'</span>
                                </div>

                                <div class="post-content">

                                    <h4><a href="/'.$post->type.'/'.$post->slug.'" class="text-decoration-none">'. $post->title .'</a></h4>

                                </div>
                            </article>
                        </div>';
                    }

            echo '</div>
        </div>';
}

function get_posts($where,$limit=5){
    $posts = DB::table('posts')->limit($limit)->where('type',$where)->orderBy('id','desc');
    if($limit !='1'){
        $posts = $posts->get();
    }else{
        $posts = $posts->first();
    }
    return $posts??'';
}