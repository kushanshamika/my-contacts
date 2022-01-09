var CreateContact = Backbone.View.extend({
    el: '.page',
    render: function (options) {
        var that = this;
        that.model = new Contact();
        Backbone.Validation.bind(that);
        if (options.id) {
            that.labels = new Labels();
            that.contact = new Contact({id: options.id});

            that.labels.fetch({
                success: function(labels) {
                    that.labels = labels.models;
                    that.contact.fetch({
                        success: function(contact) {
                            var tags = contact.get('tags');
                            tags = tags !== null ? tags.split(",") : [];
                            var template = _.template($('#create-contact-template').html(), {contact: contact, labels: that.labels, tags: tags});
                            that.$el.html(template);
                            $('.form-select').select2();
                        }
                    })
                }
            });
        } else {
            var labels = new Labels();
            labels.fetch({
                success: function() {
                    var template = _.template($('#create-contact-template').html(), {contact: null, tags: [], labels: labels.models});
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
        this.model.set(contactDetails);
        if(this.model.isValid()){
            this.model.save(null, {
                success: function (contact) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Contact has been saved',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    router.navigate('', {trigger: true})
                }
            })
        }
        return false;
    },
    deleteContact: function(ev) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#F93154',
            cancelButtonColor: '#00B74A',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
                this.contact.destroy({
                    success: function() {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Contact has been deleted',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        router.navigate('', {trigger: true});
                    }
                })
            }
          })
        return false;
    }
});