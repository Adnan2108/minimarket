@extends("master")
@section("isi")

<div class="container col-md-5 mt-5">


<form action="{{  route("user.store") }}" method="POST">

@csrf


    <div class="mb-3 mt-3">
      <label for="email">Nama:</label>
      <input type="text" class="form-control" id="name" placeholder="Isi Nama" name="name"  required>
    </div>
    <div class="mb-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email"required>
    </div>


    <div class="mb-3 mt-3">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="password" name="password">
    </div>
    <div class="mt-3">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>

</div>

@endsection
