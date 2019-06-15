<!DOCTYPE html>
<html>

<head>
    <title>Simple Sale System</title>
</head>

<body>
    <ul>
        <a href="index.html">Home</a>&nbsp;
        <a href="newSales.php">New Sales</a>&nbsp;
        <a href="salesManagement.php"> Sales Management</a>&nbsp;
        <a href="addClients.php">Add Clients</a>&nbsp;
        <a href="clientsManagement.php">Clients Management</a>&nbsp;
        <a href="addProducts.php">Add Products</a>&nbsp;
    </ul>
    <table align='center' width='1000' border='3'>
        <tr>
            <td colspan='20' align='center' bgcolor='silver'>
                <b>Products Management</b>
            </td>
        </tr>
        <tr align='center'>
            <th>ID</th>
            <th>Name</th>
            <th>Available</th>
            <th>Price</th>
            <th colspan='2'>Action</th>
        </tr>

        <?php

		include('connection.php');

		$sql = "SELECT * FROM products";

		$query = mysqli_query($conn,$sql) or die("Bad Query: $sql");

		while ($row=mysqli_fetch_assoc($query))
			{		
			?>
            <tr align="center">
                <td>
                    <?php echo $row['id_product']; ?>
                </td>
                <td>
                    <?php echo $row['name']; ?>
                </td>
                <td>
                    <?php echo $row['quantity']; ?>
                </td>
                <td>
                    <?php echo $row['price']; ?>
                </td>
                <td><a href="viewProduct.php?id_product=<?php echo $row['id_product']; ?>">View</a></td>
                <td><a href="updateProduct.php?id_product=<?php echo $row['id_product']; ?>">Edit</a></td>
            </tr>

            <?php } ?>

    </table>
    <br>
</body>

</html>

<!--print page-->
<button onclick="myFunction()">Print</button>

<script>
    function myFunction() {
        window.print();
    }
</script>