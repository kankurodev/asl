var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
    res.render('index', {
        title: 'Home',
        navItems: [
            {link:'/',content:'Home'},
            {link:'/users',content:'Users'}
        ]});
});

router.get('/users', function(req, res, next) {
    res.render('users', {
        title: 'Users',
        users:[{"firstName":"Toby","lastName":"Horn"}],
        navItems: [
            {link:'/',content:'Home'},
            {link:'/users',content:'Users'}
        ]});
});

module.exports = router;
