
    <title>ShoeShop</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <style>
    .swiper-slide {
    flex-shrink: 0;
    width: 70%;
    height: 50%;
    position: relative;
    transition-property: transform;
} html, body {
  height: 100%; /* Set the height of the HTML and body elements to 100% */
  margin: 0; /* Remove default margins */
  padding: 0; /* Remove default padding */
}

.swiper.arrivals-slider {
  width: 100%; /* Set the width of the arrivals-slider to 100% */
  height: 250px; /* Adjust the height of the arrivals-slider to your desired size */
  overflow: hidden; /* Hide any overflowing content */
}

.swiper.arrivals-slider .swiper-wrapper {
  display: flex; /* Turn the swiper-wrapper into a flex container */
  flex-wrap:nowrap ; /* Prevent slides from wrapping to the next line */
  width: max-content; /* Set the width of the swiper-wrapper to the content width */
}

.swiper.arrivals-slider .swiper-slide {
  flex: 0 0 auto; /* Let the slides take their own width */
  margin-right: 10px; /* Add margin between the swiper slides */
}

.swiper.arrivals-slider .image {
  width: 100%; /* Set the width of the image container to 100% */
  height: 100%; /* Set the height of the image container to 100% */
}

.swiper.arrivals-slider .image img {
  width: 100%; /* Make the image fit the width of its container */
  height: 100%; /* Make the image fit the height of its container */
  object-fit: cover; /* Ensure the image covers the container without distortion */
}
/* //-------------Klasa e featured slider -------*/
.swiper.featured-slider {
  width: 100%; /* Set the width of the featured-slider to 100% */
  height: 450px; /* Adjust the height of the featured-slider to your desired size */
  overflow: hidden; /* Hide any overflowing content */
}

.swiper.featured-slider .swiper-wrapper {
  display: flex; /* Turn the swiper-wrapper into a flex container */
  flex-wrap: nowrap; /* Prevent slides from wrapping to the next line */
  width: max-content; /* Set the width of the swiper-wrapper to the content width */
}

.swiper.featured-slider .swiper-slide {
  flex: 0 0 auto; /* Let the slides take their own width */
  margin-right: 10px; /* Add margin between the swiper slides */
}

.swiper.featured-slider .box {
  width: 100%; /* Set the width of the box container to 100% */
  height: 100%; /* Set the height of the box container to 100% */
}
/* ------------------Klasa e reviews --------------------*/
div.swiper.reviews-slider {
  display: flex; /* Display the reviews-slider as a flex container */
  overflow: hidden; /* Hide any overflowing content */
}

div.swiper.reviews-slider .swiper-wrapper {
  display: flex; /* Display the swiper-wrapper as a flex container */
  flex-wrap: nowrap; /* Prevent slides from wrapping to the next line */
}

div.swiper.reviews-slider .swiper-slide {
  flex: 0 0 auto; /* Let the slides take their own width */
  margin-right: 0; /* Remove margin between the swiper slides */
}

div.swiper.reviews-slider .box {
  width: 100%; /* Set the width of the box container to 100% */
  height: auto; /* Allow the height of the box container to adjust to content */
}
</style>
<button onclick="refreshPage()">Refresh Page</button>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <header class="header">
        <div class="header-1">
            <a href="#" class="logo"><i class = "fas fa-book"></i>ShoeShop</a>
           
            <form action = "" class = "search-form">
                <input type = "search" name ="" placeholder = "Kërko këtu..." id="search-box">
                <label for ="search-box" class ="fas fa-search"></label>
            </form>

            <div class = "icons">
                <div id = "search-btn" class="fas fa-search"></div>
                
            </div>

        </div> 

        <div class="header-2">
            <nav class = "navbar">
                <a href = "../home/index.php">Faqja Kryesore</a>
                <a href = "../shop/shop.php">Te Gjitha </a>
                <a href = "../contactus/contactus.php">Kontakti</a>
                <a href = "../blogs/blogs.php">Blogjet</a>
                <a href = "../signUp/signup.php">Regjistrohu</a>
                <a href = "../logIn/login.php">Kyçuni</a>
                
            </nav>
        </div>
    </header>
    <!-- header mbaron -->

    <!-- navbari i poshtem fillon -->
    
    

    <nav class = "bottom-navbar">
        <a href = "#home" class="fas fa-home"></a>
        <a href = "#featured" class = "fas fa-list"></a>
        <a href = "#arrivals" class = "fas fa-tags"></a>
        <a href = "#reviews" class = "fas fa-comments"></a>
        <a href = "#blogs" class = "fas fa-blog" ></a>
    </nav>

 
     

<!-- sektori i faqes kryesore -->

    <selection class ="home" id ="home">
        <div class ="row">
        <div class ="content">
            <h3>Deri në 70% zbritje</h3>
            <p>Sometimes in life, we need good shoes for a good walk,and a good life!
            <b> •Colleen Hoover• </b></p>
            <a href ="#" class ="btn">Bli Tani</a>

        </div>
        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/shoe1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/shoe2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/shoe3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/shoe4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/shoe5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/shoe6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>
        </div>
    
    </selection>
<!-- sektori i faqeskryesore mbaron -->
<!-- sektori i ikonave fillon -->
<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>Transport pa pagesë</h3>
            <p>Mbi shumën 50€</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>Pagesë e Siguruar</h3>
            <p>Mbi 100 Pagesa Të Sigurta</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>Kthimi I Thjeshtë</h3>
            <p>10 ditë afatë kthimi</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 Mbështetje</h3>
            <p>Na kontaktoni në çdo moment!</p>
        </div>
    </div>

</section>
<!-- sektori i ikonave perfundon ketuu -->
<section class="featured" id="featured">

    <h1 class="heading"> <span>Zbritjet</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe7.png" alt="">
                </div>
                <div class="content">
                    <h3>Nike</h3>
                    <div class="price">50.00€ <span>69.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe8.png" alt="">
                </div>
                <div class="content">
                    <h3>Nike</h3>
                    <div class="price">69.99€ <span>129.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe9.png" alt="">
                </div>
                <div class="content">
                    <h3>Nike</h3>
                    <div class="price">29.99€ <span>59.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe10.png" alt="">
                </div>
                <div class="content">
                    <h3>New Balance</h3>
                    <div class="price">49.99€ <span>69.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe11.png" alt="">
                </div>
                <div class="content">
                    <h3>Adidas</h3>
                    <div class="price">50.99€ <span>89.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe12.png" alt="">
                </div>
                <div class="content">
                    <h3>Adidas</h3>
                    <div class="price">159.99€ <span>209.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe13.png" alt="">
                </div>
                <div class="content">
                    <h3>Jordan</h3>
                    <div class="price">159.99€ <span>229.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe14.png" alt="">
                </div>
                <div class="content">
                    <h3>Jordan</h3>
                    <div class="price">149.99€ <span>189.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe15.png" alt="">
                </div>
                <div class="content">
                    <h3>New Balance</h3>
                    <div class="price">159.99€ <span>209.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/shoe16.png" alt="">
                </div>
                <div class="content">
                    <h3>New Balance </h3>
                    <div class="price">29.99€ <span>49.99€</span></div>
                    <a href="#" class="btn">Shtoni në karrocë</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>
<!-- sektori i librave te paraqitur perfundon ketu -->
<!-- sektori i permirsimeve fillon ketu -->
<section class="newsletter">

    <form action="">
        <h3>Abonohuni për përditësimet më të fundit</h3>
        <input type="email" name="" placeholder="Shkruaj email-in tuaj..." id="" class="box">
        <input type="submit" value="abonohu" class="btn">
    </form>

</section>

<!-- sektori i lajmeve mbaron ketu -->
<!-- sektori i librave te fundti fillon ketu -->
<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>Ardhjet e reja</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s1.png" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">19.99€ <span>29.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">25.99€ <span>39.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">35.99€ <span>79.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">38.99€ <span>50.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">159.99€ <span>200.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">99.99€ <span>159.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">150.99€ <span>201.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">125.99€ <span>209.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">49.99€ <span>59.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/s10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>E Re</h3>
                    <div class="price">15.99€ <span>20.99€</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- sektori i ardhjeve te reja perfundon ketu -->
<!-- sektori i marrveshjeve fillon ketu -->
<section class="deal">

    <div class="content">
        <h3>Oferta e ditës</h3>
        <h1>deri në 50% zbritje</h1>
        <p>"Këpucët transformojnë gjuhën e trupit dhe qëndrimin tënd. Ata të rrisin fizikisht dhe emocionalisht." - Christian Louboutin</p>
        <a href="#" class="btn">Bli tani</a>
    </div>

    <div class="image">
        <img src="image/patika.png" alt="">
    </div>

</section>

<!-- sektori i marrveshjeve mbaron ketu -->
<!-- sektori i komenteve fillon ketu -->
<section class="reviews" id="reviews">

    <h1 class="heading"> <span>Komentet e klientëve</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <h3>John Deo</h3>
                <p> Unë po habitem me këto Këpucët e mrekullueshëm </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <h3>Sena Paul</h3>
                <p>E mrekullueshme :)</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <h3>Mark Berk</h3>
                <p>Sa më shpesh që hyjë aq më shumë më pëlqejnë. </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <h3>Lore Div</h3>
                <p>Janë Këpucë fantastike ia u sugjerojë të gjithve.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <h3>Jim Khan</h3>
                <p>E kënaqur me punën tuaj, Jeni më të mirët☻</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <h3>Elsa Bob</h3>
                <p>Shkelqyeshëm</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>

<!-- sektori i komenteve mbaron ketu -->

<!-- sektori i footerit fillon ketu  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Lokacioni ynë</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Gjilan  </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Prishtinë </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Prizeren </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Pejë </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Ferizaj </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Lipjan </a>
        </div>

        <div class="box">
            <h3>Lidhjet e shpejta</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Faqja Kryesore </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Librat e paraqitur </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Ardhjet </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Komentet </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Blogjet </a>
        </div>

        <div class="box">
            <h3>Lidhje shtesë</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> informacioni i llogarisë</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> artikujt e porositur </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Politika e privatësisë </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Metoda e pagesës </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> shërbimet tona </a>
        </div>

        <div class="box">
            <h3>informacion kontakti</h3>
            <a href="#"> <i class="fas fa-phone"></i> +383 45 252 128 </a>
            <a href="#"> <i class="fas fa-phone"></i> +383 45 469 188 </a>
            <a href="#"> <i class="fas fa-envelope"></i> anesazhegrova6@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> blendabiqkaj3@gmail.com </a>
            <!--<img src="image/kosovomapp.png" class="map" alt="">-->
        </div>
        
    </div>

    <div class="share">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
        <a href="https://www.pinterest.com/" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> krijuar nga <span>Anesa Zhegrova & Blendiona Biqkaj</span> | të gjitha të drejtat e rezervuara! </div>

</section>

<!-- sektori i footerit mbaron ketu -->
<!-- sektori i loaderit filllon ketu -->

<!--<div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div> -->


<!-- sektori i loaderit perfundon ketu -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- linku i js-->
    <script src="JS.js"></script>
    
</body>
</html>
