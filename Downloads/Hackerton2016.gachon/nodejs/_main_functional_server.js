var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var DecisionTree = require('decision-tree');

app.get('/', function(req, res){
	console.log("Connected");
});


// Featrue
var features = ["index", "feature1"];
var class_name = "liked";


io.on('connection', function(socket){

	console.log('User Connect');

	socket.on('message', function(msg){
		console.log("This is test case " + msg);
	});

	// Feature User가 선호하고 안하고
	socket.on('requestPredict', function(_features) {
		
		// _features : Training set
		var dt = new DecisionTree(_features, class_name, features)

		var predict = dt.predict({
  			color: "blue",
  			shape: "hexagon"
		});

		var accuracy = dt.evaluate(test_data);
		console.log(accuracy);

		socket.emit('responsePrediction', result);
	});
})

http.listen(3000, function() {
	console.log('Started Server');
});
