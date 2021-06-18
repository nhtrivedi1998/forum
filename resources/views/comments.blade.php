<x-layout>

    <x-slot name="cat">



        <div class="container my-3 w-75 h-25  rounded " style="background-color: #ffb952">
            <div class="container-fluid  py-5">
                <h1 class="fw-bold ">
                    {{$thread->title}}
                </h1>
                <h4 class="py-4 fs-4">
                    {{$thread->description}}
                </h4>
                <hr class="my4">
                <p>This is a peer to peer forum for sharing knowledge with each other.No Spam / Advertising /
                    Self-promote in the forums.Do not post copyright-infringing material.Do not post “offensive” posts,
                    links or images.Remain respectful of other members at all times</p>
                
            </div>
        </div>

        <div class="container w-75">
            <h1 class="py-2"></h1>
            @if(Auth::check())
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Post a comment
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/categories/thread/{{$thread->id}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Write your
                                        comment</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                                </div>
                                <input type="hidden" name="srno" value="">
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
       
        @else
        <div class="container ">           
            <h2 class="my-4 py-4">You are not logged in! Please login to Comment </h2>
         </div>
        @endif
    </div>


        <div class="container my-4">
            @foreach ($comments as $comment)
            <x-comment_card :comment="$comment" />
            @endforeach
            {{$comments->links()}} 
        </div>

    </x-slot>

</x-layout>