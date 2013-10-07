
<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="utf-8">
    <title>Notes N Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    
    <!-- Basic overrides -->
    <link href="css/override.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  
  <!-- Angular -->                                 
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
  <script type="text/javascript" src="js/controllers.js"></script>
  </head>

  <body>
  <div class="page" ng-controller="NoteCtrl">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Notes N Books</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#about">Notes</a></li>
              <li><a href="#contact">Books</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Create New Note Section -->
      <div class="row">
      <form class="span6">
	  <div class="well well-small">
	  <h4>Create New Note</h4>
	    <textarea class="field textarea-width" rows="5" placeholder="Enter a new note..." ng-model="textAreaText" ng-model-instant></textarea>
  		  <button type="submit" class="btn btn-primary btn-large">Save</button>
  		  <button type="button" class="btn btn-large">Clear</button>	   
	  </div>
	  </form>
	  </div>
	  
	  
	<!-- Browse Old Notes Section -->
	<div class="pagination text-center">
	  <ul>
	    <li><a href="#">Prev</a></li>
	    <li><a href="#">Next</a></li>
	  </ul>
	</div>
	
	<!-- Note Cards -->
	      <div class="row-fluid">
            <ul class="thumbnails">
            <li class="span2">
	              <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <div class="caption">
                      <h5>{{todaysDate}}</h5>
    			      <p>{{textAreaText}}</p>
                      <p><a href="#" class="btn">View</a> <a href="#" class="btn btn-danger" disabled="true">Delete</a></p>
                    </div>
                 </div>  
				</li>
	            <li class="span2" ng-repeat="note in notes">
	              <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <div class="caption">
                      <h5>{{note.date}}</h5>
    			      <p>{{note.text}}</p>
                      <p><a href="#" class="btn">View</a> <a href="#" class="btn btn-danger">Delete</a></p>
                    </div>
                 </div>  
				</li>
            </ul>
          </div>
	  
	</div> <!-- /container -->
	</div> <!-- /page -->
  </body>
</html>

