@extends('layouts.app')

@section('content')
   <section class="comics_bg">

   </section>
   <section class="my_section d-flex" >
    <div class="container p-5">
        <div class="row row-cols-6">
            @foreach ($comics as $album)
                <div class="col">
                    <div class="my_card py-3">
                        <div class="my_img">
                            <img src="{{ $album['thumb']}}" alt="{{$album['series']}}">
                        </div>
                        <h6 class="py-2">{{$album['series']}}</h6>
                    </div>
                    

                    
                </div>   
            @endforeach
            
        </div>
        <div class="center_button">
            <button class="load_more"><h6>LOAD MORE</h6></button>
        </div>
        
    </section>    
</section>
@endsection