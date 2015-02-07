<?php
/**
 * The homepage template file.
 * Template Name: Main Page
 */
get_header();
?>

<div class="main">
	<div class="jumbotron main-jumbo">
		<div class="title">
   		<h1 class="header-title" align="middle">hello</h1>
   		<h2 class="header-subtitle" align="middle">subheader</h2>
   </div>
  </div>
    <div class="container">
      <div id="three-callouts">
              <div class="row">
              	<div class="col-xs-12 col-md-4">
                  <div class="tile">
                	 <h3>Learn about us!</h3>
                	 <p>We do all kinds of great things around the community. Check out our about page to see what we've been up to recently.</p>
                	 <button class="btn-small btn btn-success">About Page</button>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4">
                  <div class="tile">
                   <h3>We've got great stuff on the menu.</h3>
                   <p>New appetizers and desserts on our fall menu. We change things up seasonally.</p>
                   <button class="btn-small btn btn-success">Menu Page</button>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4">
                  <div class="tile">
                   <h3>Contact us</h3>
                   <p>Feel free to give us a call or email us about our products.</p>
                   <button class="btn-small btn btn-success">Contact Page</button>
                  </div>
                </div>
        </div><!--row-->
      </div>
    </div><!--container-->




  <ul id="nav">
    <li><a href="#intro" title="Next Section"><img src="wp-content/themes/sample/assets/css/images/dot.png" alt="Link" /></a></li>
      <li><a href="#second" title="Next Section"><img src="wp-content/themes/sample/assets/css/images/dot.png" alt="Link" /></a></li>
      <li><a href="#third" title="Next Section"><img src="wp-content/themes/sample/assets/css/images/dot.png" alt="Link" /></a></li>
      <li><a href="#fifth" title="Next Section"><img src="wp-content/themes/sample/assets/css/images/dot.png" alt="Link" /></a></li>
  </ul>
  
  <div id="intro">
    <div class="story">
        <div class="float-left">
      <h2>(Almost) Static Background</h2>
          <p>This section has a background that moves slightly slower than the user scrolls. This is achieved by changing the top position of the background for every pixel the page is scrolled.</p>
          </div>
      </div> <!--.story-->
  </div> <!--#intro-->
  
  <div id="second">
    <div class="story"><div class="bg"></div>
        <div class="float-right">
              <h2>Multiple Backgrounds</h2>
              <p>The multiple backgrounds applied to this section are moved in a similar way to the first section -- every time the user scrolls down the page by a pixel, the positions of the backgrounds are changed.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh erat, sagittis sit amet congue at, aliquam eu libero. Integer molestie, turpis vel ultrices facilisis, nisi mauris sollicitudin mauris, volutpat elementum enim urna eget odio. Donec egestas aliquet facilisis. Nunc eu nunc eget neque ornare fringilla. Nam vel sodales lectus. Nulla in pellentesque eros. Donec ultricies, enim vitae varius cursus, risus mauris iaculis neque, euismod sollicitudin metus erat vitae sapien. Sed pulvinar.</p>
          </div>
      </div> <!--.story-->
      
  </div> <!--#second-->
  
  <div id="third">
    <div class="story">
        <div class="float-left">
            <h2>What Happens When JavaScript is Disabled?</h2>
              <p>The user gets a slap! Actually, all that jQuery does is moves the backgrounds relative to the position of the scrollbar. Without it, the backgrounds simply stay put and the user would never know they are missing out on the awesome! CSS2 does a good enough job to still make the effect look cool.</p>
          </div>
      </div> <!--.story-->
  </div> <!--#third-->

</div><!--main-->

<?php get_footer(); ?>
