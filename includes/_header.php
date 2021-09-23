<?php
$base_url = 'http://localhost/markdesign/careers';
// $base_url = 'http://localhost/Mark_Design/carrierdotcom';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= $base_url ?>/assets/favicon.ico" />
  <link href="https://images.carriercms.com/" rel="preconnect">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="http://s7.addthis.com/" rel="preconnect">
  <meta name="title" content="About Us | Carrier air conditioning, heating and refrigeration" />
  <title>Carrier Indonesia</title>
  <link rel="canonical" href="index.php" />
  <meta property="og:image" content="https://images.carriercms.com/image/upload/h_200/v1576864343/common/logos/carrier-logo.png" />
  <meta property="og:url" content="index.php" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="Carrier" />
  <meta name="twitter:creator" content="Carrier" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/styles.css">
</head>

<body>
  <header>
    <div class="container-fluid fixed-top px-0 ct-header-basic">


      <div class="ct-header-basic-cta">
        <div class="row d-block d-md-none bg-light">
          <div class="col">
            <div class="text-primary align-middle text-center pb-1 mb-0">
              <p class="pb-1 mb-0 small"><strong>24/7 Commercial Service</strong></p>
              <p class="pb-1 mb-0"><strong><em class="material-icons" style="color:#152c73;">call</em> <a href="tel:800-379-6484" target="_self">1-800-379-6484</a></strong></p>
            </div>
            <a class="btn btn-primary btn-sm btn-block" role="button" href="<?= $base_url; ?>/find-an-expert/index.php">
              Find an expert
            </a>
          </div>
        </div>
      </div>
      <div class="ct-header-basic-secondary">
        <div class="container ">
          <div class="d-none d-md-block">
            <nav class="navbar navbar-expand-md navbar-light bg-light" id="navHeader">
              <div id="navbarNavDropdown2" class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="btn" href="https://www.carrier.com/" target="_blank" role="button">
                      Company Website
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="btn" href="https://www.carrier.com/" target="_blank" role="button">
                      Carrier Global
                    </a>
                  </li>
                  <li class="nav-item">
                    <button id="btnLocationTitle" class="btn btn-link" role="button" data-toggle="modal" data-target="#selectRegion">
                      <i class="material-icons align-middle">edit_location<span class="sr-only">Select your location</span></i>
                      Indonesia
                    </button>
                  </li>
                </ul>
                <form id="searchForm" class="navbar-form navbar-right" method="get">
                  <input type="hidden" id="formURL" value="<?= $base_url; ?>/search.php" />
                  <div class="input-group">
                    <input name="q" id="q" type="text" class="form-control" placeholder="Search" aria-label="Search" autocomplete="new search text">
                    <label for="q" class="sr-only">Search</label>
                    <div class="input-group-append">
                      <button id="btnSearch" class="btn" type="button">
                        <i class="material-icons align-bottom">search<span class="sr-only">Search for information</span></i>
                      </button>
                    </div>
                  </div>
                  <input type="hidden" id="product-suggestions-url" value="/commercial/en/us/SearchSuggestions/Products" />
                  <div class="search-autofill d-none">
                    <div>
                      <div class="search-autofill-header">Suggested Searches:</div>
                      <div id="search-suggestions" class="suggestion-products"></div>
                    </div>
                  </div>
                </form>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="container ct-header-basic-brand-bar">
        <nav class="navbar navbar-expand-md navbar-light bg-light">

          <a href="<?= $base_url; ?>/index.php" class="ct-brand-logo-link">
            <img class="cld-responsive ct-brand-logo" data-src="https://images.carriercms.com/image/upload/h_150,q_100,f_auto/v1573562016/common/logos/carrier-corp-logo.png" alt="Carrier Global Corporation, Global Carrier Company, Carrier HVAC, Carrier Refrigeration, Carrier Fire, Carrier Security" loading="lazy" />
            <div class="d-none d-sm-inline-block">Indonesia</div>
          </a>

          <div class="ml-auto">
            <div class="btn-group">
              <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown3" aria-controls="navbarNavDropdown3" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons open-search">search<span class="sr-only">Search for information</span></i>
                <i class="material-icons close-search d-none">close<span class="sr-only">Close Search for information</span></i>
              </button>
              <button class="btn navbar-toggler hamburgerMenu" type="button" data-toggle="collapse" data-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown1" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons open-menu">
                  menu<span class="sr-only">Menu.</span>
                </i><small class="font-weight-light"><br>Menu</small>
                <i class="material-icons close-menu d-none">
                  close<span class="sr-only">close</span>
                </i>
              </button>
            </div>
          </div>

          <div class="ml-auto d-none d-md-flex">
            <a href="<?= $base_url; ?>/contact-us" class="col px-0">
              <span class="d-flex flex-column align-items-center text-center">
                <span class="iconify" data-icon="mdi:file-document-edit-outline" data-width="36"></span>
                <small class="pb-1 mb-0 text-uppercase font-weight-bold">Inquiry form</small>
              </span>
            </a>
            <a href="" class="col px-0">
              <span class="d-flex flex-column align-items-center text-center">
                <span class="iconify" data-icon="mdi:check-circle-outline" data-width="36"></span>
                <small class="pb-1 mb-0 text-uppercase font-weight-bold">Genuine part verification</small>
              </span>
            </a>
            <a href="" class="col px-0">
              <span class="d-flex flex-column align-items-center text-center">
                <span class="iconify" data-icon="mdi:face-agent" data-width="36"></span>
                <small class="pb-1 mb-0 text-uppercase font-weight-bold">Call center: <br> (+62) 21 2660 8088
                </small>
              </span>
            </a>
            <a href="" class="col px-0">
              <span class="d-flex flex-column align-items-center text-center">
                <span class="iconify" data-icon="mdi:whatsapp" data-width="36"></span>
                <small class="pb-1 mb-0 text-uppercase font-weight-bold">Chat with us on WhatsApp
                </small>
              </span>
            </a>
            <div class="col d-flex align-items-center">
              <a class="btn btn-primary btn-sm float-right" role="button" href="<?= $base_url; ?>/find-an-expert/index.php" target="_self">
                Find a dealer
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div class="container-fluid ct-header-basic-primary">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light bg-light" id="siteMainMenu">
            <div id="navbarNavDropdown1" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="dropdown nav-item position-relative">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products<span class="sr-only"></span></a>
                  <div class="dropdown-menu row" aria-labelledby="navbarDropdown1">
                    <div class="col-md-3 display-md-table-cell">

                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong text-uppercase">
                          <a href="<?= $base_url; ?>/products/airside/index.php" target="_self" class="nav-link text-dark">
                            Commercial
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/air-terminals/index.php" target="_self" class="nav-link text-dark">
                            Chillers
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/air-handlers/index.php" target="_self" class="nav-link text-dark">
                            Air Handlers
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/fan-coils/index.php" target="_self" class="nav-link text-dark">
                            Fan Coils
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/beams/index.php" target="_self" class="nav-link text-dark">
                            Controls
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong text-uppercase">
                          <a href="<?= $base_url; ?>/products/controls/index.php" target="_self" class="nav-link text-dark">
                            Light Commercial
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/building-automation/index.php" target="_self" class="nav-link text-dark">
                            Cassette
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/bacnet-hvac-controllers/index.php" target="_self" class="nav-link text-dark">
                            Ducted
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/carrier-comfort-network/index.php" target="_self" class="nav-link text-dark">
                            Console
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/sensors/index.php" target="_self" class="nav-link text-dark">
                            Floor Standing
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/thermostats/index.php" target="_self" class="nav-link text-dark">
                            Multi Split
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/i-vu/controls-expert-program/index.php" target="_self" class="nav-link text-dark">
                            Water Cooled Package Unit
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong text-uppercase">
                          <a href="<?= $base_url; ?>/products/split-systems-and-condensers/index.php" target="_self" class="nav-link text-dark">
                            VRF Systems
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/split-systems-and-condensers/split-systems/index.php" target="_self" class="nav-link text-dark">
                            Outdoor Units
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/split-systems-and-condensers/air-cooled-condensers/index.php" target="_self" class="nav-link text-dark">
                            Indoor Units
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/coils/index.php" target="_self" class="nav-link text-dark">
                            Coils
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong text-uppercase">
                          <a href="<?= $base_url; ?>/products/variable-refrigerant-flow/index.php" target="_self" class="nav-link text-dark">
                            Residential
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/variable-refrigerant-flow/carrier-vrf-products/index.php" target="_self" class="nav-link text-dark">
                            Inverter R32 Air Conditioner
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/variable-refrigerant-flow/toshiba-carrier-vrf-products/index.php" target="_self" class="nav-link text-dark">
                            Inverter R410A Air Conditioner
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/variable-refrigerant-flow/toshiba-carrier-vrf-products/index.php" target="_self" class="nav-link text-dark">
                            Fix Speed R32 Air Conditioner
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/variable-refrigerant-flow/toshiba-carrier-vrf-products/index.php" target="_self" class="nav-link text-dark">
                            Fix Speed R410A Air Conditioner
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="dropdown nav-item position-relative">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service<span class="sr-only"></span></a>
                  <div class="dropdown-menu row" aria-labelledby="navbarDropdown2">
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong text-uppercase">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/index.php" target="_self" class="nav-link text-dark">
                            Service
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/start-up-and-extended-warranty/index.php" target="_self" class="nav-link text-dark">
                            Operate, Service &amp; Protect
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/retrofit-and-optimize/index.php" target="_self" class="nav-link text-dark">
                            Retrofit &amp; Optimize
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="dropdown nav-item position-relative">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Software<span class="sr-only"></span></a>
                  <div class="dropdown-menu row" aria-labelledby="navbarDropdown4">
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong text-uppercase">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/index.php" target="_self" class="nav-link text-dark">
                            Software
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/hourly-analysis-program/index.php" target="_self" class="nav-link text-dark">
                            Hourly Analysis Program
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="dropdown nav-item position-relative">
                  <a href="<?= $base_url; ?>/healthy-buildings/index.php" target="_self" class="nav-link">
                    Healthy Buildings
                  </a>
                </li>
                <li class="dropdown nav-item position-relative">
                  <a href="<?= $base_url; ?>/blog/index.php" target="_self" class="nav-link">
                    Blog
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" target="_blank" href="https://www.carrier.com/nationalaccounts/en/us/" id="navbarDropdown9">Sustainability
                    <i class="material-icons align-bottom">open_in_new
                      <span class="sr-only">Opens in a new window</span>
                    </i>
                  </a>
                </li>
                <li class="dropdown nav-item position-relative">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown10" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us<span class="sr-only"></span></a>
                  <div class="dropdown-menu row" aria-labelledby="navbarDropdown10">
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong text-uppercase">
                          <a href="<?= $base_url; ?>/about/index.php" target="_self" class="nav-link text-dark">
                            About Carrier
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>about/fact-sheet/index.php" target="_self" class="nav-link text-dark">
                            Carrier Indonesia
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>about/fact-sheet/index.php" target="_self" class="nav-link text-dark">
                            Fact Sheet
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>about/core-values/index.php" target="_self" class="nav-link text-dark">
                            Core Values
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/history/index.php" target="_self" class="nav-link text-dark">
                            History
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/willis-carrier/index.php" target="_self" class="nav-link text-dark">
                            Willis Carrier
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div id="navbarNavDropdown3" class="navbar-collapse collapse">
              <div class="row d-block d-md-none">
                <div class="col">
                  <form name="searchFormMobile" id="searchFormMobile" method="get">
                    <div class="input-group">
                      <input type="text" class="form-control" id="searchBoxMobile">
                      <label for="searchBoxMobile" class="sr-only"></label>
                      <div class="input-group-append">
                        <button class="btn" type="button" id="btnSearchResults">
                          <i class="material-icons align-bottom">search<span class="sr-only">Search</span></></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>