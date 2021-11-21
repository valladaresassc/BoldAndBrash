<!--purchase.php
// form of payment
// card info
// name - buyer
// shipping info - buyer
// email - buyer
// confirmation email -->
<?php
error_reporting(0);
include('session.php');
//include('validate.js');

  echo "<body>
  <div class='row'>
  <div class='col-75'>
    <div class='container'>
    <form action='purchase.php'>
        <div class='row'>
        <div class='col-50'>
            <h3>Billing Address</h3>
            <label for='fname'><i class='fa fa-user'></i> Full Name</label>
              <input type='text' id='fname' name='firstname'>
            <label for='email'><i class='fa fa-envelope'></i> Email</label>
              <input type='text' id='email' name='email'>
            <label for='adr'><i class='fa fa-address-card-o'></i> Address</label>
              <input type='text' id='adr' name='address'>
            <label for='city'><i class='fa fa-institution'></i> City</label>
              <input type='text' id='city' name='city'>
            
            <div class='row'>
            <div class='col-50'>
                <label for='state'>State</label>
                <input type='text' id='state' name='state'>
            </div>
            <div class='col-50'>
                <label for='zip'>Zip</label>
                <input type='text' id='zip' name='zip'>
            </div>
            </div>
        </div>

        <div class='col-50'>
            <h3>Payment</h3>
            <label for='cname'>Name on Card</label>
              <input type='text' id='cname' name='cardname'>
            <label for='number'>Credit card number</label>
              <input type='text' id='ccnum' name='cardnumber'>
            <label for='expmonth'>Exp Month</label>
              <input type='text' id='expmonth' name='expmonth'>
            <div class='row'>
            <div class='col-50'>
                <label for='expyear'>Exp Year</label>
                <input type='text' id='expyear' name='expyear'>
            </div>
            <div class='col-50'>
                <label for='cvv'>CVV</label>
                <input type='text' id='cvv' name='cvv'>
            </div>
            </div>
        </div>
           
        </div>
        <label>
        <input type='checkbox' checked='checked' name='sameadr'> Shipping address same as billing
        </label>
        <input type='submit' value='Submit Payment' class='btn'>
    </form>
    </div>
  </div>
 </div>
</body>"
?>

<!DOCTYPE>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="bnb.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
</head>



</html>
