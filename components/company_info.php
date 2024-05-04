<div style="font-size:32px; margin: 25px; color: #fff;"> Почему мы? </div>
<div> 
<li style="font-size:20px; margin: 15px;">Мы тоже обожа-а-аем лягушек</li>
<li style="font-size:20px; margin: 15px;">Самые милые товары в рунете</li>
<li style="font-size:20px; margin: 15px;">Быстрая и аккуратная доставка</li>
</div>
<hr align="center" width="800" size="2" color="white"/>

	<h1>Популярные товары</h1>

    <div class="container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ForgToda_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT products_db.* FROM popular_products_db 
                INNER JOIN products_db ON popular_products_db.product_id = products_db.id";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

        echo '<div class="border">';
        echo '<div class="wrap">';
        echo '<div class="product-wrap">';
        echo '<img src="' . $row["img"] . '" alt="' . $row["name"] . '">';
        echo '</div>';
        echo '<div class="loop-action">';
        echo '<a href="error404.html" class="add-to-cart">В избранное</a>';
        echo '<a href="error404.html" class="loop-add-to-cart">В корзину</a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="product-info">';
        echo '<h3><a href="product.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>';
        echo '<div class="price">'  . $row["price"] . '₽</div>';
        echo '</div>';
        echo '</div>';

      }
        } else {
            echo "0 результатов";
        }
        $conn->close();
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
<div style="font-size:32px; margin: 25px"> Счастья тебе, да будет Ква! - 🐸</div>

