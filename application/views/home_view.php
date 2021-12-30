<script type="text/template" id="contact-list-template">
    <table class="table align-middle">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone number</th>
            <th scope="col">Labels</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <% _.each(contacts, function(contact) { %>
            <tr>
                <td><%= contact.get('f_name') %> <%= contact.get('l_name') %></td>
                <td><%= contact.get('email') %></td>
                <td><%= contact.get('contact') %></td>
                <td>
                    <span class="badge bg-primary">Primary</span>
                    <span class="badge bg-secondary">Secondary</span>
                    <span class="badge bg-success">Success</span>
                </td>
                <td>
                    <a class="btn btn-warning btn-sm px-3" href="#/edit/<%= contact.get('id') %>">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>
            </tr>
        <% }); %>
    </tbody>
    </table>
</script>