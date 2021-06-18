@props(['comments'])
@props(['threads'])

<ul class="list-unstyled mx-3 ">
    @foreach($comments as $comment)
    <li class="media my-4 justify-content-center align-items-center  shadow-sm">
        <div class="media-body p-2 mx-2">
            <div class="d-flex align-items-center">
                <h4 >Thread : {{Str::limit($comment->thread->title,85,'...')}}</h4>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary ml-auto my-4  " style="max-height: 37px;" data-toggle="modal" data-target="#exampleModal">
                   Delete
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Modal title</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <h5> Are You Sure You Want To Delete The Comment</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <a href="/dashboard/comments/{{$comment->id}}"><button type="button" class="btn btn-primary">Yes</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-secondary my-2"> {{$comment->comment}} </h5>


        </div>
    </li>
    
    @endforeach

</ul>