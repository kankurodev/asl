var express = require('express');
var router = express.Router();

// GET home page
router.get('/', function(req, res, next) {
    res.render('index', {
        title: 'Home',
        navItems: [
            {link:'/',content:'Home'},
            {link:'/register',content:'Register'}
        ]});
});


// GET register page
router.get('/register', function(req, res, next) {
    res.render('register', {
        title: 'Register',
        navItems: [
            {link:'/',content:'Home'},
            {link:'/register',content:'Register'}
        ]});
});

// POST registered page
router.post('/registered', function(req, res, next) {

    //create input field value variables
    var username = req.body.username;
    var email = req.body.email;
    var password = req.body.password;
    var password2 = req.body.password2;

    //validate inputs aren't empty and passwords match
    req.checkBody("username", "Username is required.").notEmpty();
    req.checkBody("email", "Email is required.").notEmpty();
    req.checkBody("email", "Please enter a valid Email.").isEmail();
    req.checkBody("password", "Password is required.").notEmpty();
    req.checkBody("password2", "Passwords do not match.").equals(req.body.password);

    //capture errors in a variable
    var errors = req.validationErrors();

    //If errors exist, render the register view and pass in the errors
    if (errors) {
        res.render('register', {
            title: 'Register',
            errors: errors,
            navItems: [
                {link: '/', content: 'Home'},
                {link: '/register', content: 'Register'}
            ]
        });
    } else {

        //If no errors, then render the home page and pass in the success message
        res.render('index', {
            title: 'Home',
            message: "Registration Complete!",
            navItems: [
                {link: '/', content: 'Home'},
                {link: '/register', content: 'Register'}
            ]
        });
    }
});

module.exports = router;
