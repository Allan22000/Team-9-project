<?php
$title = "Testing universal header and footer";
include "header.php" ?>

<div class="card px-3 pt-3" style="max-width: auto">
  <!-- News block -->
  <div>
    <!-- Featured image -->
    <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
      <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="img-fluid" />
      <a href="#!">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
      </a>
    </div>

    <!-- Article data -->
    <div class="row mb-3">
      <div class="col-6">
        <a href="" class="text-info">
          <i class="fas fa-plane"></i>
          Travels
        </a>
      </div>

      <div class="col-6 text-end">
        <u> 15.07.2020</u>
      </div>
    </div>

    <!-- Article title and description -->
    <a href="" class="text-dark">
      <h5>This is title of the news</h5>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
        id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
        adipisci iusto nam temporibus modi animi laboriosam?
      </p>
    </a>

    <hr />

    <!-- News -->
    <a href="" class="text-dark">
      <div class="row mb-4 border-bottom pb-2">
        <div class="col-3">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp"
            class="img-fluid shadow-1-strong rounded" alt="Hollywood Sign on The Hill" />
        </div>

        <div class="col-9">
          <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
          <p>
            <u> 15.07.2020</u>
          </p>
        </div>
      </div>
    </a>

    <!-- News -->
    <a href="" class="text-dark">
      <div class="row mb-4 border-bottom pb-2">
        <div class="col-3">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp"
            class="img-fluid shadow-1-strong rounded" alt="Palm Springs Road" />
        </div>

        <div class="col-9">
          <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
          <p>
            <u> 15.07.2020</u>
          </p>
        </div>
      </div>
    </a>

    <!-- News -->
    <a href="" class="text-dark">
      <div class="row mb-4 border-bottom pb-2">
        <div class="col-3">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp"
            class="img-fluid shadow-1-strong rounded" alt="Los Angeles Skyscrapers" />
        </div>

        <div class="col-9">
          <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
          <p>
            <u> 15.07.2020</u>
          </p>
        </div>
      </div>
    </a>

    <!-- News -->
    <a href="" class="text-dark">
      <div class="row mb-4 border-bottom pb-2">
        <div class="col-3">
          <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp"
            class="img-fluid shadow-1-strong rounded" alt="Skyscrapers" />
        </div>

        <div class="col-9">
          <p class="mb-2"><strong>Lorem ipsum dolor sit amet</strong></p>
          <p>
            <u> 15.07.2020</u>
          </p>
        </div>
      </div>
    </a>
  </div>
  <!-- News block -->
</div>


<?php include "footer.php" ?>