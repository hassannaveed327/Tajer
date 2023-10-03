<link href="{{asset('app/css/home.css')}}" rel="stylesheet" >
<header class="hdr global_width">
    <div class="hdr-mobile show-mobile  menu-full-new">

        <div class="hdr-content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-2">

                        <!-- <a href="javascript:history.go(-1)" class="back-btn-page"><img src="https://thetajer.com/images/left-arrow.svg" /> -->

                        <a href="#" class="item mobilemenu-toggle">

                            <div class="col">

                                <ion-icon role="img" class="icon icon-menu" aria-label="home outline"></ion-icon>
                            </div>

                        </a>



                    </div>



                    <div class="col-8">
                        <div class="logo-holder" style="margin: 0 auto;">
                            <a href="https://thetajer.com" class="logo" title="Diarymart">
                                <!--                     <p class="logo-text"><b>Diarymart</b>.in</p> -->
                                <img onclick="window.location.href='https://thetajer.com'" src="https://thetajer.com/images/aldivo-logo.png" >
                            </a>
                        </div>



                        <!-- <div class="page-head-name">


                  <p id="brdname"></p>

                </div> -->

                    </div>

                    <div class="col-7 d-lg-block d-none">
                        <div class="appBottomMenu hdr">

                            <a href="javascript:void(0)" onclick="movetowishlist()" class="item ">

                                <div class="col">

                                    <img class="menu-icons" src="https://thetajer.com/images/wishlist-a.svg" style=" width:20px"> <span class="count wishlistcount redwish">0</span> </div>

                            </a>



                            <a href="#" data-drawer-trigger aria-controls="cart-bar" aria-expanded="false" class="item ">

                                <div class="col"> <img class="menu-icons" src="https://thetajer.com/images/cart-a.svg" style=" width:20px">
                                    <span class="count cartcount">0</span> </div>



                            </a> <a href="javascript:void(0)"  onclick="movetomyaccount();"  class="item " aria-expanded="false" >

                                <div class="col"> <img class="menu-icons" src="https://thetajer.com/images/user-a.svg" style=" width:20px">  </div>

                            </a> </div>
                    </div>



                    <div class="col-2 home-width">

                        <ul class="tab-top-cart pt-1">


                            <li><a href="javascript:void(0);" class="btn_search_mob"><svg viewBox="0 0 24 24">

                                        <path fill="#3E4152" fillrule="evenodd" d="M3.438 9.754a6.415 6.415 0 016.408-6.409
                                        6.415 6.415 0 016.409 6.409 6.416 6.416 0 01-6.409 6.408 6.416 6.416 0 01-6.408-6.408M21.816
                                        20.87l-5.974-6.02a7.839 7.839 0 001.88-5.097c0-4.343-3.534-7.875-7.876-7.875-4.342 0-7.875 3.532-7.875
                                        7.875 0 4.342 3.533 7.875 7.875 7.875a7.837 7.837 0 004.946-1.753l5.983 6.029a.73.73 0 001.037.004.733.733
                                         0 00.004-1.038"></path>

                                    </svg>

                                    <!--<img src="https://thetajer.com/images/icon_search.svg" class="search-icon" />-->

                                </a></li>


                        </ul>



                    </div>

                </div>



            </div>

        </div>

    </div>



    <div class="search_mob_wp" style="display: none;">
        <form name="search_form_home" id="search_form_home" class='search_form' >

            <input type="search" class=" js-typeahead-game_v3 form-control" placeholder="Search products" autocomplete="off" onkeypress="return trim(this)" id="search" name="query" >

            <button type="submit" disabled class="btn_1 full-width"><img class="btn_search_mob_close" src="https://thetajer.com/images/cancel.svg" /></button>

        </form>
    </div>



    <div class="hdr-desktop hide-mobile">

        <div class="hdr-content hide-mobile p-0">

            <div class="container-fluid">

                <div class="row">

                    <!-- <div class="nav-holder col-sm-2">

           <a href="https://thetajer.com" class="logo ml-0 pl-1" title="Logo"><img src="https://thetajer.com/images/aldivo-logo.png?ver:1.3" style="width: 100%;"></a>

          </div> -->

                    <div class="col col-sm-6 logo-holder">
                        <!-- Header Search -->

                        <!-- <form name="search_form" id="search_form" class="form-wrapper cf search_form" style="width:550px;margin:0 auto;display:none;" >

                <input type="search" class="js-typeahead-game_v3 form-control input-search" placeholder="Search products" id="search" name="query" autocomplete="off" onkeypress="return trim(this)">

                <button class="btn btn-search"  type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

              </form> -->



                        <!-- <form class="">

              <input type="text"  required>

              <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

            </form> -->

                    </div>

                    <div class="col-sm-12 top-icons pr-0">
                        <ul class="mmenu mmenu-js float-right mr-2">
                            <div class="col-auto minicart-holder float-left" style="margin-top: 3px;">
                                <div class="minicart minicart-js col"><a href="#!" onclick="movetotrackyourorder()" class="minicart-link" title="Track Your Order"> <img class="iconi-ii" src="https://thetajer.com/images/header-icon/map.svg" style="opacity: 1;width: 20px;"> <span class="text-white" style="font-size: 12px;">Track</span> </a> </div>
                            </div>
                            <div class="col-auto minicart-holder float-left " style="margin-top: 3px;filter:">
                                <div class="minicart minicart-js col"><a href="#!" onclick="window.location.href='https://thetajer.com/help'" class="minicart-link" title="Help"><img class="iconi-ii" src="https://thetajer.com/images/header-icon/help.svg" style="opacity: 1;width: 20px;"> <span class="text-white" style="font-size: 12px;">Help</span> </a> </div>
                            </div>

                        </ul>
                    </div>

                    <div class="col-sm-3 top-icons pr-0 d-none">

                        <div id="champion-counter" class="champion-counter"></div>

                        <div class="col-auto custom-col dropdown">


                            <a data-drawer-trigger aria-controls="login-bar" aria-expanded="false" style="cursor:pointer;" title="My Account">

                                <div class="hdr-icn-text"> <img class="icon icon-person " id="showlg" src="https://thetajer.com/images/user-a.svg" style="filter: invert(1);"></div>

                            </a>


                        </div>

                        <div class="col-auto custom-col"> <a title="WishList" href="javascript:void(0)" onclick="movetowishlist();" style="cursor:pointer;">

                                <div class="hdr-icn-text"> <img  class="iconi-ii" src="https://thetajer.com/images/wishlist-a.svg"></div>

                                <span class="wish-heart wishlistcount redwish">0</span>

                            </a> </div>



                        <div class="col-auto minicart-holder">

                            <div class="minicart minicart-js col"><a data-drawer-trigger aria-controls="cart-bar"  aria-expanded="false" class="minicart-link" title="Cart"> <img class="iconi-ii" src="https://thetajer.com/images/cart-a.svg"> <span class="minicart-qty"><span id="qh" class="qh redwish cartcount ">--</span></span><span class="show-mobile">Cart</span> </a> </div>

                        </div>


                        <div class="col-auto minicart-holder">

                            <div class="minicart minicart-js col"><a href="#!" onclick="window.location.href='https://thetajer.com/help'" class="minicart-link" title="Help"><img class="iconi-ii" src="https://thetajer.com/images/help-a.png"> <span class="show-mobile">help</span> </a> </div>

                        </div>


                        <div class="col-auto minicart-holder">

                            <div class="minicart minicart-js col"><a href="#!" onclick="movetotrackyourorder()"  class="minicart-link" title="Track Your Order"> <img class="iconi-ii" src="https://thetajer.com/images/location-a.png"> <span class="show-mobile">Track Your Order</span> </a> </div>

                        </div>


                        <!--<div class="col-auto minicart-holder">

                <div class="minicart minicart-js col dropdown-toggle icon-boo" data-toggle="dropdown"><a  class="minicart-link" title="Currency"> <p class="currency">&#36;</p><span class="show-mobile">Cart</span> </a> </div>
                 <ul class="dropdown-menu dropdown-menu-right acc-drp">
                                             <li><a class=" bg-danger text-light" href="https://thetajer.com/changecurrency.php?val=154"><img src="https://thetajer.com/images/flags/us.png" class="flag-img "> $</a></li>
                                          <li><a class="" href="https://thetajer.com/changecurrency.php?val=104"><img src="https://thetajer.com/images/flags/pk.png" class="flag-img "> PKR</a></li>

                </ul>

            </div>-->

                        <div class="col-auto minicart-holder">

                            <div class="minicart minicart-js col"><a onclick="myFunction()" class="minicart-link"> <img class="iconi-ii" src="https://thetajer.com/images/search-a.png"> <span class="show-mobile">Cart</span> </a> </div>

                        </div>



                        <!-- <div class="col-auto ser-all">

              <div class="filter-size">

                <select id="size-filter" name="size" class="form-control text-dark btn-block cart-btm-btn" onchange="selectSizeWiseProduct(this.value)"  style="display:none;" >

                  <option value="0">Filter By Size</option>


                    <option value="1">Size : No Size</option>


                    <option value="2">Size : S</option>


                    <option value="3">Size : M</option>


                    <option value="4">Size : L</option>


                    <option value="10">Size : 20</option>


                    <option value="11">Size : 22</option>


                    <option value="12">Size : 24</option>


                    <option value="13">Size : Ruled</option>


                    <option value="14">Size : Unruled</option>


                    <option value="15">Size : Dot Grid</option>


                    <option value="16">Size : XS</option>


                    <option value="17">Size : XL</option>


                    <option value="18">Size : 2XL</option>


                    <option value="19">Size : A</option>


                    <option value="20">Size : B</option>


                    <option value="21">Size : C</option>


                    <option value="24">Size : A4</option>


                    <option value="25">Size : A5</option>


                    <option value="26">Size : B6</option>


                    <option value="27">Size : Squared</option>


                    <option value="28">Size : 25</option>


                    <option value="29">Size : 50</option>


                    <option value="30">Size : 75</option>


                    <option value="31">Size : 100</option>




                </select>

              </div>

            </div> -->

                    </div>

                </div>




            </div>
            <div class="">

                <div class="hdr-nav menu-full-new">

                    <div class="container-fluid d-flex py-2" style="    align-items: center;">

                        <!--mmenu-->
                        <!-- <ul class="mmenu mmenu-js float-right">
      <li class="mmenu-item--mega text-danger px-1 font-12 text-capitalize"> Quickly Go To: </li>

      <li class="mmenu-item--mega"><a href="https://www.diarymart.in/upload/MjAyMi0xMS0xNyAwNjoxNTozMg==_Diarymart.pdf" target="_blank" class="font-12 text-capitalize">Download Catalogue 2023</a></li>

      <li class="mmenu-item--mega"><a href="https://www.diarymart.in/help" target="_blank" class="font-12 text-capitalize">Bulk Order +91-93540 33329</a></li>

      <li class="mmenu-item--mega"><a href="https://www.diarymart.in/corporate/index.php" target="_blank" class="font-12 text-capitalize">Corporate Website</a></li>
         </ul> -->

                        <ul class="mmenu mmenu-js m-0">
                            <a href="https://thetajer.com" class="" title="Diarymart">
                                <p class="logo-text img-hide"><img src="https://thetajer.com/images/aldivo-logo.png"></p>
                                <p class="logo-text img-show"><img src="https://thetajer.com/images/mart-logo.png"></p>
                            </a>
                        </ul>

                        <div class="header-search hs-simple">
                            <form action="#" class="input-wrapper">
                                <div class="dropdown allcat">
                                    <a href="#currency">All</a>
                                    <ul class="dropdown-box">
                                        <li><a href="#USD">Loose Fabric</a></li>
                                        <li><a href="#EUR">Laces</a></li>
                                        <li><a href="#EUR">Buttons</a></li>
                                        <li><a href="#EUR">Trims</a></li>
                                        <li><a href="#EUR">Stationary</a></li>
                                    </ul>
                                </div>
                                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search..." required />
                                <button class="btn btn-search" type="submit" title="submit-button">
                                    <i class="fa fa-search" style="font-weght:300"></i>
                                </button>
                            </form>


                        </div>




                        <!--/mmenu-->
                        <div class="top-icons pr-0 d-flex ml-auto">
                            <div id="champion-counter" class="champion-counter"></div>
                            <form name="search_form" id="search_form" class="form-wrapper cf search_form" style="width: 200px;margin: 0 auto;margin-top: -4px;display: none;">
                                <input type="search" class="js-typeahead-game_v3 form-control input-search" placeholder="Search products" id="search" name="query" autocomplete="off" onkeypress="return trim(this)">
                                <button class="btn btn-search"  type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                            <div class="col-auto minicart-holder">
                                <div class="minicart minicart-js col"><a class="search-icon minicart-link"> <img class="iconi-ii filter" src="https://thetajer.com/images/header-icon/search.svg"></a>
                                    <a class="cross-icon minicart-link" style="display: none;width: 28px;"> <img class="iconi-ii" src="https://thetajer.com/images/header-icon/cross.svg"></a> </div>
                            </div>





                            <div class="col-auto minicart-holder">
                                <div class="minicart minicart-js col"><a onclick="populateCart()" class="minicart-link" title="Cart"> <img class="iconi-ii filter" src="https://thetajer.com/images/header-icon/cart.svg"> <span class="minicart-qty"><span id="qh" class="qh redwish  cartcount ">0</span></span><span class="show-mobile">Cart</span> </a> </div>
                            </div>




                            <div class="col-auto custom-col"> <a title="WishList" href="javascript:void(0)" onclick="movetowishlist();" style="cursor:pointer;">
                                    <div class="hdr-icn-text"> <img class="iconi-ii filter" src="https://thetajer.com/images/header-icon/wishlist.svg" style="margin-top: 2px;"></div>
                                    <span class="wish-heart wishlistcount redwish">0</span>
                                </a>
                            </div>
                            <style>
                                .dropdown {
                                    position: relative;
                                    display: inline-block;
                                }

                                /* Style the button that toggles the dropdown menu */
                                .dropbtn {
                                     //
                                }

                                /* Style the dropdown menu */
                                .dropdown-content {
                                    display: none;
                                    position: absolute;
                                    background-color: #f9f9f9;
                                    min-width: 160px;
                                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                    z-index: 1;
                                }

                                /* Style the dropdown menu links */
                                .dropdown-content button {
                                    padding: 12px 16px;
                                    text-decoration: none;
                                    display: block;
                                }

                                /* Change color on hover */
                                .dropdown-content button:hover {
                                    background-color: #ddd;
                                }

                                /* Style the dropdown menu links */
                                .dropdown-content a {
                                    padding: 12px 16px;
                                    text-decoration: none;
                                    display: block;
                                }

                                /* Change color on hover */
                                .dropdown-content a:hover {
                                    background-color: #ddd;
                                }

                                /* Show the dropdown menu when the button is clicked */
                                .show {
                                    display: block;
                                }
                            </style>
                            <div class="col-auto custom-col">
                                    <div>
                                        <img class="icon icon-person filter dropbtn" id="showlg" onclick="toggleDropdown()"  src="https://thetajer.com/images/header-icon/user.svg" >
                                        <div id="myDropdown" class="dropdown-content mt-1">
                                            @if(!\Illuminate\Support\Facades\Auth::check())
                                            <a href="{{route('login')}}">Login</a>
                                            <a href="{{ route('register') }}">Sign Up</a>
                                            @endif
                                            @auth()
{{--                                                <a href="{{route('dashboard')}}">Dashboard</a>--}}
                                                <a href="#">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                                                <form id="myForm" action="{{route('logout')}}" method="post">
                                                    @csrf
                                                    <a href="#" id="submitForm">Logout</a>
                                                </form>
                                                <script>
    document.getElementById('submitForm').addEventListener('click', function (e) {
        e.preventDefault(); // Prevent the default anchor link behavior

        // Trigger the form submission
        document.getElementById('myForm').submit();
    });
</script>
                                            @endauth
                                        </div>
                                    </div>
                            </div>
                            <script>
                                function toggleDropdown() {
                                    var dropdown = document.getElementById("myDropdown");
                                    if (dropdown.style.display === "block") {
                                        dropdown.style.display = "none";
                                    } else {
                                        dropdown.style.display = "block";
                                    }
                                }

                                // Close the dropdown if the user clicks outside of it
                                window.onclick = function(event) {
                                    if (!event.target.matches('.dropbtn')) {
                                        var dropdowns = document.getElementsByClassName("dropdown-content");
                                        for (var i = 0; i < dropdowns.length; i++) {
                                            var openDropdown = dropdowns[i];
                                            if (openDropdown.style.display === "block") {
                                                openDropdown.style.display = "none";
                                            }
                                        }
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu">
            <ul class="mmenu mmenu-js ml-2">

                <li class="mmenu-item--mega"><a href="/" ><span>Home</span></a></li>
                @auth()
                <li class="mmenu-item--mega"><a href="{{route('dashboard')}}" ><span>Dashboard</span></a></li>
                @endauth
                <li class="mmenu-item--mega"><a href="/about-us" ><span>About Us</span></a></li>



                <li class="mmenu-item--mega"><a href="https://thetajer.com/marketplace"  id="firstmenu"  title="Market Place"><span>Market Place</span></a>
                    <div class="mmenu-submenu mmenu-submenu-with-sublevel">
                        <div class="mmenu-submenu-inside" style="max-height: 171.609px;">
                            <div class="menu-full">
                                <div class="mmenu-cols column-12 px-2" </div>


                            <div class="mmenu-col">

                                <p><a style="color:#000!important;font-weight:600" href="https://thetajer.com/loose-fabric" title="Loose fabric">Loose fabric</a>&nbsp;</p>


                                <ul class="submenu-list">

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/silk" title="Silk"><span>Silk</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/cotton" title="Cotton"><span>Cotton</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/lawn" title="Lawn"><span>Lawn</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/pema-lawn" title="Pema Lawn"><span>Pema Lawn</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/charmeuse" title="Charmeuse"><span>Charmeuse</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/georgette" title="Georgette"><span>Georgette</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/tissue" title="Tissue"><span>Tissue</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/tissue-silk" title="Tissue Silk"><span>Tissue Silk</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/china-silk" title="China Silk"><span>China Silk</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/latin" title="Latin"><span>Latin</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/loose-fabric/net" title="Net"><span>Net</span> &nbsp;</a></li>


                                </ul>

                            </div>




                            <div class="mmenu-col">

                                <p><a style="color:#000!important;font-weight:600" href="https://thetajer.com/laces" title="Laces">Laces</a>&nbsp;</p>


                                <ul class="submenu-list">

                                    <li class=""><a href="https://thetajer.com/market-place/laces/shuttle-lace" title="Shuttle Lace"><span>Shuttle Lace</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/laces/chochet-lace" title="Chochet lace"><span>Chochet lace</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/laces/net-lace" title="Net Lace"><span>Net Lace</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/laces/silk-lace" title="Silk Lace"><span>Silk Lace</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/laces/fancy-lace" title="Fancy Lace"><span>Fancy Lace</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/laces/cotton-lace" title="Cotton Lace"><span>Cotton Lace</span> &nbsp;</a></li>


                                </ul>

                            </div>




                            <div class="mmenu-col">

                                <p><a style="color:#000!important;font-weight:600" href="https://thetajer.com/buttons" title="Buttons">Buttons</a>&nbsp;</p>


                                <ul class="submenu-list">

                                    <li class=""><a href="https://thetajer.com/market-place/buttons/mettallic-button" title="Mettallic Button"><span>Mettallic Button</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/buttons/wooden-button" title="Wooden Button"><span>Wooden Button</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/buttons/plastic-button" title="Plastic Button"><span>Plastic Button</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/buttons/fancy-button" title="Fancy Button"><span>Fancy Button</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/buttons/punch-button" title="Punch Button"><span>Punch Button</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/buttons/tich-button" title="Tich Button"><span>Tich Button</span> &nbsp;</a></li>


                                </ul>

                            </div>




                            <div class="mmenu-col">

                                <p><a style="color:#000!important;font-weight:600" href="https://thetajer.com/trims" title="Trims">Trims</a>&nbsp;</p>


                                <ul class="submenu-list">

                                    <li class=""><a href="https://thetajer.com/market-place/trims/pearls" title="Pearls"><span>Pearls</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/trims/pearls-string" title="Pearls String"><span>Pearls String</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/trims/beads" title="Beads"><span>Beads</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/trims/beads-string" title="Beads String"><span>Beads String</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/trims/nakshi" title="Nakshi"><span>Nakshi</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/trims/kora" title="Kora"><span>Kora</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/trims/dabka" title="Dabka"><span>Dabka</span> &nbsp;</a></li>


                                </ul>

                            </div>




                            <div class="mmenu-col">

                                <p><a style="color:#000!important;font-weight:600" href="https://thetajer.com/stationary" title="Stationary">Stationary</a>&nbsp;</p>


                                <ul class="submenu-list">

                                    <li class=""><a href="https://thetajer.com/market-place/stationary/tracing-wheel" title="Tracing Wheel"><span>Tracing Wheel</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stationary/japanese" title="Japanese"><span>Japanese</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stationary/french" title="French"><span>French</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stationary/pattern-sheet" title="Pattern Sheet"><span>Pattern Sheet</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stationary/drawing-boards" title="Drawing Boards"><span>Drawing Boards</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stationary/clipboards" title="Clipboards"><span>Clipboards</span> &nbsp;</a></li>


                                </ul>

                            </div>




                            <div class="mmenu-col">

                                <p><a style="color:#000!important;font-weight:600" href="https://thetajer.com/stitched" title="Stitched">Stitched</a>&nbsp;</p>


                                <ul class="submenu-list">

                                    <li class=""><a href="https://thetajer.com/market-place/stitched/shirt" title="Shirt"><span>Shirt</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stitched/lower" title="Lower"><span>Lower</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stitched/stole" title="Stole"><span>Stole</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stitched/dupatta" title="Dupatta"><span>Dupatta</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stitched/maxi-dress" title="Maxi dress"><span>Maxi dress</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stitched/bolero-shrug" title="Bolero/Shrug"><span>Bolero/Shrug</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/market-place/stitched/abaya" title="Abaya"><span>Abaya</span> &nbsp;</a></li>


                                </ul>

                            </div>




                            <div class="mmenu-col">

                                <p><a style="color:#000!important;font-weight:600" href="https://thetajer.com/marketplace/ready-to-wear" title="Ready To Wear">Ready To Wear</a>&nbsp;</p>


                                <ul class="submenu-list">

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/single-shirt" title="Single Shirt"><span>Single Shirt</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/trouser-pants" title="Trouser/Pants"><span>Trouser/Pants</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/2pc-shirt-trouser" title="2pc Shirt+Trouser"><span>2pc Shirt+Trouser</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/2pc-shirt-dupatta" title="2pc Shirt+Dupatta"><span>2pc Shirt+Dupatta</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/dupatta-stole-shawl" title="Dupatta/Stole/Shawl"><span>Dupatta/Stole/Shawl</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/3pc-shirt-trouser-dupatta" title="3pc Shirt+Trouser+Dupatta"><span>3pc Shirt+Trouser+Dupatta</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/printed-2pc" title="Printed 2pc"><span>Printed 2pc</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/printed-3pc" title="Printed 3pc"><span>Printed 3pc</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/embroidered-2pc" title="Embroidered 2pc"><span>Embroidered 2pc</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/embroidered-3pc" title="Embroidered 3pc"><span>Embroidered 3pc</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/solid-co-ord" title="Solid Co-ord"><span>Solid Co-ord</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/dresses" title="Dresses"><span>Dresses</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/ready-to-wear/tops-blouses" title="Tops/Blouses"><span>Tops/Blouses</span> &nbsp;</a></li>


                                </ul>

                            </div>




                            <div class="mmenu-col">

                                <p><a style="color:#000!important;font-weight:600" href="https://thetajer.com/marketplace/unstitched" title="Unstitched">Unstitched</a>&nbsp;</p>


                                <ul class="submenu-list">

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/lawn-3pc-suit" title="Lawn 3pc Suit"><span>Lawn 3pc Suit</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/lawn-per-meter" title="Lawn per meter"><span>Lawn per meter</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/printed-silk" title="Printed Silk"><span>Printed Silk</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/fancy-suit" title="Fancy Suit"><span>Fancy Suit</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/printed-per-meter" title="Printed per meter"><span>Printed per meter</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/embroidered-suit" title="Embroidered Suit"><span>Embroidered Suit</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/dobby-fabric" title="Dobby Fabric"><span>Dobby Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/crosshatch-fabric" title="Crosshatch Fabric"><span>Crosshatch Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/poplin-fabric" title="Poplin Fabric"><span>Poplin Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/jersey-fabric" title="Jersey Fabric"><span>Jersey Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/lycra-fabric" title="Lycra fabric"><span>Lycra fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/arabic-lawn-fabric" title="Arabic Lawn fabric"><span>Arabic Lawn fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/chiffon-fabric" title="Chiffon Fabric"><span>Chiffon Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/silk-fabric" title="Silk Fabric"><span>Silk Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/missouri-fabric" title="Missouri Fabric"><span>Missouri Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/georgette-fabric" title="Georgette Fabric"><span>Georgette Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/cotton-fabric" title="Cotton Fabric"><span>Cotton Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/cambric-fabric" title="Cambric Fabric"><span>Cambric Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/net-fabric" title="Net Fabric"><span>Net Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/satin-silk-fabric" title="Satin Silk Fabric"><span>Satin Silk Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/tropical-suiting-fabric" title="Tropical Suiting Fabric"><span>Tropical Suiting Fabric</span> &nbsp;</a></li>

                                    <li class=""><a href="https://thetajer.com/marketplace/unstitched/leather" title="Leather"><span>Leather</span> &nbsp;</a></li>


                                </ul>

                            </div>








                            <div class="mmenu-col order-last bg-white" style="padding:0;"><img src="https://thetajer.com/photos/" style="" alt=""></div>





                        </div>

                    </div>
    </li>




    <!--    <div class="mmenu-col" style="padding:0"><img src="https://thetajer.com/photos/MjAyMS0xMC0xMyAwNTozODoxNw==_giftstore.jpg" style="height: 100%;object-fit: cover;" alt=""></div>    -->



    <li class="mmenu-item--mega"><a href="https://thetajer.com/etailor" ><span>E-Tailoring</span></a></li>
    <li class="mmenu-item--mega"><a href="https://thetajer.com/subscribe" ><span>Subscription</span></a></li>
    <li class="mmenu-item--mega login-link"><a href="#https://thetajer.com" ><span>Offers</span></a></li>
    <!-- <li>Blog</li> -->
    </ul>

    </div>
    </div>

</header>
