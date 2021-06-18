@props(['threads'])
<ul class="list-unstyled mx-3 ">
    @foreach($threads as $thread)
   <li class="media  my-4 justify-content-center align-items-center shadow-sm ">                          
       <div class="media-body mx-2 p-2">
         <h4 class="mt-0 mb-1">{{Str::limit($thread->title,85,'...')}}</h4>
         <h5 class="text-secondary my-3">{{$thread->description,300,'...'}}</h5>
       </div>
     </li>
     @endforeach    
   </ul>
   