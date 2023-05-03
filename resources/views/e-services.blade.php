<html lang="en">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link" />
<link type="text/css" rel="stylesheet" id="dark-mode-general-link" />
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>

<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.108.0" />
    <title>E-services | องค์การบริหารส่วนตำบลสะนอ จังหวัดปัตตานี</title>
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
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <!--  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style.css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./img/favicon.png" sizes="180x180" />
    <link rel="icon" href="./img/favicon.png" sizes="32x32" type="image/png" />
    <link rel="icon" href="./img/favicon.png" sizes="16x16" type="image/png" />
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json" />
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico" />

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


</head>

<body>
    <header class=" ">
        @include('navbar')

    </header>

    <main>

        <div class="bg-dark h-50 "
            style=" background: linear-gradient(330deg, rgba(0,36,36,0) 0%, rgb(102, 0, 255) 100%);">
            <h2 class="container fw-normal  display-4 text-light pt-5">บริการประชาชนออนไลน์ (E-Service)</h2>
            <h3 class="container  display-6 text-light ">องค์การบริหารส่วนตำบลสะนอ</h3>
        </div>

        <div class="container my-3 ">
            <h1>รายการบริการ</h1>
            <div class="d-flex gap-2 flex-wrap">

                <div data-mdb-toggle="modal" data-mdb-target="#Modal1" class="btn btn-secondary">
                    แบบฟอร์มหนังสือร้องเรียน / ร้องทุกข์ทั่วไป
                </div>

                <div data-mdb-toggle="modal" data-mdb-target="#Modal2" class="btn btn-secondary">แบบฟอร์มร้องเรียนทุจริต
                </div>
                <div data-mdb-toggle="modal" data-mdb-target="#Modal3" class="btn btn-secondary">แบบคำร้องทั่วไป</div>
                <div data-mdb-toggle="modal" data-mdb-target="#Modal4" class="btn btn-secondary">
                    แบบขอรับบริการถังขยะมูลฝอย สิ่งปฏิกูล</div>
                <div data-mdb-toggle="modal" data-mdb-target="#Modal5" class="btn btn-secondary">
                    แบบคำร้องขอความอนุเคราะห์น้ำเพื่ออุปโภคบริโภค</div>
                <a target="_"
                    href="https://docs.google.com/forms/d/e/1FAIpQLSc0hb1BAixP6G-489gsk5ywXcpRsfW891XYV6xehsM_qHCadw/viewform"
                    class="btn btn-secondary">ใบแจ้งซ่อมไฟฟ้าส่องสว่างสาธารณะในพื้นที่องค์การบริหารส่วนตำบลสะนอ <span
                        class="fa fa-angles-right"></span> </a>
                <a target="_" href="https://mbdb.cgd.go.th/wel/" class="btn btn-secondary ">ระบบตรวจสอบสิทธิสวัสดิการ
                    <span class="fa fa-angles-right"></span></a>
                <a target="_" href="https://csgcheck.dcy.go.th/public/eq/popSubsidy.do?ms=158953"
                    class="btn btn-secondary">ระบบตรวสิบสิทธิผู้มีสิทธิรับเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด <span
                        class="fa fa-angles-right"></span></a>


            </div>
        </div>
        <!-- Modal -->

        <!-- modal 1 -->
        <form action="#" method="post">
            <div class="modal fw-light fade" id="Modal1" tabindex="-1" aria-labelledby="Modal1Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Modal1Label">แบบฟอร์มหนังสือร้องเรียน/ร้องทุกข์ทั่วไป</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class=" modal-body d-flex flex-column gap-3">

                            <label for="datePicker">วันที่เขียน</label>
                            <input type="date" class="form-control datePicker">

                            <label for="">เรื่อง</label>
                            <input type="tel" id="typePhone" class="form-control" />

                            <label for="">เรียน นายกองค์การบริหารส่วนตำบลสะนอ</label>


                            <label for="">ชื่อ-สกุล</label>
                            <select class="form-select">
                                <option value="">นาย</option>
                                <option value="">นางสาว</option>
                                <option value="">นาง</option>
                            </select>
                            <input class="form-control" type="text">

                            <label for="">อายุ</label>
                            <input type="number" class="form-control" />

                            <label for="">บ้านเลขที่</label>
                            <input type="text" class="form-control" />

                            <label for="">ถนน</label>
                            <input type="text" class="form-control" />

                            <label for="">หมู่</label>
                            <input type="text" class="form-control" />

                            <label for="">หมายเลขบัตรประจำตัวประชาชน</label>
                            <input type="text" class="form-control" />

                            <label for="">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" />

                            <label for="">ได้รับความเดือดร้อนเเนื่องจาก</label>
                            <textarea type="text" class="form-control"></textarea>

                            <label for="">จึงใคร่ขอร้องเรียน/ร้องทุกข์
                                มายังองค์การบริหารส่วนตำบลสะนอเพื่อให้ดำเนินการช่วยเหลือและแก้ไขปัญหาดังนี้</label>
                            <textarea type="text" class="form-control"></textarea>

                            <label for="">สำเนาบัตรประจำตัวประชาชน</label>
                            <input type="file" class="form-control">

                            <label for="">สำเนาบัตรทะเบียนบ้าน</label>
                            <input type="file" class="form-control">

                            <label for="">ภาพถ่าย</label>
                            <input type="file" class="form-control" id="formFileMultiple" multiple>





                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-mdb-dismiss="modal">ปิดหน้าต่าง</button>
                            <button type="button" class="btn btn-primary">ส่งแบบฟอร์ม</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--  -->
        <!-- modal 2 -->
        <form action="#" method="post">
            <div class="modal fw-light fade" id="Modal2" tabindex="-1" aria-labelledby="Modal1Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Modal1Label">
                                แจ้งเรื่องร้องเรียนการทุจริตและประพฤติมิชอบของเจ้าหน้าที่การร้องเรียนทุจริต</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class=" modal-body d-flex flex-column gap-3">

                            <label for="datePicker">วันที่เขียน</label>
                            <input type="date" class="form-control datePicker">

                            <label for="">1. ข้อมูลผู้กล่าวหา/ร้องเรียน/ขอความเป็นธรรม</label>

                            <label for="">ชื่อ-นามสกุล ผู้แจ้ง * :</label>
                            <select class="form-select">
                                <option value="">นาย</option>
                                <option value="">นางสาว</option>
                                <option value="">นาง</option>
                            </select>
                            <input class="form-control" type="text">


                            <label for="">ที่อยู่ผู้แจ้ง</label>
                            <input type="text" class="form-control" />

                            <label for="">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" />
                            <label for="">2. ข้อมูลผู้ถูกกล่าวหา/ผู้ถูกร้องเรียน</label>

                            <label for="">ชื่อ-นามสกุล ผู้ประพฤติมิชอบ * :</label>
                            <select class="form-select">
                                <option value="">นาย</option>
                                <option value="">นางสาว</option>
                                <option value="">นาง</option>
                            </select>
                            <input class="form-control" type="text">


                            <label for="">ที่อยู่ผู้ประพฤติมิชอบ</label>
                            <input type="text" class="form-control" />

                            <label for="">เบอร์โทรศัพท์ผู้ประพฤติมิชอบ</label>
                            <input type="text" class="form-control" />

                            <label for="">3. ข้อกล่าวหา พฤติการณ์จากคำกล่าวหา/ร้องเรียน</label>
                            <textarea name="" class="form-control" id="" rows="10"></textarea>

                            <label for="">4. วัน เวลา และสถานที่เกิดเหตุ</label>
                            <textarea name="" class="form-control" id="" rows="10"></textarea>

                            <label for="">5. พยานหลักฐานประกอบ</label>
                            <label for="" class="text-muted">หลักฐานประกอบ : ไฟล์ไม่เกิน 2 Mbytes **** (แนบไฟล์สกุล .pdf
                                .doc .gif .jpg .png )</label>
                            <input type="file" id="formFileMultiple" multiple class="form-control">






                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-mdb-dismiss="modal">ปิดหน้าต่าง</button>
                            <button type="button" class="btn btn-primary">ส่งแบบฟอร์ม</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--  -->
        <!-- modal 3 -->
        <form action="#" method="post">
            <div class="modal fw-light fade" id="Modal3" tabindex="-1" aria-labelledby="Modal1Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Modal1Label">
                                แบบคำร้องทั่วไป</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class=" modal-body d-flex flex-column gap-3">

                            <label for="datePicker">วันที่เขียน</label>
                            <input type="date" class="form-control datePicker">



                            <label for="">ชื่อ-นามสกุล * :</label>
                            <select class="form-select">
                                <option value="">นาย</option>
                                <option value="">นางสาว</option>
                                <option value="">นาง</option>
                            </select>
                            <input class="form-control" type="text">


                            <label for="">ที่อยู่</label>
                            <input type="text" class="form-control" />

                            <label for="">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" />


                            <label for="">เรื่องที่ขอความช่วยเหลือ</label>
                            <textarea name="" class="form-control" id="" rows="10"></textarea>

                            <label for="">สำเนาบัตรประจำตัวประชาชน</label>
                            <input type="file" class="form-control">
                            <label for="">สำเนาบัตรทะเบียนบ้าน</label>
                            <input type="file" class="form-control">


                            <label for="">ภาพถ่าย</label>
                            <label for="" class="text-muted">หลักฐานประกอบ : ไฟล์ไม่เกิน 2 Mbytes **** (แนบไฟล์สกุล .pdf
                                .doc .gif .jpg .png )</label>
                            <input type="file" id="formFileMultiple" multiple class="form-control">






                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-mdb-dismiss="modal">ปิดหน้าต่าง</button>
                            <button type="button" class="btn btn-primary">ส่งแบบฟอร์ม</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--  -->
        <!-- modal 4 -->
        <form action="#" method="post">
            <div class="modal fw-light fade" id="Modal4" tabindex="-1" aria-labelledby="Modal1Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Modal1Label">
                                แบบคำร้องรับบริการถังขยะมูลฝอย</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class=" modal-body d-flex flex-column gap-3">

                            <label for="datePicker">วันที่เขียน</label>
                            <input type="date" class="form-control datePicker">



                            <label for="">ชื่อ-นามสกุล * :</label>
                            <select class="form-select">
                                <option value="">นาย</option>
                                <option value="">นางสาว</option>
                                <option value="">นาง</option>
                            </select>
                            <input class="form-control" type="text">


                            <label for="">หน่วยงาน</label>
                            <input type="text" class="form-control" />
                            <label for="">ที่อยู่</label>
                            <input type="text" class="form-control" />

                            <label for="">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" />
                            <label for="">มีความประสงค์ที่จะรับถังขยะมูลฝอยฯ จากองค์การบริหารส่วนตำบลสะนอเพื่อนำไปใช้ประโยชน์สำหรับรองรับถังขยะมูลฝอยฯ จากองค์การบริหารส่วนตำบลสะนอ เพื่อนำไปใช้ประโยชน์สำหรับรองรับขยะมูลฝอยฯ ตามที่ได้แสดงความจำนงไว้ ในแบบสำรวจความต้องการถังขยะ
                                โดยมีความประสงค์จะขอรับถังขยะจำนวน**</label>
                            <input type="text" class="form-control" />
                            <label for="">ถัง</label>


                            <label for="">สำหรับบ้านเลขที่ **</label>
                            <input type="text" class="form-control" />



                            <label for="">สำเนาบัตรประจำตัวประชาชน</label>
                            <input type="file" class="form-control">
                            <label for="">สำเนาบัตรทะเบียนบ้าน</label>
                            <input type="file" class="form-control">


                            <label for="">เอกสารประกอบ</label>
                            <label for="" class="text-muted">หลักฐานประกอบ : ไฟล์ไม่เกิน 2 Mbytes **** (แนบไฟล์สกุล .pdf
                                .doc .gif .jpg .png )</label>
                            <input type="file" id="formFileMultiple" multiple class="form-control">






                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-mdb-dismiss="modal">ปิดหน้าต่าง</button>
                            <button type="button" class="btn btn-primary">ส่งแบบฟอร์ม</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--  -->
        <!-- modal 5 -->
        <form action="#" method="post">
            <div class="modal fw-light fade" id="Modal5" tabindex="-1" aria-labelledby="Modal1Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Modal1Label">
                                แบบคำร้องขอความอนุเคราะห์น้ำเพื่ออุปโภคบริโภค</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class=" modal-body d-flex flex-column gap-3">

                            <label for="datePicker">วันที่เขียน</label>
                            <input type="date" class="form-control datePicker">



                            <label for="">ชื่อ-นามสกุล * :</label>
                            <select class="form-select">
                                <option value="">นาย</option>
                                <option value="">นางสาว</option>
                                <option value="">นาง</option>
                            </select>
                            <input class="form-control" type="text">


                            <label for="">ที่อยู่</label>
                            <input type="text" class="form-control" />

                            <label for="">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" />



                            <label for="">สำเนาบัตรประจำตัวประชาชน</label>
                            <input type="file" class="form-control">


                            <label for="">เอกสารประกอบ</label>
                            <label for="" class="text-muted">หลักฐานประกอบ : ไฟล์ไม่เกิน 2 Mbytes **** (แนบไฟล์สกุล .pdf
                                .doc .gif .jpg .png )</label>
                            <input type="file" id="formFileMultiple" multiple class="form-control">


                            <div class="d-flex align-items-baseline gap-2">
                                <input type="checkbox">
                                <label for="">ขอรับรองว่าข้อมูลดังกล่าวเป็นความจริงทุกประการ โดยข้าพเจ้าได้แนบสำเนาภาพถ่ายบัตรประชาชนไว้เป็นหลักฐานในการยื่นคำร้องแล้ว</label>
                            </div>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-mdb-dismiss="modal">ปิดหน้าต่าง</button>
                            <button type="button" class="btn btn-primary">ส่งแบบฟอร์ม</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--  -->
        <script>
            date = document.getElementsByClassName("datePicker");
            let currentDate = new Date().toJSON().slice(0, 10);
            for (let i = 0; i < date.length; i += 1)
                date[i].value = currentDate;
        </script>

    </main>

    <!-- floating button -->
    <div class="d-flex gap-2 flex-column align-items-center position-fixed bottom-0 m-3 end-0">

        <a id="btn-up" href="#" style="transition:all 0.4s ease;"
            class="opacity-0 d-flex align-items-center p-3 shadow btn btn-dark rounded-pill">
            <div class="fs-3 bi bi-arrow-up"></div>
            <div class="d-none">กลับไปด้านบนสุด</div>
        </a>
        <a href="e-services.html" class="gap-2 d-flex align-items-center shadow btn p-3 btn-dark rounded-pill" id="es">
            <div alt="ระบบบริการประชาชนออนไลน์" class=" fs-3 fa fa-envelope-open-text"></div>
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


    <script src="app.js"></script>
</body>

</html>
