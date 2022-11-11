<?php include('header.php') ?>
<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
<style>
    .slider {
        width: 90%;
        margin: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }

    .slick-prev:before,
    .slick-next:before {
        color: #3482f5 !important;
    }

    .slick-center .currents {
        font-size: 12px;
        background: #3482f5;
        color: white;
        height: 50px;
        display: flex;
        align-items: center;
    }

    .slick-slide {
        font-size: 12px;
        height: 50px;
        display: flex !important;
        align-items: center;
        padding: 0 7px;
    }

    .slick-arrow {
        display: block;
        height: 50px;
        width: 38px;
        border: 1px solid lightgrey;
        background-color: white;
        z-index: 99;
    }

    .noUi-target {
        background: none;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .slick-list.draggable {
        bottom: 23px;
    }

    .slick-arrow:hover {
        background-color: white;
    }

    .borders {
        background: transparent;
        width: 95%;
        height: 50px;
        position: absolute;
        left: 26px;
        top: 56.3%;
        border: 1px solid lightgrey;
        border-radius: 4px;
    }

    button.slick-next.slick-arrow {
        border-right: none;
        border-radius: 0 4px 4px 0;
    }

    button.slick-prev.slick-arrow {
        border-radius: 4px 0 0 4px;
    }

    .slick-slide {
        margin: 0px 10px;
        width: 85px !important;
        padding: 0 8px;
        text-align: center;
    }
</style>
<!-- Nav Header Component Start -->
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h1>Hello! Krishana Cyber Cafe</h1>
                        <p>At a glance summary of your account. Have fun!</p>
                    </div>
                    <div>
                        <a href="" class="btn btn-link btn-soft-light">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z" fill="currentColor"></path>
                            </svg>
                            Announcements
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
    </div>
</div> <!-- Nav Header Component End -->
<!--Nav End-->
<!-- </div>-->
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title w-100">
                            <h4 class="card-title">OnLine Bus Booking</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="card-body p-0">

                        <div class="borders"></div>
                        <section class="center slider">

                            <div>
                                <div class="currents">14 Dec, Wed</div>
                            </div>
                            <div>
                                <div class="currents">15 Dec, Thu</div>
                            </div>
                            <div>
                                <div class="currents">16 Dec, Fri</div>
                            </div>
                            <div>
                                <div class="currents">17 Dec, Sat</div>
                            </div>
                            <div>
                                <div class="currents">18 Dec, Sun</div>
                            </div>
                            <div>
                                <div class="currents">18 Dec, Sun</div>
                            </div>
                            <div>
                                <div class="currents">19 Dec, Mon</div>
                            </div>
                            <div>
                                <div class="currents">20 Dec, Tue</div>
                            </div>
                            <div>
                                <div class="currents">21 Dec, Wed</div>
                            </div>
                            <div>
                                <div class="currents">22 Dec, Thu</div>
                            </div>
                            <div>
                                <div class="currents">23 Dec, Fri</div>
                            </div>
                            <div>
                                <div class="currents">24 Dec, Sat</div>
                            </div>
                            <div>
                                <div class="currents">25 Dec, Sun</div>
                            </div>
                            <div>
                                <div class="currents">26 Dec, Mon</div>
                            </div>
                            <div>
                                <div class="currents">27 Dec, Tue</div>
                            </div>
                            <div>
                                <div class="currents">28 Dec, Wed</div>
                            </div>
                            <div>
                                <div class="currents">29 Dec, Thu</div>
                            </div>
                            <div>
                                <div class="currents">30 Dec, Fri</div>
                            </div>
                            <div>
                                <div class="currents">31 Dec, Sat</div>
                            </div>
                            <div>
                                <div class="currents">1 Jan, Sun</div>
                            </div>
                        </section>
                    </div>

                </div>
                <div class="bus-card" id="bus_39_MMTCC1199_MMTCC2140_13-12-2022_1001653243642926671">
                    <div class="makeFlex">
                        <div class="makeFlex column bus-view-left">
                            <div class="makeFlex column appendBottom22">
                                <div class="makeFlex hrtlCenter appendBottom8"><span class="latoBlack font22 blackText appendRight15">Shatabdi Travels</span><span class="sc-kgoBCf cRUkIz"><span class="sc-kGXeez bfoMHl">3.9</span>/5</span>
                                    <div class="font12 lightGreyText">235 Ratings</div>
                                </div>
                                <div class="makeFlex hrtlCenter font12 blackText"><span>AC Sleeper (2+1)</span>
                                    <div class="line-border-right"></div>
                                    <ul class="sc-fjdhpX fXgCif"><span class="sc-cSHVUG lajtry sc-jzJRlG gKqGkn"></span> 30 Seats Left</ul>
                                    <div class="line-border-right"></div>
                                    <ul class="sc-fjdhpX fXgCif"><span class="sc-cSHVUG lajtry sc-jzJRlG koyVmu"></span> 20 Window Seats</ul>
                                </div>
                            </div>
                            <div class="makeFlex row hrtlCenter appendBottom20">
                                <div class="col-md-3"><span class="font20 latoBlack blackText">21:00,&nbsp;</span><span class="font16 lightGreyText capText">13 Dec</span></div>
                                <div class="line-border-top"></div>
                                <div class="latoBold col-md-3 font16 lightGreyText"><span class="blackText">08</span>hrs <span class="blackText">00</span>mins</div>
                                <div class="line-border-top"></div>
                                <div class="col-md-3"><span class="font20 latoBlack blackText">05:00, </span><span class="font16 lightGreyText capText">14 Dec</span></div>
                            </div>

                        </div>
                        <div class="price-section">
                            <div class="makeFlex column end">
                                <div class="latoBold font12 lightGreyText appendBottom5">starting from</div>
                                <div class="makeFlex">
                                    <div class="makeFlex end"><span class="old-price" id="old_price">₹900</span></div><span placeholder="true" class="sc-ckVGcZ dYlDBG" id="price">&nbsp;850</span>
                                </div>
                            </div>
                            <a class="sc-jKJlTe bPClQZ" id="btn_select_seat" data-test-id="select-seats">Select Seats</a>
                            <a class="sc-jKJlTe bPClQZ" id="btn_hide_seat" data-test-id="select-seats" style="display: none;">Hide Seats</a>
                        </div>
                    </div>
                    <div id="seats-data" style="display: none;">
                        <div class="seatMapContainer detailsPopup makeRelative colorWhiteSmoke">
                            <div class="makeFlex details-container spaceBetween">
                                <div class="makeFlex column">
                                    <p class="font16 blackText latoBlack appendBottom15">Select Pickup &amp; Drop Points</p>
                                    <div class="makeFlex">
                                        <div class="pickupPoint animateWidth makeFlex column fullwidth">
                                            <ul class="btnSelectBus">
                                                <li class="selected makeFlex spaceBetween sc-cMljjf hISbyd" data-test-id="21726393"><span class="makeFlex font12 column blackText"><span class="latoBold appendBottom10"><span>21:00</span><span class="capText">,&nbsp;13 Dec</span></span><span class="latoBold appendBottom5">Others</span><span class="bus-stop-address"> Shatabdi travels shop no.14 Morigate Bus Tarminal Opp Mandir wali parking Near Kashmiri gate Metro station gate no 2
                                                        </span></span><img class="sc-jAaTju hyUDU" src="data:image/png;base64,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"></li>
                                            </ul>
                                        </div>
                                        <div class="pickupPoint animateWidth makeFlex column fullwidth">
                                            <ul class="btnSelectBus">
                                                <li class="selected makeFlex spaceBetween sc-cMljjf hISbyd" data-test-id="19029894"><span class="makeFlex font12 column blackText"><span class="latoBold appendBottom10"><span>05:00</span><span class="capText">,&nbsp;14 Dec</span></span><span class="latoBold appendBottom5">Faizalganj</span><span class="bus-stop-address"> Fazalganj </span></span><img class="sc-jAaTju hyUDU" src="data:image/png;base64,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"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sc-jlyJG kzGtHG" data-test-id="seatmap">
                                    <div class="makeFlex spaceBetween appendBottom15"><span class="font16 latoBlack blackText pushLeft">Select Seats</span>
                                        <div class="pushRight latoBold font8 deepskyBlueText capText pointer makeRelative"><img class="ic-seat-booked" src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-seat-booked.789ec461.svg" alt=""> INFO</div>
                                    </div>
                                    <div class="makeFlex hrtlCenter negative-margin"><span class="berth-name">UPPER BERTH</span>
                                        <div class="sc-jWBwVP jvaXlp" data-deck-type="UPPER">
                                            <div class="sc-brqgnP kpbvII" style="width: 390px; height: 161.85px;">
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 0px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 0px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 0px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 78px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 78px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 78px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 156px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 156px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 156px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 234px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 234px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 234px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 312px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 312px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 312px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="makeFlex hrtlCenter negative-margin"><span class="berth-name">LOWER BERTH</span>
                                        <div class="sc-jWBwVP jvaXlp" data-deck-type="LOWER">
                                            <div class="makeFlex makeRelative"><img class="ic-steering-wheel" src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/steering-wheel.76ed628a.svg"></div>
                                            <div class="sc-brqgnP kpbvII" style="width: 390px; height: 161.85px;">
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 0px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 0px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 0px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 78px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 78px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 78px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 156px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 156px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 156px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 234px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 234px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 234px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 312px; top: 122.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 312px; top: 5.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                                <div data-testid="seat_horizontal_sleeper_available"><img src="//jsak.mmtcdn.com/bus_cdn_dt/static/media/ic-sleeper-avl.7194aed4.svg" alt="" class="seat-icon" style="left: 312px; top: 44.85px; opacity: 1; width: 72.15px; height: 33.15px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="makeFlex blackText spaceBetween appendTop10 appendBottom18">
                                        <div class="makeFlex column font14"><span class="latoBlack appendBottom10">Seats Selected</span><span class="latoItalic font14 darkGreyText">No seats selected yet</span></div>
                                    </div>
                                    <div class="cta-book-seats font16 capText makeFlex hrtlCenter vrtlCenter "><span>BOOK SEATS</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {

        $(".center").slick({
            dots: false,
            infinite: true,
            centerMode: true,
            slidesToShow: 7,
            slidesToScroll: 3,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }

            ]
        });

    });



    $('#btn_select_seat').click(function() {
        $(this).hide();
        $('#seats-data').show();
        $('#btn_hide_seat').show();
    });
    $('#btn_hide_seat').click(function() {
        $(this).hide();
        $('#seats-data').hide();
        $('#btn_select_seat').show();
    });
</script>