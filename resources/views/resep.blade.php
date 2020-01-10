@extends('layouts.index')

@section('center')
   
   <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Chicken Recipes</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <!-- recepie_area_start  -->
    <div class="recepie_area plus_padding">
        <div class="container">
            <div class="row">
                @foreach($admin as $resep)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_recepie text-center">
                        <div class="recepie_thumb">
                            <img src="{{asset('storage/'. $resep->image)}}" alt="">
                        </div>
                        <h3>{{$resep->name}}</h3>
                        <span>{{$resep->category}}</span>
                        <p>Time Needs: {{$resep->time}}</p>
                        <a href="{{route('resep.detail' ,['id'=>$resep->id])}}" class="line_btn">View Full Recipe</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /recepie_area_start  -->

    <!-- latest_trand     -->
    <div class="latest_trand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="trand_info text-center">
                        <p>Thousands of recipes are waiting to be watched</p>
                        <h3>Discover latest trending recipes</h3>
                        <a href="{{route('resep.detail', ['id'=>10])}}" class="boxed-btn3">View all Recipes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ latest_trand     -->

    

    @endsection