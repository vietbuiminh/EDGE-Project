<?php $title = "Our Work";
include('includes/header.php'); ?>

<style>
    .o1 {
        background-image:linear-gradient(90deg, rgba(0,0,0,0.5163551401869159) 0%, rgba(0,0,0,0.7976238019169329) 0%, rgba(0,0,0,0.5675918530351438) 35%, rgba(0,0,0,0.26407747603833864) 83%), url('images/children.png');
    }
    .parallax {
        background-size:auto;
        background-position:top;
    }
    h1 {
        text-transform: unset;
    } /*
    h3 {
        font-weight: 500;
    }*/
    .two-column-grid {
        padding:0;
    }
    .two-column-grid img {
        width:100%;
        height: auto;
    }

    .left {
        margin-top: 20%;
    }
    .right {
        text-align: right;
        margin: 0;
    }
    a {
        line-break:anywhere;
    }
    @media only screen and (min-width:1600px) {
        /*h1 {
            font-size:50px;
        }
        h3 {
            font-size:30px;
        }
        p {
            font-size:20px;
        }*/
    }
    @media only screen and (max-width:1000px) {
        .parallax {
            background-position:center;
            background-attachment:inherit;
            background-size: cover;
        }
        .two-column-grid {
            grid-gap:0 !important;
        }
        .left {
            text-align:center;
        } /*
        h1 {
            font-size:30px;
        }
        h3 {
            font-size:20px;
        }
        p {
            font-size:15px;
        }*/
    }
</style>
    
    <main>
        <div class="parallax overlay o1">
            <div>
                <h1 style="text-shadow:1px 1px 20px #000000">We are building the future of water, one woman at a time.</h1>
            </div>
        </div>
        <br>
        <h1 align="center">Our Work</h1>
        <div class="two-column-grid" style="grid-gap:7.5%; align-items:stretch;">
            <div class="right">
                <h3>WHAT we do</h1>
                <p>We are building the future of water one woman at a time by raising awareness, creating cultures, removing barriers, creating opportunities and supporting women in water and sanitation around the world.</p>
                <br><br>
                <img src="images/woman-at-computer.png" alt="Picture of a smiling woman using a laptop" />
                <br><br>
                <h3>WHY we do this work</h3>
                <p>It's simple, we believe our work helps ensure that water and sanitation are equitably and sustainably managed for all.<br><br>
                
                Water is <i>the</i> most critical resoruce we have. Life cannot exist without it. Water impacts our health, our happiness, and our economy. Women are the primary users of water and sanitation. It is logical and fair that they be equitably involved in the management of this most critical resource. Numerous studies have demonstrated the value of diverse teams, workplaces, and industries. In fact, one study indicated that water projects that include women are 6-7 times more effective than water projects that do not include women.<sup>1</sup> Yet around the world, water and sanitation continue to be a male-dominated industry. Less than 10% of professional and managerial staff in sanitation and drinking water are women.<sup>2</sup> We are here to change that!</p>
                <br><br>
                <h3>HOW we do this work</h3>
                <p>We seek to remove barriers and create opportunities for women's equitable participation in the water and sanitation sector. Our education, training, outreach, advocacy, scholarship and support programs focus on recruiting, integrating, supporting and retaining women in the water and sanitation industry. Our programs may be funded by membership dues, fundraising, paid services, grants, paid contracts and retail sales.</p>
            </div>
            <div class="left">
                <h3>WHO are women in water and sanitation?</h3>
                <p>Women in water and sanitation are women performing paid or unpaid work in the water and sanitation sector. They are engineers, scientists, distribution, collection workers and more, that evaluate community water and sanitation needs, and design, implement and maintain water and sanitation solutions.</p>
                <br><br>
                <img src="images/woman-1.png" alt="Woman smiling, looking to the left" /><br><br>
                <br><br>
                <img style="width:333px;" src="images/ourwork-diagram-1.png" alt="Graphic showing that water projects that include women are 6-7 times more effective, with water droplets in blue and pink" /><br><br>
                <br><br>
                <img style="width:333px;" src="images/ourwork-diagram-2.png" alt="Graphic showing that less than 10% of professional and managerial staff in sanitation and drinking water are women, with hard hats in blue and pink" /><br><br>
                <h3>WHERE we work</h3>
                <p>We work anywhere and everywhere and our membersip is world-wide.</p>
            </div>
        </div>
        <div style="padding: 7.5%; font-size:0.9em;">
                <p align="left"><sup>1</sup> <a style="color:var(--text-color); padding:0 !important; text-decoration:none" href="https://iwa-network.org/wp-content/uploads/2016/08/The_Untapped_Resource_screen.pdf" target="_blank">https://iwa-network.org/wp-content/uploads/2016/08/The_Untapped_Resource_screen.pdf</a><br>
                <sup>2</sup> <a style="color:var(--text-color); padding:0 !important; text-decoration:none" href="https://www.un.org/waterforlifedecade/pdf/glaas_report_2012_eng.pdf" target="_blank">https://www.un.org/waterforlifedecade/pdf/glaas_report_2012_eng.pdf</a>
                </p>
            </div>
        </div>
    
<?php include('includes/footer.html'); ?>