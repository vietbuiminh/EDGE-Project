<?php $title = "Our Vision, Mission & Goals";
include('includes/header.php'); ?>

<style>
    h1 {
        text-align:center;
        margin-top:100px;
    }
    .o1 {
        background-image: url('images/woman-hand.png');
        background-size:cover;
        padding:25% 0 !important;
        width:100% !important;
        position:Relative;
    }
    .o1 div {
        position:absolute;
        bottom:5%;
        right:5%;
        width:50%;
        text-align:center;
    }
    .parallax {
        background-size:contain;
        background-position:top;
    }
    .overlay {
        /* some stuff here */
    }
    .two-column-grid img {
        width:100%;
    }
    #special {
        padding-bottom:5%;
    }
    #special img {
        width:unset;
    }
    @media only screen and (max-width:1000px) {
        .two-column-grid img {
            width:50%;
            justify-self:center;
        }
        .o1 div {
            width:100%;
            font-size:3vw;
            right:0;
            line-height:25px;
        }
    }
    @media only screen and (max-width:600px) {
        #special {
            padding-bottom:50%;
        }
    }
</style>

    <main>
        <h1>Our Vision, Mission &amp; Goals</h1>
        <div class="two-column-grid" style="grid-gap:5%; width:auto;">
            <img src="images/woman-hazmat.png" alt="Picture of a woman wearing yellow goggles and a white overcoat with her arms folded, looking into the camera" />
            <div class="left">
                <h2>Vision</h2>
                <p>Our vision is women equitably involved in water management in every corner of the globe.</p>
                <h2>Mission</h2>
                <p>Our mission is to <i>SEE</i> women's participation in global water management.</p>
            </div>
        </div>
        <div class="two-column-grid" style="grid-gap:5%; width:auto;">
            <div class="right">
                <h2>Stimulate</h2>
                <p>We encourage women’s interest and development in water management and fuel women’s opportunity to    participate in global water management.</p>
                <h2>Elevate</h2>
                <p>We raise awareness of the critical role women play in water and sanitation sustainability and create a culture of enthusiasm and vitality around women’s     participation in global water management.</p>
                <h2>Embolden</h2>
                <p>We build women’s courage and confidence to be their authentic selves as a woman in global water             management.</p>
            </div>
            <img src="images/woman-pink.png" alt="Picture of an older woman wearing a pink robe and beads, with her hands put together, staring into the camera" />
        </div>
        <img class="banner" src="images/cursive2.png" alt="Cursive script that reads: 'Stimulate. Elevate. Embolden.'" />
        <img style="width:100%;" src="images/women-field.png" alt="Picture of two women wearing blue and yellow dresses with flowers in their hair smiling at an object in the distance in the middle of a field" />
        <h2 align="center">Goals</h2>
        <div class="four-column-grid" id="special">
            <div>
                <img src="images/goals-mind.png" alt="Icon of gears and a lightbulb superimposed over the human head" />
                <p>Conduct research to better <b>understand</b> the experiences of women and men in water management.</p>
            </div>
            <div>
                <img src="images/goals-idea.png" alt="Icon of a luminous lightbulb" />
                <p><b>Learn</b> how best to recruit, integrate, support and retain men and women in water management.</p>
            </div>
            <div>
                <img src="images/goals-loud.png" alt="Icon of a megaphone or loudspeaker making noise" />
                <p><b>Advocate</b> and raise awareness of the critical role women play in water sustainability.</p>
            </div>
            <div>
                <img src="images/goals-path.png" alt="Icon of an arrow winding through dots leading from the start point to the end point" />
                <p><b>Build</b> a global industry culture of support for women's participation in water management.</p>
            </div>
            <div>
                <img src="images/goals-lever.png" alt="Icon of a lever barrier being raised" />
                <p>Remove <b>barriers</b> to women's participation in water management.</p>
            </div>
            <div>
                <img src="images/goals-grow.png" alt="Icon of an open hand with a bar graph and a trendline above indicating exponential growth" />
                <p>Create <b>opportunities</b> for women to paritcipate in water management.</p>
            </div>
            <div>
                <img src="images/goals-team.png" alt="Icon of two hands grabbing onto one another" />
                <p><b>Support</b> women's careers in water management.</p>
            </div>
            <div>
                <img src="images/goals-flower.png" alt="Icon of a flower sprouting" />
                <p><b>Inspire</b> the next generation of women to choose careers in water management.</p>
            </div>
        </div>
        <div class="overlay o1">
            <br>
            <div>
                <h2 style="text-transform:none; line-height:50px;">We achieve our goals through the programs and services we provide.</h2>
            </div>
        </div>
    </main>
    
<?php include('includes/footer.html'); ?>