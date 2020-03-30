<body>
    <?php include "read-office.php";?>
    <div class="container">
        <form method="POST" action="./update-office.php">
            <input type="text" name="officeCode" placeholder="officeCode" value="<?php echo $office["officeCode"]; ?>"><br>
            <input type="text" name="city" placeholder="city" class="form-group" value="<?php echo $office["city"];?>"><br>
            <input type="text" name="phone" placeholder="phone" class="form-group" value="<?php echo $office["phone"];?>"><br>
            <input type="text" name="addressLine1" placeholder="addressLine1" class="form-group" value="<?php echo $office["addressLine1"];?>"><br>
            <input type="text" name="addressLine2" placeholder="addressLine2" class="form-group" value="<?php echo $office["addressLine2"];?>"><br>
            <input type="text" name="state" placeholder="state" class="form-group" value="<?php echo $office["state"];?>"><br>
            <input type="text" name="country" placeholder="country" class="form-group" value="<?php echo $office["country"];?>"><br>
            <input type="text" name="postalCode" placeholder="postalCode" class="form-group" value="<?php echo $office["postalCode"];?>"><br>
            <input type="text" name="territory" placeholder="territory" class="form-group" value="<?php echo $office["territory"];?>"><br>
            <input type="submit" name="submit" value="toevoegen" class="btn btn-primary">
        </form>
    </div>
</body>

