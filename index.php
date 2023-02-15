<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="css/style.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/e2d7d0fe28.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style="text-align: center;">
    <div class="modal-wide">
    <div class="modal fade getService" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" id="change_modal_size">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center"></h4>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-default" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>
    </div>
</div>

  <div class="justify-content-center text-align-center">
    <button class="btn btn-warning" onclick="takeCredit()">Взять кредит</button>
    <button class="btn btn-warning" onclick="openDeposit()">Открыть вклад</button>
</div>
</body>
<script src="js/functions.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</html>