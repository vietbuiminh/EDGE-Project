<?php $title="Natalie Linville-Mass";
include('../includes/header.php'); ?>

<style>
    .videos {
        display: grid;
        grid-gap: 10px;
        grid-template-columns: 1fr 1fr;
        width: fit-content;
        margin: auto;
    }

    .video iframe{
        width: 500px;
        height: 300px;
    }

    .transcript-box {
        width: 500px;
    }

    .transcript-box p{
        font-style: italic;
        border: #ccc solid 1px;
        padding: 20px 25px;
        margin: 0;
        font-size: 95%;
        transform: scale(100%);
        max-height: 300px;
        overflow: scroll;
    }

    .arrow {
        border: solid black;
        border-width: 0 1px 1px 0;
        display: inline-block;
        padding: 3px;
        margin-left: 10px;
    }

    .down {
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
    }

    /* Dropdown Transcript */
    input, .hidden-script01, .hidden-script02 {
        display: none;
    }

    label {
        position: relative;
        display: block;
        cursor: pointer;
        background-color: var(--bg-color);
        padding: 10px;
        width: fit-content;
        font-weight: bold;
    }

    input:checked~.hidden-script01 {
        display: block;
        animation: transcript-animation 0.5s ease forwards;
    }


    input:checked~.hidden-script02 {
        display: block;
        animation: transcript-animation 0.5s ease forwards;
    }

    @keyframes transcript-animation {
        from {
            opacity: 0;
            transform: scale(0%);
        } to {
            opacity: 1;
            transform: scale(100%)
        }
    }

    /* End of Dropdown Transcript */
    .photos-row {
        display: flex;
        
        text-align: center;
        justify-content: center;
    }

    .photo-box {
        position: relative;
        margin: 10px 5px;
    }

    .photo-box img {
        position: relative;
        object-fit: cover;
        width: auto;
        height: 250px;
    }

    .photo-box p {
        position: absolute;
        bottom: 0;
        color: white;
        margin: 0;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px) saturate(100%) contrast(45%) brightness(130%);
        -webkit-backdrop-filter: blur(10px) saturate(100%) contrast(45%) brightness(130%);
        font-size: 80%;
    }
    @media only screen and (max-width:1080px){
        .videos {
            grid-template-columns: none;
            grid-row-columns: 1fr 1fr;
        }

    }
    @media only screen and (max-width:566px){
        .videos {
            grid-template-columns: none;
            grid-row-columns: 1fr 1fr;
        }
        .video iframe, .transcript-box {
            width: 90vw;
            height: auto;
        }
        .photos-row {
            flex-direction: column;
        }

        .photos-row img {
            width: 500px;
            height: auto;
        }
    }
</style>

<section class="content-wide">
    <h1 class="blue-background">Natalie Linville-Mass (Media Link Inc.)</h1>
    <p style="text-align:center;"><img src="../images/nlmass.png" alt="Photo of Natalie Linville-Mass (Media Link Inc.)" />
        </p>
    
    <h3 style="text-align:center;">Natalie Linville-Mass (Owner of Media Link Inc.)</h3>
    <div class="videos">
        <div class="video">
            <iframe src="https://www.youtube.com/embed/tkWdekF89ME" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <div class="transcript-box">
                <input id="check01" type="checkbox" name="transcript" />
                <label for="check01">Transcript<i class="arrow down"></i></label>
                <p class="hidden-script01">
                [Music] so i am natalie lynfield mass i have a company called media link i started this 20 years ago um feels like yesterday and the reason i started the company was out of a need to help other people that i knew in the community than to be able to help them with their marketing people get a lot of visits from a lot of different vendors and to really be able to vet and know what you have in front of you is tough so that's really what i wanted to be able to help them through was to be able to help them understand you know what they have and how to form that path and and how to help them grow their business i've had media link for 20 years and then i also felt the need to develop my own software company to help other advertising agencies throughout the country that was done in 2010 i did that because at the time the software providers that were out there only focused on broadcast which is radio television and cable but they really didn't do anything with the emerging field of digital media as well as with outdoor and publications and then this year we are starting the third leg of our company called qc passport and we did this because the quad cities is incredible you know i keep saying this over and over again but the american experience is the quad cities experience we have gotten to a point where it really does need to be individualized for every business because every business is going to have a different audience a different a different geography a different set of customers and how those customers are going to react it's going to be very individualized and very different so so yeah be open to change that's going to help you be more successful than anything else also don't lie to anybody okay you know always you know tell the truth be transparent show people how you got to where you are don't hide anything people can see right through that right away be true to who you are be proud of who you are be proud of what you've accomplished [Music]
                </p>
            </div>
            
        </div>
        <div class="video">
            <iframe src="https://www.youtube.com/embed/fQQCfPwLN68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <div class="transcript-box">
                <input id="check02" type="checkbox" name="transcript" />
                <label for="check02">Transcript<i class="arrow down"></i></label>
                <p class="hidden-script02">
                    fun fact about myself well i don't know if it's really a fun fact do you guys know i'm starting like a whole division of my company called qc passport yeah yeah so i'm kind of like into history but that would go with that's not really a fun fact i am natalie lymphill mass i have a company called medialink i started this 20 years ago um feels like yesterday and the reason i started the company was out of a need to help other people that i knew in the community than to be able to help them with their marketing when i started the agency 20 years ago there were a couple of things i really wanted to make sure that i did for my agency i wanted to make sure that everything was transparent that there were no surprises when our clients received their bills i i wanted to be more of somebody who could help educate them on what their options were and what was out there in the market and to be able to help them cross compare the different proposals that they had in front of them because people get a lot of visits from a lot of different vendors and to really be able to vet and know what you have in front of you is tough so that's really what i wanted to be able to help them through was to be able to help them understand you know what they have and how to form that path and and how to help them grow their business and it's been fun i've gotten to work in several different industries when you're working in an ad agency you get to go into the you know hvac field one day you get to go into foot podiatry the next day then you get to go into a college setting and then you get to find out more about you know stomachs and with gastroenterology and you do you go from one field to the next and it's really exciting to be able to put yourself in their shoes and to help them be able to grow their businesses it's exciting and it's different and there's different pieces of it that go with it every day i've had media link for 20 years and then i also felt the need to develop my own software company to help other advertising agencies throughout the country that was done in 2010 i did that because at the time the software providers that were out there only focused on broadcast which is radio television and cable but they really didn't do anything with the emerging field of digital media as well as with outdoor and publications so that was something that i was able to do was to be able to bring all of those platforms up there because as an agency we look at all forms of media we don't look at one and so it was important to be able to represent all of them and to be able to cross compare again what those different medias do and those different proposals and and see how they can perform and so as a result of that this wasn't something we expected we kind of became a consultant for other advertising agencies because everybody buys differently everybody plans their media differently and that was not something we expected we thought everybody does things the same nope nope no everybody has their own way and their own quirks and so this has really helped us understand all of those different ways that you can buy media planning and and put that together and what works effectively and what doesn't work as effectively and then this year we are starting the third leg of our company called qc passport and we did this because the quad cities is incredible um you know i keep saying this over and over again but the american experience is the quad cities experience we have so many entrepreneurs here we have so many um we have been a part of everything from you know the war of 1812 um to present day there are thousands and thousands of immigrants that came here first this is their first step across the mississippi river um we have an incredible history to share and we need to do a better job of it so many tourists when they come here they do not understand the history and quite frankly our own community doesn't understand how cool we really are and so i really wanted to make sure that we had signage up to be able to talk about this and then with that signage you know i'd like to be able to give people more history so we tied in a text piece with it but you know that's not enough too it's important to be in the place where it happened so let's also give you kind of a feel of what it was like in that particular day and time so we also do an audio narration with these so you can hear the sounds of the people that would have been from that area what they would have dealt with on a daily basis and what they had to do with that particular piece and and then um yeah and so we're pulling all of that together and we're launching it right now so you can see it on channel cad and you will soon start seeing other signs pop up throughout the quad cities so we're really excited i love history so much that i wrote my own family tree so i wrote my own family tree as a girl scout project and it actually helped me get the gold award it was a 500 page book and out of that i was able to pull together a reunion of ironically around 500 people from around the country who had never met each other but were all related and yeah so that was in ninth grade yeah no it was really it was really cool and the stories that they had it just made everything so much more human whether it was about somebody from you know 50 years ago or somebody from 200 years ago it's fascinating so anyway that's that's something i just love hearing about other people's lives and and what they do with this small space of time that they have on this earth when i graduated from college i went to work where there was a job right i mean you're putting applications out anywhere i don't care anywhere in the country i'll come work for you as long as it's in my field you know make sure that i get the experience that i can get and it really doesn't matter about the location that grew old after about five or six years and finally i had gotten married but my husband and i had said no where do we want to be not you know where is the next job and we chose the quad cities and we chose the quad cities because of the opportunity here where we came from there was one tv station and you know a couple of radio stations here it's a bi-state region so we've got our choice of you know four different tv stations and well over a dozen different radio stations and you know because it's bi-state you've got both illinois and iowa politics but that also works to its advantage we also chose this area because of the topography we have the mississippi running right through the center you know of our region it's beautiful and there's nothing else like it anywhere else in the world and we just don't realize that we take it for granted but i mean that river and how it flows i never get tired of seeing the lights on the water in the evening i never get tired of walking along one of the trails at night and seeing those old houses um you know that are up on the hills on the iowa side as well as all of the stuff on the broadway district and rock island you know as well as all the mansions that we have over you know in moline i mean there's a lot of beautiful sights here and a lot of places to explore and it's a cool place to live it really is the more innovative we can be about this area the more anything's possible you guys anything's possible if you have an idea on how to get there and you see a path on how to make it happen go for it you know just because it hasn't been done before doesn't mean it shouldn't be done or couldn't be done if you see a path and you see a way to make something happen you have to go for it that's why i started the businesses that i did you know with the software i saw that there was a real problem in our industry and i did see a way to be able to solve it and once i figured out that there was a way to solve a problem within our industry i felt a responsibility to take care of it if i'm not going to do it who's going to do it and then what does that mean if nobody takes care of it right yeah so same thing with this i mean as far as the bison bridge goes i take my hat off to chad i mean that was huge for him to have that vision see how he could connect the dots and make this happen he's got a responsibility to go for it and make it happen so i'm proud of him and it would be a wonderful addition to this area and it will be something that will really um lift up the buffalo in this area literally it'll it'll be something to really um lift up um the the culture of the native americans of the bison who have roamed you know this countryside for thousands of years we need that we need to be able to bring some of this back we need to be able to cherish what was here prior to us well we have expanded outside of the quad cities so we do have um we do have a colleague who works with us out of madison wisconsin originally um when he was talking about leaving you know the quad cities and working someplace else i mean you know the first thought was okay we're going to lose them but then i started thinking about it and i'm like oh wait a minute you know so much of what we do now is done by computer i was using webex at the time i was using um you know we have our phone we've got our computers you know there's so many things that we could do and we had dropbox we you know we can make this work and so once i really started to think about it and put the pieces together i was like no no no no don't go work for another company keep working for us and just work with us you know wherever you need to be located and that was phenomenal and um that was five years ago and he's still with us today and that was so that was long before covet and the pandemic and people realizing that you can work from another space but it's worked out beautifully so yes i do see us expanding and continuing to expand and look for other people who can be a part of this company in other parts of the country where the need rises um you know but at the same time no we're good here too i really like this area like i said you know i've been able to travel to other locations and they're fantastic for a particular time of year but throughout the year not necessarily you know i'm not a big fan of january and february around here but at the same time it's short it's not like where i came from in minnesota um so it's bearable you know i can always travel someplace else i've got an airport right in my backyard that i can travel to anywhere in the united states and make a fast getaway and then come back and realize why i live here so it's it's great i love the channel cat and that's not because they're my partner um but i was thrilled that i would be able that the channel cat was going to be our first partner but i mean anybody who comes and visits me the channel cat is our number one place to go i mean because you are so close to the water you are in the mississippi you're a part of it and it's affordable for everybody and you can get on and get off and experience the bike trails i love that um so channel cats my favorite um oh wildcat den that's another must be you have to check that out and it is where this old gristmill is but you walk in there and the the cave dwellings how you call them they're um so they've got like the devil's punch bowl and it's all of these different colors of rocks and how they're all formed in there and it is one of the most beautiful locations um that i've ever been to it's just absolutely but nobody knows about it so no well cat done you have to go to wildcat done that's that's another one um blackhawk state park is another one of my favorites um that is just phenomenal too and to know that that's where the sakanak tribe was you know 200 300 years ago and to be able to be in that space is just um it's a big deal and it's really important and it's picturesque it's really cool um to travel through that area so yeah i'm much more about the outdoors but we have got some really cool outdoors sylvan slough that's another fantastic place to go as far as my favorite local spots i mean igor's is fantastic to have a restaurant that's got a halloween theme is just amazing miss mamie's is a favorite of mine too i mean they've been in this area and the the dishes that they come up with are completely different from what you would find anywhere else they've got a really good chef there and yeah i mean there's so there's lots of different places to eat i love the different hiking places circa 21 is fantastic i know that it's usually people that go there but it shouldn't be because it's phenomenal you know those are real broadway performances that they're able to put on and it's incredible um being able to be that close and and then have dinner with it too and it's awesome so so i really felt like this community embraced me i did feel like in the other locations that i've lived in um i was simply one of their staff but i do feel like when i came here i was really looked at for my talent and for what i could achieve and it people were a lot more open this area is open to meeting new people they are very welcoming um i was blown away by how eager people were to meet me and to embrace what i was doing and and vice versa it it grows when i started media link i was the first woman in several years to open up my own ad agency i was 32 when i started which was unheard of most people who started their own ad agency were at least a decade if not older than i was and so it there that was a lot of audacity for me to do that and i certainly got some naysayers but i also got an awful lot of people who were very open um to what my perspective was and to what i was trying to do and there were a lot of people who would reach out and who would be there for you and it is it's a very warm and welcoming community i've been very impressed you would not get that from chicago you would not get that from another large city i know that and it's not going to be so small that everybody knows everybody and if you are not second or third generation in that community then you don't belong that's not what this community is about this community is very welcoming and is just excited to have you here when i joined the chamber so the illinois chamber i was again you know i'm in my early 30s that's pretty young you guys and i'm there with other business owners and other ceos and they were very excited to see me and to get to know what was going on and to include me in conversations and and to help me get into you know different arenas where they knew i would have interest um i you know i really actually am i have a minor in international relations and i really have an understanding in politics and i kind of like that area and so they gave me an opportunity to be a part of that where i don't think every community would have gotten that i don't think every community would have really looked and said hey this person seems to be interested in this area let's make sure that they're involved and let's help them grow in this area that's not something that i would see happening in other communities and it wasn't just the chamber i mean i got that from the ptac office i got that from the sbdc i got that from the sba you show initiative there are people here that are going to support you and help it come to fruition um so we're an ad agency and and like a tax accountant or an attorney usually when you find somebody that you like working with you stick with them right and from the other side when i was working in sales i thought with ad agencies they probably work with those people forever you know for years and years and years that's not necessarily the case you know i realized i lost customers and i'm like oh my god now what am i going to do you're going to get another customer [Laughter] and you're and it does so i i think the other part of that as far as patience goes is that when you're hit with a roadblock um it's good to get more peripheral vision as to what your other options are so you can maneuver around it versus you know stop trying to hit that block um stop trying to hit what's right in front of you but that's i mean as far as my business goes that's what it's been it's just maneuvering through and okay now there's this new opportunity so let's see what this takes us my first three clients were doug's heating and air conditioning country style and then it was quasi-arts and doug's heating and air conditioning and country style are still with me today and quad city arts was more about the person i was working with so when she left as the marketing director then she wanted me to work with her at the midwest writing center and then when she decided to become a novelist she wanted me to help her get her marketing off the ground so um with all three of them i i'm very close to them and i i'm very big part of their lives and they're a very big part of my life and yeah i appreciate all three of them very much so i helps me know i did the right thing if i'm doing something i don't want to do but i have to do it um get it done right away so that it's out of the way so that you can work on something you really like to work on that i am not a procrastinator do the ugly stuff first get it over with so you can work on the stuff that you like to do but if you're getting more and more projects that you don't want to do this and you don't want to do this you should probably look at a different path so you know it's all in how you look at it i mean i've had people come through here and they've been like oh my god invoicing but for other people they're like invoicing is like a puzzle because you get to put all these pieces together and see if they all connect that's cool so it just depends upon where you're at and where your talent is and where you feel your strength is at okay so the so the book that i'm reading right now is a dialogue with archbishop um with the archbishop desmond tutu and with the dalai lama and the whole book is focused on joy and how you can find happiness and it is an incredible book to read through and really does help you really put things in perspective so that has been a huge book for me um another book i love is the tao of poo um and the thai of piglet hopefully i'm pronouncing that right but um both of those books are incredible too so my favorite books by far are non-fiction books like i told you earlier i am really impressed with how people choose to spend the short amount of time that they have on this planet it's incredible and everybody's life is important everybody has a story to tell and it's incredible to see what we can do with it the books that i told you about the thai piglet the tao of poo i usually give those as graduation presents but what they do is they help you understand the people around you and understand that everybody has their own personality their own experience their own life journey and accept that embrace it and understand it so you can help them on their journey and they're going to help you on your journey so much of the native american culture all of the native american culture is gone but those people were still here so i mean i know like the longitude and latitude of where blackhawks hut was and where his family lived how phenomenal would it be to be able to be at those exact coordinates and know that that's where this man lived 200 years ago 300 years ago you know the island had some incredible symbolism for them so to be able to see those parts of the island and the drawings that they made to be able to understand that island better and you're in the place where it happened that's incredible so that's where qc passport is more like it's also more about culture too and understanding and being coming proud of who we are um so for me it is the buildings but it's also um really celebrating the native americans who came through here um the black americans who came through here the hispanics who you know immigrated here the irish the belgian the swedish the germans all of them and making sure that we really play pay tribute to who they are what they went through and if it weren't for them we wouldn't be here so the civil war was started over dred scott well he lived here um so his slave owner was from this area and they brought dred scott here and when dred scott was freed he lived here in a cabin that was by where the i-74 bridges um so that happened here you know there's a lot of crazy things here um louis armstrong played here you know this is one of the areas where he got his start because steamboats were huge around this area and so a lot of the big jazz players of the day el jolson was a regular around here too so there's a lot of crazy stuff you know the war of 1812 actually had a really big fight here on credit island and yeah there's a lot of just just cool stuff but the field of marketing and advertising has evolved over the lifetime of my career when i was starting my career i was splicing tape together by hand so i think to be successful in this field you have to be open to change that's the biggest thing you have to be open to what is possible and not concentrate on what you know concentrate on what you can know concentrate on what else is out there because you know the more you learn the more vital you're going to become to any industry that you're a part of but that's especially true with advertising and marketing and it's not just digital i mean there are the other traditional forms of media work as well they work differently but it depends upon that particular business that you're focused on and what they're trying to do and who their audience is so you have to be open to what would work out best for them and it's not the same for everybody we have gotten to a point where it really does need to be individualized for every business because every business is going to have a different audience a different a different geography a different set of customers and how those customers are going to react is going to be very individualized and very different so um so yeah be open to change that's going to help you be more successful than anything else also don't lie to anybody okay you know always you know tell the truth be transparent show people how you got to where you are don't hide anything people can see right through that right away be true to who you are be proud of who you are be proud of what you've accomplished
                </p>
            </div>
        </div>
        
        
    </div>
    <div class="photos-row">
        <div class="photo-box">
            <img src="../images/natalie-employee-grace.jpg" alt="Photo of Natalie's employee Grace Bradley-Leon" />
            <p>Natalie's employee, Grace Bradley-Leon, is on the phone with a client.</p>
        </div>
        <div class="photo-box">
            <img src="../images/natalie-employee-leon.jpg" alt="Photo of Natalie's employee Grace Bradley-Leon" />
            
        </div>
        <div class="photo-box">
            <img src="../images/natalie.jpg" alt="Photo of Natalie's employee Grace Bradley-Leon" />
            
        </div>
    </div>
    <p>
    Natalie is a one-of-a-kind person. She truly cares about her community and is actively making it a better place to live. She does this in a few different ways. 
    <br><br>
    First of all, her advertising agency helps small businesses get their name out in the public eye. This allows businesses to grow and be more successful in a competitive market where large corporations are taking over. She also created her own media buying software to meet the needs of its user base. It doesn’t end there; Natalie started a third leg of her operation called QC Passport which offers “self-guided, interactive, physical and digital tours throughout the Quad Cities”. These tours “highlight the architecture, businesses, institutions and fascinating sites through the stories of the people who were there at the time”.

    </p>
</section>
            
<?php include('../includes/footer.php'); ?>