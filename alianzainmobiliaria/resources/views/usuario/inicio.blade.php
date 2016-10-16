@extends('layouts.appUsuario')


@section('content')                    
	<!-- end header -->
	<section id="featured">

	<!-- Slider -->
        <div id="main-slider" class="flexslider">

		<div class="flex-caption">

                </div>
            <ul class="slides">

              <li>
                <img src="img/slides/1.jpg" alt="" />

              </li>
              <li>
                <img src="img/slides/2.jpg" alt="" />

              </li>
              <li>
                <img src="img/slides/3.jpg" alt="" />

              </li>
            </ul>
        </div>
	<!-- end slider -->

	</section>
  <section class="search-form">
      <div class="container">
  <div class="row">
  <div class="col-md-12 col-sm-12">
  <div class="quick-search">

          <form role="form">
            <div class="col-md-3">
            <div class="form-group">
              <label for="country">Country</label>
              <select class="form-control">
              <option>USA</option>
              <option>England</option>
              <option>India</option>
              <option>South Africa</option>
              <option>Australia</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bedroom">Bedroom</label>
              <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              </select>
            </div>
            </div>
            <!-- break -->
            <div class="col-md-3">
            <div class="form-group">
              <label for="location">Location</label>
              <select class="form-control">
              <option>NewYork</option>
              <option>London</option>
              <option>Sydney</option>
              <option>Delhi</option>
              <option>CapTown</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bathroom">Bathroom</label>
              <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              </select>
            </div>
            </div>
            <!-- break -->
            <div class="col-md-3">
            <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control">
              <option>For Sale</option>
              <option>For Rent</option>
              </select>
            </div>
            <div class="form-group">
              <label for="minprice">Min Price</label>
              <select class="form-control">
              <option>$2,400</option>
              <option>$6,300</option>
              <option>$9,100</option>
              <option>$10,100</option>
              </select>
            </div>
            </div>
            <!-- break -->
            <div class="col-md-3">
            <div class="form-group">
              <label for="type">Type</label>
              <select class="form-control">
              <option>Villa</option>
              <option>Resident</option>
              <option>Commercial</option>
              </select>
            </div>
            <div class="form-group">
              <label for="maxprice">Max Price</label>
              <select class="form-control">
              <option>$2,400</option>
              <option>$6,300</option>
              <option>$9,100</option>
              <option>$10,100</option>
              </select>
            </div>
            </div>
            <div class="col-md-3"><input name="submit" value="Search" class="btn btn-success btn-lg btn-block" type="submit"></div>

          </form>

  </div></div>
  </div></div>

    </section>
	<section class="hero-text">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="aligncenter"><h1 class="aligncenter">Welcome to our Real Estate Website</h1><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi nihil autem nemo numquam, ipsa architecto non, magni consequuntur quam.</p></div>
			</div>
		</div>
	</div>
	</section>

	<section id="content">


	<div class="container">
    <div class="row">
            <div class="col-md-5">
                <div class="home-about-us">
                    <h3 class="section-title">About Us</h3>
                    <img src="img/about.jpg" class="img-responsive" alt=""></br>
                    <p>Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi..</p>
                    <ul>
                        <li> Nemo ipsum odit corrupti consequuntur.</li>
                        <li> Ancidunt eius magni provident, doloribus omnis</li>
                        <li> Provident doloribus omnis minus temporibus </li>
                        <li> Fvero mollitia velit ad consectetur</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="project">
                    <h3 class="section-title">Our Current Project</h3>
                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <div class="project">
                                <img src="img/pimg1.jpg" class="img-responsive" alt="">
                                <div class="project-details">
                                    <ul>
                                        <li><strong>Project :</strong> Bluway Building</li>
                                        <li><strong>Location :</strong> eVally, NewYork</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="project">
                                <img src="img/pimg2.jpg" class="img-responsive" alt="">
                                <div class="project-details">
                                    <ul>
                                        <li><strong>Project :</strong> Bluway Building</li>
                                        <li><strong>Location :</strong> eVally, NewYork</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="project">
                                <img src="img/pimg3.jpg" class="img-responsive" alt="">
                                <div class="project-details">
                                    <ul>
                                        <li><strong>Project :</strong> Bluway Building</li>
                                        <li><strong>Location :</strong> eVally, NewYork</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="project">
                                <img src="img/pimg4.jpg" class="img-responsive" alt="">
                                <div class="project-details">
                                    <ul>
                                        <li><strong>Project :</strong> Bluway Building</li>
                                        <li><strong>Location :</strong> eVally, NewYork</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
		    <div class="row">
							<div class="col-md-12">
								<div class="about-logo">
									<h3>About <span class="color">Us</span></h3>
									<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                                    	<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
								<a href="#" class="btnlink">Read more</a>
								</div>

							</div>
						</div>
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h3>Upcoming <span class="color">Projects</span></h3>
				<div class="row">
					<section id="projects">
            <div class="col-md-3 col-sm-3">
                                      <div class="project">
                                          <img src="img/pimg3.jpg" class="img-responsive" alt="">
                                          <div class="project-details">
                                              <ul>
                                                  <li><strong>Project :</strong> Bluway Building</li>
                                                  <li><strong>Location :</strong> eVally, NewYork</li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3 col-sm-3">
                            <div class="project">
                                <img src="img/pimg3.jpg" class="img-responsive" alt="">
                                <div class="project-details">
                                    <ul>
                                        <li><strong>Project :</strong> Bluway Building</li>
                                        <li><strong>Location :</strong> eVally, NewYork</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="project">
                                <img src="img/pimg3.jpg" class="img-responsive" alt="">
                                <div class="project-details">
                                    <ul>
                                        <li><strong>Project :</strong> Bluway Building</li>
                                        <li><strong>Location :</strong> eVally, NewYork</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="project">
                                <img src="img/pimg3.jpg" class="img-responsive" alt="">
                                <div class="project-details">
                                    <ul>
                                        <li><strong>Project :</strong> Bluway Building</li>
                                        <li><strong>Location :</strong> eVally, NewYork</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</section>
				</div>
			</div>
		</div>

	</div>
	</section>
	<div class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote">
                    <i class="fa fa-microphone"></i>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Mark John -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Jaison Warner -</b>
                        </p>
                    </div>
                    <div class="item active">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Tony Antonio -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Leena Doe -</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Hi-Tech Inc</strong><br>
					JC Main Road, Near Silnile tower<br>
					 Pin-21542 NewYork US.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Hi-Tech 2016 All right reserved. By </span><a href="http://webthemez.com" target="_blank">WebThemez</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
  $("#inicio").addClass('active');
</script>

@stop