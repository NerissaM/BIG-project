
<?php include "includes/header.php"?>

<h1>Flexbox in Modern Web Development</h1>
<p>	Historically websites were developed using a similar framework as Excel Spreadsheets. The entirety of a webpage was built around a table grid layout where information was contained in cells. This was effective but gave little consideration to appearance or end user enjoyment. As use of the internet increased, floats were introduced to create a more unique website as well as to manipulate the way that content was visually displaying. A float literally took a chunk of content and floated it to one side or the other of a box allowing content to wrap around it. The idea was taken from the way magazines and news articles are often designed. While websites became more visually attractive, commonplace, and unique to the developer the float command was being pushed well beyond its limitations.</p>
	
<p>Enter flexbox to the web developers toolkit. While a floats only let us horizontally position our boxes, flexbox gives us complete control over the alignment, direction, order, and size of our boxes (Oliver, 2017). For many Flexbox is the design tool we've been waiting for however there was a problem. For a long time Flexbox wasn't well supported by some browsers which resulted in inconsistent web page displays and more work being put on the Developer to create rules for how to handle when Flexbox wasn't going to work with a browser. Polyfills were developed in order to implant HTML5 functionality in browsers that don't natively support them (Irish, 2016). These are a creative workaround to allow developers to create consistently rich user experiences while browsers slowly increase their support of Flexbox. Luckily we've reached a point where most modern browsers now support Flexbox. To check if Flexbox is supported along with lots of other tools <a href="https://caniuse.com/#feat=flexbox">caniuse.com</a> is a excellent resource.</p>
<img src="images/flexbox.png" alt="Diagram Compairing Properties of Flexbox and Float">
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h2>Citations For Flexbox Research</h2>
    
<p>James, Oliver. “Flexbox | HTML &amp; CSS Is Hard”. Interneting Is Hard. internetingishard.com/html-and-css/flexbox/. <a href="https://internetingishard.com/html-and-css/flexbox/">Flexbox | HTML &amp; CSS Is Hard</a></p>

<p>Deveria, Alexis. “CSS Flexible Box Layout Module”. Can I Use. caniuse.com/#feat=flexbox. <a href="https://caniuse.com/#feat=flexbox">CSS Flexible Box Layout Module</a></p>
    
<p>Irish, Paul. “HTML5 Cross Browser Polyfills”. GitHub, 1 May 2016, github.com/Modernizr/Modernizr/wiki/HTML5-Cross-Browser-Polyfills. <a href="https://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-Browser-Polyfills">HTML5 Cross Browser Polyfills</a></p>
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php"?>  
