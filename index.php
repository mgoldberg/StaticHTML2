<!DOCTYPE HTML>

	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>All About Birds</title>
	</head>


	<body>
		<header>
			All About Birds
		</header>



		<div id = "left1">
			<a id = "title1">Bird Basics</a>
			<p>
				There is an extrodinarily high chance that you have seen an animal under the category of bird before.  I just saw one fly right past my window.  That's right I said <text id = "stressed"> fly</text>!  One of the coolest things about birds is that most of them can sustain self powered flight.  Another destinctive trait that all birds have are feathers.  We'll go into more detail later, but for now just know that feathers are similar to long hairs that branch off into other hairs.  All birds also have beaks.  They com in many shapes and sizes, but they are generally pointy yellow triangles at the front of a birds head.  This is the location of the bird's mouth and nose.  Do you remeber seeing a bird yet?  Well hold onto your ostreches because there is a lot more to our feathery friends that meet the eye.
			</p>
		</div>
		<img id = "right1" src="http://localhost/StaticHTML2/images/House_sparrow04.jpg" height = "150px" width = "150px"/>

		<div id = "left 1">
			<p>
				If you are still confused on the concept of a bird, fret not!  Here is a list of birds.  You can search for information about any of them if you like.  As you can see, while birds come in many shapes ans sizes, there are many similarities.
			</p>
			<p id = list>
			<?php				
				$birds = array("Canary", "Blubird", "Bald Eagle", "Osprey", "Seagull", "California Condor", "Red Throated Hummingbird", "Emu", "Ostrich", "Cardinal", "Puffin", "Loon", "Golden Eagle", "Kiwi", "Robin");
				
				$first = true;
 				
				foreach ($birds as $myBird) {
					if(!$first){
						echo ", ".$myBird;
					}
					else{
						echo $myBird;
						$first = false;
					}
				}
			?>
			</p>
		</div>

		<img id = "left2" src="http://localhost/StaticHTML2/images/Feathers-1-1024x418.jpg" height = "150px" width = "190px"/>
		<div id = "right2">
			<a id = "title1">Simple Biology</a>
			<p>
				Birds have the following taxonomy: Kingdom: Animalia / Phylum: Chordata / Class: Aves.  They are characterized by beaks, feathers, laying eggs (with hard shells), and bones that are hollow (which decreases weight).  As mentioned earlier, many can fly.  However, many birds, such as the ostrich and penquin, are flightless.  A bird's feathers will vary depening on the species and placement on the body.  For instance, the feather's on a sparrow's chest will be short with many branches.  However, the tail fethers of a sparrow will be long and sturdy so the sparrow can better direct its flight.  The color of a bird's feathers can also vary.  Some bird species will have feathers optimized for camoflogue, while others will have bright colored feathers to attact a mate.  Because the male usually begin's the courtship ritual, the female will usually have fethers better for comflauge than bright colors.  A Bird's egg is designed to be laid on the ground and be able to develop outside the mother.  The egg's shell has an ovlong shape.  This allows the egg to remian intact when it comes into contact with diributed pressure.  This comes in handy as the mother (or father) need to sit on the egg to keep it warm.  Inside the egg there is plenty of food to keep the chick growing inside the egg.
			</p>
		</div>
		
		<div id = "shortened1">
			<a id = "title1">Ecology</a>
			<p>
				Birds can be found on any continent on Earth.  This may be because birds can travel over vast distances very quickly through the power of flight.  No bird shows this better than the arctic tern.  Its migration brings it from the arctic circle all the way to Antactica (see picture to the right).  Another reason birds can be found in diverse locations is because they can take a variety of niches.  Birds can be everything from hunters to berry eaters.  The frigate bird gets much of its food from bothering other animals!  Many bird species will form flocks.  Different bird species will do this for different reasons.  For instance, the canadian goose stays in a flock for aerodynamics.  They will fly in a v shape, and the geese flying in the back will have less air resistance.  The geese will then, after a certain period of tiime, will take turns.
			</p>
			<p>
				<!--<pre>	Birds</pre>-->
			</p>
		</div>
		<img id = "right1" src="http://localhost/StaticHTML2/images/Picture4.png" height = "200px" width = "200px"/>

		<img id = "left3" src="http://localhost/StaticHTML2/images/imgres.jpg" height = "200px" width = "200px"/>
		<div id = "center">
			<a id = "title1">Evolution</a>
			<p>
				Modern scientists believe that birds are direct ansestors of dinosausrs.  This is founded on a lot of evidence.  Many bones in dinosaurs closely reseble the bone structure of modern day birds.  We have also found fossilized dinosaur feathers.  Arceologists have even found a link between the two call archaeopteryx (see left)!
			</p>
		</div>
		<img id = "right3" src="http://localhost/StaticHTML2/images/dinosaur-bird-family-tree.jpg" height = "200px" width = "200px"/>



	</body>

</HTML>