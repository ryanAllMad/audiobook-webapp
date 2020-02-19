
<?php include 'header.php'; ?>
<body class="settings-page">
    <div class="container">
    <!--landmark banner area-->
    <header class="top-bar">
      </header>
    <!--main content area landmark-->
    <main>
        <div class="heading one"> 
            <h2>APP SETTINGS</h2>
          </div>
          <div class="set">
            <form name="app-settings" aria-labelledby="application-settings">
              <fieldset aria-labelledby="ajust-playback-speed" >
                  <legend id="playback-speed">Playback Speed</legend>
                  <input aria-label="adjust-playback-speed" type="range" name="playback" min="0" max="5" step="1" />
              </fieldset>
              <fieldset aria-labelledby="turn-off-or-on-notifications">
                  <legend id="notifications" for="notifications">Notifications</legend>
                  ON<input aria-label="turn-notifications-on"  type="radio" name="notifications" value="on" />
              </fieldset>

            </form>
            <p>About</p>
            <p>Troubleshoot</p>
          </div>
          <div class="heading two"> 
            <h2>ACCESSIBILILITY</h2>
          </div>
          <div class="access">
              <form name="accessibility-settings" aria-labelledby="accessibility-settings">
                <fieldset aria-labelledby="turn-on-or-off-tooltips" >
                    <legend id="turn-on-or-off-tooltips" for="tooltips">Turn On or Off Tooltips</legend>
                    ON<input aria-label="turn-on-tooltips"  type="radio" name="tooltips" value="on" />
                </fieldset>
<fieldset aria-labelledby="adjust-contrast">
    <label id="adjust-contrast">Adjust Contrast</label>
    <input  aria-label="adjust-contrast"  type="range" name="contrast" min="0" max="5" step="1" />
</fieldset>
<fieldset aria-labelledby="adjust-text-size">
    <label id="adjust-text">Adjust Text</label>
    <input aria-label="adjust-text-size" type="range" name="text" min="0" max="5" step="1" />
</fieldset>
                </form>
          </div>
    </main>
<?php include 'footer.php'; ?>