<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>Eindopdracht bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
		<!-- <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.css"><!--plugins-->
		<link rel="stylesheet" href="bootstrap.css"><!--mijn css file-->
	</head>
  <body>
		<div class="navbar"><!--navbar-->
		  <a href="#home">Home</a>
		  <a href="#news">News</a>
		  <a href="#contact">Contact</a>
		</div>
		<div class="container">
			<div id="jumbotron">
				<div class="jumbotron">
					<h1>Hello, world!</h1>
					<p>This is my bootstrap website. If you have any questions, just contact me. Enjoy!</p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Contact</a></p><!--verwijzen naar form -->
				</div>
			</div>
				<div id="slider">
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
					</div>

				</div>
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
				<div id="opmerking">
				</div>
				<div id="form">
				</div>
		</div>
    <!--js-->
		<script src="/plugins/jquery.min.js"></script>
		<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
  </body>
</html>
