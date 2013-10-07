var note = require('note.js');
var data = require('mockData.js');

var appModule = angular.module('app', []);
	appModule.directive('note', function(){
		return {
			restrict: 'E',
			templateUrl: 'fragments/note.html',
			replace: true	
		};
	});
	
function NoteCtrl($scope){
	var date = '01/01/2001';
	var text = 'This is a new note. I am writing this note because notes are very important in everday lives '+
			   'which is why I chose to write this app dedicated to note taking. I chose to write this app '+
			   'dedicated to note taking. I have purposefully made this line longer than 160 characters to '+
			   'observe the expected formatting.';
	
	$scope.todaysDate = todaysDate();
	console.log($scope.textAreaText);

	$scope.notes = [
	     {text: notePreviewTextFormatter (data.note1.message), date: data.note1.date},
	     {text: notePreviewTextFormatter (data.note2.message), date: data.note2.date},
	     {text: notePreviewTextFormatter (data.note3.message), date: data.note3.date},
	     {text: notePreviewTextFormatter (data.note4.message), date: data.note4.date},
	     {text: notePreviewTextFormatter (data.note5.message), date: data.note5.date}
    ];
	
	$scope.saveButtonAction = function (){
		
	};
	
	$scope.clearButtonAction = function (){
		
	};
	
	$scope.paginationLinkAction = function (){
		
	}
	
}

/**
 * Returns the current date in MM/DD/YYYY format.
 * @returns {Date}
 */
function todaysDate (){
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!

	var yyyy = today.getFullYear();
	if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = mm+'/'+dd+'/'+yyyy;
	
	return today;
}

/**
 * Formats the text for note preview mode.
 * @param text
 * @returns text
 */
function notePreviewTextFormatter (text){
	if(text.length > 160){
		return text.substring(0,156) + " ...";
	}
	else return text;
}