
<h2>here your go!</h2>

<hr/>
<?php

$this->widget('my.widgets.jqsimplemenu.JqSimpleMenu', array());
?>

<script type="text/javascript">
    $(document).ready(function () {
        $('.menu').jqsimplemenu();
    });
</script>

<div class="container">

    <a class="toggleMenu" href="#">Menu</a>
    <ul class="nav  menu ">
        <li  class="test">
            <a href="#">Shoes</a>
            <ul>
                <li>
                    <a href="#">Womens</a>
                    <ul>
                        <li><a href="#">Sandals</a></li>
                        <li><a href="#">Sneakers</a></li>
                        <li><a href="#">Wedges</a></li>
                        <li><a href="#">Heels</a></li>
                        <li><a href="#">Loafers</a></li>
                        <li><a href="#">Flats</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Mens</a>
                    <ul>
                        <li><a href="#">Loafers</a></li>
                        <li><a href="#">Sneakers</a></li>
                        <li><a href="#">Formal</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Shirts</a>
            <ul>
                <li>
                    <a href="#">Mens</a>
                    <ul>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Dress Shirts</a></li>
                        <li><a href="#">Tank Tops</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Womens</a>
                    <ul>
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Blouses</a></li>
                        <li><a href="#">Dress Shirts</a></li>
                        <li><a href="#">Tunics</a></li>
                        <li><a href="#">Camisoles</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Pants</a>
            <ul>
                <li>
                    <a href="#">Mens</a>
                    <ul>
                        <li><a href="#">Trousers</a></li>
                        <li><a href="#">Slacks</a></li>
                        <li><a href="#">Jeans</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Womens</a>
                    <ul>
                        <li><a href="#">Trousers</a></li>
                        <li><a href="#">Slacks</a></li>
                        <li><a href="#">Jeans</a></li>
                        <li><a href="#">Leggings</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Skirts</a>
            <ul>
                <li>
                    <a href="#">Long</a>
                    <ul>
                        <li><a href="#">Denim</a></li>
                        <li><a href="#">Knits</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Short</a>
                    <ul>
                        <li><a href="#">Denim</a></li>
                        <li><a href="#">Knits</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Mini</a>
                    <ul>
                        <li><a href="#">Denim</a></li>
                        <li><a href="#">Knits</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Dresses</a>
            <ul>
                <li>
                    <a href="#">Casual</a>
                </li>
                <li>
                    <a href="#">Formal</a>
                    <ul>
                        <li><a href="#">Wedding</a></li>
                        <li><a href="#">Party</a></li>
                    </ul>
                </li>

            </ul>
        </li>
        <li>
            <a href="#">Sweaters</a>
            <ul>
                <li>
                    <a href="#">Mens</a>
                    <ul>
                        <li><a href="#">Wool</a></li>
                        <li><a href="#">Knitwear</a></li>
                        <li><a href="#">Light Sweaters</a></li>
                        <li><a href="#">Cardigans</a></li>
                        <li><a href="#">Hoodies</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Womens</a>
                    <ul>
                        <li><a href="#">Wool</a></li>
                        <li><a href="#">Knitwear</a></li>
                        <li><a href="#">Light Sweaters</a></li>
                        <li><a href="#">Cardigans</a></li>
                        <li><a href="#">Hoodies</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Accessories</a>
            <ul>
                <li>
                    <a href="#">Womens</a>
                    <ul>
                        <li><a href="#">Belts</a></li>
                        <li><a href="#">Bags</a></li>
                        <li><a href="#">Jewelery</a></li>
                        <li><a href="#">Hats</a></li>
                        <li><a href="#">Eyewear</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Mens</a>
                    <ul>
                        <li><a href="#">Belts</a></li>
                        <li><a href="#">Hats</a></li>
                        <li><a href="#">Eyewear</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Outerwear</a>
            <ul>
                <li>
                    <a href="#">Womens</a>
                    <ul>
                        <li><a href="#">Winter</a></li>
                        <li><a href="#">Spring/Fall</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Mens</a>
                    <ul>
                        <li><a href="#">Winter</a></li>
                        <li><a href="#">Spring/Fall</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Shipping Info</a>
        </li>
    </ul>
</div>

<div class="row">
    <ul class="menu">
        <li><a href="http://www.egrappler.com">Home</a></li>
        <li><a href="http://www.egrappler.com/about">About</a></li>
        <li><a href="#">Services </a>
            <ul>
                <li><a href="#">Sofware Development</a>
                    <ul>
                        <li><a href="#">Web Apps</a></li>
                        <li><a href="#">Widgets</a>
                            <ul>
                                <li><a href="#">jQuery Plugins</a></li>
                                <li><a href="#">Asp.NET Controls</a></li>
                                <li><a href="#">Salesforce Integration</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Interface Design</a></li>
                <li><a href="#">Technical Writing</a></li>
                <li><a href="#">Resume Writing</a></li>
            </ul>
        </li>
        <li><a href="#">Portfolio</a>
            <ul>
                <li><a href="#">Web Appliations</a></li>
                <li><a href="#">SaaS</a></li>
                <li><a href="#">Windows Applications</a></li>
                <li><a href="#">Mobile Applications</a></li>
                <li><a href="#">Server Applications</a> </li>
            </ul>
        </li>
        <li><a href="http://www.egrappler.com">Blog</a></li>
        <li><a href="http://www.egrappler.com">Contact</a></li>
    </ul>

</div>