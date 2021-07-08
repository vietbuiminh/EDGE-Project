<?php $title = "Our Vision, Mission & Goals";
include('includes/header.php'); ?>

<style>
    main {
        padding: 7.5%;
    }
    main h1, main h2, main h3 {
        margin-top:60px;
    }
    .button {
        padding:12.5px 25px !important;
    }
    .o1 {
        background-image: url('images/woman-whiteboard.png');
        background-size:cover;
        padding:25% 0 !important;
        width:100% !important;
        position:Relative;
    }
    .o1 div {
        position:absolute;
        bottom:5%;
        left:5%;
        text-align:center;
    }
    .o1 img {
        width:25vw;
    }
    .two-column-grid {
        width: auto;
        padding: 0;
    }
    .boxed {
        padding: 7%;
    }

    /*Workplace for the benefits grid in membership page */
    /*! It's easier to code on here than on the php file*/
    .scholarships-box {
        grid-area: ss;
    }
    .awards-box {
        grid-area: aw;
    }
    .events-box {
        grid-area: ev;
    }
    .support-box {
        grid-area: sp;
    }
    .mentoring-box {
        grid-area: mt;
    }
    .networking-box {
        grid-area: nw;
    }
    .committees-box {
        grid-area: cm;
    }
    .influence-box {
        grid-area: if;
    }
    .child1 {
        grid-area: c1;
    }
    .child2 {
        grid-area: c2;
    }
    .child3 {
        grid-area: c3;
    }
    .child4 {
        grid-area: c4;
    }
    .child5 {
        grid-area: c5;
    }
    .benefits-grid{
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        /*grid-template-rows: repeat(10, 1fr);*/
        grid-template-rows: auto;
        grid-template-areas: 
            "ss ss ss c1 aw aw"
            "ss ss ss c1 aw aw"
            "ss ss ss ev ev ev"
            "c2 c3 c3 ev ev ev"
            "c2 c3 c3 sp sp c4"
            "mt mt c5 sp sp c4"
            "mt mt c5 nw nw nw"
            "cm if if nw nw nw"
            "cm if if nw nw nw"
            ;
        grid-gap: 15px;
    }

    .benefits-grid div {
        background-color:#ffd9db;
        position: relative;
    }

    .benefits-grid p {
        position: absolute;
    }

    .benefits-grid img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .benefitbox {
        background:var(--theme-pink);
        color: white;
        padding: 0.5em 1em;
        display: flex;
        width: fit-content;
        font-weight: 600;
        margin: 0.3em;
    }

    .scholarships-box p, 
    .mentoring-box p {
        bottom: 0;
        right: 0;
    }
    .awards-box p,
    .influence-box p {
        bottom: 0;
        left: 0;
    }

    .support-box p,
    .networking-box p {
        top: 0;
    }

    @media only screen and (min-width:1600px) {
        .o1 img {
            width:400px;
        }
    }
    @media only screen and (max-width:1000px) {
        .o1 {
        }
        .benefits-grid{
            grid-template-columns: auto;
            grid-template-rows: auto;
            grid-template-areas: 
                "ss ss ss aw aw"
                "ev ev sp sp sp"
                "mt mt mt cm cm"
                "if if nw nw nw"
                ;
        }
        .mobile-hidden {
            display: none;
        }
        .benefitbox {
            font-size: inherit;
        }
    }
    @media only screen and (max-width:600px) {
        .benefitbox {
            font-size: 4vw;
        }
    }
</style>

    <main>
        <div class="overlay o1">
            <br>
            <div>
                <img src="images/circle-thing.png" alt="Pink circle with white text that says 'We are wat-her' (trademark)" />
            </div>
        </div>
        <h1 align="center">Membership</h1>
        <a align="center" href="https://docs.google.com/forms/d/e/1FAIpQLSfk9pR-L09EdDTXKOXBYZjYdJwf2rkZt12K2idRvbbjcVK6hA/viewform?usp=sf_link" target="_blank" class="button">JOIN/RENEW</a>
        <h2 align="center">Benefits</h2>
        <p>It has been our experience that many women starting or following careers in the water management industry feel like an island. We do not want anyone to feel like an island! And we understand the unique challenges women working in this male-dominated industry may face.<br><br>
        
        Members enjoy the following benefits:<br><br>
        
        <!--<i>Big square section goes here</i></p>--->
        <div class="benefits-grid">
            <div class="scholarships-box">
                <img src="images/grid1.png" alt="a smiley women siting infront of a laptop looking directly to you">
                <p class="benefitbox">Scholarships</p>
            </div>
            <div class="awards-box">
                <img src="images/grid3.png" alt="">
                <p class="benefitbox">Awards</p>
            </div>
            <div class="events-box"> 
                <p class="benefitbox" style="position:relative">Events</p>
            </div>
            <div class="support-box">
                <img src="images/grid6.png" alt="">
                <p class="benefitbox">Support</p>
            </div>
            <div class="mentoring-box">
                <img src="images/grid7.png" alt="">
                <p class="benefitbox">Mentoring</p>
            </div>
            <div class="committees-box">
                <p class="benefitbox" style="position:relative">Committees</p>
            </div>
            <div class="influence-box">
                <img src="images/grid10.png" alt="">
                <p class="benefitbox">influence</p>
            </div>
            <div class="networking-box">
                <img src="images/grid9.png" alt="">
                <p class="benefitbox">Networking</p>
            </div>
            <div class="mobile-hidden child1">
                <img src="images/grid2.png" alt="#">
            </div>
            <div class="mobile-hidden child2">
                <img src="images/grid4.png" alt="#">
            </div>
            <div class="mobile-hidden child3">
                <img src="images/grid5.png" alt="#">
            </div>
            <div class="mobile-hidden child4"></div>
            <div class="mobile-hidden child5">
                <img src="images/grid8.png" alt="">
            </div>
        </div>

        <h2 align="center">Membership Types & Dues</h2>
        <h3 align="center">Join now as a founding member and receive a 20% discount!</h3>
        <a align="center" href="https://docs.google.com/forms/d/e/1FAIpQLSfk9pR-L09EdDTXKOXBYZjYdJwf2rkZt12K2idRvbbjcVK6hA/viewform?usp=sf_link" target="_blank" class="button">JOIN/RENEW</a>
        <div class="two-column-grid" style="padding-top: 7.5%">
            <img src="images/woman-hat.png" alt="Picture of a woman with a hat and a red jacket holding a goat, which also has a hat" />
            <div class="left boxed">
                <div class="border-before-blue">
                    <h4>PLAN Professional</h4>
                    <p>Get active and volunteer with us:<br>
                    Current normal annual rate: $100/year<br>
                    Your rate after 20% discount: $80/year*</p>
                </div>
                <div class="border-before-blue">
                    <h4>PLAN Supportive</h4>
                    <p>Provide financial support only:<br>
                    Current normal annual rate: $100/year<br>
                    Your rate after 20% discount: $80/year*</p>
                </div>
                <div class="border-before-blue">
                    <h4>PLAN Student</h4>
                    <p>Get active or provide financial support:<br>
                    Current normal annual rate: $40/year<br>
                    Your rate after 20% discount: $32/year*</p>
                </div>
                <div class="border-before-pink">
                    <h4>PLAN Recent Grad - Retired - Unemployed</h4>
                    <p>Get active or provide financial support:<br>
                    Current normal annual rate: $60/year<br>
                    Your rate after 20% discount: $48/year*</p>
                </div>
            </div>
        </div>
        <div class="two-column-grid" style="padding-bottom: 7.5%">
            <div class="left boxed">
                <h4>Are you from a low or lower-middle income country?</h4>
                <p>If you are and are unable to pay the above-mentioned member rates, no problem!<br><br>
                
                Join us as an IMPROVE member! We offer non-financial options for citizens of low &amp; lower-middle income countries! Low and lower-middle income country classifications will be based on the most recent World Bank Country Classifications. The 2020 classifications can be found <a href="https://datahelpdesk.worldbank.org/knowledgebase/articles/906519-world-bank-country-and-lending-groups" target="_blank">here</a>.<br><br>
                
                *Discounted rates are valid on consecutive, continuous memberships and is 20% off of the normal rate. If you cancel membership and decide later to rejoin, you will be charged the current non-discounted annual membership rate upon    rejoining.</p>
            </div>
            <img src="images/woman-smiling.png" alt="Picture of a woman smiling at a camera with a white and green patterned shirt" />
        </div>
        <a align="center" href="https://docs.google.com/forms/d/e/1FAIpQLSfk9pR-L09EdDTXKOXBYZjYdJwf2rkZt12K2idRvbbjcVK6hA/viewform?usp=sf_link" target="_blank" class="button">JOIN/RENEW</a>
    </main>
    
<?php include('includes/footer.html'); ?>