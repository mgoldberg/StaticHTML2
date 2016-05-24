<!DOCTYPE HTML>

	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>All About Birds</title>
	</head>


	<body background="http://localhost/StaticHTML2/images/9560714-Green-leaves-background--Stock-Photo-leaf.jpg">
		<header>
			All About Birds
		</header>



		<div id = "left1">
			<a id = "title1">Bird Basics</a>
			<p>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThere is an extrodinarily high chance that you have seen an animal under the category of bird before.  I just saw one fly right past my window.  That's right I said <text id = "stressed"> fly</text>!  One of the coolest things about birds is that most of them can sustain self powered flight.  Another destinctive trait that all birds have are feathers.  We'll go into more detail later, but for now just know that feathers are similar to long hairs that branch off into other hairs.  All birds also have beaks.  They com in many shapes and sizes, but they are generally pointy yellow triangles at the front of a birds head.  This is the location of the bird's mouth and nose.  Do you remeber seeing a bird yet?  Well hold onto your ostreches because there is a lot more to our feathery friends that meet the eye.
			</p>
			<p>
			    &nbsp&nbsp&nbsp&nbsp&nbsp&nbspIf you are still confused on the concept of a bird, fret not!  Here is a list of birds.  You can search for information about any of them if you like.  As you can see, while birds come in many shapes ans sizes, there are many similarities.
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
		<img id = "right1" src="http://localhost/StaticHTML2/images/House_sparrow04.jpg" height = "150px" width = "150px"/>

		<img id = "left2" src="http://localhost/StaticHTML2/images/Feathers-1-1024x418.jpg" height = "150px" width = "190px"/>
		<div id = "right2">
			<a id = "title1">Simple Biology</a>
			<p>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBirds have the following taxonomy: Kingdom: Animalia / Phylum: Chordata / Class: Aves.  They are characterized by beaks, feathers, laying eggs (with hard shells), and bones that are hollow (which decreases weight).  As mentioned earlier, many can fly.  However, many birds, such as the ostrich and penquin, are flightless.  A bird's feathers will vary depening on the species and placement on the body.  For instance, the feather's on a sparrow's chest will be short with many branches.  However, the tail fethers of a sparrow will be long and sturdy so the sparrow can better direct its flight.  The color of a bird's feathers can also vary.  Some bird species will have feathers optimized for camoflogue, while others will have bright colored feathers to attact a mate.  Because the male usually begin's the courtship ritual, the female will usually have fethers better for comflauge than bright colors.  A Bird's egg is designed to be laid on the ground and be able to develop outside the mother.  The egg's shell has an ovlong shape.  This allows the egg to remian intact when it comes into contact with diributed pressure.  This comes in handy as the mother (or father) need to sit on the egg to keep it warm.  Inside the egg there is plenty of food to keep the chick growing inside the egg.
			</p>
		</div>
		
		<div id = "shortened1">
			<a id = "title1">Ecology</a>
			<p>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBirds can be found on any continent on Earth.  This may be because birds can travel over vast distances very quickly through the power of flight.  No bird shows this better than the arctic tern.  Its migration brings it from the arctic circle all the way to Antactica (see picture to the right).  Another reason birds can be found in diverse locations is because they can take a variety of niches.  Birds can be everything from hunters to berry eaters.  The frigate bird gets much of its food from bothering other animals!  Many birds can even survive in the desert!  Their digestive syustem allows them to get the water they need from the food that they eat.  Many bird species will form flocks.  Different bird species will do this for different reasons.  For instance, the canadian goose stays in a flock for aerodynamics.  They will fly in a v shape, and the geese flying in the back will have less air resistance.  The geese will then, after a certain period of tiime, will take turns.  However, not all birds like flocks.  In fact, many birds are very territorial.  For instance, the cardinal will often be see in a high open place singing its song.  He isn't doing this because he is bored: he's letting every other male cardinal in the area that the area he is in is his and no one else's.
			</p>
		</div>
		<img id = "largerRight" src="http://localhost/StaticHTML2/images/Picture4.png" height = "200px" width = "200px"/>

		
		<div id = "center">
			<a id = "title1">Evolution</a>
			<p>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbspModern scientists believe that birds are direct ansestors of dinosausrs.  This is founded on a lot of evidence.  Many bones in dinosaurs closely reseble the bone structure of modern day birds.  We have also found fossilized dinosaur feathers.  It is not entirely clear why feathers first evolved. It is hypothesized that it was to keep warm and attact mates.  Arceologists have even found a link between the dinosaurs and birds called archaeopteryx (see left)!  Many scientists even belive that T-Rex was a closer relative to birds than it was to triceretops!  Birds <text id = "stressed">are</text> flying dinosaurs!  Since birds can live in so many diverse niches, there are many different bird species.  In fact, there are almost 10,000 know species of birds! 
			</p>
		</div>
		<img id = "left3" src="http://localhost/StaticHTML2/images/imgres.jpg" height = "200px" width = "200px"/>
		<img id = "right3" src="http://localhost/StaticHTML2/images/dinosaur-bird-family-tree.jpg" height = "200px" width = "200px"/>

		<img id = "left2" src="http://localhost/StaticHTML2/images/220px-Falconry_Book_of_Frederick_II_1240s_detail_falconers.jpg" height = "150px" width = "190px"/>
		<div id = right2>
			<a id = "title1">Birds in Human Culture</a>
			<p>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOne of the largest impact birds have had on humans is as a food sourse.  Humans really like chicken. I mean <text id = "stressed">really</text> lke chicken.  There are currently <text id = "stressed">50 billion</text> chickens in the world today.  That's seven times the number of humans in the world.  However, live birds have also made there way into human culture.  For example, in the middle ages, being able to go hunting with their falcon was a large status symbol.  A famous mythical bird is the pheonix.  It is a fire bird that, when it dies, it burns up and is born from the ashes.  A modern bird symbol is the bald eagle.  It is America's national bird.  It's image even shows up in the oval office floor.  Birds have also been a symbol of freedom, as the ability to fly seems like it would allow for us to be carefree.  For some reason, birds also show up in a number of cartoons.  There is daffy duck, roadrunner, donald duck, woody woodepecker, foghorn leghorn, tweetybird, and more.
			</p>
		</div>

		<div id = "left1">
			<a id = "title1">Fun Facts</a>
			<p>
				<ol>
					<li>The fastest living thing is a bird.  The peregrine falcon (showed to the right) has been clocked at going 240mph!</li>
					<li>While owls have good night vision and can see far away, they have trouble looking at things up close.  That is because their eyes are like binoculars and don't have a wide range of vision.</li>
					<li>The largest bird ever were the elephant birds.  They weighed 500lb and were almost 10ft tall.  The largest bird alive today is the ostrich, which is 6 feet tall.</li>
					<li>Some hummingbird eggs are the size of a pea!  On the other side of a spectrum, an ostrich egg is the size of a cantelope.  Bonus fun fact: it takes 90 minutes to hard boil an ostrich egg.</li>
					<li>Owls can turn their necks almost 360 degrees.</li>
					<li>Some birds are actually fairly smart.  Crows have been know to use tools.</li>
				</ol>
			</p>
		
		</div>
		<img id = "right1" src="http://localhost/StaticHTML2/images/Peregrine_Falcon_w02-44-013_l.jpg" height = "150px" width = "150px"/>

		<!--<div id = "pic-list">
			<a id = "title1">Bird Pictures</a>
		</div>-->

		<footer>
			<div id = "footer">
				Go here for more information about birds
			<div id = "links">
				<a href = "http://www.audubon.org/">Audobon Home Page</a>
				|
				<a href = "https://en.wikipedia.org/wiki/Bird#">Wikipedia Page on Birds</a>
				|
				<a href = "http://launchdm.com/">LaunchDM</a>
			</div>
			</div>
		</footer>

	</body>

</HTML>