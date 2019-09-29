<?php
/*
Template Name: Global Styles
*/

get_header(); ?>

<div class="grid-container">
	<div class="inner-content grid-x grid-margin-x">
		<main class="main small-12 medium-12 large-12 cell pt50" role="main">


			<blockquote>Headings</blockquote>

			<h1>This is a heading 1 style</h1>
			<h2>This is a heading 2 style</h2>
			<h3>This is a heading 3 style</h3>
			<h4>This is a heading 4 style</h4>
			<h5>This is a heading 5 style</h5>
			<h6>This is a heading 6 style</h6>

			<hr>

			<blockquote>Paragraph</blockquote>
			<p>This is a normal paragraph. The quick brown fox jumps over the lazy dog. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<p>This will give you an idea of the standard paragraph line spaing. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			<ul>
				<li>This is an unordered list</li>
				<li>This is an unordered list</li>
				<li>This is an unordered list</li>
				<li>This is an unordered list</li>
			</ul>
			<ol>
				<li>This is an ordered list</li>
				<li>This is an ordered list</li>
					<ol>
						<li>This is an ordered list</li>
						<li>This is an ordered list</li>
					</ol>
				</ol>

				<hr>

				<blockquote>Colours and Buttons</blockquote>

				<a class="button">Button</a>
				<a class="button primary">Button Primary</a>
				<a class="button secondary">Button Secondary</a>
				<a class="button success">Button Success</a>
				<a class="button warning">Button Warning</a>
				<br>
				<a class="button light-grey">Button Light-Grey</a>
				<a class="button medium-grey">Button Medium-Grey</a>
				<a class="button dark-grey">Button Dark-Grey</a>
				<br>
				<a class="button tiny">Button Tiny</a>
				<a class="button small">Button Small</a>
				<a class="button large">Button Large</a>

				<hr>

				<div class="callout">
				  <h5>This is a callout.</h5>
				  <p>It has an easy to override visual style, and is appropriately subdued.</p>
				  <a href="#">It's dangerous to go alone, take this.</a>
				</div>

				<hr>

				<table>
				  <thead>
				    <tr>
				      <th width="200">Table Header</th>
				      <th>Table Header</th>
				      <th width="150">Table Header</th>
				      <th width="150">Table Header</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Content Goes Here</td>
				      <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
				      <td>Content Goes Here</td>
				      <td>Content Goes Here</td>
				    </tr>
				    <tr>
				      <td>Content Goes Here</td>
				      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
				      <td>Content Goes Here</td>
				      <td>Content Goes Here</td>
				    </tr>
				    <tr>
				      <td>Content Goes Here</td>
				      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
				      <td>Content Goes Here</td>
				      <td>Content Goes Here</td>
				    </tr>
				  </tbody>
				</table>

				<hr>

				<ul class="tabs" data-tabs id="example-tabs">
				  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Tab 1</a></li>
				  <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Tab 2</a></li>
				</ul>
				<div class="tabs-content" data-tabs-content="example-tabs">
				  <div class="tabs-panel is-active" id="panel1">
				    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
				  </div>
				  <div class="tabs-panel" id="panel2">
				    <p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
				  </div>
				</div>

				<hr>
				<ul class="accordion" data-responsive-accordion-tabs="accordion medium-tabs large-accordion">
				  <li class="accordion-item is-active" data-accordion-item>
				    <a href="#" class="accordion-title">Accordion 1</a>
				    <div class="accordion-content" data-tab-content>
				      I would start in the open state, due to using the `is-active` state class.
				    </div>
				  </li>
					<li class="accordion-item" data-accordion-item>
					 <a href="#" class="accordion-title">Accordion 1</a>
					 <div class="accordion-content" data-tab-content>
						 I would start in the open state, due to using the `is-active` state class.
					 </div>
				 </li>
				 <li class="accordion-item" data-accordion-item>
					 <a href="#" class="accordion-title">Accordion 1</a>
					 <div class="accordion-content" data-tab-content>
						 I would start in the open state, due to using the `is-active` state class.
					 </div>
				 </li>

				</ul>

				<hr>
				<p><button class="button" data-open="exampleModal1">Click me for a modal</button></p>
				<div class="reveal" id="exampleModal1" data-reveal>
				  <h1>Awesome. I Have It.</h1>
				  <p class="lead">Your couch. It is mine.</p>
				  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
				  <button class="close-button" data-close aria-label="Close modal" type="button">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>

		</main> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div>

<?php get_footer(); ?>
