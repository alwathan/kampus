@extends('admin')

@section('title', 'Data Menu')

@section('content-admin')


<div class="overflow-hidden mb-1 d-flex justify-content-between">
    <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Menu</strong> Navigasi</h2>
    <div><a class='btn btn-outline btn-primary btn-sm' href='/admin/menus/create'>Tambah baru</a></div>
</div>
                     {{ menu_views_content(0) }}
							
@endsection