<?php
require_once '../Views/header.php';
require_once '../config.php';
?>
<div class="container admin">
    <div class="row">
        <h1><strong>Listes des articles </strong><a href="adminsert.php" class="btn btn-success btn-lg"> <i
                    class="fas fa-plus-square"></i> Ajouter</a></h1>
        <table class = "table table-striped table-bordered mt-5">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $db = connectDb();
                $stmt = $db->prepare('SELECT * FROM `products` LEFT JOIN categories ON products.id = categories
                .id ORDER BY products.id');
                $stmt->execute();
                // <!-- pour récupérer les images des produits -->
                while ($products = $stmt->fetchAll(PDO::FETCH_ASSOC))
               {
                echo'<tr>';                
                echo '<td>'.$products['item'] . '</td>';
                echo '<td>'.$products['description'] . '</td>';
                echo '<td>'.$products['category'] . '</td>';
                echo '<td width=400>';
                echo '<a class="btn btn-light" href="adminview.php?id='.$products['id'].'"><i class="far fa-eye"></i> Voir</a>';
                echo '<a class="btn btn-primary" href="adminupdate.php?id='.$products['id'].'"><i class="fas fa-pencil-alt"></i> Modifier</a>';
                echo '<a class="btn btn-danger" href="admindelete.php?id=1'.$products['id'].'"><i class="fas fa-trash-alt"></i> Supprimer</a>';
                echo '</td>';
                echo '</tr>';
              }                                          
                ?>
                <!-- <tr>
                    <td>Article 2</td>
                    <td>Description 2</td>
                    <td>Catégorie 2</td>
                    <td width=400>
                        <a class="btn btn-light" href="adminview.php?id=2"><i class="far fa-eye"></i> Voir</a>
                        <a class="btn btn-primary" href="adminupdate.php?id=2"><i class="fas fa-pencil-alt"></i> Modifier</a>
                        <a class="btn btn-danger" href="admindelete.php?id=2"><i class="fas fa-trash-alt"></i> Supprimer</a>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div>


<?php
require_once '../Views/footer.php';