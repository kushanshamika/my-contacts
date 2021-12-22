var CreateContact = Backbone.View.extend({
    el: '.page',
    render: function (options) {
        var that = this;
        if (options.id) {
            var contact = new Contact({id: options.id});
            contact.fetch({
                success: function (contact) {
                    var template = _.template($('#create-contact-template').html(), {contact: contact});
                    that.$el.html(template)
                }
            })
        } else {
            var template = _.template($('#create-contact-template').html(), {contact: null});
            this.$el.html(template)
        }
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