<!---start header--->
	
<div class="header">
		
    <div class="container">
        
        <a href="index.php"><img class="logo" src="images/logo.png" alt=""></a>
        <div class="link-center">
            <a href="#">Home</a>
            <a href="#">medicine</a>
            <a href="#">card</a>
            <a href="#">Order</a>
        </div>

        <div class="links">
            <span class="icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <ul>
                <li> <a href='#' class='profile'>@auth{{auth()->user()->username}}@endauth  <i class="fa-regular fa-user"></i></a></li>
                <li> <a href='{{route('dashboard')}}' class='control'>control-panel  <i class='fa-solid fa-screwdriver-wrench'></i></a></li>
                <li> <a href="#" class="chat">chat with doctor  <i class="fa-brands fa-rocketchat"></i></a></li>
                <li> <a href="#" class="chat">chatBot  <i class="fa-solid fa-robot"></i></a></li>
                <li> <a href="#bestlseller">Best-Seller   <i class="fa-solid fa-window-restore"></i></a></li>
                <li> <a href="#newarrival">New Arrival <i class="fa-solid fa-n"></i></a></li>
                <li> <a href="#contact">contant  <i class="fa-solid fa-circle-nodes"></i></a></li>
                <li> <a href="{{route('logout')}}" class="logout">logout  <i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </div>
    
    </div>
    
</div>
<!---End header--->