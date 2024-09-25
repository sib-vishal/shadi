<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Saptapadi | Home</title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>



        <div class="heroBanner overflow-hidden">

            <div class="bannerSlider">
                <div class="bannerItems">
                    <div class="bannerImg"><img src="images/banner-1.jpg" alt=""></div>
                </div>
                <div class="bannerItems">
                    <div class="bannerImg"><img src="images/banner-2.jpg" alt=""></div>
                </div>
                <div class="bannerItems">
                    <div class="bannerImg"><img src="images/banner-3.jpg" alt=""></div>
                </div>
            </div>



            <div class="bannerContent">



                <div class="row">
                    <div class="col-lg-7">

                        <div class="bannerText pt-5">

                            <h2 class="large_heading font-heading">Find your <span>perfect match</span> in love.</h2>
                            <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                                reprehenderit adipisci exercitationem nulla quam animi nesciunt ullam nam modi delectus.
                            </p>
                            <div class="btnBox d-flex mt-4">
                                <a href="#" class="btnTheme heading"><span>Explore Now</span></a>
                                <a href="#" class="btnTheme2 heading"><span>Contact us</span></a>
                            </div>


                        </div>

                    </div>
                    <div class="col-lg-5">

                        <div class="register-container">
                            <h2 class="sub_heading fontWeight700">Free Register</h2>
                            <form class="register-form mt-4">

                                <div class="gender-selection">
                                    <input type="radio" id="male" name="gender" checked>
                                    <label for="male" class="me-3">Male</label>

                                    <input type="radio" id="female" class="ms-3" name="gender">
                                    <label for="female">Female</label>
                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="First Name" required>
                                    <input type="text" class="ms-3" placeholder="Last Name" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" placeholder="E-Mail ID" required>

                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="+91 Enter Your Mobile No 10 Digit"
                                        pattern="[0-9]{10}" required>


                                    <input type="password" class="ms-3" placeholder="Password" required>
                                </div>
                                <div class="form-group" title="Date of Birth">
                                    <input type="date" placehold="DOB">
                                </div>



                                <!-- <div class="form-group">
                                    <select name="day" required>
                                        <option value="" disabled selected>1</option>
                                        <option disabled value="1">1</option>
                                        <option disabled value="2">2</option>
                                        <option disabled value="3">3</option>
                                        <option disabled value="4">4</option>
                                        <option disabled value="5">5</option>
                                        <option disabled value="6">6</option>
                                        <option disabled value="7">7</option>
                                        <option disabled value="8">8</option>
                                        <option disabled value="9">9</option>
                                        <option disabled value="10">10</option>
                                        <option disabled value="11">11</option>
                                        <option disabled value="12">12</option>
                                        <option disabled value="13">13</option>
                                        <option disabled value="14">14</option>
                                        <option disabled value="15">15</option>
                                        <option disabled value="16">16</option>
                                        <option disabled value="17">17</option>
                                        <option disabled value="18">18</option>
                                        <option disabled value="19">19</option>
                                        <option disabled value="20">20</option>
                                        <option disabled value="21">21</option>
                                        <option disabled value="22">22</option>
                                        <option disabled value="23">23</option>
                                        <option disabled value="24">24</option>
                                        <option disabled value="25">25</option>
                                        <option disabled value="26">26</option>
                                        <option disabled value="27">27</option>
                                        <option disabled value="28">28</option>
                                        <option disabled value="29">29</option>
                                        <option disabled value="30">30</option>
                                        <option disabled value="31">31</option>


                                    </select>
                                    <select name="month" class="mx-3" required>
                                        <option value="" disabled selected>Jan</option>
                                        <option disabled value="Jan">Jan</option>
                                        <option disabled value="Feb">Feb</option>
                                        <option disabled value="Mar">Mar</option>
                                        <option disabled value="Apr">Apr</option>
                                        <option disabled value="May">May</option>
                                        <option disabled value="Jun">Jun</option>
                                        <option disabled value="Jul">Jul</option>
                                        <option disabled value="Aug">Aug</option>
                                        <option disabled value="Sept">Sept</option>
                                        <option disabled value="Oct">Oct</option>
                                        <option disabled value="Nov">Nov</option>
                                        <option disabled value="Dec">Dec</option>

                                    </select>
                                    <select name="year" required>
                                        <option value="" disabled selected>2006</option>
                                        <option disabled value="2006">2006</option>
                                        <option disabled value="2005">2005</option>
                                        <option disabled value="2004">2004</option>
                                        <option disabled value="2003">2003</option>
                                        <option disabled value="2002">2002</option>
                                        <option disabled value="2001">2001</option>
                                        <option disabled value="2000">2000</option>
                                        <option disabled value="1999">1999</option>
                                        <option disabled value="1998">1998</option>
                                        <option disabled value="1997">1997</option>
                                        <option disabled value="1996">1996</option>

                                    </select>
                                </div> -->

                                <div class="form-group">
                                    <select name="religion" required>
                                        <option value="" disabled selected>Select Religion</option>
                                        <!-- Options for religion -->
                                    </select>

                                    <select name="sub-religion" required>
                                        <option value="" disabled selected>Marital Status</option>
                                        <!-- Options for sub-religion -->
                                    </select>
                                </div>

                                <div class="terms px-2">
                                    <input type="checkbox" required>
                                    <label class="ms-2">I agree to the <span>Terms And Conditions</span></label>
                                </div>

                                <!-- <div class="login">
                            <p>Already a member? <a href="#">Login</a></p>
                        </div> -->

                                <button type="submit" class="btnTheme w-100"><span>Register</span></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <section class="bg_primary">
            <div class="containerFull">
                <form action="#" class="d-flex  serach-form">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <!-- <option selected>Looking for</option> -->
                            <option value="1">Bride</option>
                            <option value="2">Groom</option>

                        </select>
                        <label for="floatingSelect">Looking for</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <!-- <option selected>Looking for</option> -->
                            <option value="1">22 year</option>
                            <option value="2">26 year</option>
                            <option value="2">30 year</option>

                        </select>
                        <label for="floatingSelect">Max. Age</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <!-- <option selected>Looking for</option> -->
                            <option value="1">22 year</option>
                            <option value="2">26 year</option>
                            <option value="2">30 year</option>

                        </select>
                        <label for="floatingSelect">Min. Age</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <!-- <option selected>Looking for</option> -->
                            <option value="1">Hindu</option>
                            <option value="2">Muslim</option>
                            <option value="2">Jain</option>
                            <option value="2">Parsi</option>
                            <option value="2">Parsi</option>

                        </select>
                        <label for="floatingSelect">Select Religion</label>
                    </div>
                    <button type="submit" class="">Search</button>

                </form>

            </div>
        </section>



        <section class="bg-light">
            <div class="containerFull">
                <div class="quote-section row">

                    <div class="col-lg-11 mx-auto">
                        <h3 class="small_heading  text-center text-primary">
                            In the grand scheme of love, no meeting is accidental, and no journey is without purpose.
                            Every couple's destination is ordained by destiny, and every milestone they reach is part of
                            God’s greater plan. It’s a journey of faith, trust, and love, knowing that where they are
                            headed is exactly where they are meant to be, guided by something far greater than
                            themselves.
                        </h3>
                    </div>

                </div>
            </div>
        </section>
        <section class="">
            <div class="containerFull position-relative">
                <div class="about-us">

                    <div class="row">
                        <div class="col-lg-5 px-5">
                            <div class="aboutImg">
                                <img src="images/about.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7  ps-4">
                            <div class="aboutText  pt-5">
                                <h5 class="title text-primary">About us</h5>
                                <h3 class="heding fontWeight700 mt-3">What Make Us Best</h3>
                                <h6 class="title mt-4 fontWeight700">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Blanditiis praesentium quos, fuga quia excepturi exercitationem magnam
                                    assumenda et obcaecati tenetur!</h6>
                                <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta debitis
                                    ullam esse veritatis voluptatem officiis explicabo magnam adipisci expedita ipsam.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis doloremque numquam
                                    error incidunt! Assumenda possimus accusantium ex a dicta aperiam! Facere quibusdam
                                    blanditiis, mollitia eius illo aspernatur iure quos quis?</p>

                                <a href="#" class="btnTheme mt-4 "><span class="py-1">Connect Now</span></a>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="flowerBox">
                    <img src="images/icon/flower-1.png" alt="">
                </div>
            </div>
        </section>
        <section class="how-its-work">
            <div class="containerFull">


                <h4 class="text-center font-heading heading fontWeight700">How <span>Does</span> It Work ?</h4>


                <div class="row mt-5">

                    <div class="col-lg-3 text-center">
                        <div class="how-does-it-work-data">
                            <div class="how-does-it-work-new">
                                <img src="https://advanced.matrimonyscript.com/assets/home_2/images/hw-1.png"
                                    alt="Create Account">
                            </div>

                            <h4 class="mt-3">Create Account</h4>

                            <p>Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed diam nonumy.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="how-does-it-work-data">
                            <div class="how-does-it-work-new">
                                <img src="https://advanced.matrimonyscript.com/assets/home_2/images/hw-2.png"
                                    alt="Browse Profiles">
                            </div>
                            <h4 class="mt-3">Browse Profiles</h4>
                            <p>Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed diam nonumy.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="how-does-it-work-data">
                            <div class="how-does-it-work-new">
                                <img src="https://advanced.matrimonyscript.com/assets/home_2/images/hw-3.png"
                                    alt="Connect">
                            </div>
                            <h4 class="mt-3">Connect</h4>

                            <p>Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed diam nonumy.</p>

                        </div>

                    </div>
                    <div class="col-lg-3 text-center">

                        <div class="how-does-it-work-data">
                            <div class="how-does-it-work-new">
                                <img src="https://advanced.matrimonyscript.com/assets/home_2/images/hw-4.png"
                                    alt="Interact">
                            </div>
                            <h4 class="mt-3">Interact</h4>

                            <p>Lorem ipsum dolor sit amet, consetetu sadipscing elitr, sed diam nonumy.</p>

                        </div>

                    </div>

                </div>

            </div>
        </section>



        <section class="bgLight">
            <div class="containerFull">
                <h4 class="heading font-heading fontWeight700 text-center mb-5">Why Saptapadi</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="icon-box">
                            <img src="images/icon/icon-1.png" alt="">
                            <h3 class="sub_heading">23</h3>
                            <p>Years of experience</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="icon-box">
                            <img src="images/icon/icon-2.png" alt="">
                            <h3 class="sub_heading">8145</h3>
                            <p>Candidate enjoyed our services</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="icon-box">
                            <img src="images/icon/icon-3.png" alt="">
                            <h3 class="sub_heading">1152</h3>
                            <p>Happily Married Couple</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="icon-box">
                            <img src="images/icon/icon-4.png" alt="">
                            <h3 class="sub_heading">952</h3>
                            <p>Pre Marriage and Post marriage Counselling</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="containerFull">
                <h4 class="heading font-heading fontWeight700 text-center mb-5">
                    Profile of the week
                </h4>
                <div>
                    <div class="swiper mySwiper ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row profileofweek ">
                                    <div class="col-lg-4  ">
                                        <div class="w-100 h-100">
                                            <img class="w-100"
                                                src="https://advanced.matrimonyscript.com/assets/front_end/img/default-photo/male.png" />
                                        </div>
                                    </div>
                                    <div class="col-lg-8 ps-5">
                                        <div class="row ">
                                            <div class="col-lg-6">
                                                <p>
                                                    <Strong>
                                                        Name:
                                                    </Strong>gfc
                                                </p>
                                                <p>
                                                    <Strong>
                                                        Gender:
                                                    </Strong>Male
                                                </p>
                                                <p>
                                                    <Strong>
                                                        Age:
                                                    </Strong>26 year
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p>
                                                    <Strong>
                                                        Height:
                                                    </Strong>5 ft 6 in / 180 Cm
                                                </p>
                                                <p>
                                                    <Strong>
                                                        Marital Status:
                                                    </Strong>Never Married
                                                </p>
                                                <p>
                                                    <Strong>
                                                        Location:
                                                    </Strong>Pune, Mumbai
                                                </p>

                                            </div>

                                        </div>
                                        <p class="mt-3">
                                            <strong>Discription:</strong>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolores, et
                                            voluptatem voluptatibus quod illo nam molestias ipsum velit, aliquam
                                            voluptatum? Provident ipsa commodi quas sit dolorum blanditiis, repellendus
                                            aliquid totam expedita rem recusandae repudiandae dolores aut reiciendis
                                            iusto autem! Blanditiis odit repudiandae commodi nihil obcaecati praesentium
                                            repellat quasi magnam reiciendis assumenda excepturi nobis voluptatum cum
                                            sed cupiditate est sunt molestiae, veritatis neque facilis, at enim velit
                                            saepe? Distinctio fugit sit at magni, doloribus saepe magnam reprehenderit
                                            hic iste esse
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row profileofweek ">
                                    <div class="col-lg-4  ">
                                        <div class="">
                                            <img
                                                src="https://advanced.matrimonyscript.com/assets/front_end/img/default-photo/male.png" />
                                        </div>
                                    </div>
                                    <div class="col-lg-8 ps-5">
                                        <div class="row ">
                                            <div class="col-lg-6">
                                                <p>
                                                    <Strong>
                                                        Name:
                                                    </Strong>gfc
                                                </p>
                                                <p>
                                                    <Strong>
                                                        Gender:
                                                    </Strong>Male
                                                </p>
                                                <p>
                                                    <Strong>
                                                        Age:
                                                    </Strong>26 year
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p>
                                                    <Strong>
                                                        Height:
                                                    </Strong>5 ft 6 in / 180 Cm
                                                </p>
                                                <p>
                                                    <Strong>
                                                        Marital Status:
                                                    </Strong>Never Married
                                                </p>
                                                <p>
                                                    <Strong>
                                                        Location:
                                                    </Strong>Pune, Mumbai
                                                </p>

                                            </div>

                                        </div>
                                        <p class="mt-3">
                                            <strong>Discription:</strong>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolores, et
                                            voluptatem voluptatibus quod illo nam molestias ipsum velit, aliquam
                                            voluptatum? Provident ipsa commodi quas sit dolorum blanditiis, repellendus
                                            aliquid totam expedita rem recusandae repudiandae dolores aut reiciendis
                                            iusto autem! Blanditiis odit repudiandae commodi nihil obcaecati praesentium
                                            repellat quasi magnam reiciendis assumenda excepturi nobis voluptatum cum
                                            sed cupiditate est sunt molestiae, veritatis neque facilis, at enim velit
                                            saepe? Distinctio fugit sit at magni, doloribus saepe magnam reprehenderit
                                            hic iste esse
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->
                        <div class="swiper-pagination "></div>
                    </div>
                </div>


            </div>
        </section>
        <section class="bg-light">
            <div class="containerFull">
                <div>
                    <h4 class="heading font-heading fontWeight700 text-center mb-5">
                        Success Stories
                    </h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="rounded-2 overflow-hidden shadow bg-white">
                                <div class="img-box">
                                    <img src="https://placehold.co/550x280" alt="">

                                </div>
                                <p class="title text-center py-3 fontWeight500">
                                    Ajinkya Pawar
                                    & Monali Bhagwat

                                </p>

                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="rounded-2 overflow-hidden shadow bg-white">
                                <div class="img-box">
                                    <img src="https://placehold.co/550x280" alt="">

                                </div>
                                <p class="title text-center py-3 fontWeight500">
                                    Ajinkya Pawar
                                    & Monali Bhagwat

                                </p>

                            </div>

                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="rounded-2 overflow-hidden shadow bg-white">
                                <div class="img-box">
                                    <img src="https://placehold.co/550x280" alt="">

                                </div>
                                <p class="title text-center py-3 fontWeight500">
                                    Ajinkya Pawar
                                    & Monali Bhagwat

                                </p>

                            </div>

                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="rounded-2 overflow-hidden shadow bg-white">
                                <div class="img-box">
                                    <img src="https://placehold.co/550x280" alt="">

                                </div>
                                <p class="title text-center py-3 fontWeight500">
                                    Ajinkya Pawar
                                    & Monali Bhagwat

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <section class="bg-white ">

            <div class="container">
                <div class="pricing-header text-center">
                    <h2 class="title text-primary">Pricing Table</h2>
                    <h3 class="heading fontWeight700 mt-2">Reasonable Price</h3>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">Standard</h4>
                                <p class="price">$459</p>
                                <ul>
                                    <li>Relaxing Message</li>
                                    <li>Manicure Pedicure</li>
                                    <li>Pizza Party</li>
                                    <li>Face Treatment</li>
                                    <li>Face Treatment</li>
                                </ul>
                                <a href="#" class="btn-select">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">Platinum</h4>
                                <p class="price">$879</p>
                                <ul>
                                    <li>Body Polish</li>
                                    <li>Relaxing Message</li>
                                    <li>Manicure Pedicure</li>
                                    <li>Pizza Party</li>
                                    <li>Face Treatment</li>
                                </ul>
                                <a href="#" class="btn-select">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">Diamond</h4>
                                <p class="price">$999</p>
                                <ul>
                                    <li>Pizza Party</li>
                                    <li>Relaxing Message</li>
                                    <li>Manicure Pedicure</li>
                                    <li>Body Polish</li>
                                    <li>Face Treatment</li>
                                </ul>
                                <a href="#" class="btn-select">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>