<?php include 'header.php'; ?>
<?php
    function printResult() {    
        if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "You have changed your username to:  " . $username . "<br>" . "You have changed your password to:  " . $password;        
    }    
}
function printBillResult() {    
    if(isset($_POST['billing-info'])) {
    $card = $_POST['card-number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    echo "You have changed your billing information to:  " . "<br>" . $card . "<br>" . $address . "<br>" . "You have changed your email to:  " . $email;        
}    
}
 
?>
<body class="account-page">
    <div class="container">
    <!--landmark banner area-->
      <header class="top-bar">
      </header>
    <!--main content area landmark-->
      <main>
          <div class="heading one"><h2>Profile</h2></div>
          <div class="profile">
              <form action="account.php" method="post" name="profile" aria-labelledby="profile-info">
                  <label id="username">Username</label>
                  <input aria-label="enter-new-username" type="text" name="username"/>
                  <label id="password" for="password">Password</label>
                  <input aria-label="enter-new-password" type="password" name="password"/>
                  <input type="submit" name="login" value="Submit">
              </form>
<div class="result"><?php echo printResult(); ?></div>
          </div>
          <div class="heading two"><h2>Billing</h2></div>
          <div class="billing">
                <form action="account.php" method="post" name="billing" aria-labelledby="billing-info">
                        <label id="credit-card-number">Credit Card</label>
                        <input aria-label="enter-credit-card-number" type="number" name="card-number" />
                        <label id="email" for="email">Email</label>
                        <input aria-label="enter-email-address" type="email" name="email" />
                        <label id="billing-address" for="address">Billing Address</label>
                        <input aria-label="enter-billing-address" type="text" name="address" />
                        <input type="submit" name="billing-info" value="Submit">
                    </form>
<div class="result"><?php echo printBillResult(); ?></div>
          </div>
          <div class="empty"></div>
      </main>
<?php include 'footer.php'; ?>