<html lang="en">
<head>
    <title>Laravel 9 Stripe Payment Gateway</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h2>Pay for Event</h2>
                <br>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
            <form  action="{{route('stripe.post')}}"  data-cc-on-file="false" data-stripe-publishable-key="pk_test_51ItEApEn9zFFy6xp2xCZqmoK2KjXbP6OLBUdXrCRfZMRgM0S4y2EHz5tLhS2a5Pp9hsohv06jK8ylpIWnSWd3wD5009aiHeKw0" name="frmStripe" id="frmstripe" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <label>Name on Card</label>
                        <input class="form-control" size="4" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <label>Number of Card</label>
                        <input autocomplete="off" class="form-control" size="20" type="text" name="card_no">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 form-group">
                        <label>CVC</label>
                        <input autocomplete="off" class="form-control" placeholder="ex. 311" size="3" type="text" name="cvv">
                    </div>
                    <div class="col-lg-4 form-group">
                        <label>Expiration month</label>
                        <input class="form-control" placeholder="MM" size="2" type="text" name="expiry_month">
                    </div>
                    <div class="col-lg-4 form-group">
                        <label>Expiration year</label>
                        <input class="form-control" placeholder="YYYY" size="4" type="text" name="expiry_year">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-control total btn btn-primary">
                            Total: <span class="amount">$35</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <button class="form-control btn btn-success submit-button" type="submit" style="margin-top: 10px;">Pay Now»</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>