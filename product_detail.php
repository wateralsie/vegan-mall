<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VeganMall 🌱</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" type="text/css" href="./styles/product_detail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="product_detail_box">
        <?php
            $product_id = $_GET["product_id"];

            $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
            $sql = "select * from products where product_id=$product_id";
            $result = mysqli_query($connect, $sql);

            $row = mysqli_fetch_array($result);
            $name = $row["name"];
            $price = number_format($row["price"])."원";
            $brand = $row["brand"]." >";
            $category = $row["category"];
            $content = $row["content"];

            if ($row["is_in_cart"] == null || $row["is_in_cart"] == false) {
                $is_in_cart = false;
            } else {
                $is_in_cart = true;
            }
        ?>
            <img src="<?=$content?>" width="500px">
            <div id="product_description">
                <ul id="detail_content">
                    <li><?= $brand ?></li>
                    <li><h3><?= $name ?></h3></li>
                    <li><?= $price ?></li>
                </ul>
                <ul id="delivery_info">
                    <li>배송 방법 : 택배</li>
                    <li>배송비 : 3,000원 (실 결제금액 50,000 이상 무료배송) | 지역별 추가 배송비 있음</li>
                    <li>배송 안내 : 기본 배송비 3000원 / 도서산간 및 제주도 배송비 지역별 상이</li>
                </ul>
                <div id="buttons">
                    <button type="button" class="btn btn-outline-success">장바구니</button>
                    <button type="button" class="btn btn-success">구매하기</button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>