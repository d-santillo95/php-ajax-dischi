<?php include '../database/dischi.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../public/app.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="../public/logo.png" alt="logo" />
                <select id="author-select" name="">
                    <option value="">All</option>
                    <?php
                        foreach ($dischi as $disco) {
                        ?>
                            <option value="<?php echo $disco['author'] ?>"><?php echo $disco['author'] ?></option>
                        <?php
                        }
                    ?>
                </select>
            </div>
        </header>
        <div class="cds-container container">
            <?php
                foreach ($dischi as $disco) {
                    ?>
                    <div class="cd active" data-genre="<?php echo $disco['genre']; ?>" data-author="<?php echo $disco['author']; ?>">
                        <img src="<?php echo $disco['poster']; ?>" alt="<?php echo $disco['title']; ?>">
                        <h3><?php echo $disco['title']; ?></h3>
                        <span class="author"><?php echo $disco['author']; ?></span>
                        <span class="year"><?php echo $disco['year']; ?></span>
                    </div>
                    <?php
                }
            ?>
        </div>
    </body>
    <script id="cd-template" type="text/x-handlebars-template">
        <div class="cd active" data-genre={{genre}} data-author="{{author}}">
            <img src={{poster}} alt={{title}}>
            <h3>{{title}}</h3>
            <span class="author">{{author}}</span>
            <span class="year">{{year}}</span>
        </div>
    </script>
    <script src="../public/app.js" charset="utf-8"></script>
</html>
