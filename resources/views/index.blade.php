<html lang="en">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
<link type="text/css" rel="stylesheet" id="dark-mode-general-link" />
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>

<head>
    <!-- reca -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Anda , Usman" />

    <title>องค์การบริหารส่วนตำบลสะนอ จังหวัดปัตตานี</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MDB -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" /> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script> -->

    <link rel="stylesheet" href="style.css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./img/favicon.png" sizes="180x180" />
    <link rel="icon" href="./img/favicon.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="./img/favicon.png" sizes="16x16" type="image/png" />
    <link rel="manifest" href="/docs/5.3/assets/./img/favicons/manifest.json" />
    <link rel="mask-icon" href="/docs/5.3/assets/./img/favicons/safari-pinned-tab.svg" color="#712cf9" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <link rel="icon" href="/docs/5.3/assets/./img/favicons/favicon.ico" />

    <meta name="theme-color" content="#712cf9" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, 0.1);
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -0.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

<script src="https://unpkg.com/scrollreveal"></script>

    <!-- Custom styles for this template
    <link href="carousel.css" rel="stylesheet" /> -->
</head>

<body>
    <header class="fixed-top">
       @include('navbar')
    </header>

    <main>

        <div id="myCarousel" class=" carousel slide " data-bs-ride="carousel" style="margin-top:15vh">
            <div class="carousel-indicators">
                <button type="button" class="dot" data-bs-target="#myCarousel" data-bs-slide-to="0"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item colour ">

                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777"></rect>
                    </svg> -->
                    <img src="https://images.squarespace-cdn.com/content/v1/52e1b262e4b06ef060506756/1612291312821-F737PH6O8BTBI10E7NG8/In_line+1.jpg"
                        class="fit" width="100%" height="100%" alt="" srcset="">

                    <div class="container ">
                        <div class="carousel-caption text-start">
                            <h1>โครงการปลูกป่าชายเลน.</h1>
                            <p class="fw-light">

                                โครงการท้องถิ่นปลูกป่าเฉลิมพระเกียรติสมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ
                                พระบรมราชชนนีพันปีหลวง
                                <script>

                                    ScrollReveal({ interval: 200 });
                                    </script>
                            </p>
                            <p>
                                <!-- <a class="btn btn-lg btn-primary" href="#">ดูกิจกรรม</a> -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item colour active">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777"></rect>
                    </svg> -->
                    <img src="https://wellwishes.royaloffice.th/assets/images/905_66/banner.png" class="fit"
                        width="100%" height="100%" alt="" srcset="">
                    <div class="container">
                        <div class="carousel-caption text-start ">
                            <h1>วันที่ ๒ เมษายน ๒๕๖๖</h1>
                            <p class="fw-light">
                                สมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี
                                <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item colour">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777"></rect>
                    </svg> -->
                    <img src="https://www.designpoolpatterns.com/wp-content/uploads/2020/09/Design-Pool-Shibori.jpg"
                        class="fit" width="100%" height="100%" alt="" srcset="">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>ฝึกทักษะอาชีพการทำผ้ามัคย้อมสี.</h1>
                            <p class="fw-light">
                                โครงการฝึกอบรมและส่งเสริมการฝึกทักษะอาชีพการทำผ้ามัคย้อมสี ประจำปี 2565
                            </p>
                            <p>
                                <!-- <a class="btn btn-lg btn-primary" href="#">Browse gallery</a> -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon fa fa-chevron-circle-left display-6" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon fa fa-chevron-circle-right display-6" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->



        <!-- START THE FEATURETTES -->


        <div style="background: url('./img/bg.png');">

            <div class="row featurette align-items-end">
                <div class="col-md-7 px-5 order-md-2">
                    <div class="card shadow nb my-4 rounded-3">
                        <div class="card-text fw-light  p-5 m-4">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="p-1">
                                    <h3 class="bi bi-circle text-dark-emphasis"></h3>
                                </div>
                                <div class="p-1">
                                    <h3 class="bi bi-circle text-dark-emphasis"></h3>
                                </div>
                                <div class="p-1">
                                    <h3 class="bi bi-circle text-dark-emphasis"></h3>
                                </div>
                                <!-- TODO tap contents -->
                                <div class="align-content-center  bg-white rounded-2">
                                    <ul class="nav nav-pills mb-3 py-3  justify-content-center" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link  active rounded-pill" id="pills-mission-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-mission" type="button"
                                                role="tab" aria-controls="pills-mission"
                                                aria-selected="true">พันธกิจ</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link rounded-pill" id="pills-public-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-new" type="button"
                                                role="tab" aria-controls="pills-public"
                                                aria-selected="false">ประชาสัมพันธ์</button>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <h2 id="pills-mission" role="tabpanel" data-bs-toggle="pill"  class="tab-pane show active fade featurette-heading fw-normal lh-1 py-5" aria-labelledby="pills-mission">
                                    “เชิดชูศาสนา สืบสานวัฒนธรรม <br>พัฒนาคุณภาพชีวิต สู่ชุมชนที่เข้มแข็ง”
                                </h2>
                                <h2 id="pills-new" role="tabpanel" data-bs-toggle="pill"  class="tab-pane fade featurette-heading fw-normal lh-1 py-5" aria-labelledby="pills-new">
                                    “No Gift Policy” <br><div class="fw-light fs-5">งดรับของขวัญ จากบุคคลหรือหน่วยงานภายนอก</div>
                                </h2>
                            </div>
                            <h4 class="featurette-heading fw-normal lh-1 ">
                                นายรอสาลี อดุลย์อภิมุข
                            </h4>
                            <hr class="divider">
                            <h5 class="featurette-heading fw-light lh-1 ">
                                นายกองค์การบริหารส่วนตำบลสะนอ
                            </h5>
                        </div>
                    </div>

                    <!-- <p class="lead">
                        นายกองค์การบริหารส่วนตำบลสะนอ จังหวัดปัตตานี
                    </p> -->
                </div>
                <div class="col-md-5">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee"></rect>
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                    </svg> -->
                    <img src="{{ URL::asset('/img/1boss.png') }}" width="80%" alt="รูปท่านนายยก อบต.">


                </div>


            </div>

            <!-- <hr class="featurette-divider " /> -->

            <div class="row featurette" style="background:url('./img/thaipattern2.jpg') no-repeat ;">
                <div class="col-md-7 order-md-1 px-5 py-5">
                    <!-- <h2 class="featurette-heading fw-normal lh-1">
                        Oh yeah, it’s that good.
                        <span class="text-muted">See for yourself.</span>
                    </h2> -->
                    <div class="card nb my-4 rounded-3 shadow">
                        <div class="card-text fw-light p-5 m-4">
                            <div class="d-flex ">
                                <div class="p-1">
                                    <h3 class="bi bi-circle text-dark-emphasis"></h3>
                                </div>
                                <div class="p-1">
                                    <h3 class="bi bi-circle text-dark-emphasis"></h3>
                                </div>
                                <div class="p-1">
                                    <h3 class="bi bi-circle text-dark-emphasis"></h3>
                                </div>
                            </div>
                            <h2 class="text-break featurette-heading fw-normal lh-1 py-5">

                            </h2>
                            <h4 class="featurette-heading fw-normal lh-1 ">
                                นางสาวธัญญ์นวพัชร จันทร์ประภา
                            </h4>
                            <hr class="divider">
                            <h5 class="featurette-heading fw-light lh-1 ">
                                ปลัดองค์การบริหารส่วนตำบลสะนอ
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 order-md-1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee"></rect>
                        <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> -->

                </div>
            </div>




            <!-- <hr class="featurette-divider m-1" /> -->

            <!-- /END THE FEATURETTES -->
        </div>
        <div class="w-100">
            <img src="./img/banner.png" class="" width="100%" alt="">
        </div>
        <!-- <hr class="featurette-divider m-1" /> -->
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="m-5">
                <center>

                    <h1 class="bi bi-chat-left"></h1>
                    <h1>ข่าวสาร</h1>
                </center>
            </div>
            <!-- <div class="row my-4">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect>
                        <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>
                        Some representative placeholder content for the three columns of
                        text below the carousel. This is the first column.
                    </p>
                    <p><a class="btn btn-border shadow" href="#">View details »</a></p>
                </div>

                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect>
                        <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>
                        Another exciting bit of representative placeholder content. This
                        time, we've moved on to the second column.
                    </p>
                    <p><a class="btn btn-border shadow" href="#">View details »</a></p>
                </div>


                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect>
                        <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    </svg>
                    <h2 class="fw-normal">Heading</h2>
                    <p>
                        And lastly this, the third column of representative placeholder
                        content.
                    </p>
                    <p><a class="btn btn-border shadow" href="#">View details »</a></p>
                </div>


            </div>-->
            <!-- /.row -->
            <!-- /.container -->
            <style>
                .nav-link {
                    color: black;
                }

                .nav-link:hover {
                    color: #406aa8;
                }

                .nav-pills .nav-link.active {
                    background-color: #406aa8;
                }
            </style>
            <!-- TODO tap contents -->
            <div class="fw-light align-content-center bg-white rounded-2">
                <ul class="nav nav-pills mb-3 py-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-pill" id="pills-news-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-news" type="button" role="tab" aria-controls="pills-news"
                            aria-selected="true">ข่าวเด่น</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill" id="pills-public-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-public" type="button" role="tab" aria-controls="pills-public"
                            aria-selected="false">ประชาสัมพันธ์</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill" id="pills-purchase-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-purchase" type="button" role="tab" aria-controls="pills-purchase"
                            aria-selected="false">จัดซื้อจัดจ้าง</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill" id="pills-career-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-career" type="button" role="tab" aria-controls="pills-career"
                            aria-selected="false">ข่าวสมัครงาน</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
                    <!-- ! contents -->
                    <div class="grid-item d-flex justify-content-center align-items-center">
                        <span class="display-6 fa fa-chevron-circle-left text-dark"></span>
                        <div class="items">
                            <div class="contain contain1 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ประกาศนโยบายไม่รับขอขวัญทุกชนิด No Gift Policy</h5>
                                        <p class="card-text fw-light">3/4/2566</p>
                                        <div class="is-divider bg-danger"></div>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card2 -->
                            <div class="contain contain2 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ประกาศนโยบายไม่รับขอขวัญทุกชนิด No Gift Policy</h5>
                                        <p class="card-text fw-light">3/4/2566</p>
                                        <div class="is-divider bg-danger"></div>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                            <div class="contain contain3 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ประกาศนโยบายไม่รับขอขวัญทุกชนิด No Gift Policy</h5>
                                        <p class="card-text fw-light">3/4/2566</p>
                                        <div class="is-divider bg-danger"></div>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>

                            <div class="contain contain4 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text  fw-light">Some quick example text to build on the card
                                            title and make
                                            up the
                                            bulk of the card's content.</p>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>

                            <div class="contain contain4 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ประกาศนโยบายไม่รับขอขวัญทุกชนิด No Gift Policy</h5>
                                        <p class="card-text fw-light">3/4/2566</p>
                                        <div class="is-divider bg-danger"></div>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>

                            <div class="contain contain4 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ประกาศนโยบายไม่รับขอขวัญทุกชนิด No Gift Policy</h5>
                                        <p class="card-text fw-light">3/4/2566</p>
                                        <div class="is-divider bg-danger"></div>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a onclick="scrollClick()" class="display-6 fa fa-chevron-circle-right text-dark"></a>
                    </div>
                </div>
                <!-- ข่าวประชาสัมพันธ์ -->
                <div class="tab-pane fade" id="pills-public" role="tabpanel" aria-labelledby="pills-public-tab">
                    <!--TODO slide content -->
                    <div class="grid-item">
                        <div class="items">
                            <div class="contain contain1 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">ประกาศนโยบายไม่รับขอขวัญทุกชนิด No Gift Policy</h5>
                                        <p class="card-text fw-light">3/4/2566</p>
                                        <div class="is-divider bg-danger"></div>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- ข่าวจัดซื้อจัดจ้าง -->
                <div class="tab-pane fade" id="pills-purchase" role="tabpanel" aria-labelledby="pills-purchase-tab">
                    <!--TODO slide content -->
                    <div class="grid-item">
                        <div class="items">
                            <div class="contain contain1 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Purchase</h5>
                                        <p class="card-text fw-light">Some quick example text to build on the card title
                                            and
                                            make up the
                                            bulk of the card's content.</p>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ข่าวรับสมัครงาน -->
                <div class="tab-pane fade" id="pills-career" role="tabpanel" aria-labelledby="pills-career-tab">
                    <!--TODO slide content -->
                    <div class="grid-item">
                        <div class="items">
                            <div class="contain contain1 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Career</h5>
                                        <p class="card-text fw-light">Some quick example text to build on the card title
                                            and
                                            make up the
                                            bulk of the card's content.</p>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider" />
        <!-- กิจกรรม -->
        <div class="text-center" style="background:#f5f5f5">
            <div class="py-5">
                <div>
                    <h1 class="bi bi-flag"></h1>
                </div>
                <div>
                    <h1>กิจกรรมเด่น</h1>
                </div>

                <!-- menu -->
                <div class="grid-item ">

                    <div class="items">
                        <!-- card 1 -->
                        <div class="contain  contain1 mx-1 col-4">

                            <div class="card bg-dark text-white rounded-4 colour-black">
                                <img class="card-img"
                                    src="https://www.worldbank.org/content/dam/photos/780x439/2021/may-6/mangrove-photo.jpeg  "
                                    alt="Card image">
                                <div
                                    class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                                    <h5 class="card-title fs-4">โครงการปลูกป่าชายเลน</h5>
                                    <p class="card-text fw-light fs-5">
                                        โครงการท้องถิ่นปลูกป่าเฉลิมพระเกียรติสมเด็จพระนางเจ้าสิริกิติ์
                                    <p>
                                    <p class="card-text fw-light">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>
                        <!-- card 1 -->
                        <div class="contain  contain1 mx-1 col-4">

                            <div class="card bg-dark text-white rounded-4 colour-black">
                                <img class="card-img"
                                    src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/51b3j-E5M+L._SX466_.jpg"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                                    <h5 class="card-title fs-4">โครงการจัดฝึกอบรมให้ความรู้การผลิตปุ๋ยชีวภาพ</h5>
                                    <p class="card-text fw-light fs-5">
                                        เพื่อส่งเสริมให้ประชาชนผลิตปุ๋ยอินทรีย์คุณภาพเพื่อลดต้นทุนการผลิต
                                    <p>
                                    <p class="card-text fw-light">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>
                        <!-- card 1 -->
                        <div class="contain  contain1 mx-1 col-4">

                            <div class="card bg-dark text-white rounded-4 colour-black">
                                <img class="card-img"
                                    src="https://www.tcdcmaterial.com/uploads/material/MI00943-01/images/60bf38e78f903_2_%E0%B8%9C%E0%B9%89%E0%B8%B2%E0%B8%A1%E0%B8%B1%E0%B8%94%E0%B8%A2%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%AA%E0%B8%B5%E0%B8%84%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%8A%E0%B8%B2%E0%B8%95%E0%B8%B4.jpg"
                                    alt="Card image">
                                <div
                                    class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                                    <h5 class="card-title fs-4">โครงการฝึกทักษะอาชีพการทำผ้ามัคย้อมสี</h5>
                                    <p class="card-text fw-light fs-5">
                                        โครงการฝึกอบรมและส่งเสริมการฝึกทักษะอาชีพการทำผ้ามัคย้อมสี ประจำปี 2565
                                    <p>
                                    <p class="card-text fw-light">Last updated 3 mins ago</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- สถานที่ท่องเที่ยว -->
        <div class="text-center" style="background:white;">
            <div class="py-5">
                <div>
                    <h1 class="bi bi-signpost"></h1>
                </div>
                <div>
                    <h1>สถานที่เด่นชุมชน</h1>
                </div>
                <!-- menu -->
                <div class="grid-item  ">

                    <div class="items">
                        <!-- card1 -->
                        <div class="contain  contain1 mx-0 col-4 ">
                            <div class="card shadow-0 colour-black   ">
                                <div class=" bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="./img/mosque1.png" class="img-fluid" />
                                    <div class="card-img-overlay d-flex justify-content-center align-items-center ">
                                        <a href="#!" class="fs-3 text-white">มัสยิดดารุสลาม

                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- card1 -->
                        <div class="contain  contain1 mx-0 col-4 ">
                            <div class="card shadow-0 colour-black   ">
                                <div class=" bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="./img/school.png" class="img-fluid " />
                                    <div class="card-img-overlay d-flex justify-content-center align-items-center ">
                                        <a href="#!" class="fs-3 text-white">โรงเรียนชุมชนบ้านสะนอ

                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- card1 -->
                        <div class="contain  contain1 mx-0 col-4 ">
                            <div class="card shadow-0 colour-black   ">
                                <div class=" bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="./img/travel1.png" class="img-fluid" />
                                    <div class="card-img-overlay d-flex justify-content-center align-items-center ">
                                        <a href="#!" class="fs-3 text-white">บ่อลับลาตุ้ลก็อต

                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- ของดี -->
            <div class="text-center" style="background:#f5f5f5;">
                <div class="py-5">
                    <div>
                        <h1 class="bi bi-award"></h1>
                    </div>
                    <div>
                        <h1>ของดีประจำตำบลสะนอ</h1>
                    </div>
                    <!-- menu -->
                    <div class="grid-item  ">

                        <div class="items">
                            <div class="contain  contain1 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text fw-light">Some quick example text to build on the card title
                                            and make
                                            up the
                                            bulk of the card's content.</p>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card2 -->
                            <div class="contain contain2 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text fw-light">Some quick example text to build on the card title
                                            and make
                                            up the
                                            bulk of the card's content.</p>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                            <!-- card3 -->
                            <div class="contain contain3 mx-1 col-3">
                                <div class="card ">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img src="./img/bannerPic.jpg" class="img-fluid" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text fw-light">Some quick example text to build on the card title
                                            and make
                                            up the
                                            bulk of the card's content.</p>
                                        <a href="#!" class=" btn-border shadow btn">อ่านเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- เมนู -->
            <div class="text-center" style="background:white;">
                <div class="py-5">
                    <div>
                        <h1 class="bi bi-award"></h1>
                    </div>
                    <div>
                        <h1>เมนู</h1>
                    </div>
                    <!-- menu -->
                    <div class="container text-center ">
                        <div class="items">
                            <a href="./ita.html">
                                <div class="card-custom gap-3 card-1">
                                    <div class="display-7 " style="height:80px;">
                                        <img src="https://itas.nacc.go.th/Content/img/ITALogo1.png"
                                            style="filter: brightness(0) invert(1);" class="w-100 h-100" alt=""
                                            srcset="">
                                    </div>
                                    งานประเมิณความโปร่งใส
                                </div>
                            </a>
                            <div class="">
                                <div class="card-custom gap-3 card-2">
                                    <div class="display-1 fa fa-book"></div>
                                    <div>คู่มือประชาชน</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-custom gap-3 card-3">
                                    <div class="display-1 fa fa-money-bill-1"></div>
                                    งบประมาณรายจ่ายประจำปี
                                </div>
                            </div>
                            <div class="">
                                <div class="card-custom gap-3 card-4">
                                    <div class="display-1 fa fa-scale-balanced"></div>
                                    ข้อบัญญัติ
                                </div>
                            </div>
                            <div class="">
                                <div class="card-custom gap-3 card-5">
                                    <div class="display-1 fa fa-newspaper"></div>
                                    วารสาร
                                </div>
                            </div>
                            <div class="">
                                <div class="card-custom gap-3 card-6">
                                    <div class="display-1 fa fa-chart-line"></div>
                                    รายงานผลการดำเนินงาน
                                </div>
                            </div>
                            <div class="">
                                <div class="card-custom gap-3 card-7">
                                    <div class="display-1 fa fa-pen-ruler"></div>
                                    แผนพัฒนา
                                </div>
                            </div>
                            <div class="">
                                <div class="card-custom gap-3 card-8">
                                    <div class="display-1 fa fa-hands-holding"></div>
                                    ผลงาน
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- กระดานสนทนา -->
            <div class="" style="background:#f5f5f5;">
                <div class="py-5">
                    <div class="text-center">
                        <div>
                            <h1 class="bi bi-chat-square-text"></h1>
                        </div>
                        <div>
                            <h1>กระดานสนทนา</h1>

                        </div>
                    </div>
                    <!-- menu -->
                    <div class=" container">
                        <div class="d-flex justify-content-between">
                            <div class="dropdown w-25">
                                <button class="btn bg-white dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    สนทนาล่าสุด
                                </button>
                                <ul class="dropdown-menu collapse" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">สนทนาเก่าสุด</a></li>
                                    <li><a class="dropdown-item" href="#">สนทนาที่นิยมสุด</a></li>

                                </ul>
                            </div>
                            <div class="d-flex align-items-center lg rounded-pill">
                                <h2 class="bi bi-plus-circle-fill mb-0 mx-1"></h2>
                                <h7>ตั้งคำถามใหม่</h7>
                            </div>
                        </div>

                        <div class="list-group  my-1">
                            <a href="https://www.sanor.go.th/webboards/show.php?Category=board&No=40"
                                class="list-group-item list-group-item-action " aria-current="true">
                                <div><i class="bi bi-circle-fill"></i></div>
                                <div>
                                    <div class="d-flex w-100 justify-content-between">

                                        <h5 class="mb-1">
                                            สอบถามลงทะเบียนขอสิทธิรับเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิดต้องใช้เอกสารอะไรบ้างค่ะ
                                        </h5>


                                        <div><i class="fa-regular fa-comment"></i><i>ตอบคำถามแล้ว</i></div>

                                    </div>
                                    <p class="fw-light mb-1 d-flex align-items-center"><i
                                            class="bi bi-arrow-return-left"></i> โดย : เคาละห์ บินเจ๊ะสนิ เมื่อ :
                                        2021-04-02
                                        11:59:31</p>
                                    <small
                                        class="fw-light">สอบถามลงทะเบียนขอสิทธิรับเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิดต้องใช้เอกสารอะไรบ้างค่ะ</small>
                                </div>
                            </a>

                        </div>
                        <!-- forum 2 -->
                        <div class="list-group my-1">
                            <a href="https://www.sanor.go.th/webboards/show.php?Category=board&No=41"
                                class="list-group-item list-group-item-action " aria-current="true">
                                <div><i class="bi bi-circle-fill"></i></div>

                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">สอบถามการขอเลฃที่บ้านต้องใช้เอกสารอะไรบ้างครับ</h5>


                                    <div><i class="fa-regular fa-comment"></i><i>ตอบคำถามแล้ว</i></div>

                                </div>
                                <p class="fw-light mb-1 d-flex align-items-center"><i
                                        class="bi bi-arrow-return-left"></i>
                                    โดย เป๊าะจิ เมื่อ 3 วันก่อน.</p>
                                <small class="fw-light">ขอรายละเอียดด้วยครับ</small>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- floating button -->
    <div class="d-flex gap-2 flex-column z-3 align-items-center position-fixed bottom-0 m-3 end-0">

        <a id="btn-up" href="#" style="transition:all 0.4s ease;"
            class="opacity-0 d-flex align-items-center p-3 shadow btn btn-dark rounded-pill">
            <div class="fs-3 bi bi-arrow-up"></div>
            <div class="d-none">กลับไปด้านบนสุด</div>
        </a>
        <a href="e-services.html" class="gap-2 d-flex align-items-center shadow btn p-3 btn-dark rounded-pill" id="es">
            <div class=" fs-3 fa fa-envelope-open-text"></div>
            <div id="es-text"> ระบบบริการประชาชนออนไลน์</div>
        </a>
    </div>

    <!-- end floating button -->

    <!-- FOOTER -->
    <footer class="m-0 p-2 px-5 text-white" style="background: rgb(153,153,153);">

        <div class="d-flex flex-column align-items-center fw-light ">
            <img src="./img/logore.png " width="80px" alt="">
            <div class="px-4 text-center">
                <h4>องค์การบริหารส่วนตำบลสะนอ</h4>
                <div>หมู่ 1 ตำบลสะนอ อำเภอยะรัง จังหวัดปัตตานี รหัสไปรษณีย์ 94160</div>
                <div>โทรศัพท์/โทรสาร : 0-7343-927</div>
                <div>E-mail : office@sanor.go.th</div>

            </div>

            <div class="py-3 ">
                <a target="_blank"
                    href="https://www.facebook.com/people/%E0%B8%AD%E0%B8%9A%E0%B8%95%E0%B8%AA%E0%B8%B0%E0%B8%99%E0%B8%AD-%E0%B8%AD%E0%B8%A2%E0%B8%B0%E0%B8%A3%E0%B8%B1%E0%B8%87-%E0%B8%88%E0%B8%9B%E0%B8%B1%E0%B8%95%E0%B8%95%E0%B8%B2%E0%B8%99%E0%B8%B5/100010671091367/?locale=th_TH">
                    <h3 class="text-center bi bi-facebook"></h3>
                </a>
                <div class="text-center ">
                    <ul class="d-flex align-items-center  list-unstyled">
                        <a href="">
                            <li class="p-2 ">หน้าหลัก</li>
                        </a>
                        |
                        <a href="">
                            <li class="p-2 ">ติดต่อเรา</li>
                        </a>
                        |
                        <a href="">
                            <li class="p-2 ">แผนผังเว็บไซต์</li>
                        </a>
                    </ul>
                </div>
            </div>

        </div>
        <div>

            <p class="fw-light">
                © สงวนลิขสิทธิ์ 2565 องค์การบริหารส่วนตำบลสะนอ จังหวัดปัตตานี <a href="#">Privacy</a> ·
                <a href="#">Terms</a>
            </p>
        </div>

    </footer>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>

</body>

</html>
