<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add New Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <style>
    #desc-textarea {
      resize: none;
    }
  </style>
</head>
<body>
  
  <div class="container">
    <div class="mt-5">
      <h2 class="mb-5">Add New Blog Data</h2>

      @if ($errors->any())
          <div class="alert alert-danger col-md-6">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form action="{{ url('/blog/create') }}" method="POST">
        @csrf
        <div class="col-md-6">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="col-md-6 mt-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="desc-textarea" rows="5">
            {{ old('description') }}
          </textarea>
        </div>
        <div class="col-md-6 mt-3">
          <button class="btn btn-success form-control">Save</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>