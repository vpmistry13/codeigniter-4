
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<body>
<div id="wrapper">
        <!----->
        
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		    <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Layout</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-system">
 		<!---->
 		<div class="horz-grid">
 		<div class="grid-hor">
 		<h3 id="grid-example-basic">Example: Stacked-to-horizontal</h3>
 		<p class="">Using a single set of <code>.col-md-*</code> grid classes, 
 			you can create a basic grid system that starts out stacked on mobile devices and tablet devices 
 			(the extra small to small range) 
 			before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
			</div>
			<!----> 
			
			 <div class="row show-grid">
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			  <div class="col-md-1">.col-md-1</div>
			</div>
			<div class="row show-grid">
			  <div class="col-md-8">.col-md-8</div>
			  <div class="col-md-4">.col-md-4</div>
			</div>
			<div class="row show-grid">
			  <div class="col-md-4">.col-md-4</div>
			  <div class="col-md-4">.col-md-4</div>
			  <div class="col-md-4">.col-md-4</div>
			</div>
			<div class="row show-grid">
			  <div class="col-md-6">.col-md-6</div>
			  <div class="col-md-6">.col-md-6</div>
			</div>
		</div>
			<!---->
				<div class="horz-grid">
			<div class="grid-hor">
			<h3 id="grid-example-mixed">Example: Mobile and desktop</h3>
			<p>Don't want your columns to simply stack in smaller devices? Use the extra small 
				and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for
				 a better idea of how it all works.</p>
				</div>
			<!---->
			<!-- Stack the columns on mobile by making one full-width and the other half-width -->
			<div class="row show-grid">
			  <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
			  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			</div>
			
			<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
			<div class="row show-grid">
			  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			</div>
			
			<!-- Columns are always 50% wide, on mobile and desktop -->
			<div class="row show-grid">
			  <div class="col-xs-6">.col-xs-6</div>
			  <div class="col-xs-6">.col-xs-6</div>
			</div>
		</div>
			<!---->
				<div class="horz-grid">
			<div class="grid-hor">
			<h3 id="grid-example-mixed-complete">Example: Mobile, tablet, desktop</h3>
			<p>Build on the previous example by creating even more dynamic and powerful layouts with tablet
				 <code>.col-sm-*</code> classes.</p>
				</div>
			<!---->
			<div class="row show-grid">
			  <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
			  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			</div>
			<div class="row show-grid">
			  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
			  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
			  <!-- Optional: clear the XS cols if their content doesn't match in height -->
			  <div class="clearfix visible-xs-block"></div>
			  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
			</div>
		</div>
			<!---->
				<div class="horz-grid">
			<div class="grid-hor">
			<h3 id="grid-example-wrapping">Example: Column wrapping</h3>
			<p>If more than 12 columns are placed within a single row, each group of extra columns will, 
				as one unit, wrap onto a new line.</p>
			</div>
				
			<!---->
			<div class="row show-grid">
			  <div class="col-xs-9">.col-xs-9</div>
			  <div class="col-xs-4">.col-xs-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
			  <div class="col-xs-6">.col-xs-6<br>Subsequent columns continue along the new line.</div>
			</div>
		</div>
			<!---->
				<div class="horz-grid">
			<div class="grid-hor">
			<h3 id="grid-responsive-resets">Responsive column resets</h3>
			<p>With the four tiers of grids available you're bound to run into issues where,
				 at certain breakpoints, your columns don't clear quite right as one is taller than the other.
				  To fix that, use a combination of a <code>.clearfix</code> and our 
				<a href="#responsive-utilities">responsive utility classes</a>.</p>
			</div>
			<!---->
			<div class="row show-grid">
			  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
			  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
			
			  <!-- Add the extra clearfix for only the required viewport -->
			  <div class="clearfix visible-xs-block"></div>
			
			  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
			  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
			</div>
		</div>
			<!---->
				<div class="horz-grid">
			<div class="grid-hor">
			<h3 id="grid-offsetting">Offsetting columns</h3>
			<p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
			</div>
			<!---->
			<div class="row show-grid">
			  <div class="col-md-4">.col-md-4</div>
			  <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
			</div>
			<div class="row show-grid">
			  <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
			  <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
			</div>
			<div class="row show-grid">
			  <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
			</div>
		</div>
			<!---->
				<div class="horz-grid">
			<div class="grid-hor">
			<h3 id="grid-nesting">Nesting columns</h3>
			<p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> 
				columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer 
				(it is not required that you use all 12 available columns).</p>
			</div>
			<!---->
			<div class="row show-grid">
  <div class="col-sm-9">
    Level 1: .col-sm-9
    <div class="row">
      <div class="col-xs-8 col-sm-6">
        Level 2: .col-xs-8 .col-sm-6
      </div>
      <div class="col-xs-4 col-sm-6">
        Level 2: .col-xs-4 .col-sm-6
      </div>
    </div>
  </div>
</div>
</div>
<!---->
	<div class="horz-grid">
<div class="grid-hor">
<h3 id="grid-column-ordering">Column ordering</h3>
<p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and 
	<code>.col-md-pull-*</code> modifier classes.</p>
 </div>
 	<!---->
 	<div class="row show-grid">
  <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
  <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
</div>
</div>
</div>
 	<!--//grid-->
		<!---->

		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

