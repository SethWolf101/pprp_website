<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Picture Perfect Roleplay</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/bddd10b4ea.js" crossorigin="anonymous"></script>

    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = xhttp.responseText;
                var output = JSON.parse(response);
                $(".secslots").html(output['Data']['clients'] + "/64 Current Population&nbsp;<i class='fa-solid fa-people-group'></i>");
            }
        };
        xhttp.open("GET", "https://servers-frontend.fivem.net/api/servers/single/opkkpy", true);
        xhttp.send();
    </script>
</head>

<body class="full-page">

    <!-- Menu Button -->
    <div class="menu-btn">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Menu Links -->
    <ul class="menu">
        <li class="menuitem" onclick="openLink('start')" style="border-color: #A318FF">Home</li>
        <li class="menuitem" onclick="openLink('about')">About</li>
        <li class="menuitem" onclick="openLink('rules')">Rules&nbsp;<i class="fas fa-external-link fa-xs"></i></li>
        <li class="menuitem" onclick="openLink('contact')">Contact&nbsp;<i class="fas fa-external-link fa-xs"></i></li>
        <li class="menuitem" onclick="openLink('donate')">Donate&nbsp;<i class="fas fa-external-link fa-xs"></i></li>
    </ul>

    <!-- Admins Section (Middle Left) -->
    <div class="admin-box">
        <div class="sectitle">Owners & Admins&nbsp;<i class="fa-solid fa-users-gear"></i></div>
        <div class="secsubtitle">👑 Johnny Sins — Owner</div>
        <div class="secsubtitle">👑 Seth Wolf — Owner</div>
        <div class="secsubtitle">👑 EZ — Owner</div>
        <div class="secsubtitle">👑 TY — Owner</div>
        <div class="secsubtitle">🛡️ Jack Miller — Admin</div>
        <div class="secsubtitle">🛡️ TY — Admin</div>
        <a href="https://discord.gg/pprpreloaded" target="_blank">
        </a>
    </div>

    <!-- Main Info Bar -->
    <div class="bar">
        <div class="sec">
            <div>
                <div class="sectitle">FiveM&nbsp;<i class="fa-solid fa-plane"></i></div>
                <div class="secsubtitle">Join Server</div>
                <div class="secslots"><i class="fa-solid fa-people-group"></i>?/80 Current Population</div>
            </div>
            <div>
                <a href="https://cfx.re/join/ak95e9" target="_blank">
                    <div class="secbadge">Connect&nbsp;<i class="fas fa-external-link fa-xs"></i></div>
                </a>
            </div>
        </div>

        <div class="sec">
            <div>
                <div class="sectitlediscord">Discord&nbsp;<i class="fa-brands fa-discord"></i></div>
                <div class="secsubtitlediscord">discord.gg/pprpreloaded</div>
            </div>
            <div>
                <a href="https://discord.com/invite/pprpreloaded">
                    <div class="secbadgediscord">Join&nbsp;<i class="fas fa-external-link fa-xs"></i></div>
                </a>
            </div>
        </div>

        <div class="sec">
            <div>
                <div class="sectitlesocials">Socials</div>
                <a href="https://www.tiktok.com/@seth.gutridge">
                    <div class="tiktok"><i class="fa-brands fa-tiktok"></i>&nbsp;Seth's TikTok &nbsp;<i class="fas fa-external-link fa-xs"></i></div>
                </a>
                <a href="https://www.tiktok.com/@jsinscommunity">
                    <div class="tiktokd"><i class="fa-brands fa-tiktok"></i>&nbsp;Johnny's TikTok&nbsp;<i class="fas fa-external-link fa-xs"></i></div>
                </a>
                <div class="tiktokc">More coming soon!</div>
            </div>
        </div>
    </div>

    <!-- Menu Toggle Script -->
    <script>
        const menuBtn = document.querySelector(".menu-btn");
        const menu = document.querySelector(".menu");
        menuBtn.addEventListener("click", () => {
            menu.classList.toggle("active");
        });
    </script>

</body>
</html>
