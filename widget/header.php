    <header class="header">
        <div id="menu-btn"><span class="grid"><ion-icon name="grid"></ion-icon></span></div>
        <a href="/" class="logo">MAX<span>DRIVE</span></a>

        <nav class="navbar">
            <a href="#home">HOME</a>
            <a href="Page2.html" id="vehicles">VEHICLES</a>
            <a href="page3.html" id="services">SERVICES</a>
            <a href="page4.html" id="featured">FEATURED</a>
            <a href="#contact">CONTACT</a>
        </nav>

        <div id="login-btn">
            <button class="btn">LOGIN</button>
            <span><ion-icon name="person-sharp"></ion-icon></span>
        </div>
    </header>


    <!-- header ends here -->
    <!-- login form starts here -->

    <div class="login-form-container" id="login">

        <span id="close-login-form"><ion-icon name="close-circle-outline"></ion-icon></span>

        <form name="login" data-netlify="true" method="post" onsubmit="Submit">
            <h3>User <span>Login</span></h3>
            <input type="email" placeholder="Email" class="box">
            <input type="password" placeholder="Password" class="box">
            <p>Forgot your password? <a href="#"> Click here</a></p>
            <input type="submit" value="Login" class="btn">
            <!-- <p>or login with</p> -->
            <!-- <div class="buttons">
                <a href="#" class="btn">Google</a>
                <a href="#" class="btn">Facebook</a>
            </div> -->
            <p>Don't have an account <a id="registration-btn" href="#form">Create one</a></p>
        </form>
    </div>

    <!-- Registration from starts here -->

     <div class="container2">

        <span id="close-register-form"><ion-icon name="close-circle-outline"></ion-icon></span>
        
        <form name="register" data-netlify="true" method="post" onsubmit="Submit">
            <h3>Regist<span>ration</span></h3>
            <div class="input-control">
                <input id="username" name="username" type="text" placeholder="Username" class="box">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <input id="email" name="email" type="email" placeholder="Email" class="box">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <input id="password" name="password" type="password" placeholder="Password" class="box">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <input id="password2" name="password2" type="password" placeholder="Confirm Password" class="box">
                <div class="error"></div>
            </div>

            <button type="submit" name="submit">Submit</button>

            <p>Already have an account <a id="login-connect" href="/">Login</a></p>
        </form>
     </div>

    <!-- Registration form ends here -->   


    <section class="drop-down" id="drop-down">
        <div class="one-col">
                <img src="car-logo (5).png" alt="">
            <ul>
                <li><a href="...">Suzuki <span> Swift</span></a></li>
                <li><a href="...">Suzuki <span>Ertiga</span></a></li>
                <li><a href="...">Suzuki <span>Baleno</span></a></li>
                <li><a href="...">Suzuki <span>Celerio</span></a></li>
                <li><a href="...">Suzuki <span>Alto</span></a></li>
                <li><a href="...">Suzuki <span>Swift Dezire</span></a></li>
                <li><a href="...">Suzuki <span>Brezza</span></a></li>
                <li><a href="...">Suzuki <span>Grand Vitara</span></a></li>
            </ul>
        </div>

        <div class="two-col">
            <img src="car-logo (4).png" alt="">
            <ul>
                <li><a href="...">Mahindra <span>XUV 700</span></a></li>
                <li><a href="...">Mahindra <span> XUV 500</span></a></li>
                <li><a href="...">Mahindra <span> Scorpio Classic</span></a></li>
                <li><a href="...">Mahindra <span> Scorpio N</span></a></li>
                <li><a href="...">Mahindra <span>Thar</span> </a></li>
                <li><a href="...">Mahindra <span>Bolero</span></a></li>
                <li><a href="...">Mahindra <span> Bolero Neo</span></a></li>
                <li><a href="...">Mahindra  <span>KUV 300</span></a></li>
            </ul>
        </div>

        <div class="three-col">
            <img src="car-logo (6).png" alt="">
            <ul>
                <li><a href="...">Toyota <span>Fortuner</span></a></li>
                <li><a href="...">Toyota <span>Innova Crysta</span></a></li>
                <li><a href="...">Toyota <span>Hyryder</span></a></li>
                <li><a href="...">Toyota <span>Fortuner Legendar</span></a></li>
                <li><a href="...">Toyota <span>Glanza</span></a></li>
                <li><a href="...">Toyota <span>Urban Cruiser</span></a></li>
                <li><a href="...">Toyota <span>Camry</span></a></li>
                <li><a href="...">Toyota <span>Corrola</span></a></li>
            </ul>
        </div>

        <div class="four-col">
            <img src="car-logo (3).png" alt="">
            <ul>
                <li><a href="...">Renault <span> Duster</span></a></li>
                <li><a href="...">Renault <span>Triber</span></a></li>
                <li><a href="...">Renault <span>Kiger</span></a></li>
                <li><a href="...">Renault <span>Kwid</span></a></li>
                <li><a href="...">Renault <span>Pulse</span></a></li>
            </ul>
        </div>

        <div class="four-col">
            <img src="car-logo (7).png" alt="">
            <ul>
                <li><a href="...">Honda <span>City</span></a></li>
                <li><a href="...">Honda <span> Civic</span></a></li>
                <li><a href="...">Honda <span>Accord</span></a></li>
                <li><a href="...">Honda <span>Amaze</span></a></li>
                <li><a href="...">Honda <span>Brio</span></a></li>
            </ul>
        </div>

        <div class="five-col">
            <img src="car-logo (9).png" alt="">
            <ul>
                <li><a href="...">Hyundai <span>Elantra</span></a></li>
                <li><a href="...">Hyundai <span>Verna</span></a></li>
                <li><a href="...">Hyundai <span>i20 Sport</span></a></li>
                <li><a href="...">Hyundai <span>i20 vista</span></a></li>
                <li><a href="...">Hyundai <span>Grand i10</span></a></li>
                <li><a href="...">Hyundai <span>Santa-fe</span></a></li>
                <li><a href="...">Hyundai <span>Santro</span></a></li>
            </ul>
        </div>
    </section>


    <!--drop-down 2 -->

    <section class="drop-down2" id="drop-down2">
        <div class="wash">
            <img src="wash.png" alt="">
            <h2><a href=""> CAR<span> WASH</span></a>
            </h2>
        </div>

        <div class="paint">
            <img src="car paint.png" alt="">
            <h2><a href=""> CAR<span> PAINT</span></a>
            </h2>
        </div>

        <div class="services1">
            <img src="service.png" alt="">
            <h2><a href=""> CAR<span> SERVICE</span></a>
            </h2>
        </div>
    </section>

    <!-- drop down 3 -->

    <section class="drop-down3" id="drop-down3">

    <div class="latest">
        <img src="latest.png" alt="">
    </div>
    <div class="latest-right">
        <h1>NISSAN <span>QASHQAI</span></h1>
        <ul>
            <li>Automatic</li>
            <li>Hybrid</li>
            <li>2023</li>
            <li>10,000 km</li>
        </ul>

        <button class="btn">KNOW MORE</button>
    </div>
</section>