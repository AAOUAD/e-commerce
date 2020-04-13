@extends("layout")
@section("contenu")
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mt-4">
            <div class="col-12 col-md-4 mt-4">
     <form action="{{ url('/inserpost') }}" method="post">
         @csrf



         <div class="form-group">
            <label for="exampleInputEmail1">Title post</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">content post</label>
            <input type="text" class="form-control" name="content" id="exampleInputPassword1">
         </div>
         <div class="form-group">
             <label for="exampleInputPassword1">content post</label>
             <div class="col-10">
                 <select class="form-control" name="catid">
                     <option value="">choosen!!!!!</option>
                     @foreach($categories as $category)
                         <option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>
                         @endforeach
                 </select>
             </div>
         </div>

           <button type="submit" class="btn btn-primary">Submit</button>
     </form>
            </div>
            </div>
        </div>
    </div>
@endsection
