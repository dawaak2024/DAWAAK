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
                <a href="{{route('dashboard')}}" class="D">
                    <i class="fas fa-home"></i>
                    <p class="p">Dawaak</p>
                </a>
            </li>
            <li>
                <a href="{{route('product')}}">
                    <i class="fas fa-table"></i>
                    <p>Best Seller Products</p>
                </a>
            </li>
            <li>
                <a href="{{route('product1')}}">
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
            <p>Dashboard</p>
            <i class="fas fa-chart-bar "></i>
        </div>



        <div class="contenare">
            <div class="box">
                    <i class="fas fa-user"></i>
                    <div class="data">
                        <p>User</p>
                        <h2>100</h2>
                    </div>
            </div>
            <div class="box">
                    <i class="fas fa-pen"></i>
                    <div class="data">
                        <p>Posts</p>
                        <h2>270</h2>
                    </div>
            </div>
            <div class="box">
                    <i class="fas fa-table"></i>
                    <div class="data">
                        <p>Prodact</p>
                        <h2>100</h2>
                    </div>
            </div>
            <div class="box">
                    <i class="fas fa-dollar"></i>
                    <div class="data">
                        <p>Revenue</p>
                        <h2>300$</h2>
                    </div>
            </div>
        </div>
        <div class="das">
            <p>Product</p>
            <i class="fas fa-table "></i>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TV</td>
                    <td > <span class="price">8000$</span></td>
                    <td ><span class="count">132</span> </td>
                </tr>
                <tr>
                    <td>Labtop</td>
                    <td ><span class="price">5000$</span></td>
                    <td > <span class="count">132</span> </td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td > <span class="price">200$</span></td>
                    <td> <span class="count">132</span> </td>
                </tr>
                <tr>
                    <td>Wash Machine</td>
                    <td > <span class="price">800$</span> </td>
                    <td > <span class="count">132</span> </td>
                </tr>
                <tr>
                    <td>Keyboard</td>
                    <td > <span class="price">100$</span> </td>
                    <td > <span class="count">132</span></td>
                </tr>
                <tr>
                    <td>IPhone</td>
                    <td >  <span class="price">500$</span></td>
                    <td ><span class="count">132</span> </td>
                </tr>
                <tr>
                    <td>Ipad</td>
                    <td >  <span class="price">1000$</span></td>
                    <td ><span class="count">132</span> </td>
                </tr>
                <tr>
                    <td>MacBook</td>
                    <td >  <span class="price">2000$</span></td>
                    <td ><span class="count">132</span> </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>