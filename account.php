<?php include 'header.php'; ?>
<body class="account-page">
    <div class="container">
    <!--landmark banner area-->
      <header class="top-bar">
      </header>
    <!--main content area landmark-->
      <main>
          <div class="heading one"><h2>Profile</h2></div>
          <div class="profile">
              <form name="profile" aria-labelledby="profile-info">
                  <label id="username">Username</label>
                  <input aria-label="enter-new-username" type="text" />
                  <label id="password" for="password">Password</label>
                  <input aria-label="enter-new-password" type="password" />
                  <input type="submit" name="login-info" value="Submit">
              </form>

          </div>
          <div class="heading two"><h2>Billing</h2></div>
          <div class="billing">
                <form name="billing" aria-labelledby="billing-info">
                        <label id="credit-card-number">Credit Card</label>
                        <input aria-label="enter-credit-card-number" type="number" />
                        <label id="email" for="email">Email</label>
                        <input aria-label="enter-email-address" type="email" />
                        <label id="billing-address" for="address">Billing Address</label>
                        <input aria-label="enter-billing-address" type="text" />
                        <input type="submit" name="billing-info" value="Submit">
                    </form>
          </div>
          <div class="empty"></div>
      </main>
<?php include 'footer.php'; ?>