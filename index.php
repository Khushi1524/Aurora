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
                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, architecto doloremque facilis
                    dolorem quidem perferendis.</p>
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
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi nihil libero sint!</p>
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
            <p data-aos="fade-up">There's a list of 5 Best Places to see the Northern Lights - Aurora Borealis that will
                help you make your
                travel plans easily and cross the Northern Lights off your bucket list. Lorem ipsum dolor, sit amet
                consectetur adipisicing elit. Autem, beatae quaerat hic accusamus minus laboriosam officiis vitae
                excepturi. </p>
        </div>

        <div class="places">
            <div class="placeimg">
                <img data-aos="fade-up"
                    src="https://www.travelandleisure.com/thmb/qY9UFueEJelAAecTA3X2E224N9Y=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/fairbanks-alaska-23bc91e78bb8441b943381178798b109.jpg"
                    alt="">
            </div>
            <div data-aos="fade-up" class="placecontent">

                <h2>1.Fairbanks, Alaska</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat minima delectus eveniet fugit ad
                    aut nam illum accusamus doloribus harum deleniti sed explicabo non facilis veniam animi, aspernatur
                    possimus voluptas. Culpa officiis, delectus esse perspiciatis illum corrupti provident iusto, quos
                    aspernatur saepe temporibus unde iure reiciendis corporis quibusdam distinctio omnis perferendis,
                    impedit rerum aliquid expedita? Possimus natus consequatur laborum in veritatis sequi esse quod
                    facere voluptatibus ad inventore, sunt quasi molestiae mollitia, obcaecati libero et ea neque ipsum
                    dolore illum ipsam incidunt aspernatur. Dolore blanditiis similique provident impedit adipisci vero
                    maxime culpa alias, consequatur laudantium odio? Magnam neque delectus architecto? Lorem, ipsum
                    dolor sit amet consectetur adipisicing elit. Rem, culpa doloribus fuga exercitationem rerum ratione
                    commodi accusantium sit? Esse assumenda ut quae. Eveniet nisi tempore dignissimos praesentium at
                    necessitatibus eum quos, nobis obcaecati consectetur nemo dolor corporis unde! Commodi libero
                    necessitatibus dolores, suscipit dolore nisi quibusdam soluta quaerat dolorum sit adipisci deserunt
                    temporibus rerum maxime doloremque enim error. Nesciunt ducimus voluptate enim incidunt recusandae
                    obcaassumenda cum nostrum nam! Aperiam dolorumnam libero.
                </p>
            </div>
        </div>


        <div class="places">
            <div data-aos="fade-up" class="placecontent">
                <h2>2. Abisko, Sweden</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat minima delectus eveniet fugit ad
                    aut nam illum accusamus doloribus harum deleniti sed explicabo non facilis veniam animi, aspernatur
                    possimus voluptas. Culpa officiis, delectus esse perspiciatis illum corrupti provident iusto, quos
                    aspernatur saepe temporibus unde iure reiciendis corporis quibusdam distinctio omnis perferendis,
                    impedit rerum aliquid expedita? Possimus natus consequatur laborum in veritatis sequi esse quod
                    facere voluptatibus ad inventore, sunt quasi molestiae mollitia, obcaecati libero et ea neque ipsum
                    dolore illum ipsam incidunt aspernatur. Dolore blanditiis similique provident impedit adipisci vero
                    maxime culpa alias, consequatur laudantium odio? Magnam neque delectus architecto? Lorem, ipsum
                    dolor sit amet consectetur adipisicing elit. Rem, culpa doloribus fuga exercitationem rerum ratione
                    commodi accusantium sit? Esse assumenda ut quae. Eveniet nisi tempore dignissimos praesentium at
                    necessitatibus eum quos, nobis obcaecati consectetur nemo dolor corporis unde! Commodi libero
                    necessitatibus dolores, suscipit dolore nisi quibusdam soluta quaerat dolorum sit adipisci deserunt
                    temporibus rerum maxime doloremque enim error. Nesciunt ducimus voluptate enim incidunt recusandae
                    obcaassumenda cum nostrum nam! Aperiam dolorumnam libero.
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat minima delectus eveniet fugit ad
                    aut nam illum accusamus doloribus harum deleniti sed explicabo non facilis veniam animi, aspernatur
                    possimus voluptas. Culpa officiis, delectus esse perspiciatis illum corrupti provident iusto, quos
                    aspernatur saepe temporibus unde iure reiciendis corporis quibusdam distinctio omnis perferendis,
                    impedit rerum aliquid expedita? Possimus natus consequatur laborum in veritatis sequi esse quod
                    facere voluptatibus ad inventore, sunt quasi molestiae mollitia, obcaecati libero et ea neque ipsum
                    dolore illum ipsam incidunt aspernatur. Dolore blanditiis similique provident impedit adipisci vero
                    maxime culpa alias, consequatur laudantium odio? Magnam neque delectus architecto? Lorem, ipsum
                    dolor sit amet consectetur adipisicing elit. Rem, culpa doloribus fuga exercitationem rerum ratione
                    commodi accusantium sit? Esse assumenda ut quae. Eveniet nisi tempore dignissimos praesentium at
                    necessitatibus eum quos, nobis obcaecati consectetur nemo dolor corporis unde! Commodi libero
                    necessitatibus dolores, suscipit dolore nisi quibusdam soluta quaerat dolorum sit adipisci deserunt
                    temporibus rerum maxime doloremque enim error. Nesciunt ducimus voluptate enim incidunt recusandae
                    obcaassumenda cum nostrum nam! Aperiam dolorumnam libero.
                </p>
            </div>
        </div>




        <div class="places">
            <div data-aos="fade-up" class="placecontent">
                <h2>4. Siberia, Russia</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat minima delectus eveniet fugit ad
                    aut nam illum accusamus doloribus harum deleniti sed explicabo non facilis veniam animi, aspernatur
                    possimus voluptas. Culpa officiis, delectus esse perspiciatis illum corrupti provident iusto, quos
                    aspernatur saepe temporibus unde iure reiciendis corporis quibusdam distinctio omnis perferendis,
                    impedit rerum aliquid expedita? Possimus natus consequatur laborum in veritatis sequi esse quod
                    facere voluptatibus ad inventore, sunt quasi molestiae mollitia, obcaecati libero et ea neque ipsum
                    dolore illum ipsam incidunt aspernatur. Dolore blanditiis similique provident impedit adipisci vero
                    maxime culpa alias, consequatur laudantium odio? Magnam neque delectus architecto? Lorem, ipsum
                    dolor sit amet consectetur adipisicing elit. Rem, culpa doloribus fuga exercitationem rerum ratione
                    commodi accusantium sit? Esse assumenda ut quae. Eveniet nisi tempore dignissimos praesentium at
                    necessitatibus eum quos, nobis obcaecati consectetur nemo dolor corporis unde! Commodi libero
                    necessitatibus dolores, suscipit dolore nisi quibusdam soluta quaerat dolorum sit adipisci deserunt
                    temporibus rerum maxime doloremque enim error. Nesciunt ducimus voluptate enim incidunt recusandae
                    obcaassumenda cum nostrum nam! Aperiam dolorumnam libero.
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat minima delectus eveniet fugit ad
                    aut nam illum accusamus doloribus harum deleniti sed explicabo non facilis veniam animi, aspernatur
                    possimus voluptas. Culpa officiis, delectus esse perspiciatis illum corrupti provident iusto, quos
                    aspernatur saepe temporibus unde iure reiciendis corporis quibusdam distinctio omnis perferendis,
                    impedit rerum aliquid expedita? Possimus natus consequatur laborum in veritatis sequi esse quod
                    facere voluptatibus ad inventore, sunt quasi molestiae mollitia, obcaecati libero et ea neque ipsum
                    dolore illum ipsam incidunt aspernatur. Dolore blanditiis similique provident impedit adipisci vero
                    maxime culpa alias, consequatur laudantium odio? Magnam neque delectus architecto? Lorem, ipsum
                    dolor sit amet consectetur adipisicing elit. Rem, culpa doloribus fuga exercitationem rerum ratione
                    commodi accusantium sit? Esse assumenda ut quae. Eveniet nisi tempore dignissimos praesentium at
                    necessitatibus eum quos, nobis obcaecati consectetur nemo dolor corporis unde! Commodi libero
                    necessitatibus dolores, suscipit dolore nisi quibusdam soluta quaerat dolorum sit adipisci deserunt
                    temporibus rerum maxime doloremque enim error. Nesciunt ducimus voluptate enim incidunt recusandae
                    obcaassumenda cum nostrum nam! Aperiam dolorumnam libero.
                </p>
            </div>
        </div>
    </section>


    <section id="blog">
        <div data-aos="fade-up" class="content">
            <h2>LATEST BLOGS</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi nihil libero sint!</p>
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
        <!-- <p>All rights reserverd.Use of site constitute acceptance of<span> user agreement</span>&
            <span>privacy policy and cookies statement.</span>that are must for better experience. 
           
        </p> -->

        <!-- <div class="mainall">

            <div class="things">
                <h4>About us</h4>
                <h4>Cookies Policy</h4>
                <h4>Travels</h4>
            </div>

            <div class="things">
                <h4>About us</h4>
                <h4>Cookies Policy</h4>
                <h4>Travels</h4>
            </div>

            <div class="things">
                <h4>About us</h4>
                <h4>Cookies Policy</h4>
                <h4>Travels</h4>
            </div>

            <div class="things">
                <h4>About us</h4>
                <h4>Cookies Policy</h4>
                <h4>Travels</h4>
            </div>

            <div class="things">
                <h4>About us</h4>
                <h4>Cookies Policy</h4>
                <h4>Travels</h4>
            </div>

        </div> -->

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