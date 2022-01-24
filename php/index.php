<!DOCTYPE html>
<?php
try {
    $error = "";
    $pdo = new PDO("pgsql:host=postgres;dbname={$_ENV["POSTGRES_DB"]}", $_ENV["POSTGRES_USER"], $_ENV["POSTGRES_PASSWORD"]);
    $pdo->exec("DROP TABLE IF EXISTS notes;");
    $pdo->exec("CREATE TABLE notes(id SERIAL PRIMARY KEY, description VARCHAR(255));");
    $pdo->exec("INSERT INTO notes(description) VALUES('Do the dishes'), ('Clean the bike'), ('Buy some high performance parts');");
    $query = $pdo->query("SELECT description FROM notes;");
    $notes = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $exception) {
    $error = "Exception: {$exception->getMessage()}";
}
?>
<html>
  <body>
    <h1>Notes</h1>
    <?php if ($error): ?>
      <p>An error occurred: <?php echo $error; ?></p>
    <?php else: ?>
      <ul>
        <?php foreach ($notes as $note): ?>
          <li><?php echo $note["description"] ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </body>
</html>