<?php $title = "Home";
include('includes/header.php'); ?>

    <!--Header background image: Replace for other pages (if used)-->
    <div class="parallax bg home-bg"></div>
</header>
<style>
</style>
<main class="justify">
    <div class="content">
        <div class="grid two-columns left-major">
            <div class="left-column">
                <h1 class="blue-text">Welcome to LULAC #5285, Moline, Illinois</h1>
            </div>
            <div class="right-column">
                <div class="divider"></div>
                <div class="mission-statement">
                    <h2 class="blue-text">Our Mission</h2>
                    <p><strong>The mission</strong> of the <strong style="color: var(--red-theme)">League of United
                            Latin American Citizens</strong> is to advance the economic condition,
                        educational attainment, political influence, housing, health, and civil rights of the
                        Hispanic
                        population of the United States.</p>
                </div>
            </div>
        </div>

        <div class="flex">
            <div class="data-card animate-hover">
                <h1>19</h1>
                <p>SPONSORSHIPS</p>
            </div>
            <div class="data-card animate-hover">
                <h1>29</h1>
                <p>PARTNERSHIPS</p>
            </div>
            <div class="data-card animate-hover">
                <h1>56</h1>
                <p>COUNCIL MEMBERS</p>
            </div>
            <div class="data-card red animate-hover">
                <h1>1</h1>
                <p>COMMUNITY UNITED</p>
            </div>
        </div>

        <div class="grid two-columns right-major" style="margin-top: 100px; grid-gap:10%;">
            <div class="left-column">
                <div class="history">
                    <h2 class="red-text">LULAC History</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <br>
                    <a href="#" class="button animate-hover">Learn More</a>
                </div>
            </div>
            <div class="right-column">
                <div class="joinbox animate-hover">
                    <p class="red-text">BECOME A MEMBER</p><br>
                    <img src="img/logo.svg" alt="logo of LULAC">
                    <br><br>
                    <a href="#" class="button animate-hover">Join Now</a>
                </div>
            </div>
        </div>

        <div class="grid two-columns">
            <div class="container">
                <img src="img/donate.jpg" alt="lulac group 5285 smiling in front of camera">
                <div class="overlay blue-opacity">
                    <div class="text">Donate</div>
                </div>
            </div>
            <div class="container">
                <img src="img/event.jpg" alt="one of the hispanic event in the quad city area">
                <div class="overlay red-opacity">
                    <div class="text">Events</div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.html'); ?>