
  <div class="header">
    <H1 style="font-family: Bitter; font-weight:bold">The News</H1>
  </div>

  <hr style="border-top: 1px rgb(106, 105, 105);">

  <div class="nav" style="font-family:roboto">
    <a href="" >Politics</a>
    <a href="" >Business</a>
    <a href="" >Tech</a>
    <a href="" >Art</a>
    <a href="" >Science</a>
    <a href="" >Health</a>
    <a href="" >Weather</a>
  </div>

  <hr style="border-top: 1px rgb(106, 105, 105);">


  <div class="order-buttons">
    <form method="get">
      <button ><a href="?order=ASC">Order by A-Z </a></button>
      <button ><a href="?order=DESC">Order by Z-A</a></button>
    </form>
    <button class="cards"><a href="admin/admin.php">Add New Cards</a></button>
    
  </div>

  <div class="cards-container">
    <?php
      include "generateCards.php";
    ?>
    
  </div>

  <div class="text-links">
    <a href="">
      <h3 style="font-family: IBM Plex Serif;">Tesla investor Ron Baron backs Musk's $56 bln pay plan </h3>
    </a>
    <p style="font-family:Nunito Sans; font-size:13px">Prominent investor Ron Baron has come out in support of Tesla CEO
      Elon Musk's $56 billion pay package, which is up for a shareholder vote next week, according to an open letter
      from the Baron Capital founder on Tuesday.</p>

    <a href="">
      <h3 style="font-family: IBM Plex Serif;">Reinforcement learning AI might bring humanoid robots to the real world
      </h3>
    </a>
    <p style="font-family:Nunito Sans; font-size:13px">Reinforcement learning techniques could be the keys to
      integrating robots — who use machine learning to output more than words — into the real world.</p>

    <a href="">
      <h3 style="font-family: IBM Plex Serif;"> The World’s Shifting Populations Will Define International Politics</h3>
    </a>
    <p style="font-family:Nunito Sans; font-size:13px">The biggest issue facing humanity is its population—both how it
      is shifting around the world and the possibility that it will gradually wither away.</p>

  </div>

