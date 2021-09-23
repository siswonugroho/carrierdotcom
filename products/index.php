  <?php
  include_once('../includes/_header.php');
  $categories = [
    [
      'pic' => '',
      'name' => 'Chillers',
    ],
    [
      'pic' => '',
      'name' => 'Air Handler',
    ],
    [
      'pic' => '',
      'name' => 'Fan Coils',
    ],
    [
      'pic' => '',
      'name' => 'Controls',
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
                <span itemprop="name" id="breadcrumb(2)">Commercial Products</span>
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
              <img class="cld-responsive" data-src="https://via.placeholder.com/1500x300.png?text=img" alt="carrier-view-of-cityscape" loading="lazy" />
            </div>
          </div>
          <div class="container position-relative p-0 ">
            <div class="position-absolute bg-transparent-primary w-100 p-3 text-white hero-title">
              <h1>Commercial Products</h1>
            </div>
          </div>
        </div>
        <div class="container border border-top-0 p-3 hero-text">
          <h3>Innovation on a larger scale</h3>
          <p>Choose from the latest in HVAC products and technology from the company that's been there since the beginning. With HVAC systems consuming about 40&percnt; of building's energy consumption&ast;, it is critical to have an efficient and reliable HVAC system. Carrier offers a wide range of products that are both efficient and reliable. Our range of products are ideal for both new construction and retrofit projects.</p>
          <p>&ast;U.S Department of Energy Buildings Energy Data Book, 2015.</p>
        </div>
      </div>
      <section class="container ct-card-collection-w4-01     ">
        <div class="row">
          <div class="col-12 text-center py-3">
            <h1>Explore</h1>
          </div>
        </div>
        <div class="row pb-2">
          <?php foreach ($categories as $item) : ?>
            <div class="col-md-4 col-lg-3 mb-3 card-container">
              <div class="card h-100 text-center">
                <img class="cld-responsive img-fluid" data-src="https://via.placeholder.com/800x800.png" alt="Chiller" loading="lazy" />
                <div class="card-footer bg-transparent">
                  <a class="btn btn-outline-info" href="product.php?name=<?= urlencode($item['name']) ?>" target="_self" aria-label="">
                    <?= $item['name'] ?>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </section>
    </section>

  </main>
  <?php
  include_once('../includes/_footer.php')
  ?>