<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <article>
        <?php foreach ($news as $value): ?>
            <ul>
                <li><a href="/obychenie/Php2-02/article.php?id=<?php echo $value->id; ?>"><?php echo $value->title; ?></a><br /><?php echo $value->text; ?></li>
            </ul>
        <?php endforeach; ?>
    </article>
<h2>Добавить новую новость</h2>
    <form method="post" action="/obychenie/Php2-02/saveArticle.php">
        <input type="hidden" name="id" value="">
        <p><input type="text" class="form-control" name="title" value=""></p>
        <p><textarea name="text" class="form-control" rows="3"></textarea></p>
        <input class="btn btn-default btn-lg" type="submit">
    </form>
</div>
</body>
</html>