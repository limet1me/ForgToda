<div class="catalog">
<div>    <h1 class="catalog-title">🐸 Каталог товаров 🐸</h1>	</div>
    <div class="container">

      <?php
      include 'ForgToda_db.php';
      foreach ($products_db as $product) {

        echo '<div class="border">';
        echo '<div class="wrap">';
        echo '<div class="product-wrap">';
        echo '<img src="' . $product['img'] . '" alt="' . $product['name'] . '">';
        echo '</div>';
        echo '<div class="loop-action">';
        echo '<a href="error404.html" class="add-to-cart">В избранное</a>';
        echo '<a href="error404.html" class="loop-add-to-cart">В корзину</a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="product-info">';
        echo '<h3><a href="product.php?id=' . $product['id'] . '">' . $product['name'] . '</a></h3>';
        echo '<div class="price">' . $product['price'] . '₽</div>';
        echo '</div>';
        echo '</div>';

      }
      ?>

<button id="scrollToTop" onclick="scrollToTop()">↑</button>

    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollToTop").style.display = "block";
            } else {
                document.getElementById("scrollToTop").style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

</div>
</div>
</div>