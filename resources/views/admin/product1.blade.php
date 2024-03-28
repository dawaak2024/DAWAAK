<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/Dashboard.css">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="icon" content="./Image 2.png">
    <link rel="shortcut icon" href="./Image 2.png" type="image/x-icon">
    <script>
        let docTitle = document.title;

        window.addEventListener("blur", () => {
            document.title = "Come Back  🥺";
        });

        window.addEventListener("focus", () => {
            document.title = docTitle;
        });
        </script>
</head>
<body>
    <div class="mane">
        <ul class="profail">
            <li>
                <div class="img">
                    <img src="../images/logo.png" alt="Not found">
                    <h2>Dawaak</h2>
                </div>

            </li>
            <div class="r">
            <li class="">
                <a href="{{route('dashboard')}}">
                    <i class="fas fa-home"></i>
                    <p>Dawaak</p>
                </a>
            </li>
            <li>
                <a href="{{route('product')}}" >
                    <i class="fas fa-table"></i>
                    <p>Best Seller products</p>
                </a>
            </li>
            <li>
                <a href="{{route('product1')}}"class="D">
                    <i class="fas fa-user-group"></i>
                    <p class="p">New arrival Products</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-chart-pie"></i>
                    <p>Charts</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-pen"></i>
                    <p>Post</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-star "></i>
                    <p>Favorite</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <p>Setting</p>
                </a>
            </li>
            <li class="out">
                <a href="./LogIn.Html">
                    <i class="fas fa-sign-out"></i>
                    <p>Log Out</p>
                </a>
            </li>
        </div>
        </ul>
    </div>


    <div class="content">
        <div class="das">
            <p>products</p>
            <i class="fas fa-chart-bar "></i>
        </div>

        <div class="contenare">
            <form action="{{route('uploadnewarrival')}}"  method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="das">
                    <p>New arrival</p>
                </div>
                <img src="../images/add.png" alt="logo" width="450px">
                <div class="inputs">
                    <input type="text" name="title" placeholder="product title">
                    <br>
                    <input type="text" name="price" placeholder="product price">
                    <br>
                    <input type="text" name="description" placeholder="product description">
                    <br>
                    <input type="file" id="file" name='image' id="image" style="display:none;">
                    <label for="file">choose image</label>
                    <br>
                </div>
                    <button name="upload">Upload product</button>
                <br><br>
                <a href="../index.php#newarrival">Show ALL Products</a>
            </form>
        </div>
        
        
    </div>
</body>
</html>