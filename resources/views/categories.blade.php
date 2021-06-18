<x-layout>

<x-slot name="cat">
  <x-carousel />

  <div class="container my-3 " >
    <h1 class="text-center m-5 font-weight-bold"> Coding Forums- Browsing Categories</h1>  
   <div class="d-flex flex-row flex-wrap align-items-center justify-content-center" >
  @foreach ($categories as $category) 
  <x-category_card :category="$category" /> 
  @endforeach 
</div>

</div>
</x-slot>
</x-layout>

      
      
      
        
        

    
       
      
    


