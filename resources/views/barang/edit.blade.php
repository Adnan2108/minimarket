@extends("master")
@section("isi")

<div class="container col-md-5 mt-5">




<form action="{{  route("barang.update",$ad->id) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('PUT')


    <div class="mb-3 mt-3">
      <label for="nama">Nama:</label>
      <input type="nama" class="form-control" id="nama" placeholder="Isi Nama" name="nama" value="{{ $ad->nama }}" required>
    </div>
    <div class="mb-3">
      <label for="supplier">Supplier:</label>
      <input type="supplier" class="form-control" id="supplier" placeholder="supplier" name="supplier" value="{{ $ad->supplier }}"  required>
    </div>
    <div class="mb-3">
        <label for="merk">merk:</label>
        <input type="merk" class="form-control" id="merk" placeholder="merk" name="merk" value="{{ $ad->merk }}"  required>
      </div>
      <div class="mb-3">
        <label for="image">Image:</label>
        <input type="file" class="form-control" accept="image/*" id="image" placeholder="image" name="image">
      </div>
    <div class="mt-3">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>

</div>

@endsection


