<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agência Upper</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;800&display=swap" rel="stylesheet">
        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            
        </style>
        
        {{-- CSS aplicação --}}
        <link rel="stylesheet" href="/css/styles.css">

        <script src="https://kit.fontawesome.com/5fd0680995.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <div class="div1">

            {{-- NAVBAR --}}
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand fontPoppinsBold" href="#">Logo Here</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link fontPoppins active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fontPoppins" href="#">Vivamus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fontPoppins" href="#">Curabitur</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fontPoppins" href="#">Cras viveci</a>
                                {{-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
                            </li>
                        </ul>
                    </div>
                </nav>
            {{-- END NAVBAR --}}

            {{-- PRODUCT --}}
                <div class="card mb-3 cardProduct" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4 cardImg">
                            <img src="/img/bose-logo.png" alt="Image product" style="width:214px; height:37px;">
                            <img src="/img/bose-qc35.png" alt="Image logo product"  style="margin-top:10px; width:310px; height:453px;">
                            
                            <div style="width: 100%;">
                                <div style="float:left;">
                                    <div class="arrowLeft"></div>
                                    <img src="/img/QC35-front.png" style="margin-top:45px; margin-left:20px">
                                </div>
                                <div style="float:left; width:50%">
                                    <div class="circleImg"></div>
                                    <div class="circleImg"></div>
                                    <div class="activeCircle circleImg"></div>
                                    <div class="circleImg"></div>
                                    <div class="circleImg"></div>
                                </div>
                                <div style="float: left; margin-right:0px;">
                                    <img src="/img/qc35 btns.png" style="margin-top: 45px;">
                                    <div class="arrowLeft" style="transform: rotate(225deg);"></div>
                                </div>
                                <br style="clear: left;" />
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="card-bodyProduct" style="padding: 50px;">
                                <h5 class="card-title fontRoboto" style="font-size: 29px">Sed lobortis</h5>
                                <p class="card-text fontRobotoLight">Vivamus commodo semper congue. Cras imperdiet leo
                                    quam, consectetur vestibulum elit efficitur non. Duis
                                    maximus sem augue, non finibus orci semper et. Nunc
                                    dapibus urna a faucibus aliquam. Aenean at vestibulum
                                    lectus. Donec eu venenatis est. </p>
                                <h5 class="card-title fontRoboto" style="margin-top: 10px">Donec</h5>
                                    <p class="card-text fontRobotoLight"><span style="color: #8A8C8E;margin-right:10px">-</span> Nullam pretium dolor ligula</p>
                                    <p class="card-text fontRobotoLight"><span style="color: #8A8C8E;margin-right:10px">-</span> Donec justo arcu</p>
                                    <p class="card-text fontRobotoLight"><span style="color: #8A8C8E;margin-right:10px">-</span> Curabitur at faucibus velit</p>
                                    <p class="card-text fontRobotoLight"><span style="color: #8A8C8E;margin-right:10px">-</span> Sed rhoncus efficitur augue</p>
                                    <p class="card-text fontRobotoLight"><span style="color: #8A8C8E;margin-right:10px">-</span> Curabitur vehicula lacinia fermentum </p>
                                <h5 class="card-title fontRoboto" style="margin-top: 10px">Colors:</h5>
                                <div>
                                    <div class='pickColor'></div>
                                    <div class='pickColor' style="background-color: #9D9EA0;"></div>
                                    <div class='pickColor' style="background-color: #253654;"></div>
                                    <div class='pickColor' style="background-color: #E01E3C;"></div>
                                    <div style="display: inline-block"><img src="/img/Custom.png"></div>
                                </div>
                                <h5 class="card-title fontRoboto" style="margin-top: 10px; display:inline-block; margin-right:10px;">Quantity:</h5><div class="quantityDesign" style="display:inline-block;"><span class="separaQuantity">-</span> <span class="separaQuantity">1</span> <span class="separaQuantity">+</span></div>
                                <h5 class="card-title fontRoboto" style="margin-top: 10px; color:#0093DD; font-size:30px; font-weight: bold;">$349.95</h5>
                                <div class="cartDesign" style="display:inline-block; text-align:center;">
                                    <div class="md-6" style="top:50%;">
                                        <span style="float:left; padding-right:8px; margin-top:10%; margin-left:20px;">ADD TO</span>
                                        <i class="fas fa-shopping-bag" style="color:#FFFFFF;margin-top:10%;"></i>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card-bodyProduct divFinalProdcut">
                                <h5 class="card-title" style="font-size: 13px; font-weight:lighter;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><span class="fontRoboto" style="font-size: 13px; font-weight:lighter; display:inline-block">(483 Reviews)</span></h5>
                                <h5 class="card-title fontRoboto" style="font-size: 13px; font-weight:lighter; display:inline-block"></h5>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- END PRODUCT --}}

        </div>
        <div class="div2">

            <div class="card mb-3 cardDiv2" style="width:100%;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body" style="padding-left:150px; display: inline-block; position: relative;">
                            <div style="display: relative">
                                <div class="enfeiteDiv2"></div>
                                <div class="alignText">
                                    Lorem ipsum,<p>
                                    consectetur adipiscing
                                </div>
                            </div>
                            <div class="card-text fontPoppinsSemHover" style="margin-top:90px; line-height:8px; opacity:0.7; color:#000000c7">
                                <p>Sed lobortis ex leo. Vestibulum eget neque in ex</p>
                                <p>consequat condimentum. Suspendisse dictum vel</p>
                                <p>ultrices id, laoreet vitae sapien.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body" style="margin-left:20px;">
                            <input type="text" class="formDiv2 fontPoppinsSemHover" style="text-color:#00000048" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Your email address">
                            <input type="text" class="formDiv2 fontPoppinsSemHover" style="text-color:#00000048" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Your name / company’s name">
                            <input type="text" class="formDiv2 fontPoppinsSemHover" style="height:236px; padding-bottom:160px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Your message">
                            <input type="button" value="Send" class="btn btn-outline-primary" style="margin-top:20px; height:60px; width:197px; float:right;">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="div3">
            
            <div class="card mb-3" style="width:100%; border:none; background-color:#C5E6E8;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body" style="display: inline-block; position: relative;">
                            <div style="display: relative">
                                <div class="enfeiteDiv3"><img src="/img/aspas.png"></div>
                                <div class="fontManropeBold" style="padding-left:100px;">
                                    Real Stories from<p>
                                    Real Customers
                                </div>
                            </div>
                            <div class="card-text fontManrope" style="margin-left:100px; color:#000000">
                                <p>Get inspired by these stories.</p>
                            </div>
                            <div class="card mb-3 shadowCard" style="margin-left:200px; padding-bottom:10px;">
                                <img src="/img/Hubspot Logo.png" class="card-img-top cardImgDiv3" alt="...">
                                <div class="card-body">
                                    <div><img class="miniAspas" src="/img/aspas.png"></div>
                                    <p class="card-text fontManrope" style="margin-left:50px; color:#18191F;">
                                        To quickly start my startup
                                        landing page design, I was
                                        looking for a landing page UI
                                        Kit. Landify is one of the best
                                        landing page UI kit I have come
                                        across. It’s so flexible, well
                                        organised and easily editable.
                                    </p>
                                    <h5 class="card-title fontManrope" style="margin-left:50px; font-weight:bold;">Floyd Miles</h5>
                                    <p class="card-text fontManrope" style="margin-left:50px; font-size:14px;"><small class="text-muted">Vice President, GoPro</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body" style="margin-right:100px; margin-left:0px; margin-top:100px;">
                            <div class="card mb-3 shadowCard" style="padding-bottom:10px;">
                                <img src="/img/Airbnb Logo.png" class="card-img-top cardImgDiv3" alt="...">
                                <div class="card-body">
                                    <div><img class="miniAspas" src="/img/aspas.png"></div>
                                    <p class="card-text fontManrope" style="margin-left:50px; color:#18191F;">
                                        I used landify and created a landing page
                                        for my startup within a week. The Landify
                                        UI Kit is simple and highly intuitive, so
                                        anyone can use it.
                                    </p>
                                    <h5 class="card-title fontManrope" style="margin-left:50px; font-weight:bold;">Jane Cooper</h5>
                                    <p class="card-text fontManrope" style="margin-left:50px; font-size:14px;"><small class="text-muted">CEO, Airbnb</small></p>
                                </div>
                            </div>    
                        </div>
                        <div class="card-body" style="margin-right:180px; margin-left:0px; margin-top:0px;">
                            <div class="card mb-3 shadowCard" style="padding-bottom:10px;">
                                <img src="/img/BookMyShow Logo.png" class="card-img-top cardImgDiv3" alt="...">
                                <div class="card-body">
                                    <div><img class="miniAspas" src="/img/aspas.png"></div>
                                    <p class="card-text fontManrope" style="margin-left:50px; color:#18191F;">
                                        Landify saved our time in
                                        designing my company page.
                                    </p>
                                    <h5 class="card-title fontManrope" style="margin-left:50px; font-weight:bold;">Kristin Watson</h5>
                                    <p class="card-text fontManrope" style="margin-left:50px; font-size:14px;"><small class="text-muted">Co-Founder, BookMyShow</small></p>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer>
            <div class="col md-4">
                <span class="fontPoppinsBold">Logo Here</span>
            </div>
            <div class="col md-4">
                <span class="fontPoppins">Cras gravida magna pulvinar tor</span>
            </div>
            <div class="col md-4">
                <span class="fontPoppins">copyright Orange labs 2020</span>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script>

        </script>
    </body>
    </html>
