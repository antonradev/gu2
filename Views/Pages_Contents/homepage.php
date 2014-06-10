<h1><?php print PROJECT_NAME ?></h1>

<div class="content">
  <div class="content-inner">
    <h2>What is it?</h2>
    <p><?php print PROJECT_NAME ?> is a very simple project with the powerful idea to 
      give the users a development of their profiles with the power of 
      the gamification. It is a training. I built it to practice my 
      basic PHP programing skills but the idea remains great.</p>

    <h2>What does it do?</h2>

    <p>Users have experience (XP) and its encrising depending on the time
      and the following users actions:</p>
    <ul>
      <li>Visiting project pages</li>
      <li>Refreshing pages</li>
      <li>Activating VIP Membership</li>
    </ul>
    <p>Leveling XP unlocks parts of the project. With achieving higher level, users 
      have access to functionalities and sections.</p>

    <h3>XP in <?php print PROJECT_NAME ?> is usefull</h3>

    <p>Amounts of XP can be used for ordering features. XP is not only a counting number.</p>
  </div><!-- end div.content-inner -->
</div><!-- end div.content -->
<div class="sidebar">
  <div class="sidebar-inner">
    <h2>How does it work?</h2>
    <?php
    //require_once 'application/permissions.php';
    ?>
    <p>
      <strong>Congratulations! Your XP is enough to see this!</strong>
    </p>
    <p>
      Basics of the XP calculation: DATETIME value from the database is converted 
      to time string. Current time minus Registered time gives a constantly 
      increasing number (User living time) which is included in the total XP. 
      Clicks and Pages views sum is added to the User living time.
    </p>
    <p>
      Clicks increase XP. For every 10 clicks in the project pages that have marker, 
      an amount of XP is added to the total XP number and Clicks are reset to zero.
      20 Refreshes gives +1 to the Mastered Pages Views in the database.
    </p>
    <p>
      Clicks and Mastered Pages Views are stored in the database while 
      Refreshes (Pages views in session) are stored temporary in the browser session.
    </p>
    <p>
      Big enough XP number includes contents files in the sidebar.
    </p>


  </div><!-- end div.sidebar-inner -->
</div><!-- end div.sidebar -->
<div class="clearfix"></div>