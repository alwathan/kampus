@extends('admin')

@section('title', 'Data Pengguna')

@section('content-admin')


<div class="overflow-hidden mb-1 d-flex justify-content-between">
    <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Data</strong> Pengguna</h2>
    <div><a class='btn btn-outline btn-primary btn-sm' href='/admin/users/create'>Tambah baru</a></div>
</div>
                     @foreach($data as $dt)
                        <div class="py-1 d-flex justify-content-between">
								
                            <div>
                                <a href="#" class="mt-0 font-weight-bold">{{ $dt->email }}</a> / <span> {{ $dt->name }}</span>
                            </div>


                            <div>
                               
                                <form action="/admin/users/{{ $dt->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a class='btn btn-outline btn-info btn-xs' href='/admin/users/{{ $dt->id }}/edit'>Sunting</a> 
                                    <button type="submit" onclick="return confirm('Anda yakin mau menghapus data ini?')" class='btn btn-outline btn-danger btn-xs' >Hapus</button>
                                </form>
                            </div>
                            
                        </div>
                    @endforeach
							
@endsection