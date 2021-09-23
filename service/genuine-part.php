<?php
include '../includes/_header.php';

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
  ]
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
              <span itemprop="name" id="breadcrumb(3)">Genuine Part</span>
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
    <div class="container-fluid ct-hero-img p-0 ">
      <div class="">
        <div class="d-flex h-100 justify-content-center align-items-center hero-img">
          <img class="cld-responsive bg-secondary" src="https://via.placeholder.com/1920x300.png?text=img" alt="carrier-group-of-highrise-buildings-in-city-looking-up" loading="lazy" />
          <div class="cld-responsive bg-secondary">

          </div>
        </div>
      </div>
      <div class="container position-relative p-0 ">
        <div class="position-absolute bg-transparent-primary w-100 p-3 text-white hero-title">
          <h1>Genuine Part</h1>
        </div>
      </div>
    </div>
    <div class="container border border-top-0 p-3 mb-4 bg-white hero-text">
      <h3 class="font-weight-bold">Whether you install, maintain or service an AC system,
        PT Berca Carrier Indonesia offers a complete lineup of quality parts and supplies for you.
      </h3>
      <p>Carrier Genuine Parts is genuine spare parts recommended by PT Berca Carrier Indonesia, thus ensuring the authenticity of the products, maintain the performance and quality of Carrier products.
      </p>
      <div class="row mt-4">
        <figure class="col-auto">
          <img class="cld-responsive img-fluid" src="https://via.placeholder.com/300x300.png?text=img" alt="<?php echo $value['title'] ?>" loading="lazy" />
        </figure>
        <div class="col">
          <h3 class="font-weight-bold mb-4">WHY CARRIER GENUINE PARTS IMPORTANT FOR YOUR CARRIER PRODUCTS?</h3>
          <ul>
            <li>
              <p class="font-weight-bold text-uppercase my-0">More secure material</p>
              <p>Carrier Genuine Parts is made from materials that have been tested quality.</p>
            </li>
            <li>
              <p class="font-weight-bold text-uppercase my-0">More durable</p>
              <p>Use high-quality components that last longer.</p>
            </li>
            <li>
              <p class="font-weight-bold text-uppercase my-0">More save cost</p>
              <p>With longer service life, Carrier Genuine Parts can save your maintenance costs.</p>
            </li>
            <li>
              <p class="font-weight-bold text-uppercase my-0">More easy being</p>
              <p>Carrier Genuine Parts can be searched on the official Carrier Genuine Parts network throughout Indonesia.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="verify-genuine-parts" style="background-color: #D3D3D3;">
    <div class="container p-5">
      <div class="card rounded-lg">
        <div class="card-body text-center">
          <h2 class="card-title">Genuine Part Verification</h2>
          <p>Please input the unique code printed on hologram sticker <br>(hologram sticker is attached on the packing material)</p>
          <form action="" method="post" class="w-50 d-flex flex-column align-items-center mx-auto">
            <input type="text" class="form-control" name="code" id="code" placeholder="Enter your code">
            <button type="submit" class="btn btn-outline-primary mt-3">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </section>
  <section class="container ct-card-collection-w3-18">
    <div class="row">
      <div class="col-12 text-center">
      </div>
    </div>
    <div class="row mt-4">
      <?php foreach ($list_data_retrofit as $key => $value) { ?>
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
</main>

<?php include '../includes/_footer.php'; ?>