<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>Eindopdracht bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="images/sigma.png"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.css"><!--plugins-->
		<link rel="stylesheet" href="bootstrap.css"><!--mijn css file-->
	</head>
	<!--
	*Ik heb ook GitHub gebruikt bij deze opdracht.
	*
	*https://github.com/Eefkje-Femke/bootstrap
	*
	-->
  <body>
		<div class="container-fluid col-xs-12">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Bootstrap</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
        <ul class="nav navbar-nav">
					<li class="active"><a href="#sec1">jumbotron</a></li>
					<li><a href="#sec2">Carousel</a></li>
					<li><a href="#sec3">Filterlist</a></li>
					<li><a href="#sec4">News</a></li>
					<li><a href="#sec5">Comments</a></li>
					<li><a href="#sec6">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
		<div class="sections"><!--sections-->
			<section id="sec1">
				<!-- <div class="container"> -->
					<div id="jumbotron">
						<div class="jumbotron">
							<h1>Hello, world!</h1>
							<p>This is my bootstrap website. If you have any questions, just contact me. Enjoy!</p>
							<p><a class="btn btn-primary btn-lg" href="#sec6" role="button">Contact</a></p><!--verwijzen naar form -->
						</div>
					</div>
				<!-- </div> -->
			</section>
			<section id="sec2">
				<div id="slider"><!--carousel-->
					<div id="carousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel" data-slide-to="1"></li>
					    <li data-target="#carousel" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="images/tiger.jpg" alt="tigers" class="slider-animal">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    <div class="item">
					      <img src="images/monkey.jpg" alt="monkeys" class="slider-animal">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
							<div class="item">
					      <img src="images/elephant.jpg" alt="elephant" class="slider-animal">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					  </div>
					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</section><!--sections 1-->
				<section id="sec3">
					<div class="container">
						<div id="filterlist">
							<h3>Filterlist</h3>
							<p>Looking for new animal races? Or just curious if you know all of these? filter and find out!</p>
							<div class="row">
									<div class="col-lg-4 col-lg-offset-4">
											<input type="search" id="search" value="" class="form-control" placeholder="Search">
									</div>
							</div>
							<div class="row"><!--table van de filterlist-->
								<div class="col-lg-12">
									<table class="table" id="table">
											<thead>
													<tr>
															<th>Name</th>
															<th>Lifespan (in nature)</th>
															<th>Common?</th>
													</tr>
											</thead>
											<tbody>
													<tr>
															<td>Tapirus</td>
															<td>25 - 30 years</td>
															<td>No</td>
													</tr>
													<tr>
															<td>Mongoose</td>
															<td>Not known</td>
															<td>yes</td>
													</tr>
													<tr>
															<td>Okapi</td>
															<td>Not known</td>
															<td>no</td>
													</tr>
													<tr>
															<td>Marmoset</td>
															<td>12 years</td>
															<td>No</td>
													</tr>
													<tr>
															<td>Seal</td>
															<td>20 - 35 years</td>
															<td>yes</td>
													</tr>
													<tr>
															<td>Budgerigar</td>
															<td>5 - 7 years</td>
															<td>yes</td>
													</tr>
											</tbody>
									</table>
								</div>
							</div><!--.row-->
						</div><!--#filterlist-->
					</div><!--container-->
				</section>
					<section id="sec4">
						<div class="container">
							<div id="news">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								  <div class="panel">
								    <div class="panel-heading" role="tab" id="headingOne">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								          Breaking news
													<span class="badge">2</span>
								        </a>
								      </h4>
								    </div>
								    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								      <div class="panel-body">
												<div class="well">
									        Woman was sentenced 15 days in jail and fines for freeing a crying cub from a bear trap.
												</div>
												<div class="well">
									        2 More Rangers Arrested For Alleged Rhino Poaching In Kruger National Park; Marks 18 Arrests This Month Alone.
												</div>
								      </div>
								    </div>
								  </div>
									<!--second news-->
								  <div class="panel">
								    <div class="panel-heading" role="tab" id="headingTwo">
								      <h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
								          New species discovered
													<span class="badge">3</span>
								        </a>
								      </h4>
								    </div>
								    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								      <div class="panel-body">
												<div class="well">
			 									  New ant specie found in Taiwan. It was described from the <strong>Stigmatomma genus of Dracula ants</strong> infamous for drinking the blood of their larvae.
			 								 </div>
											 <div class="well">
												  Scientists elevated a subspecies of elephant-shrew known as <strong>Rhynchocyon stuhlmanni</strong> back to its original full species status.
												  These small mammals are more closely related to elephants, sea cows, and aardvarks than to true shrews.
											 </div>
											 	<div class="well">
												  There's a new species on the list of terrifying creatures of the Amazon: <strong>Calistoga crassicaudata</strong>.
													It's a tiny parasitoid wasp with a giant stinger that the female uses not only to paralyze her host but also to deposit eggs inside the unsuspecting creature
													(who will soon suffer a grueling death as the baby wasps burst out of its body).
												</div>
								      </div>
								    </div>
								  </div>
									<!--third news-->
								  <div class="panel">
								    <div class="panel-heading" role="tab" id="headingThree">
								      <h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
														Environmental pollution
													<span class="badge">1</span>
								        </a>
								      </h4>
								    </div>
								    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								      <div class="panel-body">
												<div class="well">
			 									 Forget about plastic straws: The deadliest ocean garbage for seabirds is balloons.
												 Seabirds frequently snap up floating litter because it looks like food; once swallowed, it can obstruct birds' guts and cause them to starve to death.
			 								 </div>
								    </div>
								  </div>
								</div>
							</div>
						</div><!--#news-->
					</div><!--container-->
				</section>
				<section id="sec5">
					<div class="container">
						<div id="opmerking">
							<h1>Comment section</h1>
							<p>Here are some comments about the animal world and how we treat them.
							<!-- Left-aligned media object -->
							 <div class="media">
								 <div class="media-left">
									 <img src="https://www.w3schools.com/howto/img_avatar.png" class="media-object" style="width:60px">
								 </div>
								 <div class="media-body">
									 <h4 class="media-heading">Ramira Bellomo</h4>
									 <h6>Animal researcher</h6>
									 <p>We can clearly see how fast the animals disappear. This has to stop! We should do something about it, before it's too late.</p>
								 </div>
							 </div>
							 <hr>
							 <!-- Right-aligned media object -->
							  <div class="media">
									<div class="media-left">
							      <img src="images/avatar.jpg" class="media-object" style="width:60px">
							    </div>
							    <div class="media-body">
							      <h4 class="media-heading">Katarina Eddison</h4>
										<h6>Girl, 11 years old</h6>
							      <p>My favorite animal is the giraffe. I like those animals because they have a very long neck. But they're now slowly disappearing and I don't like that!</p>
							    </div>
							  </div>
							<hr>
							<!-- Left-aligned media object -->
						 	<div class="media">
							 	<div class="media-left">
								 	<img src="https://www.w3schools.com/howto/img_avatar.png" class="media-object" style="width:60px">
							 	</div>
							 	<div class="media-body">
								 	<h4 class="media-heading">Miriam Bristow</h4>
								 	<h6>Climate researcher</h6>
								 	<p>The world around us is changing. Our Environment is changing. If we don't take immediately action, it'll end up bad. And we end up being the only race living on earth.</p>
							 	</div>
						 	</div>
						</div><!-- #opmerking-->
					</div>
				</section>
				<section id="sec6">
					<div class="container">
						<div id="form">
							<h1>Receive every week animal news</h1>
							<p>Do you want to know more about the animal world? Are you curious about new animal species? Do you have questions? Or do you want to broaden your horizon?
								<br>Leave here your e-mailadress and we will send you weekly animal news!</p>
							<form>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="InputFirstName">First name</label>
									<div class="tooltip"><!--tooltip test-->
										<input type="text" class="form-control" id="InputFirstName" placeholder="Sarah">
										<span class="tooltiptext">Use only letters</span>
									</div>
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="InputLastName">Last name</label>
									<div class="tooltip"><!--tooltip test-->
										<input type="text" class="form-control" id="InputLastName" placeholder="Eddison">
											<span class="tooltiptext">Use only letters</span>
									</div>
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="InputAdress">Address</label>
									<div class="tooltip"><!--tooltip test-->
										<input type="text" class="form-control" id="InputAddress" placeholder="Snatchwood Court 95">
											<span class="tooltiptext">Use only letters and numbers</span>
									</div>
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="InputPostal">Postal code</label>
									<div class="tooltip">
										<input type="text" class="form-control" id="InputPostal" placeholder="4537 UP">
											<span class="tooltiptext">Use only capital letters and numbers</span>
									</div>
								</div>
								<div class="form-group col-sm-12 col-xs-12">
									<label for="InputEmail">Email address</label>
									<div class="tooltip"><!--tooltip test-->
										<input type="text" class="form-control" id="InputEmail" placeholder="SarahEddison@hotmail.com">
											<span class="tooltiptext">You may use letters, numbers and other characters</span>
									</div>
								</div>
								<button type="button" class="btn btn-default" id="submitForm"	data-toggle="modal" data-target="#modal">Submit</button>
							</form>
							<!-- ************Modal***********-->
							<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Are you sure the information is right?</h4>
							      </div>
							      <div class="modal-body">
							        Are you sure?
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">Save changes</button>
							      </div>
							    </div>
							  </div>
							</div><!--#modal-->
						</div><!--#form-->
					</div><!--container-->
				<div class="alert alert-danger" role="alert">You used the wrong characters, please follow the examples that are already in the input!</div>
				</section>
			</div>
			<div id="footer">
				<div id="tekst">
					&copy; Eefkje-Femke
				</div>
			</div>
    <!--js-->
		<script src="/plugins/jquery.min.js"></script>
		<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
  </body>
</html>
