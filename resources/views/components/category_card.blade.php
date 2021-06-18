@props(['category'])

  
    <div class="card my-3 mx-3 " style="max-width:520px;">
      <div class="row no-gutters rounded-3">
        <div class="col">
          <img src="/images/cat{{$category->id}}.jpg" alt="..." style="max-width: 172px;height:117px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <a href="categories/{{$category->id}}">
              <h5 class="card-title font-weight-bold text-dark">{{$category->name}}</h5>
            </a>
            <p class="card-text">{{Str::limit($category->description,80,'...')}}</p>
          </div>
        </div>
      </div>
    </div>
  
