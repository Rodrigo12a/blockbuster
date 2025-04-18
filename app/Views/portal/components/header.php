
        <!-- Header Section Begin -->
        <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/">
                            <img src="<?=base_url(RECURSOS_PORTA_LOGIN_IMG.'/blockbuster.png')?>" width="100%" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a  class="active" href="<?=site_url('/')?>">Inicio</a></li>
                                <li><a href="<?=site_url('/categorias ')?>">Categorias <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="<?=site_url('/categorias ')?>">Categorias</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="/blog">Blog Details</a></li>
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="<?=site_url('/login ')?>">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=site_url('/blog')?>">Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="<?=site_url('/login ')?>"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->  