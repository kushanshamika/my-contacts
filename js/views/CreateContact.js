var CreateContact = Backbone.View.extend({
    el: '.page',
    render: function () {
        var template = _.template($('#create-contact-template').html(), {});
        this.$el.html(template)
    },
    events: {
        'submit .create-user-form': 'saveContact'
    },
    saveContact: function (ev) {
        var contactDetails = $(ev.currentTarget).serializeObject();
        var contact = new Contact();
        contact.save(contactDetails, {
            success: function (contact) {
                router.navigate('', {trigger: true})
            }
        })
        return false;
    }
});