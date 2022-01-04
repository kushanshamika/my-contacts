var CreateContact = Backbone.View.extend({
    el: '.page',
    render: function (options) {
        var that = this;
        if (options.id) {
            that.contact = new Contact({id: options.id});
            that.contact.fetch()
            var labels = new Labels();
            labels.fetch({
                success: function() {
                    var tags = that.contact.get('tags');
                    tags = tags !== null ? tags.split(",") : [];
                    var template = _.template($('#create-contact-template').html(), {contact: that.contact, labels: labels.models, tags: tags});
                    that.$el.html(template);
                    $('.form-select').select2();
                }
            });
        } else {
            var labels = new Labels();
            labels.fetch({
                success: function() {
                    var template = _.template($('#create-contact-template').html(), {contact: null, tags: null, labels: labels.models});
                    that.$el.html(template);
                    $('.form-select').select2();
                }
            });
        }
    },
    events: {
        'submit .create-user-form': 'saveContact',
        'click .delete' : 'deleteContact'
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
    },
    deleteContact: function(ev) {
        this.contact.destroy({
            success: function() {
                router.navigate('', {trigger: true});
            }
        })
        return false;
    }
});