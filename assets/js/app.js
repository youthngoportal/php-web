/*!
** Example App
** Licensed under the Apache License v2.0
** http://www.apache.org/licenses/LICENSE-2.0
** Built by Jay Kanakiya ( @techiejayk )
**/

"use strict";

var app = angular.module("ngoapp",[]);

app.controller("ExmpCtrl",function  ($scope) {
	//
	$scope.friends = [
    { name: "Pablo",   age: 55 },
    { name: "Linda",   age: 20 },
    { name: "Marta",   age: 37 },
    { name: "Othello", age: 20 },
    { name: "Markus",  age: 32 }
  ];
});


app.controller("AddCtrl",function  ($scope) {
      $scope.selects = [
      {
        "id": "1",
        "name": "Gandhinagar"
      },
      {
        "id": "2",
        "name": "Ahmedabad"
      },
      {
        "id": "3",
        "name": "Ajmer"
      },
      {
        "id": "4",
        "name": "Gangtol"
      },
      {
        "id": "5",
        "name": "Ravina"
      }
    ]
     $scope.selectedItem = '1';
});

app.controller("ListCtrl",function  ($scope) {
	//
	$scope.ngos = [
    { name: "District Rural Youth Development Association",   founded: 1900,  founder: "Mr Amichandbhai N. Shrimali", tagline: "karke dikhayege", infromation:"We are very angry.", email:"districtruralyouthdevlopment@yahoo.co.in", city: "Palanpur", state: "Gujarat", phone: 9924215281, website:"", image: "assets/ngos/default.jpg"},
    { name: "Bharatiya Seva Samaj",   founded: 1900,  founder: "Dr. T.G. Patel", tagline: "karke dikhayege", infromation:"The organisation .", email:"contact@sevakproject.org", city: "Vadodara", state: "Gujarat", phone: 912652321485, website:"http://sevakproject.org/", image: "assets/ngos/bss.png"},
    { name: "Gen Next",   founded: 1900,  founder: "Rutvik Makwana", tagline: "karke dikhayege", infromation:"We are very angry.", email:"shalaparisar@gmail.com", city: "Chotila", state: "Gujarat", phone: 91275128052, website:"", image: "assets/ngos/default.jpg"},
    { name: "Ahmedabad Study Action Group",   founded: 1900,  founder: "Kirtee Shah", tagline: "karke dikhayege", infromation:"We are very angry.", email:"asag@ad1.vsnl.net.in", city: "Ahmedabad", state: "Gujarat", phone: 7926589093, website:"", image: "assets/ngos/default.jpg"},
    { name: "All India Social Educational Charitable Trust",   founded: 1900,  founder: "Bharat Ramnath Pawar", tagline: "karke dikhayege", infromation:"We are very angry.", email:"aisect17166@gmail.com", city: "Ahmedabad", state: "Gujarat", phone: 7930420790, website:"", image: "assets/ngos/default.jpg"},
    { name: "ARY Skill Development",   founded: 1900,  founder: "Yashpal Sihag", tagline: "karke dikhayege", infromation:"We are very angry.", email:"info@hamaripathshala.org", city: "Ahmedabad", state: "Gujarat", phone: 9350543669, website:"http://www.hamaripathshala.org", image: "assets/ngos/default.jpg"},
    { name: "Shri Bhanubhadra Charitable Trust",   founded: 1900,  founder: "Anil Kumar Shukla", tagline: "karke dikhayege", infromation:"We are very angry.", email:"", city: "Vadodara", state: "Gujarat", phone: 2652795337, website:"", image: "assets/ngos/default.jpg"},
    { name: "ARZOO",   founded: 1900,  founder: "Sulekha Ali", tagline: "karke dikhayege", infromation:"We are very angry.", email:"info@hamaripathshala.org", city: "Ahmedabad", state: "Gujarat", phone: 9374041393, website:"http://www.arzoolive.org/", image: "assets/ngos/arzoo.png"},
    { name: "Ekta Yuvak Mandal",   founded: 1900,  founder: "Ramesh Shah", tagline: "karke dikhayege", infromation:"We are very angry.", email:"", city: "Ahmedabad", state: "Gujarat", phone: 25330427, website:"", image: "assets/ngos/default.jpg"},
    { name: "Entrepreneurship Development Institute of India",   founded: 1900,  founder: "Malay Mukherjee", tagline: "karke dikhayege", infromation:"We are very angry.", email:"ediindiaad1@sancharnet.in", city: "Ahmedabad", state: "Gujarat", phone: 7923969158, website:"http://www.ediindia.org", image: "assets/ngos/edii.png"},
    { name: "Entrepreneurship Development Institute of India",   founded: 1900,  founder: "Malay Mukherjee", tagline: "karke dikhayege", infromation:"We are very angry.", email:"ediindiaad1@sancharnet.in", city: "Ahmedabad", state: "Gujarat", phone: 7923969158, website:"http://www.ediindia.org", image: "assets/ngos/default.jpg"},
    { name: "Jeevantirth",   founded: 1900,  founder: "Raju Deepti", tagline: "karke dikhayege", infromation:"We are very angry.", email:"jeevantirth@hotmail.com", city: "Gandhinagar", state: "Gujarat", phone: 9898110897, website:"http://www.jeevantirth.org", image: "assets/ngos/default.jpg"},

  ];
$scope.mode = 1;

});

app.controller('dbCtrl', ['$scope', '$http', function($scope, $http) {
  $http.get("fetch.php")
  .success(function(data) {
    $scope.data = data;
    $scope.mode = 1;
  })
 .error(function() {
    $scope.data = "error in fetching data";
  });
}]);
