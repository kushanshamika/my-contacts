var Label = Backbone.Model.extend({
    validation: {
        label_name: {
            required: true
        },
        label_color: {
            required: true
        }
    },
    labels: {
        label_name: 'Label name',
        label_color: 'Label color'
    },
    urlRoot: '/label'
})