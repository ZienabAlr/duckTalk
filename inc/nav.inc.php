<?php
  session_start();
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
<nav class="navbar">
   
    
    <div class="links">
        <!-- <a href="logout.php" class="link navbar__logout">Logout</a> -->
        <a href="index.php" class="logo"><img src="images/logo.png" alt="ducktalk"></a>
        <div class="dropdown">
          <!-- <a href="#" class ="profile link"><img src="https://cdn.icon-icons.com/icons2/3138/PNG/512/profile_user_avatar_person_icon_192481.png" alt="profile"><?php /*echo $username */?> </a> -->
          <a href="#" class ="profile link"><span class="material-symbols-rounded">account_circle</span></a>
          <div class="dropdown-content"> 
            <a href="profile.php">Profile</a>
            <a href="#">Setting</a>
            <a href="logout.php">Log Out</a>
          </div>
        </div>  
    </div>
    <div class="search-bar">
                <input type="text" placeholder="Search.." name="Search">
                <button type="submit"><span class="material-symbols-rounded">search</span></button>
        </div>
  
</nav>