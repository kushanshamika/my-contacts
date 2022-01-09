var CreateLabel = Backbone.View.extend({
    el: '.page',
    render: function (options) {
        var that = this;
        that.model = new Label();
        Backbone.Validation.bind(that);
        if (options.id) {
            that.label = new Label({id: options.id});
            that.label.fetch({
                success: function (label) {
                    var label_color = label.get('label_color');
                    var template = _.template($('#create-label-template').html(), {label: label, label_color: label_color});
                    that.$el.html(template)
                }
            })
        } else {
            var template = _.template($('#create-label-template').html(), {label: null, label_color: null});
            this.$el.html(template)
        }
    },
    events: {
        'submit .create-label-form': 'saveLabel',
        'click .delete-label' : 'deleteLabel'
    },
    saveLabel: function (ev) {
        var labelDetails = $(ev.currentTarget).serializeObject();
        this.model.set(labelDetails);
        if(this.model.isValid()){
            this.model.save(null, {
                success: function (contact) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Label has been saved',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    router.navigate('label', {trigger: true})
                }
            })
        }
        return false;
    },
    deleteLabel: function(ev) {
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
                this.label.destroy({
                    success: function() {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Label has been deleted',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        router.navigate('label', {trigger: true});
                    }
                })
            }
          })
        return false;
    }
});