    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
					<span><img src="/<?php echo $prefix ?>img/logo-small.jpg" />
                    <span class="brand-name">JOORIS</span></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="navHome">
                        <a href="/<?php echo $prefix ?>index.php">Home</a>
                    </li>						
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wat doen we <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/<?php echo $prefix ?>diensten/sanitair.php"><i class="fa fa-shower"></i><span class="pull-right">Sanitair</span></a>
                            </li>   			
                            <li>
                                <a href="/<?php echo $prefix ?>diensten/elektriciteit.php"><i class="fa fa-plug"></i><span class="pull-right">Elektriciteit</span></a>
                            </li>  
                            <li>
                                <a href="/<?php echo $prefix ?>diensten/verwarming.php"><i class="fa fa-thermometer-three-quarters"></i><span class="pull-right">Verwarming</span></a>
                            </li>  
                            <li>
                                <a href="/<?php echo $prefix ?>diensten/warmtepomp.php"><i class="fa fa-sun-o"></i><span class="pull-right">Warmtepompen</span></a>
                            </li>  
                            <li>
                                <a href="/<?php echo $prefix ?>diensten/airco.php"><i class="fa fa-snowflake-o"></i><span class="pull-right">Airco</span></a>
                            </li>  
							
                            <li class="nav-divider-top">
                                <a href="/<?php echo $prefix ?>diensten/bespaar.php">Bespaar op je energie</a>
                            </li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Onderhoud <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/<?php echo $prefix ?>onderhoud/interventie.php">Kleine interventie</a>
                            </li>   			
                            <li>
                                <a href="/<?php echo $prefix ?>onderhoud/onderhoud.php">Wettelijk onderhoud</a>
                            </li>  							
                            <!-- <li class="nav-divider-top">
                                <a href="/<?php echo $prefix ?>onderhoud/attestbtw.php">Attest verlaagde BTW</a>
                            </li>  -->
                        </ul>
                    </li>					
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Producten <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/<?php echo $prefix ?>producten/douche.php">Veilige inloopdouche</a>
                            </li>  							
                        </ul>
                    </li>					
                    <li>
                        <a href="/<?php echo $prefix ?>merken.php">Merken</a>
                    </li>
                    <li>
                        <a href="/<?php echo $prefix ?>promoties.php">Promoties</a>
                    </li>
                    <li>
                        <a href="/<?php echo $prefix ?>contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>