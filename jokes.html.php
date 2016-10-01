<html>
  <head>
    <title>Jokes List</title>
  </head>
  <body>
    <h1>Here are all the jokes in the database:</h1>
    <?php foreach ($jokes as $joke): ?>
      <blockquote>
        <p>
          <?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </blockquote>
    <?php endforeach; ?>
  </body>
</html>