
@extends('layouts\app');

@section('content')
<div class="container text-center mt-2 mb-5">



    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">upload image </label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="thumbnail" placeholder="Thumbnail">
          </div>




        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">project title </label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="Project github title">
          </div>




        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Project description</label>
            <textarea  class="form-control" cols="30" rows="10" id="exampleInputPassword1" name="description" placeholder="Add Project description"></textarea>
          </div>




        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Github link</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="github_link" placeholder="Project github title">
          </div>



        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Video link</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="youtube_link" placeholder="Project viseo title">
          </div>

          <div class="form-group m-2 p-2">
            <label for="category_id">Category</label>
            <select class ="form-control" name="category_id" id="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
          </div>




        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">skills</label>
            <textarea  class="form-control" cols="30" rows="10" id="exampleInputPassword1" name="skills" placeholder="Add skills"></textarea>
          </div>






        <button type="submit" value="submit" class="btn btn-primary">Add Project</button>
      </form>

</div>

@endsection


