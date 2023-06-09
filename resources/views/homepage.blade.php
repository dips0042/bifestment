<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page Participant</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
</head>

<body>
    <!-- Header -->
    <nav class="navbar sticky-top container-fluid navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">
            <div class="navbar-collapse container-fluid d-flex justify-content-between m-0" id="navbar">
                <div class="navbar-brand ms-2" href="#">
                    <img src="/BiFestment Logo.png" width="200px" alt=""> 
                </div>
    
                <div class="collapse navbar-collapse search_box d-flex justify-content-center">
                    <input type="search" placeholder="Search event here">
                    <span class="fa fa-search"></span>
                </div>
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarText"> -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end">
                        <li><a class="navmenu" href="#">My Events</a></li>
                        <li><a class="navmenu" href="#">Favourite</a></li>
                        <li><a class="navmenu" href="#">Notification</a></li>
                        <li><a class="navmenu" href="#">Profile</a></li>
                    </ul>
                <!-- </div> -->
            </div>
        </div>
    </nav>
    
    <!-- Body -->
        <!-- welcoming -->
        <div class="image-container">
            <img src="seminar-conference.jpg" alt="Image">
            <div class="overlay text-light d-flex justify-content-center flex-column text-center">
                <h1 class="mb-2 fw-bold" id="tagline">Invest in Yourself!</h1>
                <p class="m-0 fst-italic fw-semibold">Cause it's the best investment you can give for your future self</p>
            </div>
        </div>
        
        <div>
            <div class="row mt-4 mx-5">
                <!-- Carousel -->
                <div style="width: 75%">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($event_ads as $key => $item)
                                <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                    
                        <div class="carousel-inner">
                            @foreach ($event_ads as $key => $item)
                                <div class="carousel-item c-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ $item->ads_image }}" class="d-block w-100 c-img rounded" alt="Slide {{ $item->id }}">
                                </div>
                            @endforeach
                        </div>
                        
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- Upcoming Events -->
                <div class="" style="width: 25%">
                    <!-- event information -->
                    <div class="card">
                        <h5 class="card-title text-center pt-3 pb-1">My Upcoming Event</h5>
                        <div class="row">
                            <div class="text-center" style="width: 25%">
                                <p class="p-0 m-0">SAT</p>
                                <P class="p-0 m-0" style="font-size: xx-large;">4</P>
                                <P class="p-0 m-0">MAR</P>
                            </div>
                            <div class="" style="width: 75%">
                                {{-- <img src="{{ $event -> event_image_url }}" class="card-img-top mb-1" alt="{{ $event -> event_image_url }}"> --}}
                            </div>
                        </div>
                        <h6 class="px-4 pb-0 pt-2 m-0">RiSE Series 2023 "Business Towards 2023: Challange ..."</h6>
                        <p class="px-4 pt-0 pb-3 m-0" style="font-size: small;">08.00 - 11.40 GMT+7</p>
                    </div>
    
                    <!-- my events button -->
                    <div class="">
                        <div class="text-center rounded gradient-button pb-1 px-3 pt-2 mt-2">
                            <h6 href="#">View My Events ></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Event List -->
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($eventcategories as $category)
                        <div class="row py-3 justify-content-between">
                            <div class="col" id="{{ $category }}"><h2>{{ $category }}</h2></div>
                            <div class="col"><p class="fst-italic text-end">View More ></p></div>
                        </div>
                        @foreach ($events as $event)
                            
                        {{-- @endforeach --}}
                        {{-- @foreach ($category->eventItem as $event) --}}
                            <div class="col">
                                <div class="row w-75">
                                    <div class="col-sm-6 col-md-4 w-10 text-wrap">
                                        <div class="mb-4 shadow-sm rounded">
                                            <img src="{{ $event -> event_image }}" class="card-img-top mb-1" alt="{{ $event -> event_name }}">
                                            <div class="mx-3 mb-0 mt-1">
                                                <div class="text-wrap justify-content-center m-0" style="width:fit-content">
                                                    <p class="px-2 rounded-pill m-0" style="background-color: darkgray; font-size: small;">{{ $event->category_id }}</p>
                                                </div>

                                                <h5 class="mb-1">{{ $event->event_name }}</h5>
                                                <p class="m-0" style="font-size: medium;">{{ $event->event_date }}</p>
                                                <p class="m-0" style="font-size: medium;">{{ $event->event_time }}</p>

                                                <div class="container px-0 py-2">
                                                    <div class="row">
                                                        <div class="col"><h6 class="fw-bold text-danger m-0" style="font-size: large;">{{ $event->event_price }}</h6></div>
                                                        <div class="col text-end"><p class="m-0 justify-content-end">{{ $event->event_participant }} Registered</p></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
        <!-- </div> -->

    <!-- Footer -->
    <footer class="mt-4 text-center text-white sticky-bottom" style="background-color: #21081a;">
        <!-- Logo -->
        <div class="p-1 pt-3 m-0">
            <img src="/BiFestment Logo.png" width="200px" alt=""> 
        </div>

        <!-- Copyright -->
        <div class="text-center pb-3" style="background-color: rgba(0, 0, 0, 0.2);">Copyright 2023, All Rights Reserved</div>
    </footer>
</body>
</html>