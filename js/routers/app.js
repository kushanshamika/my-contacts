var contactList = new ContactList();
var createContact = new CreateContact();
var labelList = new LabelList();
var createLabel = new CreateLabel();

var Router = Backbone.Router.extend({
    routes: {
        '': 'home',
        'new': 'editContact',
        'edit/:id': 'editContact',
        'label': 'labelList',
        'label/new': 'createLabel',
        'label/edit/:id': 'createLabel'
    }
});

var router = new Router();

router.on('route:home', function () {
    contactList.render();
});
router.on('route:editContact', function (id) {
    createContact.render({id:id});
});
router.on('route:labelList', function () {
    labelList.render();
});
router.on('route:createLabel', function (id) {
    createLabel.render({id:id});
});

Backbone.history.start();