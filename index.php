<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Aurora</title>
</head>

<body>
    <?php
    include ('./php/nav.php');
    ?>
    <section id="home">
        <div class="container">
            <div class="bg">
                <video autoplay loop muted plays-inline class="aurora">
                    <source src="./assets/home.mp4" type="video/mp4">
                </video>
            </div>
            <div data-aos="fade-up" class="content">
                <h2>BEAUTIFUL NORTHERRN LIGHTS</h2>
                <h3>Dreams where Reality Meets Magic</h3>
                <p>Northern lights dance across Arctic skies, painting celestial wonders, captivating hearts with
                    nature's brilliance.</p>
                <a href="./read.php"> <button>READ MORE</button></a>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="imgBx">
            <img data-aos="fade-up" src="https://i.pinimg.com/564x/59/30/ae/5930aea2fac65d165c2024e0b43eeb9b.jpg"
                alt="">
            <img data-aos="fade-up" src="https://i.pinimg.com/564x/f5/5d/dd/f55dddccd2a682ab31b4f3e0bf679fcd.jpg"
                alt="">
            <img data-aos="fade-up" src="https://i.pinimg.com/564x/95/ab/68/95ab68cf2a7cdf93848de43f8a20b750.jpg"
                alt="">
        </div>
    </section>

    <section id="galleryy">
        <div data-aos="fade-up" class="content">
            <h2>PHOTO GALLERY</h2>
            <p>Share Your Moments: Explore Our Easy-to-Use Photo Gallery for Your Own Uploads!</p>
        </div>

        <div class="allimg">
            <?php
            include ('./php/connect.php');

            $sqlQuery = "SELECT * FROM images ORDER BY created_at DESC LIMIT 3";
            $result = mysqli_query($conn, $sqlQuery);
            while ($row = $result->fetch_assoc()) {
                echo '
                
                <div data-aos="fade-up" class="imgbx">
                    <div class="imgs">
                        <img src="./images/' . $row['file'] . '" alt="">
                    </div>
                    <div class="contentbx">
                        <h3>Uploaded at:' . $row['created_at'] . '</h3>
                    </div>
                </div>
                
                ';
            }
            ?>

        </div>
        <div class="buttons">
            <a href="./countries.php"><button>UPLOAD YOURS</button></a>
        </div>

    </section>

    <section id="destination">
        <h2 data-aos="fade-up">5 BEST PLACES TO SEE THE NORTHERN LIGHTS</h2>
    </section>

    <section id="destinationn">

        <div class="head">
            <h2 data-aos="fade-up">Where Is The Best Place To See The Northern Lights?</h2>
            <p data-aos="fade-up">Explore Our Top Aurora Viewing Destinations Worldwide: From remote Arctic landscapes
                to pristine wilderness and charming cities, these locations offer unforgettable experiences beneath the
                mesmerizing spectacle of the Northern Lights.</p>
        </div>

        <div class="places">
            <div class="placeimg">
                <img data-aos="fade-up"
                    src="https://www.travelandleisure.com/thmb/qY9UFueEJelAAecTA3X2E224N9Y=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/fairbanks-alaska-23bc91e78bb8441b943381178798b109.jpg"
                    alt="">
            </div>
            <div data-aos="fade-up" class="placecontent">

                <h2>1.Fairbanks, Alaska</h2>
                <p>Nestled amidst the vast Alaskan wilderness, Fairbanks stands as an ideal gateway to witness the
                    celestial ballet of the Northern Lights. Renowned for its consistently clear skies and minimal light
                    pollution, this remote city offers prime conditions for aurora viewing. Visitors are treated to a
                    unique blend of natural beauty and rugged charm, with expansive landscapes adorned by snow-capped
                    mountains and frozen rivers. From dedicated aurora viewing tours to cozy lodges equipped with heated
                    cabins, Fairbanks caters to every traveler seeking the awe-inspiring spectacle of the auroras.
                    Whether chasing the lights on a dog sled adventure or capturing their dance from a scenic overlook,
                    Fairbanks promises an unforgettable encounter with nature's most mesmerizing phenomenon.Fairbanks,
                    Alaska, offers an unparalleled aurora viewing experience amidst pristine wilderness and clear skies.
                    With minimal light pollution and optimal positioning, it's a prime destination for witnessing the
                    Northern Lights' mesmerizing dance. Whether embarking on guided tours or cozying up in heated
                    cabins, visitors are immersed in the magic of the Arctic night. From thrilling outdoor adventures to
                    cultural explorations, Fairbanks caters to every traveler seeking an unforgettable encounter with
                    nature's celestial spectacle.
                </p>
            </div>
        </div>


        <div class="places">
            <div data-aos="fade-up" class="placecontent">
                <h2>2. Abisko, Sweden</h2>
                <p>Nestled in the remote wilderness of Swedish Lapland, Abisko is renowned as one of the premier
                    destinations worldwide for experiencing the awe-inspiring Northern Lights. Situated within the
                    Arctic Circle and shielded by surrounding mountains, Abisko boasts remarkably clear skies and
                    minimal light pollution, offering optimal conditions for witnessing the celestial dance of the
                    auroras. Visitors to Abisko are greeted by breathtaking panoramas of pristine landscapes blanketed
                    in snow, enhancing the magical ambiance of the region. Whether embarking on guided aurora tours led
                    by knowledgeable local experts or simply venturing out to designated viewing areas, travelers are
                    treated to unforgettable displays of vibrant colors swirling across the night sky. Beyond aurora
                    viewing, Abisko offers a wide array of outdoor activities, including cross-country skiing,
                    snowshoeing, and ice climbing, allowing visitors to fully immerse themselves in the natural wonders
                    of the Arctic. With its serene beauty and unparalleled aurora viewing opportunities, Abisko promises
                    an enchanting and unforgettable adventure beneath the dancing lights of the Northern Hemisphere.
                </p>
            </div>

            <div class="placeimg">
                <img data-aos="fade-up" src="https://www.holidify.com/blog/wp-content/uploads/2017/04/1.jpg" alt="">
            </div>
        </div>


        <div class="places">
            <div class="placeimg">
                <img data-aos="fade-up" src="https://www.holidify.com/blog/wp-content/uploads/2017/04/2.jpg" alt="">
            </div>
            <div data-aos="fade-up" class="placecontent">

                <h2>3. Luosto, Finland</h2>
                <p>Nestled within the enchanting wilderness of Finnish Lapland, Luosto emerges as a captivating
                    destination for experiencing the mesmerizing spectacle of the Northern Lights. Set amidst
                    snow-covered landscapes and pristine forests, Luosto offers an idyllic setting for aurora
                    enthusiasts seeking a magical encounter with nature's most dazzling phenomenon. With its remote
                    location and minimal light pollution, the village of Luosto provides optimal conditions for
                    witnessing the celestial dance of the auroras. Travelers can embark on guided aurora tours led by
                    experienced local guides, who navigate through the wilderness to find the best vantage points for
                    viewing the auroras in all their splendor. Additionally, visitors have the opportunity to partake in
                    a variety of winter activities, including husky sledding, snowshoeing, and reindeer safaris, further
                    enhancing their Arctic experience. Whether admiring the Northern Lights from the comfort of cozy
                    accommodations or venturing out into the wilderness, Luosto promises an unforgettable adventure
                    beneath the shimmering lights of the Arctic sky.
                </p>
            </div>
        </div>




        <div class="places">
            <div data-aos="fade-up" class="placecontent">
                <h2>4. Siberia, Russia</h2>
                <p>In the vast expanse of Siberia, Russia, lies a land of untamed beauty and extraordinary celestial
                    phenomena. With its expansive wilderness and minimal light pollution, Siberia offers an unparalleled
                    opportunity to witness the Northern Lights in all their breathtaking glory. Travelers venturing into
                    this remote region are treated to awe-inspiring displays of vibrant colors dancing across the Arctic
                    sky. From the depths of winter, when the landscape is blanketed in snow, to the endless summer
                    nights, when the auroras illuminate the horizon, Siberia showcases the mesmerizing spectacle of the
                    auroras throughout the year. Adventurous souls can embark on guided expeditions deep into the
                    Siberian wilderness, where they can experience the magic of the Northern Lights amidst stunning
                    natural landscapes. Whether camping beneath the starry sky or staying in rustic lodges, visitors to
                    Siberia are sure to be captivated by the beauty and majesty of this remote corner of the world,
                    where the auroras paint the heavens with their celestial brushstrokes.
                </p>
            </div>

            <div class="placeimg">
                <img data-aos="fade-up" src="https://www.holidify.com/blog/wp-content/uploads/2017/04/5.jpg" alt="">
            </div>
        </div>

        <div class="places">
            <div class="placeimg">
                <img data-aos="fade-up" src="https://www.holidify.com/blog/wp-content/uploads/2017/04/8.jpg" alt="">
            </div>
            <div data-aos="fade-up" class="placecontent">

                <h2>5. Tromsø, Norway</h2>
                <p>Nestled amidst the rugged beauty of Norway's Arctic Circle, Tromsø emerges as a prime destination for
                    witnessing the mesmerizing spectacle of the Northern Lights. With its unique position under the
                    "Auroral Oval" and minimal light pollution, Tromsø offers optimal conditions for experiencing the
                    celestial dance of the auroras. Visitors to this charming city are greeted by stunning panoramas of
                    snow-capped mountains and fjords, providing a picturesque backdrop for aurora viewing. Whether
                    embarking on guided tours led by knowledgeable local experts or venturing out to designated viewing
                    spots, travelers are treated to unforgettable displays of vibrant colors swirling across the night
                    sky. Beyond aurora viewing, Tromsø offers a wide range of winter activities, including dog sledding,
                    reindeer sleigh rides, and snowmobiling, allowing visitors to fully immerse themselves in the Arctic
                    experience. With its blend of natural beauty, cultural charm, and aurora viewing opportunities,
                    Tromsø promises an enchanting adventure beneath the dancing lights of the Northern Hemisphere.
                </p>
            </div>
        </div>
    </section>


    <section id="blog">
        <div data-aos="fade-up" class="content">
            <h2>LATEST BLOGS</h2>
            <p>Share Your Northern Lights Adventures and Stories on Our Dynamic Blog Page!</p>
        </div>

        <div class="allimg">
            <?php
            include ('./php/connect.php');

            $sqlQuery = "SELECT * FROM blogs ORDER BY id DESC LIMIT 3";
            $result = mysqli_query($conn, $sqlQuery);
            while ($row = $result->fetch_assoc()) {
                echo '
                
                <div class="blogs">
                <div class="stru" >
                  <img src=' . $row['image'] . ' alt="">
                     <h3>' . $row['title'] . '</h3>
                     <p>' . $row['content'] . '</p>
                   </div>
               </div>
                
                ';
            }
            ?>

        </div>
        <div class="buttons">
            <a href="./blog.php"><button>READ MORE</button></a>
        </div>
    </section>

    <footer>

        <div class="main">
            <p>©2024</p>
            <h3>"Aurora"- by khushi Tiwari</h3>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
        });
    </script>

</body>

</html>