@extends("master")
@section("isi")

<div class="container col-md-5 mt-5">


<form action="{{  route("biodata.store") }}" method="POST" enctype="multipart/form-data">

@csrf


    <div class="mb-3 mt-3">
      <label for="email">Nama:</label>
      <input type="text" class="form-control" id="name" placeholder="Isi Nama" name="name"  required>
    </div>
    <div class="mb-3">
      <label for="pwd">Tanggal Lahir:</label>
      <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" name="tanggal_lahir"required>
    </div>


    <div class="mb-3 mt-3">
      <label for="umur">Umur:</label>
      <input type="number" class="form-control" id="Umur" placeholder="Umur" name="umur">
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
