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
    <style>
        .header.stricky {
            background-color: #fff;
            box-shadow: 0 0 10px 1px #999;
            /* position:static !important; */
        }

        .rightMenu ul li a {
            padding: 0px;
            font-size: 17px;
            color: var(--secondary-color) !important;
        }
    </style>
</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <div class="loginpage">
            <div class="left d-flex align-items-end pb-5 px-5">



                <div class=" p-4 font-heading bgleftcontent ">
                    <h1 class="fontWeight600 mb-3">
                        Welcome to Saptapadi
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, recusandae.
                    </p>
                </div>


            </div>
            <div class="right">
                <div class="bannerRightForm shadow  ">
                    <form id="bannerForm" method="post" action="email.php">
                        <h3 class="  fontWeight700 fontHeading text-center ">Login to your account!
                        </h3>

                        <div class="formItem mt-4">
                            <div class="form-floating mb-2">
                                <input type="email" required="" class="form-control" id="email" name="email"
                                    placeholder="email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="formItem mt-3">
                            <div class="form-floating mb-2">
                                <input type="password" required="" class="form-control" id="Password" name="Password"
                                    placeholder="Enter your password">
                                <label for="Password">Password</label>
                            </div>
                        </div>

                        <div class="formItem mt-4">
                            <button class="btnHeader" name="submit" type="submit" id="contactus-submit"
                                data-submit="...Sending"><i id="icon" class=""></i> Login</button>
                        </div>

                        <div class="mt-4 d-flex justify-content-between">
                            <a class="text-primary" href="#">Create Account</a>
                            <a class="text-primary" href="#">Forget Password</a>

                        </div>
                    </form>
                </div>

            </div>

        </div>





        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>