var myApp = angular.module('startBooks', []);

myApp.controller('addBooksCtrl', ['$scope', '$http',  function($scope, $http){

	$scope.book;

	$scope.addBook = function() {

          $http({
              
              method: 'GET',
              url: '../../app/functions.php',
              data: { book: $scope.newNameBook, 
              	      author: $scope.author, 
              	      genre: $scope.genre, 
              	      price: $scope.price, 
              	      description: $scope.description, 
              	      typeAction: 'add' 
              	  }
              
          }).then(function (response) {
              
              $scope.book = response.data;
              
          }, function (response) {
              
              console.log(response.data,response.status);
              
          });
          //console.log($scope.newNameBook);
    };

	$scope.name;
	$scope.genre;
	$scope.author;
	$scope.price;
	$scope.description;

}]);