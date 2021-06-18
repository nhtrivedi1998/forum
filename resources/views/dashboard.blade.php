@extends('layouts.app')

@section('content')
<div class="container " >
    <div class=" d-flex flex-row flex-wrap  justify-content-center ">
        <div class="col align-items-start" style="max-width:250px">
            <div class="card" >
                <div class="card-header"><h3>{{ __('Your Activities') }}</h3></div>

                <div class="card-body p-0">
                    {{-- @if (session('status'))
                    
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}         

                    {{-- {{ __('You are logged in!,') }} --}}
                    <div class="my-3">
                        <div class="list-group border-0 rounded-0 " style="">
                            <a href="/dashboard" class="list-group-item list-group-item-action border-0 " ><h5>Your Threads</h5></a>
                            <a href="/dashboard/comments" class="list-group-item list-group-item-action border-0"><h5>Your Comments</h5></a>
                            
                        </div> 
                          </div>

                          
                      
                   
                </div>
                
            </div>
        </div>
        <div class="col" style="max-width:1000px">
            <div class="card">
                <div class="card-header"><h2>{{ __(' Your Threads') }}</h2></div>

                <div class="card-body">                  
                    
                      <x-dashboard_thread :threads="$threads"  />               
                      
                
                </div>
                
                  
                    
            </div>
            <div class="my-3"> {{$threads->links()}}</div>
           
           
        </div>
       
    </div>
    
</div>


@endsection
