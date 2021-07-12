<?php $title = "Home";
include('includes/header.php'); ?>

<style>
    .story a {
        text-decoration:none;
        color:inherit;
    }
</style>

<section class="stories">
    <div class="three-column-row">
        <article class="story">
            <a href="people/index.php">
                <h2>People</h2>
                <p><img src="images/people.jpg" alt="Photo of a young bearded man" /></p>
                <p>Click here to meet the inspiring people behind the different businesses and projects!</p>
            </a>
        </article>
        
        <article class="story">
            <a href="places/index.php">
               <h2>Places</h2>
                <p><img src="images/streets-italy.jpg" alt="Photo of the outside of Analog 2 Arcade Bar in Moline, which houses the Streets of Italy" /></p>
                <p>Click here to explore some of the amazing featured establishments around the Quad City area!</p>
            </a>
        </article>
        
        <article class="story">
            <a href="progress/index.php">
                <h2>Progress</h2>
                <p><img src="images/progress.jpg" alt="Photo of Montse Ricossa, a young reporter for KWQC Channel 6 in Davenport" /></p>
                <p>Click here to learn more about the faculty and students of Augustana who are impacted by Cool Quad Cities!</p>
            </a>
        </article>
    </div>
</section><!--end stories-->

<section class="about">
	<aside class="center">
    	<img src="images/about-photo.jpg" alt="Photo of an interview of a Quad Citizen being conducted" />
    </aside>
    <article>
    	<h2>About Us.</h2>
        <p>We are a group of photographers, videographers, journalists and designers who attend Augustana College in Rock Island, Illinois. We started this project because we noticed a disconnect between college students and their involvement in the Quad Cities community. There are many people in the QC who are doing so many interesting and exciting things such as taking on projects, opening new restaurants, expanding their business and so much more! However, we noticed that a lot of our fellow peers aren’t aware of the smaller businesses and projects that are going on around them. It’s our goal to try and change that. We aspire to bring exposure to these places and get Augustana students more involved with the QC community.</p>
    </article>
</section>

<section class="content-wide center gang">
	<p><a href="about.php#crew"><img src="images/the-crew.jpg" /></a></p>
</section>

<section class="readings">
	<h2>Required Readings.</h2>
    <div class="stories-grid">
    	<aside class="center">
        	<img src="images/igor-collage.png" alt="Image of Igor's Bistro"/>
        </aside>
        <article>
        	<h3>Igor's Bistro</h3>
            <p><q>Is Halloween your favorite holiday? Or do you just like spooky decorations? Well Igor’s Bistro in Rock Island, IL might be the perfect place for you! The month October is filled with candy, costumes, gore, ghosts, and goblins. And Halloween is a favorite among many including restaurant owners Rick and Kathy Lopez.</q></p>
            <p><a href="places/igors-bistro.php" class="button">Read More</a></p>
        </article>
    </div><!--end stories-grid-->
    
    <div class="stories-grid">
    	<aside class="center">
        	<img src="images/article1.jpg" alt="Image of Theo & Co."/>
        </aside>
        <article>
        	<h3>Theo &amp; Co.</h3>
            <p><q>Ever been to the big city and seen all these specialized stores and fancy boutiques? More specifically men’s clothing stores. Well guess what? There’s a store like that right here in the QC!</q></p>
            <p><a href="places/theo-co.php" class="button">Read More</a></p>
        </article>
    </div><!--end stories-grid-->
    <p>&nbsp;</p>
    <!--<p class="center"><a href="podcasts.php"><img src="images/podcasts.jpg" alt="Graphic with text that says Podcasts on top of a closeup of a microphone and headphones. The graphic links to the Podcast page" /></a></p>
    <p>&nbsp;</p>-->
    <p class="center"><a href="stories.php" class="snazzy">All Stories</a></p>
</section>

<section class="featured center">
	<img src="images/be-featured.jpg" alt="Graphic that says Be Featured and links to a page with a form to request a feature story about you or your business" />
    <p>Have a really cool friend that you think <em>should</em> be featured?<br />
    Email us at coolquadcities@gmail.com</p>
</section>

<?php include('includes/footer.php'); ?>