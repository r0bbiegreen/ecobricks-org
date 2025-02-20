 <!--START OF MENU BAR-->       

 <div id="header">
    <!--<a href="index.html"><object type="image/svg+xml" data="logos/gea-prototype-logo-animated.svg" width="250" height="56"></object></a>-->
    <a href="<?php include 'lang.php';?>/welcome.php"><img src="logos/gea-horizontal.svg" alt="Global Ecobrick Alliance Logo" width="308" height="50"></a>
</div>

<!-- be great to add an if statement here to set $name to blank if its 'welcome' or 'index'-->

<div id="desktop-menu">
    <div class="topnav-lang" id="myTopnav-lang">
        <div class="dropdown-lang">
            <button class="dropbtn-lang">🌏</button>
            <div class="dropdown-content-language">
                <a href='https://ecobricks.org/en/<?php echo ($name); ;?>' onclick='javascript:Localize.setLanguage("ed")'>🇬🇧 ENG</a>
                <a href='https://ecobricks.org/id/<?php echo ($name); ;?>' onclick='javascript:Localize.setLanguage("id")'>🇮🇩 IND</a>
                <a href='https://ecobricks.org/es/<?php echo ($name); ;?>' onclick='javascript:Localize.setLanguage("es")'>🇪🇸 ESP</a>
               <!-- <a href="https://www.ecobricks.org/index.php?lang=de">🇩🇪 DE</a>

                <a href='https://www.ecobricks.org/en/' >🇬🇧 ENG</a>
                <a href='https://www.ecobricks.org/id/'>🇮🇩 IND</a>
                <a href='https://www.ecobricks.org/es/'>🇪🇸 ESP</a>
                <a href="https://www.ecobricks.org/index.php?lang=de">🇩🇪 DE</a>

                
            -->
                
                <a href="javascript:void(0);" style="font-size:15px;" class="icon-lang" onclick="languageMenu()"></a>
            </div>
        </div> 
    </div>

    <div class="topnav" id="myTopnav">
        <div class="dropdown">
                  <button class="dropbtn">
                    <div id="menu-circle"><img src="svgs/grey-emblem.svg" width="30px" height="30px"></div><div id="menu-text">GEA Servers</div>
                </button>
                  <div class="dropdown-content-app">
                    <a href="https://gobrik.com" target="_blank" rel="noopener">
                        <div id="gobrik-menu">
                            <div id="icon-menu">
                            <img src="icons/gobrik.svg" width="65px" height="65px">
                            </div>
                            <div id="apptext-menu">
                                <div class="apptext-header">GoBrik </div>
                                <div class="apptext-sub">Ecobricking Webapp<br>Manage your ecobricks<br>Connect to the Brikcoin blockchain</div>
                            </div>
                        </div>
                    </a>

                    <a href="https://circles.ecobricks.org/signup_user_complete/?id=ek8ks6frxfbbpj3sujkdo8xsqr" target="_blank" rel="noopener">
                        <div id="mattermost-menu">
                            <div id="icon-menu"><img src="icons/mattermost.svg" width="65px" height="65px"></div>
                                
                            <div id="apptext-menu">
                                <div class="apptext-header">Circles </div>
                                <div class="apptext-sub">Join our free mattermost ecobricker community<br>Share your ecobricking<br>Learn from others</div>
                            </div>
                        </div>
                    
                    </a>

                    <a href="https://gobrik.com/#offset" target="_blank" rel="noopener">
                        <div id="offset-menu">
                            <div id="icon-menu"><img src="icons/offset.svg" width="65px" height="65px"></div>
                            <div id="apptext-menu">
                                <div class="apptext-header">AES Plastic Offsetting </div>
                                <div class="apptext-sub">Offset your plastic footprint<br>on our GoBrik AES Platform</div>
                            </div>
                        </div>
                    </a>
                </div>
        </div> 
        
        <a href="faqs.php">FAQs
        <!--	<div id="faq-icon" title="FAQs" style="margin-right: -5px;font-size: 1.35em;">🤔</div>
            <div id="faq-menu-text">FAQs</div>-->
        </a>
        <a href="principles">Principles</a>
        <a href="about">About Us</a>
            <div class="dropdown">
                <button class="dropbtn"><div id="drop-text">Building 
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="/build">Ideas & Examples</a>
                    <a href="/modules">Modules</a>
                    <a href="/earth">Earth & Ecobricks</a>
                    <a href="/openspaces">Open Spaces</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"><div id="drop-text">About Ecobricks 
                  <i class="fa fa-caret-down"></i></div>
                </button>
                <div class="dropdown-content-normal">
                    <a href="what">What are Ecobricks</a>
                    <a href="how">How to Make?</a>
                    <a href="why">Why Ecobricks?</a>
                    <a href="sequest">Plastic sequestration</a>
                </div>
            </div> 
        
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="appMenu()"><img src="svgs/grey-emblem.svg"width="30px" height="30px"></a>
            
        </div>
    </div>
</div>
<!--END OF MENU-->