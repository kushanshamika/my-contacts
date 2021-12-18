<div class="page"></div>

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
                <td>Work</td>
                <td>
                    <button type="button" class="btn btn-warning btn-sm px-3">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm px-3">
                        <i class="fas fa-times"></i>
                    </button>
                </td>
            </tr>
        <% }); %>
    </tbody>
    </table>
</script>