<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Checkout || Online Music Shop</title>
</head>

<body class="bg-secondary">
    <?php  include('include/nav.php');?>
    <div class="container mt-5">
        <div class="col-lg-7 mx-auto p-5 text-white">
            <div class="mx-auto border p-5 rounded-lg" style="
              backdrop-filter: url(filters.svg#filter) blur(50px) saturate(200%);">
                <div class="col-lg-12">
                    <label for="validationTooltip05">Card Number</label>
                    <input type="number" class="form-control" id="validationTooltip05" placeholder="Card Number" required>
                    <div class="invalid-tooltip">
                        Please provide your card number
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                    <label for="validationTooltip05">Name on card</label>
                    <input type="text" class="form-control" id="validationTooltip05" placeholder="Name" required>
                    <div class="invalid-tooltip">
                        Please enter your name
                    </div>
                </div>
                <div class="col-lg-12 row mt-3">
                    <div class="col-lg-6">
                        <label for="validationTooltip05">Expiry date</label>
                        <input type="text" class="form-control" id="validationTooltip05" placeholder="MM/YY" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="validationTooltip05">CVV</label>
                        <input type="password" class="form-control" id="validationTooltip05" placeholder="CVV" required>
                    </div>
                </div>
                <div class="mx-auto mt-3 mb-4" style="height:40px">
                    <button type="submit" class="btn btn-primary mb-2 mt-4 float-right">Checkout</button>
                </div>
            </div>
        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
