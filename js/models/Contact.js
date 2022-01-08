var Contact = Backbone.Model.extend({
    validation: {
        f_name: {
            required: true
        },
        l_name: {
            required: true
        },
        contact: {
            required: true,
            pattern: /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/
        },
        email: {
            pattern: 'email',
            required: false
        }
    },
    labels: {
        f_name: 'First name',
        l_name: 'Surname',
        contact: 'Phone',
        email: 'Email'
    },
    urlRoot: '/contact'
})