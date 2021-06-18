<x-layout>
    <x-header />
    <x-slot name="cat">

        <div class="container my-5">
            <h1 class="display-4">Search Results:</h1>

            @if($threads->isEmpty())
            <div class="container shadow" style="background-color: rgb(243, 242, 242)">
                <h2 class="">No Results Found</h2>
                <h3 class="lead">Suggestions :<h3>
                        <ul>
                            <li class="my-3">
                                <h4>Make sure that all words are spelled correctly</h4>
                            </li>
                            <li class="my-3">
                                <h4>Try different keywords</h4>
                            </li>
                            <li class="my-3">
                                <h4>Try more general keywords</h4>
                            </li>
                        </ul>
            </div>
            
            @else
            
            @foreach($threads as $thread)
            <x-search_card :thread="$thread" />
            @endforeach
            @endif
            {{-- {{$threads->links()}} --}}
            <a href="/"><button class="btn btn-lg btn-primary">Back To Forums</button></a>
        </div>

    </x-slot>
</x-layout>