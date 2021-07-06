<?php $title = "Our Vision, Mission & Goals";
include('includes/header.php'); ?>

<style>
    main {
        padding-left:5%;
        padding-right:5%;
    }
    h1 {
        margin-top:50px;
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
    .two-column-grid img {
        justify-self:center;
    }
    .two-column-grid {
        padding-top:0;
        padding-bottom:0;
    }
    .two-column-grid img:first-child {
        padding-top:5%;
    }
    .two-column-grid img:last-child {
        padding-bottom:5%;
    }
    @media only screen and (min-width:1600px) {
        .o1 img {
            width:400px;
        }
    }
    @media only screen and (max-width:1000px) {
        .o1 {
            margin-top:75px !important;
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
        
        <i>Big square section goes here</i></p>
        <h2 align="center">Membership Types & Dues</h2>
        <h3 align="center">Join now as a founding member and receive a 20% discount!</h3>
        <a align="center" href="https://docs.google.com/forms/d/e/1FAIpQLSfk9pR-L09EdDTXKOXBYZjYdJwf2rkZt12K2idRvbbjcVK6hA/viewform?usp=sf_link" target="_blank" class="button">JOIN/RENEW</a>
        <div class="two-column-grid">
            <img src="images/woman-hat.png" alt="Picture of a woman with a hat and a red jacket holding a goat, which also has a hat" />
            <div class="left">
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
        <div class="two-column-grid">
            <div class="left">
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