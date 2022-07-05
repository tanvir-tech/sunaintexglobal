
        <!-- navbar  -->
        <nav class="navbar navbar-expand-lg bg-light mb-5">
            <div class="container-fluid">
                <!-- logo  -->
                <a class="navbar-brand" href="/">
                    <img src="{{asset('images/logo.png')}}" alt="sunainatexglobal" width="110px">
                </a>
                <!-- navbar toggler button  -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar full  -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- unordered list  -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- list start -->
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                            <li class="nav-item">
                                <a class="nav-link text-danger" href="#description">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="#contacts">Contact us</a>
                            </li>
                            <!-- dropdown -->
                            <li class="nav-item dropdown">
                                <!-- dropdown-button  -->
                                <a class="nav-link text-danger dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <!-- dropdown links  -->
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/products/knitwear">Knitwear</a></li>
                                    <li><a class="dropdown-item" href="/products/wovenwear">Wovenwear</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/products/sweater">Sweater</a></li>
                                    <li><a class="dropdown-item" href="/products/homeTextile">Home textile</a></li>
                                    <li><a class="dropdown-item" href="/products/fashionAccessories">Fashion accessories</a></li>
                                </ul>
                            </li>
                            <!-- dropdown -->
                            <li class="nav-item dropdown">
                                <!-- dropdown-button  -->
                                <a class="nav-link text-danger dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <!-- dropdown links  -->
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Pricing/Evaluation</a></li>
                                    <li><a class="dropdown-item" href="#">Materials sourcing</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Product development</a></li>
                                    <li><a class="dropdown-item" href="#">Pattern & Sampling</a></li>
                                </ul>
                            </li>
                        </ul>
                    </ul>
                    <!-- search bar  -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- navbar close  -->
