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
                </select>
            </div>
        </header>
        <div class="cds-container container">
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
    <script id="option-template" type="text/x-handlebars-template">
        <option value="{{author}}">{{author}}</option>
    </script>
    <script src="../public/app.js" charset="utf-8"></script>
</html>
