<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LESS (CSS) -->
    <link rel="stylesheet/less" type="text/css" href="less/main.less" />

    <link rel="icon" type="image/png" href="./img/logo_green.png">

    <?php require_once('./php/require/meta-tags.php') ?>

    <title>HawkeyNL - Front & Back End Developer.</title>
</head>
<body>
    <!-- Navigation -->
    <?php require_once('./php/require/navbar.php') ?>

    <header>
        <div class="col-50 welcome">
            <h1>HawkeyNL</h1>
            <p><span>Front & Back End Developer</span></p>
            <p class="welcome-info">Hey, I am 17 Year's old and live in the Netherlands.<br>I Currently study Computer Sience.</p>
            <p>Wanna found out what I made so far?</p>
            <a class="btn" href="#about">More <i class="fas fa-chevron-circle-down"></i></a>
        </div>
        <div class="clear"></div>
    </header>

    <main>
        <section id="about" class="fadein">
            <div class="col-80 container">
                <h2>About Me</h2>
                <div class="col-70" class="fadein">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque nulla vel elit viverra, sit amet volutpat ipsum gravida. Cras enim leo, sagittis in dui at, aliquet pharetra lectus.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque nulla vel elit viverra, sit amet volutpat ipsum gravida. Cras enim leo, sagittis in dui at, aliquet pharetra lectus.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque nulla vel elit viverra, sit amet volutpat ipsum gravida. Cras enim leo, sagittis in dui at, aliquet pharetra lectus.
                    </p>
                </div>
                <div class="col-30 media" class="fadein">
                    <ul>
                        <li><a href="https://github.com/hawkeynl" class="github"><i class="fab fa-github-square github-icon"></i>HawkeyNL</a></li>
                        <li><a href="https://twitter.com/hawkeynl" class="twitter"><i class="fab fa-twitter-square twitter-icon"></i>HawkeyNL</a></li>
                        <li><a href="#" class="discord"><i class="fab fa-discord discord-icon"></i>HawkeyNL#5704</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
                <div class="col-100 languages" class="fadein">
                    <div class="col-30">
                        <p class="name">
                            HTML5 <i class="fab fa-html5"></i> & CSS3 <i class="fab fa-css3-alt"></i> & LESS <i class="fab fa-less"></i>
                        </p>
                        <p class="percentage">90%</p>
                        <div class="skills">
                            <div class="skill html5-css3-less"></div>
                        </div>
                    </div>
                    <div class="col-30">
                        <p class="name">
                            JavaScript <i class="fab fa-js-square"></i>
                        </p>
                        <p class="percentage">70%</p>
                        <div class="skills">
                            <div class="skill javascript"></div>
                        </div>
                    </div>
                    <div class="col-30 no-mg-r">
                        <p class="name">
                            TypeScript
                        </p>
                        <p class="percentage">40%</p>
                        <div class="skills">
                            <div class="skill typescript"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-100 languages">
                        <div class="col-30">
                            <p class="name">
                                PHP <i class="fab fa-php"></i>
                            </p>
                            <p class="percentage">70%</p>
                            <div class="skills">
                                <div class="skill php"></div>
                            </div>
                        </div>
                        <div class="col-30">
                            <p class="name">
                                MySQL <i class="fas fa-database"></i>
                            </p>
                            <p class="percentage">60%</p>
                            <div class="skills">
                                <div class="skill mysql"></div>
                            </div>
                        </div>
                        <div class="col-30 no-mg-r">
                            <p class="name">
                                Java <i class="fab fa-java"></i>
                            </p>
                            <p class="percentage">50%</p>
                            <div class="skills">
                                <div class="skill java"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="projects" class="fadein">
            <div class="col-70">
                <h2>Projects</h2>
                <div class="col-100">
                    <div class="col-30">
                        <div class="col-100">
                            <div class="content">
                                <div class="col-100">
                                    <a class="p-title" href="#">Project</a><span class="new">NEW</span>
                                </div>
                                <a class="p-icon p-left-icon" href="#"><i class="fas fa-info-circle p-left-icon"></i></a>
                                <a class="p-icon" href="#"><i class="fab fa-github"></i></a>
                                <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque nulla vel elit viverra, sit amet volutpat ipsum gravida. Cras enim leo, sagittis in dui at, aliquet pharetra lectus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="col-100">
                            <div class="content">
                                <div class="col-100">
                                    <a class="p-title" href="#">Project</a><span class="new">NEW</span>
                                </div>
                                <a class="p-icon p-left-icon" href="#"><i class="fas fa-info-circle p-left-icon"></i></a>
                                <a class="p-icon" href="#"><i class="fab fa-github"></i></a>
                                <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque nulla vel elit viverra, sit amet volutpat ipsum gravida. Cras enim leo, sagittis in dui at, aliquet pharetra lectus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="col-100">
                            <div class="content">
                                <div class="col-100">
                                    <a class="p-title" href="#">Project</a><span class="new">NEW</span>
                                </div>
                                <a class="p-icon p-left-icon" href="#"><i class="fas fa-info-circle p-left-icon"></i></a>
                                <a class="p-icon" href="#"><i class="fab fa-github"></i></a>
                                <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque nulla vel elit viverra, sit amet volutpat ipsum gravida. Cras enim leo, sagittis in dui at, aliquet pharetra lectus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="col-100">
                    <div class="col-30">
                        <div class="col-100">
                            <div class="content">
                                <div class="col-100">
                                    <a class="p-title" href="#">Project</a><span class="new">NEW</span>
                                </div>
                                <a class="p-icon p-left-icon" href="#"><i class="fas fa-info-circle p-left-icon"></i></a>
                                <a class="p-icon" href="#"><i class="fab fa-github"></i></a>
                                <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque nulla vel elit viverra, sit amet volutpat ipsum gravida. Cras enim leo, sagittis in dui at, aliquet pharetra lectus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="col-100">
                            <div class="content">
                                <div class="col-100">
                                    <a class="p-title" href="#">Project</a><span class="new">NEW</span>
                                </div>
                                <a class="p-icon p-left-icon" href="#"><i class="fas fa-info-circle p-left-icon"></i></a>
                                <a class="p-icon" href="#"><i class="fab fa-github"></i></a>
                                <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque nulla vel elit viverra, sit amet volutpat ipsum gravida. Cras enim leo, sagittis in dui at, aliquet pharetra lectus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-30">
                        <div class="col-100">
                            <div class="content">
                                <div class="col-100">
                                    <a class="p-title" href="#">Project</a><span class="new">NEW</span>
                                </div>
                                <a class="p-icon p-left-icon" href="#"><i class="fas fa-info-circle p-left-icon"></i></a>
                                <a class="p-icon" href="#"><i class="fab fa-github"></i></a>
                                <p class="p-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque nulla vel elit viverra, sit amet volutpat ipsum gravida. Cras enim leo, sagittis in dui at, aliquet pharetra lectus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </section>
    </main>

    <!-- Footer -->
    <?php require_once('./php/require/footer.php') ?>

    <script src="./js/nav.js"></script>
    <script src="./js/fade.js"></script>
</body>
</html>