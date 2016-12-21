<?php
class QueryBuilder
{
  protected $pdo;

  function __construct($pdo)
  {
    $this->pdo=$pdo;
  }


 function selectAll($table,$n)
{
  $statement = $this->pdo->prepare("select * from $table ORDER BY ID DESC LIMIT $n");
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_OBJ);
  mysqli_close($conn);
}

function selectNRows($n,$table)
{
  $statement = $this->pdo->prepare("select * from $table limit ?,?");
  $stm->bindValue(1, $limit_from, PDO::PARAM_INT);
$stm->bindValue(2, $per_page, PDO::PARAM_INT);
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_OBJ);
  mysqli_close($conn);
}
}
?>
