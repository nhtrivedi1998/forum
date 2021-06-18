<x-layout>

  <x-slot name="cat">

    <div class="container my-3 w-75 h-25  rounded " style="background-color:#ffb952">
      <div class="container-fluid  py-5">
        <h1 class="fw-bold display-4">Welcome to the
          {{$category->name}} Forums
        </h1>
        <h4 class="py-4 fs-4">
          {{$category->description}}
        </h4>
        <hr class="my-4">
        <p>This is a peer to peer forum for sharing knowledge with each other.No Spam / Advertising /
          Self-promote in the forums.Do not post copyright-infringing material.Do not post “offensive” posts,
          links or images.Remain respectful of other members at all times</p>

      </div>
    </div>
    {{-- <div class="container">
      <a href="/add_thread"><button class="btn btn-primary">Start a discussion Here</button></a>
    </div> --}}
    @if(Auth::check())
    <div class="container">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Start Discussion
      </button>

      <!-- Modal -->

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/categories/{{$category->id}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Problem Title</label>
                  <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Keep Your title as crisp as possible</div>
                </div>
                <input type="hidden" name="srno" value="">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Please Elaborate Your concern</label>
                  <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    @else
    <div class="container w-75 ">
      <h2 class="my-4 py-4">You are not logged in! Please login to post </h2>
    </div>
    @endif



    <div class="container my-4">

      @foreach ($threads as $thread)
      <x-thread_card :thread="$thread" />
      @endforeach
      {{$threads->links()}}
    </div>
    s


  </x-slot>




</x-layout>