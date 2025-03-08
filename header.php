<!-- place navbar here -->
<nav class="navbar navbar-expand-sm py-3">
    <div class="container header d-flex align-items-center">
        <a class="navbar-brand" href="index.php">
            
            <img src="images/logo.png" alt=""  class="d-block img-fluid">
        </a>
        <!-- Search bar and cart icon outside the burger menu -->
        <div class="d-flex custom-width justify-content-center ms-3">
            <div class="d-none d-lg-block w-100">
                <form class="input-group border-0 rounded-pill bg-white">
                    <button class="btn border-0 my-2 my-sm-0" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <input type="text" class="form-control border-0 me-sm-2 bg-transparent"  placeholder="Search" />
                    
                </form>
            </div>
        </div>
        <div class="d-flex align-items-center order-md-5">
            <button class="btn d-block d-lg-none" id="searchBtn">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            <a href="cart.php" class="btn">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
            <a href="#exampleModal1" data-bs-toggle="modal" class="btn">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="btn-mode">
                <div class="btn-indicator">
                    <div class="btn-icon-container">
                        <i class="btn-icon fa-solid fa-sun"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse  order-md-3  col-lg-4" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-nowrap" href="shop.php" aria-current="page">Shop
                        <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-nowrap" href="#">New Arrivals</a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link  text-nowrap dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> categories</a>
                    <div class="dropdown-menu mega-menu" aria-labelledby="dropdownId">
                        <div class="row">
                            <div class="col">
                                <h5 class="dropdown-header">MEN</h5>
                                <a class="dropdown-item" href="#">T-Shirts</a>
                                <a class="dropdown-item" href="#">Shorts</a>
                                <a class="dropdown-item" href="#">Shirts</a>
                                <a class="dropdown-item" href="#">Hoodies</a>
                                <a class="dropdown-item" href="#">Jeans</a>
                            </div>
                            <div class="col">
                                <h5 class="dropdown-header">WOMEN</h5>
                                <a class="dropdown-item" href="#">T-Shirts</a>
                                <a class="dropdown-item" href="#">Shorts</a>
                                <a class="dropdown-item" href="#">Shirts</a>
                                <a class="dropdown-item" href="#">Hoodies</a>
                                <a class="dropdown-item" href="#">Jeans</a>
                            </div>
                            <div class="col">
                                <h5 class="dropdown-header">KIDS</h5>
                                <a class="dropdown-item" href="#">T-Shirts</a>
                                <a class="dropdown-item" href="#">Shorts</a>
                                <a class="dropdown-item" href="#">Shirts</a>
                                <a class="dropdown-item" href="#">Hoodies</a>
                                <a class="dropdown-item" href="#">Jeans</a>
                            </div>
                           
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
        
    </div>
</nav>
<!-- Hidden Search Bar -->
<div class="container-fluid bg-light shadow-sm p-3" id="searchBar">
    <div class="d-flex justify-content-center">
        <input class="form-control me-sm-2" type="text" placeholder="Search" />
        <button class="btn btn-danger" id="closeSearch">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>
</div> 