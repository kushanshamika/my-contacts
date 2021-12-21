var contactList = new ContactList();
var createContact = new CreateContact();

var Router = Backbone.Router.extend({
    routes: {
        '': 'home',
        'new': 'editContact'
    }
});

var router = new Router();

router.on('route:home', function () {
    contactList.render();
});
router.on('route:editContact', function () {
    createContact.render();
});

Backbone.history.start();