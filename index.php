    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
              integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>шифр цезаря</title>
    </head>
    <body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form>
                    <div class="form-row">
                        <!--Caesar encryption-->
                        <div class="col-12">
                            <h1 class="display-2 bg-primary text-white text-center">Шифрование цезаря</h1>
                            <div class="form-group">
                                <label for="encryption"></label>
                                <textarea name="encryption" class="form-control" rows="3" id="encryption"></textarea>
                                <p id="encryption_text" class="bg-primary text-white m-2"></p>
                            </div>
                        </div>
                        <!--End Caesar-->
                        <!--Caesar decryption-->
                        <div class="col-12">
                            <h1 class="display-2 bg-dark text-white text-center">Расшифровка цезаря</h1>
                            <div class="form-group">
                                <label for="decryption"></label>
                                <textarea name="decryption" class="form-control" rows="3" id="decryption"></textarea>
                                <p id="decryption_text" class="bg-dark text-white m-2"></p>
                            </div>
                        </div>
                        <!--End Caesar decryption-->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    </body>
    </html>