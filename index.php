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
            						<select class="selectpicker" data-ng-model="myAuthors" data-ng-options="author.id as  author.name for author in authors "></select>
        						</div>
        						<div>
            						<label>Genre</label>
            						<select class="selectpicker" data-ng-model="myGenres" data-ng-options="genre.id as genre.name for genre in genres "></select>
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
		</div>
	</div>
	



</body>
</html>