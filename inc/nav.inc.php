<?php
  session_start();
?>
<nav class="navbar">
   
    
    <div class="links">
        <!-- <a href="logout.php" class="link navbar__logout">Logout</a> -->
        <a href="index.php" class="logo"><img src="images/logo.png" alt="ducktalk"></a>
        <div class="dropdown">
          <a href="#" class ="profile link"><img src="https://cdn.icon-icons.com/icons2/3138/PNG/512/profile_user_avatar_person_icon_192481.png" alt="profile"><?php /*echo $username */?> </a>
          <div class="dropdown-content"> 
            <a href="#">Profile</a>
            <a href="#">Setting</a>
            <a href="#">Log Out</a>
          </div>
        </div>  
    </div>
  
</nav>