<body>
    <!--header-->
    <div class="container">
        <div class="header">
            <div class="header-top">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="" ></a>
                </div>
                <div class="header-top-on">
                    <ul class="icon1">
                        <!--
                        <li>
                            <div class="cart1">
                                <a href="#" class="cart-in"> </a>
                            </div>
                            <ul class="sub-icon1 list">
                                <h3>Recently added items(2)</h3>
                                <div class="shopping_cart">
                                    <div class="cart_box">
                                        <div class="message">
                                            <div class="alert-close"> </div>
                                            <div class="list_img"><img src="images/10.jpg" class="img-responsive" alt=""></div>
                                            <div class="list_desc">
                                                <h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="cart_box1">
                                        <div class="message1">
                                            <div class="alert-close1"> </div>
                                            <div class="list_img"><img src="images/4.jpg" class="img-responsive" alt=""></div>
                                            <div class="list_desc">
                                                <h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total">
                                    <div class="total_left">CartSubtotal : </div>
                                    <div class="total_right">$250.00</div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="login_buttons">
                                    <div class="check_button"><a href="checkout.html">Check out</a></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </ul>
                            Cart : (empty)
                        </li>
                        -->
                        <li>
                            Register/Sign In
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!---->
            <div class="header-bottom">
                <div class="top-nav">
                    <span class="menu">
                        <!--
                        <img src="images/menu.png"/>
                        -->
                    </span>
                    <ul>
                        <!-- <li class="active"><a href="index.html">HOME</a> </li> -->
                        <li><a href="index.php" data-hover="HOME">HOME</a></li>
                        <li><a href="products.php" data-hover="APPAREL">APPAREL</a></li>
                        <li><a href="products.php" data-hover="ACCESORIES">ACCESORIES</a></li>
                        <li><a href="checkout.php" data-hover="CART">CART (empty)</a></li>
                    </ul>
                    <!--script-->
                    <script>
                        $("span.menu").click(function () {
                            $(".top-nav ul").slideToggle(500, function () {});
                        });
                    </script>
                </div>
                <div class="search">
                    <form>
                        <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>