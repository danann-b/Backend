<?php
    include "connectdb.php";
    include "header.php";
?>
<body>
    <div class="container">
        <form method="post" action="create-order.php">
            <input type="hidden" name="orderNumber" value=" "><br><br>
            <input type="hidden" name="orderDate">
            <p>Voer uw leverdatum in:</p><br>
            <input type="date" name="requiredDate"><br><br>
            <input type="hidden" name="status" value="New">
            <input type="hidden" name="comments" value="-">
            <p>Selecteer een klantennummer:</p><br>
            <select name="customerNumber">
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
