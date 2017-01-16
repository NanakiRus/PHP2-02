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
</div>
</body>
</html>