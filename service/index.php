<?php
include_once('../includes/_header.php');

$list_benefits = [
  [
    'pict' => 'https://images.carriercms.com/image/upload/w_auto,c_lfill,q_auto,f_auto/v1559052878/carrier/commercial-hvac/people/carrier-technician-evaluating-hvac-equipment.jpg',
    'title' => 'Core Values',
    'desc' => 'Our core values define who we are and guide every decision we make. These values are the pillars of our business. They are: Quality, Performance, Responsibility, Innovation, Customer Care and Employee Opportunity.'
  ],
  [
    'pict' => 'https://images.carriercms.com/image/upload/w_auto,c_lfill,q_auto,f_auto/v1559057403/carrier/commercial-hvac/people/carrier-rentals-contingency-planning-services.jpg',
    'title' => 'Customer Service',
    'desc' => 'When you partner with us, you’ll work with recognized HVAC professionals – all with a clear focus on the importance of every aspect of your investment. Your decision to select Carrier was an important one… as is our relationship with you. We take both very seriously.'
  ],
  [
    'pict' => 'https://images.carriercms.com/image/upload/w_auto,c_lfill,q_auto,f_auto/v1559057512/carrier/commercial-hvac/people/carrier-engineers-reviewing-plans.jpg',
    'title' => 'Safety Focus',
    'desc' => 'Environmental Health and Safety (EH&amp;S) is rooted in our culture. We support a multifaceted EH&amp;S management system which ensures a focused approach to safety every day. On all levels, we adhere to the most stringent safety standards, which translates to safety on your job site.'
  ],
  [
    'pict' => 'https://images.carriercms.com/image/upload/w_auto,c_lfill,q_auto,f_auto/v1570116485/carrier/commercial-hvac/people/carrier-service-technician-with-tablet.jpg',
    'title' => 'Equipment Expertise',
    'desc' => 'We have access to the latest engineering advancements and the most advanced technical servicing tools. Our expansive OEM service network has strategically-located offices in the United States and Canada.'
  ],
];
?>
<main class="header-static-margin">
  <section id="main-content" class="pt-one-col">
    <div class="container-fluid ct-breadcrumb-a">
      <div class="container">
        <nav class="ct_breadcrumb-a d-none d-md-block" aria-label="breadcrumb">
          <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span id="breadcrumb(1)" itemprop="name">
                <a itemprop="item" href="../index.html">
                  Home
                </a>
                <span content="Home" itemprop="name" aria-hidden="true"></span>
              </span>
              <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span itemprop="name" id="breadcrumb(2)">Service</span>
              <meta itemprop="position" content="2" />
            </li>
          </ol>
        </nav>
        <nav class="ct_breadcrumb-b d-block d-md-none" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <i class="material-icons align-bottom">keyboard_arrow_left<span class="sr-only">Arrow back</span></i>
              <a href="../index.html">
                <span>Home</span>
              </a>
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="container-fluid p-0 ct-hero-img">
      <div>
        <div class="position-relative">
          <div class="d-flex h-100 justify-content-center align-items-center hero-img">
            <img class="cld-responsive d-none d-lg-block" data-src="https://via.placeholder.com/1920x300.png?text=img" alt="carrier-service-technician-in-equipment-room-servicing-panel-crop" loading="lazy" />
            <img class="cld-responsive d-block d-lg-none" data-src="https://via.placeholder.com/1920x300.png?text=img" alt="carrier-service-technician-in-equipment-room-servicing-panel-mobile" loading="lazy" />
          </div>
        </div>
        <div class="container position-relative p-0 ">
          <div class="position-absolute bg-transparent-primary w-100 p-3 text-white hero-title">
            <h1><span style="font-size:2.15rem;">Service</span></h1>
          </div>
        </div>
      </div>
      <div class="container border border-top-0 p-3 hero-text">
        <p class="lead font-weight-bold">The HVAC Industry's Premiere Servicing & Technology Leader</p>
        <p>
          Whether you are an engineer, contractor, architect, manager or owner, you can count on Carrier's expertise and offerings to help you get the most from your HVAC system from start-up through the entire lifecycle.</p>
      </div>
    </div>
    <section class="container ct-card-collection-w4-01">
      <div class="row">
        <div class="col-12">
        </div>
      </div>
      <div class="row pb-2 bg-white">

      <?php foreach($list_benefits as $item) : ?>
        <div class="col-md-4 col-lg-3 mb-3 card-container">
          <div class="h-100 text-center">
            <div class="card-body">
              <img class="cld-responsive rounded rounded-circle img-fluid" style="height: 10rem; width: 10rem; object-fit: cover;" data-src="<?= $item['pict'] ?>" alt="<?= $item['title'] ?>" loading="lazy" />
              <div class="card-title h2 mt-2"><?= $item['title'] ?></div>
              <div class="card-text">
                <p class="small"><?= $item['desc'] ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
      </div>
    </section>
    <section class="container ct-card-collection-w2-basic mb-4 mt-4 ">
      <div class="row">
        <div class="col-12 lead text-uppercase text-center mb-3 font-weight-bold">
          Explore
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3 card-container ">
          <div class="card h-100">
            <img class="cld-responsive img-fluid mx-auto" data-src="https://images.carriercms.com/image/upload/w_auto,ar_2.0,c_lfill,q_auto,f_auto/v1548962376/carrier/commercial-hvac/buildings/carrier-group-of-highrise-buildings-in-city-looking-up.jpg" alt="carrier-group-of-highrise-buildings-in-city-looking-up" loading="lazy" />
            <div class="card-body">
              <div class="card-title text-left h3">Preventive, Predictive, Proactive</div>
              <div class="card-text text-left">
                <p>Carrier's expansive knowledge of all brands of equipment is the basis for our portfolio of services. We create a plan that ensures your equipment’s peak performance and longevity.</p>
              </div>
            </div>
            <div class="card-footer border-0 bg-transparent text-center">
              <a class="btn" href="listing.php?name=<?php echo urlencode("Operate, Service &amp; Protect") ?>" target="_self" aria-label="">
                Operate, Service &amp; Protect
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3 card-container ">
          <div class="card h-100">
            <img class="cld-responsive img-fluid mx-auto" data-src="https://images.carriercms.com/image/upload/w_auto,ar_2.0,c_lfill,q_auto,f_auto/v1570115678/carrier/commercial-hvac/people/carrier-service-technicians-looking-at-mobile-phone.jpg" alt="carrier-service-technicians-looking-at-mobile-phone" loading="lazy" />
            <div class="card-body">
              <div class="card-title text-left h3">Maximize Your Equipment Investment with Carrier Commercial Service</div>
              <div class="card-text text-left">
                <p>As service experts, we know how to get the most out of your investment. The capital equipment you purchased will, with proper maintenance, be in operation for a significant length of time.</p>
              </div>
            </div>
            <div class="card-footer border-0 bg-transparent text-center">
              <a class="btn" href="listing.php?name=<?php echo urlencode("Retrofit &amp; Optimize") ?>" target="_self" aria-label="">
                Retrofit &amp; Optimize
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </section>
</main>
<?php
include_once('../includes/_footer.php');
?>