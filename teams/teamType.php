<?php
    if ($_GET) {
        $title = "Team modification";
    }
    else {
        $title = "New team";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>
            <?php echo $title; ?>
        </title>
    </head>
    <body>
        <form class="container" action="">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Name team
                    </span>
                    <input type="text" class="form-control" name="nameTeam">
                </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Stade team
                    </span>
                    <input type="text" class="form-control" name="stadeTeam">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        City team
                    </span>
                    <input type="text" class="form-control" name="cityTeam">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Postale code team
                    </span>
                    <input type="text" class="form-control" name="postalecodeTeam">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Sport team
                    </span>
                    <input type="text" class="form-control" name="sportTeam">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Level team
                    </span>
                    <input type="text" class="form-control" name="levelTeam">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        Logo team
                    </span>
                    <input type="file" class="form-control" name="logoTeam">
                </div>
            </div>
        </form>
    </body>
</html>

<div class="modal fade" id="teamModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    New team
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <input class="btn btn-outline-danger" type="reset" value="Reset">
                <input class="btn btn-outline-success" type="submit" value="Validate">
            </div>
        </form>
    </div>
</div>