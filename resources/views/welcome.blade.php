@extends('layouts.sign')

@section('title',"Dawaak")
<link rel="stylesheet" type="text/css" href="css/style.css"/>

@section('content')
    @extends('layouts.header')
    
    <!---start features ---->
    <div class="features">
        <div class="container">
            <div class="feat">
                <i class="fa-solid fa-wand-magic-sparkles fa-3x"></i>
                <h3>Tell Us Your medincine</h3>
                <p>If you have any specific medical inquiries or need information on a particular topic, feel free to ask!</p>
            </div>
            
            <div class="feat">
                <i class="far fa-gem fa-3x"></i>
                <h3>We Will DO All The Work</h3>
                <p>If there's anything specific you'd like help with or if you have any questions, feel free to let me know, and I'll do my best to assist you!</p>
            </div>
            
            <div class="feat">
                <i class="fa-solid fa-earth-asia fa-3x"></i>
                <h3>Your Product is Worldwide</h3>
                <p>. However, for specific medical concerns or treatment, it's always best to consult with a qualified healthcare professional or medical provider</p>
            </div>
            
        </div>
    </div>
    <!---End features ---->
    <!---Start categories--->
    <div class="category">
        <div class="container">
            <div class="head">
                <h1>Categories</h1>
                <a href="category.php">view all</a>
            </div>
            <div class="field">
                <div class="type" >
                    <a href="category.php"><img src="images/1.png" alt=""></a>
                    <h2>Medical Supplies</h2>
                </div>
                <div class="type">
                    <a href="category.php"><img src="images/2.png" alt=""></a>
                    <h2>vitamins</h2>
                </div>
                <div class="type">
                    <a href="category.php"><img src="images/diabetes.png" alt=""></a>
                    <h2>Diabetes</h2>
                </div>
                <div class="type">
                    <a href="category.php"><img src="images/3.png" alt=""></a>
                    <h2>all Medicine</h2>
                </div>
                
            </div>
        </div>
    </div>
	<!---End Gategories ---->
    <!--- start bestseller --->
    <div class='protfolio' id='bestseller'>
        <div class='container'>
            <h2 class='special-heading' >Best-seller</h2>
            <p>If You do It right, it will be forever</p>
            <div class="protfolio-contant">
                
                @foreach($product as $bestseller)
                
                <div class='card' id='bestseller'>
                    <img src='/productimage/{{$bestseller->image}}' alt=''>
                    <div class='info'>
                        <h3>{{$bestseller->title}}</h3>
                        <span>{{$bestseller->price}}</span>
                        <p>{{$bestseller->description}}</p>
                    </div>
                    <div class='buttons'>
                        <a href='#' class='addcard'>Add TO Card</a>
                    </div>
                </div>
                
                @endforeach

            </div>
        </div>
    </div>	
    
	<!---End bestseller--->

    <!---Start new arrival--->
    <div class='newarrival' id='newarrival'>
        <div class='container'>
            <h2 class='special-heading'>New arrival</h2>
            <p>If You do It right, it will be forever</p>
            <div class="newarrival-contant">

                @foreach($product1 as $newarrival)
                
                <div class='card' id='bestseller'>
                    <img src='/productimage/{{$newarrival->image}}' alt=''>
                    <div class='info'>
                        <h3>{{$newarrival->title}}</h3>
                        <span>{{$newarrival->price}}</span>
                        <p>{{$newarrival->description}}</p>
                    </div>
                    <div class='buttons'>
                        <a href='' class='addcard'>Add TO Card</a>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </div>		
    <!---End new arrival--->
    <!---start contact--->
    <div class ="contact" id="contact">
        <div class="container">
            <h2 class="special-heading">Contact</h2>
            <p>We are born to create</p>
            <div class="info-contant">
                <div class="card-contant">
                    <img src="images/logo.png">
                    <div class="social">
                        Find Us On Social Networks
                        <i class="fab fa-youtube"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
                <div class="card-contant">
                    <h2>Important</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">medicine</a></li>
                        <li><a>Alarm</a></li>
                        <li><a>Order</a></li>
                    </ul>
                </div>
                <div class="card-contant">
                    <h2>Help</h2>
                    <ul>
                        <li><a>order information</a></li>
                        <li><a>privacy policy</a></li>
                        <li><a>terms &  Conditions</a></li>
                    </ul>
                </div>
                <div class="card-contant">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a>Dawaak@gmail.com</a></li>
                        <li><a>0127 502 4454</a></li>
                        <li><a>Aga-mansoura-Egypt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---end contact--->
    <!---start footer--->
    <div class="footer">
        @ 2023 <span>Dawaak</span> All Right Reserved 
    </div>
    <!--End footer-->
@endsection
