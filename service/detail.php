<?php

$names = urldecode($_GET['name']);

include_once('../includes/_header.php')
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
                  Service
                </a>
                <span content="Service" itemprop="name" aria-hidden="true"></span>
              </span>
              <meta itemprop="position" content="2" />
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span itemprop="name" id="breadcrumb(3)">
                <a itemprop="item" href="../index.html">
                  Operate, Service &amp; Protect
                </a>
                <span content="Operate, Service &amp; Protect" itemprop="name" aria-hidden="true"></span>
              </span>
              <meta itemprop="position" content="3" />
            </li>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <span itemprop="name" id="breadcrumb(4)">Start-Up Services & Extended Warranty Protection</span>
              <meta itemprop="position" content="4" />
            </li>
          </ol>
        </nav>
        <nav class="ct_breadcrumb-b d-block d-md-none" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <i class="material-icons align-bottom">keyboard_arrow_left<span class="sr-only">Arrow back</span></i>
              <a href="../index.html">
                <span>Operate, Service & Protect</span>
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
            <img class="cld-responsive" data-src="https://via.placeholder.com/1920x300.png?text=img" alt="carrier-chiller-in-industrial-setting" loading="lazy" />
          </div>
        </div>
        <div class="container position-relative p-0 ">
          <div class="position-absolute bg-transparent-primary w-100 p-3 text-white hero-title">
            <h1><?php echo $names ?></h1>
          </div>
        </div>
      </div>
      <div class="container border border-top-0 p-3 hero-text">
        <h3 class="font-weight-bold">Achieve maximum performance and reliability for your new Carrier equipment.</h3>
        <p>Because we know that your HVAC equipment is a critical asset to your building and well worth protecting, the service experts at Carrier know the best possible way to deliver and maintain that protection.</p>
      </div>
    </div>
    <section class="container ct-3blks-w100-basic  pt-4">
      <div class="row">
        <div class="col-lg d-flex align-items-stretch pb-4">
          <div class="card">
            <div class="row h-100 d-flex flex-row-reverse card-body">
              <div class="col-md-12 align-self-center">
                <div class="card-text">
                  <p>Carrier commercial equipment represents today’s most advanced technology. To ensure that you receive the full benefit from this leading edge design, proper start-up, following a rigorous, factory-defined set of procedures is essential. Correct start-up is the key to optimum performance, safety and reliability, not just during the first days or weeks of operation, but for years to come.</p>
                  <p>After this strong start, your Carrier system is protected by a powerful new-equipment warranty, a warranty that reflects our confidence in the performance, reliability and durability that Carrier builds into every machine. This superior coverage does not have to end when your new-equipment warranty expires. With a Carrier optional Extended Warranty, you can continue to provide your HVAC system with this exceptional level of protection — easily and economically for years to come. Carrier Start-Up and Extended Warranty Services deliver precisely the continuous protection that your facility needs. Take advantage of these powerful management tools and experience the peace of mind that can make managing your facility easier.</p>
                  <hr />
                  <h4 class="font-weight-bold">How can Carrier's start-up &amp; extended warranty provide value to you?</h4>
                  <p>It can:</p>
                  <ul>
                    <li>Reduce risk of unexpected equipment downtime with proper equipment start-up</li>
                    <li>Simplify short and long-term budgeting with planned extended warranty</li>
                    <li>Asset protection to ensure long equipment life</li>
                  </ul>
                  <hr />
                  <h4 class="font-weight-bold">Carrier's start-up &amp; extended warranty protection applies to:</h4>
                  <ul>
                    <li>Carrier water- and air-cooled chillers</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row mx-0 align-items-center text-uppercase text-white font-weight-bold py-3 px-4" style="background-color: #25A501;">
              <p class="my-0 mr-2">To find out more, you can contact us at</p>
              <div class="col-auto px-1">
                <a href="" class="btn btn-sm btn-outline-light">Inquiry form</a>
              </div>
              <div class="col-auto px-1">
                <a href="" class="btn btn-sm btn-outline-light">Call center (+62) 21 2660 8088</a>
              </div>
              <div class="col-auto px-1">
                <a href="" class="btn btn-sm btn-outline-light">Chat with us on whatsapp</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container ct-card-collection-w3-18 mb-3">
      <div class="row">
        <div class="col-md mb-3 card-container">
          <div class="card h-100 text-left">
            <img class="cld-responsive card-img-top" data-src="https://via.placeholder.com/500x300.png?text=img" alt="carrier-group-of-business-people-standing-and-talking" loading="lazy" />
            <div class="card-body">
              <div class="card-title h3">Remote Airside Management</div>
              <div class="card-text">
                <p>Carrier's Remote Airside Management solution
                  leverages Carrier's i-Vu&#174; automation system to
                  remotely manage the building's airside.</p>
              </div>
            </div>
            <div class="card-footer border-0 bg-transparent text-right">
              <a class="btn" href="https://www.shareddocs.com/hvac/docs/1003/Public/08/05-811-30055-01.pdf" target="_self" aria-label="">
                Learn more
              </a>
            </div>
          </div>
        </div>
        <div class="col-md mb-3 card-container">
          <div class="card h-100 text-left">
            <img class="cld-responsive card-img-top" data-src="https://via.placeholder.com/500x300.png?text=img" alt="carrier-technician-working-on-hvac-equipment" loading="lazy" />
            <div class="card-body">
              <div class="card-title h3">Equipment Overhaul</div>
              <div class="card-text">We help provide you with a peace of mind by
                providing timely maintenance and avoid
                unnecessary downtown on HVAC equipment.</div>
            </div>
            <div class="card-footer border-0 bg-transparent text-right">
              <a class="btn" href="https://www.shareddocs.com/hvac/docs/1003/Public/04/05-811-30036-01.pdf" target="_self" aria-label="">
                Learn more
              </a>
            </div>
          </div>
        </div>
        <div class="col-md mb-3 card-container">
          <div class="card h-100 text-left">
            <img class="cld-responsive card-img-top" data-src="https://via.placeholder.com/500x300.png?text=img" alt="carrier-technician-working-on-hvac-equipment" loading="lazy" />
            <div class="card-body">
              <div class="card-title h3">Refrigerant Management</div>
              <div class="card-text">We can help you transform end-of-life refrigerant
                management into environmental leadership.</div>
            </div>
            <div class="card-footer border-0 bg-transparent text-right">
              <a class="btn" href="https://www.shareddocs.com/hvac/docs/1003/Public/04/05-811-30036-01.pdf" target="_self" aria-label="">
                Learn more
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</main>

<?php
include_once('../includes/_footer.php')
?>