<?php

$names = urldecode($_GET['name']);

// disini di list array data sub.nya
$list_data_operate = [
  [
    'pict' => '',
    'title' => 'Start-Up Services & Extended Warranty Protection',
    'desc_info' => 'Carrier commercial equipment represents today’s most advanced technology. To ensure that you receive the full benefits from this leading edge design, proper start-up, following a rigorous, factory-defined set of procedures is essential.',
  ],
  [
    'pict' => '',
    'title' => 'Preventive & Predictive Maintenance',
    'desc_info' => 'Ensuring your equipment\'s peak performance and longevity dictates a commitment to preventive, predictive and proactive maintenance programs.',
  ],
  [
    'pict' => '',
    'title' => 'Remote Airside Management',
    'desc_info' => 'Carrier\'s Remote Airside Management solution leverages Carrier\'s i- Vu® automation system to remotely manage the buildings airside.',
  ],
  [
    'pict' => '',
    'title' => 'Repairs & Emergency Service',
    'desc_info' => 'Even the best maintained equipment can encounter an unexpected failure. As Carrier\'s own servicing entity, we have access to the latest engineering advancements and the most advanced technical servicing tools.',
  ],
  [
    'pict' => '',
    'title' => 'Equipment Overhaul',
    'desc_info' => 'We help provide you with a of mind by providing timely maintenance and avoid unnecessary downtown on HVAC equipment.',
  ],
  [
    'pict' => '',
    'title' => 'Refrigerant Management',
    'desc_info' => 'We can help you transform end-of-life refrigerant management into environmental leadership.',
  ],
  [
    'pict' => '',
    'title' => 'Consulting Engineering',
    'desc_info' => 'Our professional Consulting Engineers are available for support on building analysis, energy studies and Mechanical, Electrical and Plumbing (MEP) engineering design projects.
',
  ],

];

$list_data_retrofit = [
  [
    'pict' => '',
    'title' => 'Baseline Analysis',
    'desc_info' => 'Baseline Analysis can provide a remarkably detailed picture of many different mechanical problems, even in their earliest stages.'
  ],
  [
    'pict' => '',
    'title' => 'Building Management Solutions',
    'desc_info' => 'Carrier service provices state of the art building automation systems for HVAC equipment. To achieve strategic goals, Carrier provides controls strategies and solutions designed specifically for customer\'s particular requirements.'
  ],
  [
    'pict' => '',
    'title' => 'Equipment Replacement Solutions',
    'desc_info' => 'As a building owner or facility manager, you need to consider the cost of unexpected downtime and the impact older, inefficient systems have on the bottom line.'
  ],
  [
    'pict' => '',
    'title' => 'Modernize, Retrofit &amp; Optimize',
    'desc_info' => 'There\'s no escaping that all equipment ages over time. But that doesn\'t mean that older chillers cannot benefit from mechanical upgrades. We offer a wide variety of modernization, retrofit and upgrade solutions for many equipment types.'
  ],
];

if ($names === "Operate, Service &amp; Protect") {
  $list_used = $list_data_operate;
} else if ($names === "Retrofit &amp; Optimize") {
  $list_used = $list_data_retrofit;
}


?>

<?php include '../includes/_header.php'; ?>
<main class="header-static-margin">
  <section id="main-content" class="pt-one-col">
    <div class="container-fluid ct-breadcrumb-a">
      <div class="container">
        <nav class="ct_breadcrumb-a d-none d-md-block" aria-label="breadcrumb">
          <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span id="breadcrumb(1)" itemprop="name">
                <a itemprop="item" href="../../index.html">
                  Home
                </a>
                <span content="Home" itemprop="name" aria-hidden="true"></span>
              </span>
              <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span itemprop="name" id="breadcrumb(2)">
                <a itemprop="item" href="../index.html">
                  Service
                </a>
                <span content="Service" itemprop="name" aria-hidden="true"></span>
              </span>
              <meta itemprop="position" content="2" />
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span itemprop="name" id="breadcrumb(3)"><?= $names ?></span>
              <meta itemprop="position" content="3" />
            </li>
          </ol>
        </nav>
        <nav class="ct_breadcrumb-b d-block d-md-none" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <i class="material-icons align-bottom">keyboard_arrow_left<span class="sr-only">Arrow
                  back</span></i>
              <a href="../index.html">
                <span>Service</span>
              </a>
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="container-fluid p-0 ct-hero-img">
      <div class="">
        <div class="d-flex h-100 justify-content-center align-items-center hero-img">
          <img class="cld-responsive bg-secondary" src="https://via.placeholder.com/1920x300.png?text=img" alt="carrier-group-of-highrise-buildings-in-city-looking-up" loading="lazy" />
          <div class="cld-responsive bg-secondary">

          </div>
        </div>
      </div>
      <div class="container position-relative p-0 ">
        <div class="position-absolute bg-transparent-primary w-100 p-3 text-white hero-title">
          <h1>Your HVAC equipment is a critical asset to your building and is worth protecting</h1>
        </div>
      </div>
    </div>
    <div class="container border border-top-0 p-3 hero-text">
      <p>Carrier's expansive knowledge of this equipment is the basis for our portfolio of services.
        Individually and collectively, this knowledge is the best platform from which to operate
        equipment efficiently, safely and predictably.</p>
    </div>
    </div>
    <section class="container ct-card-collection-w3-18">
      <div class="row">
        <div class="col-12 text-center">
        </div>
      </div>
      <div class="row">
        <?php foreach ($list_used as $key => $value) { ?>
          <div class="col-md-4 mb-3 card-container">
            <div class="card h-100 text-left">
              <img class="cld-responsive card-img-top" src="https://via.placeholder.com/1440x1000.png?text=img" alt="<?php echo $value['title'] ?>" loading="lazy" />
              <div class="card-body">
                <div class="card-title h3"><?php echo $value['title'] ?></div>
                <div class="card-text"><?= $value['desc_info'] ?></div>
              </div>
              <div class="card-footer border-0 bg-transparent text-right">
                <a class="btn" href="detail.php?name=<?php echo urlencode($value['title']); ?>" target="_self" aria-label="">
                  Learn more
                </a>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
      <div class="py-3"></div>

    </section>
  </section>
</main>
<?php include '../includes/_footer.php'; ?>