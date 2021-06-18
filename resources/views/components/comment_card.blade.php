@props(['comment'])

</button></a><div class="media my-4 d-flex rounded justify-content-center align-items-center shadow " style="background-color: rgb(243, 243, 243)">
    <svg  class="mx-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
    <div class="media-body  mx-4">
    
        <h3 class="my-2 py-1 font-weight-bold">Commented by:&nbsp; {{$comment->user->name}}</h3>

        <h4 class="">{{$comment->comment}}</h4>
    </div>
</div>
