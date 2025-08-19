<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="mt-5">
      <h1 class="text-center">Blog list</h1>

      <div class="table-responsive mt-5">
        <a href="{{ url('/blog/add') }}" class="btn btn-primary mb-3">Add New</a>

        @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
        @endif

        <form method="GET">
          <div class="input-group mb-3">
            <input type="text" name="title" value="{{ $title }}" class="form-control" placeholder="Search Title" aria-label="Search Title" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </div>
        </form>

        <table class="table table-striped table-hover">
          <thead>
            <th>#</th>
            <th>Title</th>
            <th>Action</th>
          </thead>
          <tbody class="table-group-divider">
            @if($blogs->count() == 0)
            <tr>
              <td colspan="3" class="text-center">No Data Found with <strong>{{ $title }}</strong> keyword</td>
            </tr>
            @endif

            @foreach ($blogs as $blog)
            <tr>
              <td>{{ ($blogs->currentpage()-1) * $blogs->perpage() + $loop->index + 1}}</td>
              <td>{{ $blog->title }}</td>
              <td>edit | delete</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      {{ $blogs->links() }}
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>