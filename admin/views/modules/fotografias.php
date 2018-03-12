
<?php
    include 'partials/navbar.php';
    ?>

<div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>

 

            <div class="row">

                <div class="col-lg-8">

                    <!-- Example Bar Chart Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-bar-chart"></i> Bar Chart Example
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-8">
                                    <canvas id="myBarChart" width="100" height="50"></canvas>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <hr class="hidden-sm-up">
                                    <div class="h4 mb-0 text-primary">$34,693</div>
                                    <div class="small text-muted">YTD Revenue</div>
                                    <hr>
                                    <div class="h4 mb-0 text-warning">$18,474</div>
                                    <div class="small text-muted">YTD Expenses</div>
                                    <hr>
                                    <div class="h4 mb-0 text-success">$16,219</div>
                                    <div class="small text-muted">YTD Margin</div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">
                            Updated yesterday at 11:59 PM
                        </div>
                    </div>

                    <!-- Card Columns Example Social Feed -->
                    <div class="card-columns">

                        <!-- Example Social Card -->
                        <div class="card mb-3">
                            <a href="#">
                                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                                <p class="card-text small">These waves are looking pretty good today! <a href="#">#surfsup</a></p>
                            </div>
                            <hr class="my-0">
                            <div class="card-block py-2 small">
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-thumbs-up"></i> Like
                                </a>
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-comment"></i> Comment
                                </a>
                                <a class="d-inline-block" href="#">
                                    <i class="fa fa-fw fa-share"></i> Share
                                </a>
                            </div>
                            <hr class="my-0">
                            <div class="card-block small bg-faded">
                                <div class="media">
                                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6> Very nice! I wish I was there! That looks amazing!
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">Like</a>
                                            </li>
                                            <li class="list-inline-item">
                                                ·
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Reply</a>
                                            </li>
                                        </ul>
                                        <div class="media mt-3">
                                            <a class="d-flex pr-3" href="#">
                                                <img src="http://placehold.it/45x45" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6> Next time for sure!
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#">Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        ·
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#">Reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer small text-muted">
                                Posted 32 mins ago
                            </div>
                        </div>

                        <!-- Example Social Card -->
                        <div class="card mb-3">
                            <a href="#">
                                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=180" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1"><a href="#">John Smith</a></h6>
                                <p class="card-text small">Another day at the office... <a href="#">#workinghardorhardlyworking</a></p>
                            </div>
                            <hr class="my-0">
                            <div class="card-block py-2 small">
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-thumbs-up"></i> Like
                                </a>
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-comment"></i> Comment
                                </a>
                                <a class="d-inline-block" href="#">
                                    <i class="fa fa-fw fa-share"></i> Share
                                </a>
                            </div>
                            <hr class="my-0">
                            <div class="card-block small bg-faded">
                                <div class="media">
                                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1"><a href="#">Jessy Lucas</a></h6> Where did you get that camera?! I want one!
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">Like</a>
                                            </li>
                                            <li class="list-inline-item">
                                                ·
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Reply</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer small text-muted">
                                Posted 46 mins ago
                            </div>
                        </div>

                        <!-- Example Social Card -->
                        <div class="card mb-3">
                            <a href="#">
                                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1"><a href="#">Jeffery Wellings</a></h6>
                                <p class="card-text small">Nice shot from the skate park! <a href="#">#kickflip</a> <a href="#">#holdmybeer</a> <a href="#">#igotthis</a></p>
                            </div>
                            <hr class="my-0">
                            <div class="card-block py-2 small">
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-thumbs-up"></i> Like
                                </a>
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-comment"></i> Comment
                                </a>
                                <a class="d-inline-block" href="#">
                                    <i class="fa fa-fw fa-share"></i> Share
                                </a>
                            </div>
                            <div class="card-footer small text-muted">
                                Posted 1 hr ago
                            </div>
                        </div>

                        <!-- Example Social Card -->
                        <div class="card mb-3">
                            <a href="#">
                                <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=185" alt="">
                            </a>
                            <div class="card-block">
                                <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                                <p class="card-text small">It's hot, and I might be lost... <a href="#">#desert</a> <a href="#">#water</a> <a href="#">#anyonehavesomewater</a> <a href="#">#noreally</a> <a href="#">#thirsty</a> <a href="#">#dehydration</a></p>
                            </div>
                            <hr class="my-0">
                            <div class="card-block py-2 small">
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-thumbs-up"></i> Like
                                </a>
                                <a class="mr-3 d-inline-block" href="#">
                                    <i class="fa fa-fw fa-comment"></i> Comment
                                </a>
                                <a class="d-inline-block" href="#">
                                    <i class="fa fa-fw fa-share"></i> Share
                                </a>
                            </div>
                            <hr class="my-0">
                            <div class="card-block small bg-faded">
                                <div class="media">
                                    <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6> The oasis is a mile that way, or is that just a mirage?
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">Like</a>
                                            </li>
                                            <li class="list-inline-item">
                                                ·
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Reply</a>
                                            </li>
                                        </ul>
                                        <div class="media mt-3">
                                            <a class="d-flex pr-3" href="#">
                                                <img src="http://placehold.it/45x45" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>
                                                <img class="img-fluid w-100 mb-1" src="https://unsplash.it/700/450?image=789" alt=""> I'm saved, I found a cactus. How do I open this thing?
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#">Like</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        ·
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#">Reply</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer small text-muted">
                                Posted yesterday
                            </div>
                        </div>

                    </div>
                    <!-- /Card Columns -->

                </div>

                <div class="col-lg-4">
                    <!-- Example Notifications Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-bell-o"></i> Feed Example
                        </div>
                        <div class="list-group list-group-flush small">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>David Miller</strong> posted a new article to <strong>David Miller Website</strong>.
                                        <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>Samantha King</strong> sent you a new message!
                                        <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <strong>Jeffery Wellings</strong> added a new photo to the album <strong>Beach</strong>.
                                        <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                    <div class="media-body">
                                        <i class="fa fa-code-fork"></i> <strong>Monica Dennis</strong> forked the <strong>startbootstrap-sb-admin</strong> repository on <strong>GitHub</strong>.
                                        <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                            View all activity...
                        </a>
                        </div>
                        <div class="card-footer small text-muted">
                            Updated yesterday at 11:59 PM
                        </div>
                    </div>
                </div>
            </div>

            <!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Data Table Example
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->


<?php
    include 'partials/footer.php';
    ?>