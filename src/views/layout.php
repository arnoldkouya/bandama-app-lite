<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php if (isset($title)) { echo $title; } else { echo "Page Title"; } ?></title>
</head>

<body>
    <?php if (isset($content)) { echo $content; } else { echo "Page Content..."; } ?>
</body>

</html>