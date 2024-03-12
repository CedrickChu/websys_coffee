<?php 
include 'base.php';

if (isset($_SESSION['username'])) {
    $greeting = strtoupper($_SESSION['username']);
} else {
    $greeting = "Guest!";
}
?>
    <section class="align-center">
        <div class="container center-align">
            <div class="row">
                <div class="col">
                    <div class="header text-white">
                        <h4>Hello <STRONG><?php echo $greeting ?></STRONG></h4>
                        <h1>Start Your Day</h1>
                        <h1>With a Good Coffee</h1>
                    </div>
                    <div>
                        <h3> choose and taste delicious coffee from the best beans</h3>
                    </div>
                    <button class="btn custom-btn">Order Now</button>
                    <button style='margin-left: 20px;'class="btn custom-btn">Learn About Us</button>
                </div>
                <div class="col">
                    <img src="coffee.png" height="400" class="d-inline-block align-text-top" alt="Flowbite Logo">
                </div>
            </div>
        </div>
    </section><br>
    <section>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
              <div class="carousel slide multi-item-carousel" id="theCarousel" data-ride="carousel">

                  <div class="carousel-inner">
                    <div class="item active">
                        <div data-aos="fade-up" class="container-xxl py-5">
                            <div class="container">
                                <div class="text-center text-white">
                                    
                                    <h1 class="mb-5">Awesome Coffees</h1>
                                </div>
                                <div class="row g-4 justify-content-center ">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-item">
                                            <h4 class="text-center">Americano</h4>
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="carousel/americano.jpg" alt="americano">
                                            </div>
                                            
                                            <div class="text-center ">
                                                <h3 class="mb-0">₱80</h3>
                                                <div class="mb-3">
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-item">
                                            <h4 class="text-center">Cappuccino</h4>
                                            <div class="overflow-hidden">
                                                <img class="img-fluid"  src="carousel/cappuccino.jpg" alt="cappuccino">
                                            </div>
                                            
                                            <div class="text-center ">
                                                <h3 class="mb-0">₱100</h3>
                                                <div class="mb-3">
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-item">
                                            <h4 class="text-center">Espresso</h4>
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="carousel/espresso.jpg" alt="espresso">
                                            </div>
                                            
                                            <div class="text-center ">
                                                <h3 class="mb-0">₱75</h3>
                                                <div class="mb-3">
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div data-aos="fade-up" class="container-xxl py-5">
                            <div class="container">
                                <div class="text-center text-white">
                                    <h1 class="mb-5">Awesome Coffees</h1>
                                </div>
                                <div class="row g-4 justify-content-center text-white">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-item">
                                            <h4 class="text-center">Latte</h4>
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="carousel/latte.jpg" alt="Latte">
                                            </div>
                                           
                                            <div class="text-center ">
                                                <h3 class="mb-0">₱140</h3>
                                                <div class="mb-3">
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-item">
                                            <h4 class="text-center">Macchiato</h4>
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="carousel/macchiato.jpg" alt="macchitao">
                                            </div>
                                            
                                            <div class="text-center ">
                                                <h3 class="mb-0">₱125</h3>
                                                <div class="mb-3">
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="package-item">
                                            <h4 class="text-center">Mocha</h4>
                                            <div class="overflow-hidden">
                                                <img class="img-fluid" src="carousel/mocha.jpg" alt="mocha">
                                            </div>
                                            
                                            <div class="text-center ">
                                                <h3 class="mb-0">₱200</h3>
                                                <div class="mb-3">
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                    <small class="fa fa-star" style="color:#39C67A;"></small>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control left" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="carousel-control right" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="carousel slide multi-item-carousel" id="theCarousel2">
                  <div class="carousel-inner">
                    <div class="item active">
                        <div data-aos="fade-up" class="container-xxl py-5">
                            <div class="container">
                                <div class="text-center text-white">
                                    <h1 class="mb-5">Awesome Coffees</h1>
                                </div>
                                <div class="container" style="border: 2px solid rgb(255, 92, 92);">
                                    <h3 class="text-center">Popular Now</h3>
                                    <div class="container" style="display:flex; justify-content: center; align-items: center;">
                                        <div class="row">
                                            <div class="col" style="width: 400px;padding-bottom:20px;"> 
                                                <div class="container" style="background-color: rgb(30, 32, 31);">
                                                    <div class="row">
                                                        <div class="col">
                                                            <img style='border-radius: 59% 41% 25% 75% / 69% 26% 74% 31%  ; height: 200px;' src="carousel/coffee (1).jpg" alt="">
                                                        </div>
                                                        <div class="col">
                                                            <p class="text-white">Espresso Coffee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="container" style="background-color: rgb(30, 32, 31);">
                                                    <div class="row">
                                                        <div class="col">
                                                            <img style='border-radius: 59% 41% 70% 30% / 32% 60% 40% 68% ; height: 200px;' src="carousel/coffee (1).jpg" alt="">
                                                        </div>
                                                        <div class="col">
                                                            <p class="text-white">Espresso Coffee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="container" style="background-color: rgb(30, 32, 31);">
                                                    <div class="row">
                                                        <div class="col">
                                                            <img style='border-radius: 59% 41% 70% 30% / 32% 60% 40% 68% ; height: 200px;' src="carousel/coffee (1).jpg" alt="">
                                                        </div>
                                                        <div class="col">
                                                            <p class="text-white">Espresso Coffee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div data-aos="fade-up" class="container-xxl py-5">
                            <div class="container">
                                <div class="text-center text-white">
                                    <h1 class="mb-5">Awesome Coffees</h1>
                                </div>
                                <div class="container" style="border: 2px solid rgb(255, 92, 92);">
                                    <h3 class="text-center">Popular Now</h3>
                                    <div class="container" style="display:flex; justify-content: center; align-items: center;">
                                        <div class="row">
                                            <div class="col" style="width: 400px;padding-bottom:20px;"> 
                                                <div class="container" style="background-color: rgb(30, 32, 31);">
                                                    <div class="row">
                                                        <div class="col">
                                                            <img style='border-radius: 59% 41% 25% 75% / 69% 26% 74% 31%  ; height: 200px;' src="carousel/coffee (1).jpg" alt="">
                                                        </div>
                                                        <div class="col">
                                                            <p class="text-white">Espresso Coffee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="container" style="background-color: rgb(30, 32, 31);">
                                                    <div class="row">
                                                        <div class="col">
                                                            <img style='border-radius: 59% 41% 70% 30% / 32% 60% 40% 68% ; height: 200px;' src="carousel/coffee (1).jpg" alt="">
                                                        </div>
                                                        <div class="col">
                                                            <p class="text-white">Espresso Coffee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="container" style="background-color: rgb(30, 32, 31);">
                                                    <div class="row">
                                                        <div class="col">
                                                            <img style='border-radius: 59% 41% 70% 30% / 32% 60% 40% 68% ; height: 200px;' src="carousel/coffee (1).jpg" alt="">
                                                        </div>
                                                        <div class="col">
                                                            <p class="text-white">Espresso Coffee</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" style="color: rgb(253, 13, 13);" href="#theCarousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" style="color: rgb(253, 13, 13);" href="#theCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
    </section>
    <br>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
