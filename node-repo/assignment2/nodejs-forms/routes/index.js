var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
    res.render('index', {
        title: 'Home',
        navItems: [
            {link:'/',content:'Home'},
            {link:'/register',content:'Register'}
        ]});
});

router.get('/register', function(req, res, next) {
    res.render('register', {
        title: 'Register',
        navItems: [
            {link:'/',content:'Home'},
            {link:'/register',content:'Register'}
        ]});
});


router.post('/registered', function(req, res, next) {
    res.render('index', {
        title: 'Home',
        message: "Registration Complete!",
        navItems: [
            {link:'/',content:'Home'},
            {link:'/register',content:'Register'}
        ]});
});

module.exports = router;
