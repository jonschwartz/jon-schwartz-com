<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="/css/style.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container-fluid">
            <?php echo $this->section('jumbotron'); ?>
        </div>
        <div class="container-fluid">
            <?php echo $this->section('content'); ?>
        </div>

        <div class="container">
            <footer>
                &copy; <?php echo date("Y"); ?> Jon Schwartz
            </footer>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>
