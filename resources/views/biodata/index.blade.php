
{{-- extends (nama file), section(nama yield) --}}

@extends("master")
@section("isi")

<div class="container">
<div class="row mt-5">
<div class="col">
<button type="button" class="btn btn-dark">Tambah</button>
<div class="mt-4">
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>
        <button type="button" class="btn btn-success">EDIT</button>
        <button type="button" class="btn btn-danger">HAPUS</button>
        </td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>
        <button type="button" class="btn btn-success">EDIT</button>
        <button type="button" class="btn btn-danger">HAPUS</button>
        </td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>
        <button type="button" class="btn btn-success">EDIT</button>
        <button type="button" class="btn btn-danger">HAPUS</button>
        </td>
      </tr>


    </tbody>
  </table>
</div>
</div>
</div>
</div>

@endsection
