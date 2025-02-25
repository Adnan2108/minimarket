@extends("master")
@section("isi")

<div class="container col-md-5 mt-5">



<form action="{{  route("barang.store") }}" method="POST" enctype="multipart/form-data">

@csrf


    <div class="mb-3 mt-3">
      <label for="nama">Nama:</label>
      <input type="nama" class="form-control" id="nama" placeholder="Isi Nama" name="nama"  required>
    </div>
    <div class="mb-3">
      <label for="supplier">Supplier:</label>
      <input type="supplier" class="form-control" id="supplier" placeholder="Supplier" name="supplier" required>
    </div>
    <div class="mb-3">
        <label for="merk">Merk:</label>
        <input type="merk" class="form-control" id="merk" placeholder="Merk" name="merk" required>
      </div>
      <div class="mb-3">
        <label for="image">Image:</label>
        <input type="file" class="form-control" accept="image/*" id="image" placeholder="image" name="image" required>
      </div>
    <div class="mt-3">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>

</div>

@endsection
