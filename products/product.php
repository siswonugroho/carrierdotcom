<?php
include_once('../includes/_header.php');
$name = urldecode($_GET['name']);
?>
<main class="header-static-margin">
  <section id="main-content" class="pt-one-col">
    <div class="container-fluid ct-breadcrumb-a">
      <div class="container">
        <nav class="ct_breadcrumb-a d-none d-md-block" aria-label="breadcrumb">
          <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span id="breadcrumb(1)" itemprop="name">
                <a itemprop="item" href="../../../index.html">
                  Home
                </a>
                <span content="Home" itemprop="name" aria-hidden="true"></span>
              </span>
              <meta itemprop="position" content="1" />
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span itemprop="name" id="breadcrumb(2)">
                <a itemprop="item" href="../../index.html">
                  Products
                </a>
                <span content="Products" itemprop="name" aria-hidden="true"></span>
              </span>
              <meta itemprop="position" content="2" />
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span itemprop="name" id="breadcrumb(3)"><?= $name ?></span>
              <meta itemprop="position" content="4" />
            </li>
          </ol>
        </nav>
        <nav class="ct_breadcrumb-b d-block d-md-none" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <i class="material-icons align-bottom">keyboard_arrow_left<span class="sr-only">Arrow
                  back</span></i>
              <a href="../index.html">
                <span>Airside</span>
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
            <img class="cld-responsive" data-src="https://via.placeholder.com/1500x300.png?text=img" alt="carrier-exposed-ductwork-in-commercial-building" loading="lazy" />
          </div>
        </div>
        <div class="container position-relative p-0 ">
          <div class="position-absolute bg-transparent-primary w-100 p-3 text-white hero-title">
            <h1><?= $name ?></h1>
          </div>
        </div>
      </div>
      <div class="container border border-top-0 p-3 hero-text">
        <h3>One company. Tons of capacity</h3>
        <p>With a wide range of types, capacities and sustainable refrigerant options, Carrier performs when comes to chiller technology. Our innovative chiller solutions are designed to bring efficient, reliable cooling to all types of large commercial applications, such as healthcare, industrial, education and data centers.
        </p>
      </div>
    </div>
    <input id="productSortUrl" type="hidden" value="/commercial/en/us/ProductList/SortProducts/" />
    <input id="jsonFormatterUrl" type="hidden" value="/commercial/en/us/ProductList/CleanupProductModelJson/" />
    <input id="emailProductsUrl" type="hidden" value="/commercial/en/us/Email/EmailCompareResults/" />
    <input type="hidden" name="defaultProductView" id="defaultProductView" value="list" />
    <div class="container-fluid product-list-main">
      <div class="container py-2 ct-product-list">
        <div class="row">
          <div class="col-md-3 pb-4">
          </div>
          <div class="col-md-2 pb-4 d-none d-md-block" style="padding: .375rem .75rem;">
            <label id="productCountValue" class="control-label">12</label>
            <label id="productCountLabel" class="control-label">Product(s)</label>
          </div>
          <div class="col pb-4">
            <div class="form-inline float-right">
              <div class="d-none d-md-block">
                <div class="form-inline float-right">
                  <label for="sortBy" class="control-label pr-2">Sort By:</label>
                  <select class="form-control custom-select w-auto sort-by-category" onchange="sortByCategory(this.value)">
                    <option value="">Select</option>
                    <option value="Model" data-sort-direction="ASC">Model Ascending</option>
                    <option value="Model" data-sort-direction="DESC">Model Descending</option>
                  </select>
                </div>
              </div>
              <div class="d-none d-md-block">
                <div class="form-inline float-right nav">
                  <label for="View" class="control-label px-2">View:</label>
                  <button class="btn product-layout-theme" data-placement="top" data-target="#" title="Grid view" id="btn-gridview" disabled="disabled">
                    <i class="material-icons align-bottom">
                      view_module<span class="sr-only">
                        Grid view
                      </span>
                    </i>
                  </button>
                  &nbsp;
                  <button class="btn product-layout-theme" data-placement="top" data-target="#" title="List view" id="btn-listview">
                    <i class="material-icons align-bottom">
                      view_list<span class="sr-only">
                        List view
                      </span>
                    </i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 pb-4">
            <section id="accordion-filter">
              <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header bg-primary font-weight-bold text-white">Filter</div>
                <div class="card-body">
                  <h6 class="card-tittle font-weight-bold">Clear Filters</h6>
                  <hr>
                  <h5 class="card-title font-weight-bold text-primary my-1 mb-2">MAX COOLING CAPACITY (KW)</h5>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <hr class="mt-2">
                  <h5 class="card-title font-weight-bold text-primary my-1 mb-2">MAX HEATING CAPACITY (KW)</h5>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <hr class="mt-2">
                  <h5 class="card-title font-weight-bold text-primary my-1 mb-2">COOLING TYPE</h5>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <hr class="mt-2">
                  <h5 class="card-title font-weight-bold text-primary my-1 mb-2">REFRIGERANT</h5>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      130
                    </label>
                  </div>
                </div>
              </div>
            </section>
            <div class="productlist-inner-feed">
            </div>
          </div>
          <div class="col-md-9 productlist">
            <section id="product-view" itemscope itemtype="http://schema.org/ItemList">
              <div style="text-align:center" class="d-block d-md-none">
                <label id="productCountValueMobile" class="control-label">12</label>
                <label id="productCountLabelMobile" class="control-label">Product(s)</label>
              </div>
              <div id="no-result" class="d-none">
                <h3>No Results Found</h3>
              </div>
              <?php
              // Pilih antara include list atau grid.
              include('grid.php');
              include('list.php');
              ?>

            </section>
            <div class="container align-middle" id="loading" style="display:none;">
              <div class="loading col-12">
                <div class="loader"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="<?= $base_url ?>/assets/scripts/toggle-product-view.js"></script>
<?php
include_once('../includes/_footer.php');
?>