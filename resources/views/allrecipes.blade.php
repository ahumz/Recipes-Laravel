@extends('layouts.index')

@section('center')

<!-- slider_area_start -->
<div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 ">
                        <div class="slider_text text-center">
                            <div class="text">
                                <h3>
                                    Chicken dish with per boiled egg 
                                </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- recepie_area_start  -->
    <div class="recepie_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_recepie text-center">
                        <div class="recepie_thumb">
                            <img src="img/recepie/recpie_1.png" alt="">
                        </div>
                        <h3>Egg Manchurian</h3>
                        <span>Appetizer</span>
                        <p>Time Needs: 30 Mins</p>
                        <a href="{{route('resep.detail', ['id'=>9])}}" class="line_btn">View Full Recipe</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_recepie text-center">
                        <div class="recepie_thumb">
                            <img src="img/recepie/recpie_2.png" alt="">
                        </div>
                        <h3>Pure Vegetable Bowl</h3>
                        <span>Appetizer</span>
                        <p>Time Needs: 30 Mins</p>
                        <a href="{{route('resep.detail', ['id'=>10])}}" class="line_btn">View Full Recipe</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_recepie text-center">
                        <div class="recepie_thumb">
                            <img src="img/recepie/recpie_3.png" alt="">
                        </div>
                        <h3>Egg Masala Ramen</h3>
                        <span>Appetizer</span>
                        <p>Time Needs: 30 Mins</p>
                        <a href="{{route('resep.detail', ['id'=>11])}}" class="line_btn">View Full Recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /recepie_area_start  -->

    <!-- recepie_videos   -->
    <div class="recepie_videoes_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="recepie_info">
                        <h3>Recipe videos 
                            that never misses 
                            any portion</h3>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women.</p>
                    <div class="video_watch d-flex align-items-center">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=lr6AMBsjxrY"> <i class="ti-control-play"></i> </a>
                        <div class="watch_text" >
                            <h4>Watch Video</h4>
                            <p>You will love our execution</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="videos_thumb">
                        <div class="big_img">
                            <img src="img/video/big.png" alt="">
                        </div>
                        <div class="small_thumb">
                            <img src="img/video/small_1.png" alt="">
                        </div>
                        <div class="small_thumb_2">
                            <img src="img/video/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ recepie_videos   -->

    <!-- dish_area start  -->
    <div class="dish_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                <!-- <div class="dish_wrap d-flex"> -->
                    <div class="dish_wrap d-flex">
                        <div class="col-xl-4">
                            <div class="thumb">
                                <img src="{{asset('img/recepie/recpie_4.png')}}" alt="">
                            </div>
                            <h3>Pumpkin Soup</h3>
                            <p>Pumpkin soup is a generally 'bound' (thick) soup made from a puree of pumpkin. It is made by incorporating the meat of a blended pumpkin with brew or supply. It can be served warm or chilly also is a popular Thanksgiving recipe in the USA.</p>
                        </div>
                        <div class="col-xl-4">
                            <div class="thumb">
                                <img src="{{asset('img/recepie/recpie_5.png')}}" alt="">
                            </div>
                            <h3>Quenelle</h3>
                            <p>A quenelle (say kuh-nell) is a perfectly smooth, rugby-ball scoop of any soft food that instantly upgrades your plating and gives dishes a sophisticated touch. At a fine-dining restaurant, you might see this technique used across dishes throughout your 10-course degustation: in a graceful oval scoop of pate atop a crisp baguette, displayed in a generous dollop of caviar or in a spoonful of tangy tapenade. It might be even more apparent at dessert when ice cream, mousse, whipped cream and sorbet are served in an elegant quenelle. </p>
                        </div>
                        <div class="col-xl-4">
                            <div class="thumb">
                                <img src="{{asset('img/recepie/recpie_6.png')}}" alt="">
                            </div>
                            <h3>Green Bean Salad</h3>
                            <p>salads are one of the healthiest food options you can add to your meals. it is a very good practice to include vegetable salad every day in your diet. being made with fresh veggies or fruits, they are flavorful and nutritious. they also add lot of variety in terms of taste, texture and flavor to the whole meal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ dish_area start  -->

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

    <!-- customer_feedback_area  -->
    <div class="customer_feedback_area">
        <div class="container">
            <div class="row justify-content-center mb-50">
                <div class="col-xl-9">
                    <div class="section_title text-center">
                        <h3>Feedback From Customers</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially <br> in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="customer_active owl-carousel">
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="img/testmonial/2.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="img/testmonial/2.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="img/testmonial/1.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_customer d-flex">
                            <div class="thumb">
                                <img src="img/testmonial/2.png" alt="">
                            </div>
                            <div class="customer_meta">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / customer_feedback_area  -->

    

    @endsection