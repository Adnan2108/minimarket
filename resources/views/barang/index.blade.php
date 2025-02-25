
{{-- extends (nama file), section(nama yield) --}}

@extends("master")
@section("isi")

<div class="container">
<div class="row mt-5">
<div class="col">

    @if (session()->has('message'))
    <div class="alert alert-success">
        <strong>Success!</strong> {{ Session()->get('message') }}
    </div>
    @endif

<a href="{{ route('barang.create') }}" class="btn btn-dark">Tambah</a>
<div class="mt-4">
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Supplier</th>
        <th>Merk</th>
        <th>Gambar</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ( $data as $value )

        <tr>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->supplier }}</td>
            <td>{{ $value->merk }}</td>
            <td><img src="{{  asset($value->image) }}" alt="gambar" width="100px"></td>
            <td>
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{  route('barang.destroy', $value->id) }}" method="POST">
                    <a href="{{ route('barang.edit', $value->id) }}" class="btn btn-primary" >EDIT</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">HAPUS</button>


                </form></td>
        </tr>


        @endforeach

    </tbody>
  </table>

  {{ $data->links() }}

</div>
</div>
</div>
</div>

@endsection
