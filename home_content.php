<meta charset="utf-8">

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./image/home_1.png" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="./image/home_2.png" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="./image/home_3.png" class="d-block w-100">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div id="top_products">
  <h2>실시간 상품 랭킹</h2>
  <p>오늘 이 제품들을 많이 구매했어요!</p>
  <div class="btn-group">
    <a href="home.php?category='화장품'" class="btn btn-primary active" aria-current="page">뷰티</a>
    <a href="home.php?category='패션'" class="btn btn-primary">패션</a>
  </div>
  <div id="products_list">
  <?php
    if (isset($_GET["category"])) {
      $category = $_GET["category"];
    } else {
      $category = '화장품';
    }

    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
    $sql = "select * from products where category=$category";
    $sql .= " order by rank";

    $result = mysqli_query($connect, $sql);
    $total_record = mysqli_num_rows($result);

    for ($i = 0; $i < $total_record; $i++) {
      mysqli_data_seek($result, $i);
      // 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);
      // 하나의 레코드 가져오기
      $product_id = $row["product_id"];
      $name = $row["name"];
      $price = number_format($row["price"])."원";
      $brand = $row["brand"];
      $content_link = $row["content"];

      if ($category = '화장품') {
        $real_id = $i + 1;
      } else {
        $real_id = $i + 5;
      }  
  ?>
      <a href="product_detail.php?product_id=<?=$real_id?>" class="product">
          <img src=<?=$content_link?> width="200px" height="200px">
          <div class="product-brand">
            <?=$brand?>
          </div>
          <div class="product-name">
            <?=$name?>
          </div>
          <div class="product-price">
            <?=$price?>
          </div>
      </a>
  <?php
    }
    mysqli_close($connect);
  ?>
  </div>
</div>