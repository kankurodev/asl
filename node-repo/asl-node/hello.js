//var http = require("http");

express = require("express");

var app = express();


app.get("/", function(request,response){
    response.end("Hello!");
});

app.listen(3001, function(){
    console.log("Everything is working and the server is running!");
});