var ContactList = Backbone.View.extend({
    el: '.page',
    render: function () {
        var that = this;
        var contacts = new Contacts();
        contacts.fetch({
            success: function() {
                var template = _.template($('#contact-list-template').html(), {contacts: contacts.models});
                that.$el.html(template);
                // that.$el.append(template({contacts: contacts.models}))
            }
        })
    }
});