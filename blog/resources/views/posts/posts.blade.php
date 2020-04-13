@extends("layout")
@section("contenu")
<div class="container-fluide">
    <div class="row">
        <div class="col-12 col-md-8">
            @foreach($posts as $post)
            <div class="card mb-3 mt-4">
                <img src="http://placehold.it/600x300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$post->p_title}}</h5>
                    <p class="card-text">{{$post->p_content}}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
                <hr/>
            @endforeach
        </div>
        <div class="col-12 col-md-4 mt-4">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">

                </div>
                    </div>
              </div>
          </div>
     </div>
</div>
@endsection
