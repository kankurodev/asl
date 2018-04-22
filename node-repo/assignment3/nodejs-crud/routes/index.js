var express = require('express');
var router = express.Router();
var mysql = require("mysql");

const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "root",
    port: 8889,
    database: "node_crud"
})

db.connect((err) => {
    if (err){
        console.log(err);
    }
    console.log("MySQL Connected...")
});

// GET home page
router.get('/', function(req, res, next) {

    res.render('index', {
        title: 'Home',
        navItems: [
            {link:'/',content:'Home'},
            {link:'/register',content:'Register'},
            {link:'/users',content:'Users'}
        ]});
});

// GET users page
router.get('/users', function(req, res, next) {
    var sql = "select * from users";
    db.query(sql, (err, results) => {
        res.render('users', {
            title: 'Users',
            users: results,
            navItems: [
                {link:'/',content:'Home'},
                {link:'/register',content:'Register'},
                {link:'/users',content:'Users'}
            ]
        });
    })
});

// GET adduser view
router.get('/adduser', function(req, res, next) {
    res.render('adduser', {
        title: 'Add User',
        navItems: [
            {link:'/',content:'Home'},
            {link:'/register',content:'Register'},
            {link:'/users',content:'Users'}
        ]});
});

// Add user
router.post('/addeduser', function(req, res, next) {

    //create input field value variables
    var firstName = req.body.fname;
    var lastName = req.body.lname;
    var uEmail = req.body.email;
    var userPass = req.body.password;

    //validate inputs aren't empty and passwords match
    req.checkBody("fname", "First name is required.").notEmpty();
    req.checkBody("lname", "Last name is required.").notEmpty();
    req.checkBody("email", "Email is required.").notEmpty();
    req.checkBody("email", "Please enter a valid Email.").isEmail();
    req.checkBody("password", "Password is required.").notEmpty();
    req.checkBody("password2", "Passwords do not match.").equals(req.body.password);

    //capture errors in a variable
    var errors = req.validationErrors();

    //If errors exist, render the adduser view and pass in the errors
    if (errors) {
        res.render('adduser', {
            title: 'Users',
            errors: errors,
            navItems: [
                {link: '/', content: 'Home'},
                {link: '/register', content: 'Register'},
                {link:'/users',content:'Users'}
            ]
        });
    } else {

        //Create a user object
        var user = {"fname":firstName, "lname":lastName, "email":uEmail, "password":userPass};

        //If no errors, then add the user to the database and render the users page
        var sql = "insert into users set ?";
        db.query(sql, user, (err, results) => {
            if(err) {
                console.log(err);
            } else {

                //re-render the users page to get new database items
                var sql = "select * from users";
                db.query(sql, (err, results) => {
                    res.render('users', {
                        title: 'Users',
                        users: results,
                        message: "User Added!",
                        navItems: [
                            {link:'/',content:'Home'},
                            {link:'/register',content:'Register'},
                            {link:'/users',content:'Users'}
                        ]
                    });
                })
            }
        })
    }
});

// GET edituser view
router.post('/edituser', function(req, res, next) {

    var sql = "select * from users where id = "+req.query.id;
    db.query(sql, (err, results) => {
        res.render('edituser', {
            title: 'Edit User',
            user: results,
            navItems: [
                {link:'/',content:'Home'},
                {link:'/register',content:'Register'},
                {link:'/users',content:'Users'}
            ]
        });
    })
});

// Edit user
router.post('/editeduser', function(req, res, next) {

    //create input field value variables
    var firstName = req.body.fname;
    var lastName = req.body.lname;
    var uEmail = req.body.email;
    var userPass = req.body.password;

    //validate inputs aren't empty and passwords match
    req.checkBody("fname", "First name is required.").notEmpty();
    req.checkBody("lname", "Last name is required.").notEmpty();
    req.checkBody("email", "Email is required.").notEmpty();
    req.checkBody("email", "Please enter a valid Email.").isEmail();
    req.checkBody("password", "Password is required.").notEmpty();
    req.checkBody("password2", "Passwords do not match.").equals(req.body.password);

    //capture errors in a variable
    var errors = req.validationErrors();

    //If errors exist, render the edituser view and pass in the errors
    if (errors) {

        //re-render the users page to get new database items and pass the errors
        var sql = "select * from users";
        db.query(sql, (err, results) => {
            res.render('users', {
                title: 'Users',
                users: results,
                errors: errors,
                navItems: [
                    {link:'/',content:'Home'},
                    {link:'/register',content:'Register'},
                    {link:'/users',content:'Users'}
                ]
            });
        })
    } else {

        //Create a user object
        var user = {"fname":firstName, "lname":lastName, "email":uEmail, "password":userPass};

        //If no errors, then edit the user and render the users page
        var sql = "update users set ?";
        db.query(sql, user, (err, results) => {
            if(err) {
                console.log(err);
            } else {

                //re-render the users page to get new database items
                var sql = "select * from users";
                db.query(sql, (err, results) => {
                    res.render('users', {
                        title: 'Users',
                        users: results,
                        message: "User Added!",
                        navItems: [
                            {link:'/',content:'Home'},
                            {link:'/register',content:'Register'},
                            {link:'/users',content:'Users'}
                        ]
                    });
                })
            }
        })
    }
});

// Delete user
router.post('/deluser', function(req, res, next) {
    var sql = "delete from users where id =" + req.query.id;
    db.query(sql, (err, results) => {
        if(err) {
            console.log(err);
        } else {

            var sql = "select * from users";
            db.query(sql, (err, results) => {
                res.render('users', {
                    title: 'Users',
                    users: results,
                    message: "User Deleted!",
                    navItems: [
                        {link:'/',content:'Home'},
                        {link:'/register',content:'Register'},
                        {link:'/users',content:'Users'}
                    ]
                });
            })

        }
    })
});

// GET register page
router.get('/register', function(req, res, next) {
    res.render('register', {
        title: 'Register',
        navItems: [
            {link:'/',content:'Home'},
            {link:'/register',content:'Register'},
            {link:'/users',content:'Users'}
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
                {link: '/register', content: 'Register'},
                {link:'/users',content:'Users'}
            ]
        });
    } else {

        //If no errors, then render the home page and pass in the success message
        res.render('index', {
            title: 'Home',
            message: "Registration Complete!",
            navItems: [
                {link: '/', content: 'Home'},
                {link: '/register', content: 'Register'},
                {link:'/users',content:'Users'}
            ]
        });
    }
});

module.exports = router;
