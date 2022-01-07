var ContactList = Backbone.View.extend({
    el: '.page',
    render: function () {
        var that = this;
        that.labels = new Labels();
        that.contacts = new Contacts();
        that.labels.fetch({
            success: function(labels){
                that.labels = labels.models;
                that.contacts.fetch({
                    success: function(contacts) {
                        var template = _.template($('#contact-list-template').html(), {contacts: contacts.models, labels: that.labels});
                        that.$el.html(template);
                    }
                })
            }
        });
    },
    events: {
        'click .search': 'searchContact'
    },
    searchContact: function (ev) {
        var that = this;
        let username =  $('#surname').val();
        let label = $('#label').val();
        var paramObj = {};
        (username === "") ? username = undefined : paramObj.l_name = username ;
        (label === "default") ? label = undefined : paramObj["label"] = label;
        var contacts = new Contacts();
        contacts.fetch({
            data: $.param(paramObj),
            success: function() {
                var template = _.template($('#contact-list-template').html(), {contacts: contacts.models, labels: that.labels});
                that.$el.html(template);
            }
        });
        return false;
    }
});