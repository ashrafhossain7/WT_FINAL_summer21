<?php
include 'controllers/CategoryController.php';
$categories = getAllCategories();


?>



<div>

<h3> All Categories</h3>
<input type="text" placeholder="Search..." onkeyup="searchCategory(this)">
<div id = "suggesstion"></div>

<table>
    <th>
        <td>S1#</td>
        <td>Name</td>
        <td>Product</td>
    </th>

    <tr>
        <?php

        $i=1;
        foreach($categories as $c){
            echo"<tr>";
                echo"<td> $i </td>";
                echo"<td>".$c["name"]."</td>";
                echo'<td><a href="Edit_category.php?id='.$c["id"].'">Edit</a></td>';
                echo'<td><a href="">Delete</a></td>';
            echo"</tr>";
            $i++;
            
        }
        ?>

    </tr>
</table>



</div>
<script src="js/category.js"></script>