<?php
include "connectdb.php";
include "header.php";
include "read-order.php";
?>
    <body>
    <div class="container">
        <form method="post" action="update-order.php">
            <input type="hidden" name="orderNumber" value="<?php echo $order["orderNumber"];?>"><br><br>
            <p>Order datum:</p><br>
            <input type="date" name="orderDate" class="form-group" value="<?php echo $order["orderDate"];?>"><br><br>
            <p>leverdatum:</p><br>
            <input type="date" name="requiredDate" class="form-group" value="<?php echo $order["requiredDate"];?>"><br><br>
            <p>Status:</p><br>
            <input type="text" name="status" class="form-group" value="<?php echo $order["status"];?>"><br><br>
            <p>Comments:</p><br>
            <input type="text" name="comments" class="form-group"value="<?php echo $order["comments"];?>"><br><br>
            <p>klantennummer:</p><br>
            <select name="customerNumber" class="form-group" value="<?php echo $order["customerNumber"]?>">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
            </select><br><br>
            <input type="submit" name="verzenden" value="verzenden" class="btn-success">
        </form>
    </div>
    </body>
<?php
include "footer.php";

