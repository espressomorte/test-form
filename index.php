
    <?php
    require_once 'db\connection.php';
    require 'db\queryBuilder.php';

    $query = new QueryBuilder($conn);
    $data = $query->selectAll('COMMENTS',3);
    require_once 'index.view.php';
    ?>
