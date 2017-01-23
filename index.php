<!DOCTYPE html>
<html>
<head>
	<title>Books catalog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="www/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="www/js/app.js" type="text/javascript"></script>
	<script src="www/js/controllers.js" type="text/javascript"></script>
	<script src="www/js/services.js" type="text/javascript"></script>
</head>
<body data-ng-app="startBooks">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="text-center">Books Catalog</h1>
				<hr>
				<div class="row">
					<div class="col-xs-4">
						<h3>Add New Book</h3>
						<div data-ng-controller="addBooksCtrl">
							<form>
								<div>
            						<label>Name book</label>
            						<input type="text" ng-model="book">
        						</div>
        						<div>
            						<label>Author</label>
            						<select class="selectpicker">
            							<option data-ng-repeat="author in authors" value="{{author.id}}">{{author.name}}</option>
            						</select>
        						</div>
        						<div>
            						<label>Genre</label>
            						<select class="selectpicker">
            							<option data-ng-repeat="genre in genres" value="{{genre.id}}">{{genre.name}}</option>
            						</select>
        						</div>
        						<div>
            						<label>Price</label>
           							<input type="text" ng-model="price">
        						</div>
        						<div>
            						<label>Description</label>
           							<input type="text" ng-model="description">
        						</div>
        						<input class="btn btn-lg btn-default" type="button" value="Add" ng-click="addBook()">
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<hr>
					<h3>Add New Author</h3>
					<div data-ng-controller="addAuthorCtrl">
						<form>
							<div>
	    						<label>Author</label>
	    						<input type="text" name="addNewAuthor" data-ng-model="newAuthor">
							</div>
							<input class="btn btn-lg btn-default" type="button" value="Add Author" ng-click="addAuthor()">
						</form>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<hr>
					<h3>Add New Genre</h3>
					<div data-ng-controller="addGenreCtrl">
						<form>
							<div>
								<label>Genre</label>
								<input type="text" name="addNewGenre" data-ng-model="newGenre">
							</div>
							<input class="btn btn-lg btn-default" type="button" value="Add Genre" ng-click="addGenre()">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	



</body>
</html>