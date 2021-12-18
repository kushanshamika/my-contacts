var contactList = new ContactList();

var Router = Backbone.Router.extend({
    routes: {
        '': 'home'
    }
});

var router = new Router();
router.on('route:home', function () {
    contactList.render();
});

Backbone.history.start();