<?php
$base_url = 'http://localhost/markdesign/careers';
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
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/products/index.php" target="_self" class="nav-link">
                            All Products
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/products/airside/index.php" target="_self" class="nav-link">
                            Airside
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/air-handlers/index.php" target="_self" class="nav-link">
                            Air Handlers
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/air-terminals/index.php" target="_self" class="nav-link">
                            Air Terminals
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/beams/index.php" target="_self" class="nav-link">
                            Beams
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/coils/index.php" target="_self" class="nav-link">
                            Coils
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/fan-coils/index.php" target="_self" class="nav-link">
                            Fan Coils
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/induction-units/index.php" target="_self" class="nav-link">
                            Induction Units
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/unit-ventilators/index.php" target="_self" class="nav-link">
                            Unit Ventilators
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/products/chillers-components/index.php" target="_self" class="nav-link">
                            Chillers &amp; Components
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/chillers-components/air-cooled-chillers/index.php" target="_self" class="nav-link">
                            Air-Cooled Chillers
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/chillers-components/water-cooled-chillers/index.php" target="_self" class="nav-link">
                            Water-Cooled Chillers
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/chillers-components/components/index.php" target="_self" class="nav-link">
                            Components
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/products/controls/index.php" target="_self" class="nav-link">
                            Controls
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/building-automation/index.php" target="_self" class="nav-link">
                            Building Automation
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/bacnet-hvac-controllers/index.php" target="_self" class="nav-link">
                            BACnet HVAC Controllers
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/carrier-comfort-network/index.php" target="_self" class="nav-link">
                            Carrier Comfort Network
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/sensors/index.php" target="_self" class="nav-link">
                            Sensors
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/controls/thermostats/index.php" target="_self" class="nav-link">
                            Thermostats
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/i-vu/controls-expert-program/index.php" target="_self" class="nav-link">
                            Controls Expert Program
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="https://www.carrier.com/residential/en/us/products/ductless-systems/" target="_self" class="nav-link">
                            Ductless Systems
                            <i class="material-icons align-bottom">
                              open_in_new
                            </i>
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/products/packaged-indoor/index.php" target="_self" class="nav-link">
                            Packaged Indoor
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/packaged-indoor/packaged-indoor-self-contained/index.php" target="_self" class="nav-link">
                            Self-Contained
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/packaged-indoor/packaged-indoor-wshps/index.php" target="_self" class="nav-link">
                            WSHPs
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/products/packaged-outdoor/index.php" target="_self" class="nav-link">
                            Packaged &amp; Dedicated Outdoor Air Units
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/packaged-outdoor/outdoor-packaged-units/index.php" target="_self" class="nav-link">
                            Outdoor Packaged Units
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/packaged-outdoor/DOAS/index.php" target="_self" class="nav-link">
                            Dedicated Outdoor Air Systems
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/products/split-systems-and-condensers/index.php" target="_self" class="nav-link">
                            Split Systems &amp; Condensers
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/split-systems-and-condensers/split-systems/index.php" target="_self" class="nav-link">
                            Split Systems
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/split-systems-and-condensers/air-cooled-condensers/index.php" target="_self" class="nav-link">
                            Air-Cooled Condensers
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/airside/coils/index.php" target="_self" class="nav-link">
                            Coils
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/products/variable-refrigerant-flow/index.php" target="_self" class="nav-link">
                            Variable Refrigerant Flow
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/variable-refrigerant-flow/carrier-vrf-products/index.php" target="_self" class="nav-link">
                            Carrier VRF Systems
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/products/variable-refrigerant-flow/toshiba-carrier-vrf-products/index.php" target="_self" class="nav-link">
                            Toshiba Carrier VRF Systems
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="http://www.totaline.com/" target="_blank" class="nav-link">
                            Parts &amp; Supplies
                            <i class="material-icons align-bottom">
                              open_in_new
                            </i>
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="https://www.carrier.com/residential/en/us/" target="_blank" class="nav-link">
                            Residential Products
                            <i class="material-icons align-bottom">
                              open_in_new
                            </i>
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="https://www.carrier.com/residential/en/us/products/air-conditioners/" target="_blank" class="nav-link">
                            Air Conditioners
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="https://www.carrier.com/residential/en/us/products/heat-pumps/" target="_blank" class="nav-link">
                            Heat Pumps
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="https://www.carrier.com/residential/en/us/products/packaged-products/" target="_self" class="nav-link">
                            Packaged Products
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="https://www.carrier.com/residential/en/us/products/evaporator-coils/" target="_blank" class="nav-link">
                            Evaporator Coils
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="https://www.carrier.com/residential/en/us/products/fan-coils/" target="_blank" class="nav-link">
                            Fan Coils
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="https://www.carrier.com/residential/en/us/products/furnaces/" target="_blank" class="nav-link">
                            Furnaces
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="https://www.carrier.com/residential/en/us/products/boilers/" target="_blank" class="nav-link">
                            Boilers
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
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/service/index.php" target="_self" class="nav-link">
                            Service Overview
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/service/request-information/index.php" target="_self" class="nav-link">
                            Request Information
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/service/service-forms/index.php" target="_self" class="nav-link">
                            Service Forms
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/index.php" target="_self" class="nav-link">
                            Operate, Service &amp; Protect
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/start-up-and-extended-warranty/index.php" target="_self" class="nav-link">
                            Start-Up Services & Extended Warranty Protection
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/prevent-and-predict/index.php" target="_self" class="nav-link">
                            Preventive & Predictive Maintenance
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/bluedge-digital/index.php" target="_self" class="nav-link">
                            BluEdge™ Digital
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/remote-airside-management/index.php" target="_self" class="nav-link">
                            Remote Airside Management
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/repairs-and-emergencies/index.php" target="_self" class="nav-link">
                            Repairs & Emergency Service
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/equipment-overhaul/index.php" target="_self" class="nav-link">
                            Equipment Overhaul
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/refrigerant-management/index.php" target="_self" class="nav-link">
                            Refrigerant Management
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="https://www.carrier.com/rentals/en/us" target="_blank" class="nav-link">
                            Temporary Solutions
                            <i class="material-icons align-bottom">
                              open_in_new
                            </i>
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/24-by-7-support-and-service/index.php" target="_self" class="nav-link">
                            24/7 Support & Service
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/operate-service-and-protect/consulting-engineering/index.php" target="_self" class="nav-link">
                            Consulting Engineering
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/service/retrofit-and-optimize/index.php" target="_self" class="nav-link">
                            Retrofit &amp; Optimize
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/retrofit-and-optimize/baseline-analysis/index.php" target="_self" class="nav-link">
                            Baseline Analysis
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/retrofit-and-optimize/building-management/index.php" target="_self" class="nav-link">
                            Building Management Solutions
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/retrofit-and-optimize/modernize-retrofit-and-optimize/index.php" target="_self" class="nav-link">
                            Modernize, Retrofit & Optimize
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/service/retrofit-and-optimize/equipment-replacement-solutions/index.php" target="_self" class="nav-link">
                            Equipment Replacement Solutions
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
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/index.php" target="_self" class="nav-link">
                            Software Overview
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/software-ordering/index.php" target="_self" class="nav-link">
                            Order Software
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/software-downloads/index.php" target="_self" class="nav-link">
                            Download Software
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/software-downloads/edesign-trial-software/index.php" target="_self" class="nav-link">
                            Free 90-Day eDesign Trial
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/software-training/index.php" target="_self" class="nav-link">
                            Software Training
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/electronic-catalog/index.php" target="_self" class="nav-link">
                            Electronic Catalog
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/index.php" target="_self" class="nav-link">
                            HVAC System Design
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/blockload/index.php" target="_self" class="nav-link">
                            Block Load
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/building-system-optimizer/index.php" target="_self" class="nav-link">
                            Building System Optimizer
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/engineering-economic-analysis/index.php" target="_self" class="nav-link">
                            Engineering Economic Analysis
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/hourly-analysis-program/index.php" target="_self" class="nav-link">
                            Hourly Analysis Program
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/refrigerant-piping-design/index.php" target="_self" class="nav-link">
                            Refrigerant Piping Design
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/system-design-load/index.php" target="_self" class="nav-link">
                            System Design Load
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 display-md-table-cell">
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/software-support/index.php" target="_self" class="nav-link">
                            Software Support
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/literature/newsletters/index.php" target="_self" class="nav-link">
                            EXchange Newsletter
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/hvac-system-design/software-support/hap-training-videos/index.php" target="_self" class="nav-link">
                            HAP Training Videos
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a target="_self" class="nav-link">
                            HAP FAQs
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/dxf-cad-templates/index.php" target="_self" class="nav-link">
                            DXF/CAD Templates
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/revit-3d-templates/index.php" target="_self" class="nav-link">
                            REVIT 3D Templates
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/software/revit-3d-templates/revit-configuration-portal/index.php" target="_self" class="nav-link">
                            Revit Configuration Portal
                          </a>
                        </li>
                      </ul>
                      <ul class="ct-menusub-basic-header mr-auto submenu-title">
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/software/mobile-apps/index.php" target="_self" class="nav-link">
                            Mobile Apps
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
                        <li class="nav-item link-text-strong">
                          <a href="<?= $base_url; ?>/about/index.php" target="_self" class="nav-link">
                            About Carrier
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>about/core-values/index.php" target="_self" class="nav-link">
                            Core Values
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>about/fact-sheet/index.php" target="_self" class="nav-link">
                            Fact Sheet
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/willis-carrier/index.php" target="_self" class="nav-link">
                            Willis Carrier
                          </a>
                        </li>
                        <li class="nav-item link-text-indent">
                          <a href="<?= $base_url; ?>/history/index.php" target="_self" class="nav-link">
                            History
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