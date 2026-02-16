<html>

<head>
    <title>IronPDF | Building on the success of IronPDF for .NET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="og:title" content="IronPDF | Building on the success of IronPDF for .NET" />
    <meta name="og:description" content="IronPDF Beta Program also coming soon for Python | Node.JS | Java" />
</head>

<body>
    <div class="">
        <div class="header">
            <div class="navigator p-3">
                <img src="image/LOGO WHITE.svg" alt="Iron Software Logo" />
                <ul>
                    <li>Products <img src="image/arrow.svg" class="float-end p-1 ps-2" alt="arrow icon" /></li>
                    <li>About Us</li>
                    <li>Career</li>
                </ul>
            </div>
            <div class="container">
                <div class="content">
                    <img src="image/logo.svg" alt="Iron Software Logo" class="mb-4" />
                    <p class="mt-4"><?=$homepage_data[0][0]?></p>
                    <span class="header-text"><?=$homepage_data[0][1]?></span><br>
                    <span class="header-text with-color"><?=$homepage_data[0][2]?></span>
                </div>
            </div>
            <img src="image/ribbon.png" class="ribbon" alt="Ribbon" />
            <div class="section">
                <div class="sign-up-now">
                    <div class="container">
                        <h1><?=$homepage_data[1][0]?></h1>
                        <h2><?=$homepage_data[1][1]?></h2>
                        <div class="sign-up-now-input">
                            <input type="email" placeholder="Enter email address" />
                            <button>Sign up now</button>
                        </div>
                        <div class="coming-soon d-flex">
                            <div class="coming-soon-badge mt-4"># Coming Soon</div>
                            <span>IronPDF Beta Program also coming soon for Python | Node.JS | Java</span>
                        </div>
                    </div>
                </div>

                <div class="about">
                    <div class="header">
                        <div class="container">
                            <h1 class="mb-5">IronPDF for C++
                                <span class="intersect">
                                    <img src="image/coming-soon-badge.svg" alt="coming-soon-badge" />
                                </span>
                            </h1>
                            <div class="row mt-4">
                                <div class="col-lg"><?=$homepage_data[2][0]?> <div class="divider-3 float-end">
                                    </div>
                                </div>
                                <div class="col-lg"><?=$homepage_data[2][1]?> <div
                                        class="divider-3 float-end"></div>
                                </div>
                                <div class="col-lg"><?=$homepage_data[2][2]?></div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="container">
                            <p>
                                <?=$homepage_data[3][0]?>
                            </p>
                            <p>
                                <?=$homepage_data[3][1]?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="why-make-csharp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-auto">
                                <img src="image/HTML to PDF icon.svg" alt="HTML to PDF icon" />
                            </div>
                            <div class="col-lg ps-5">
                                <h2><?=$homepage_data[4][0]?></h2>
                                <?=$homepage_data[4][1]?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="early-access">
                    <div class="container">
                        <span><?=$homepage_data[5][0]?></span>
                        <p><?=$homepage_data[5][1]?></p>
                        <div class="row row-cols-3 gap-3 g-0">
                            <div class="item col">
                                <div class="row">
                                    <div class="release-badge col-auto"># Released</div>
                                    <div class="name col">
                                        <h3>IRONPDF</h3>
                                        <h4>for Java</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item col">
                                <div class="row">
                                    <div class="coming-soon-badge col-auto"># Coming Soon</div>
                                    <div class="name col">
                                        <h3>IRONPDF</h3>
                                        <h4>for Java</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item col">
                                <div class="row">
                                    <div class="coming-soon-badge col-auto"># Coming Soon</div>
                                    <div class="name col">
                                        <h3>IRONPDF</h3>
                                        <h4>for Java</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-sign-up">
                        <span>Sign up to our <span class="with-color">Beta Program</span></span>
                        <div class="sign-up-now-input center mt-4">
                            <input type="email" placeholder="Enter email address" />
                            <button>Sign up now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>