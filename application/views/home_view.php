<script type="text/template" id="contact-list-template">
    <div class="float-end mb-4">
        <form class="row row-cols-lg-auto g-3 align-items-center" class="search-contact-form">
            <div class="col-12">
                <label class="visually-hidden" for="inlineFormInputGroupUsername">Surname</label>
                <div class="input-group">
                    <input
                        type="text"
                        class="form-control"
                        id="surname"
                        placeholder="Surname"
                        name="surname"
                    />
                </div>
            </div>

            <div class="col-12">
                <label class="visually-hidden" for="inlineFormSelectPref">Label</label>
                <select class="form-select" name="label" id="label">
                    <option value="default">Label</option>
                    <% _.each(labels, function(label) { %>
                        <option value="<%= label.get('id') %>"><%= label.get('label_name') %></option>
                    <% }); %>
                </select>
            </div>

            <div class="col-12">
                <button type="button" class="btn btn-primary search">Search</button>
            </div>
        </form>
    </div>
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
                    <% _.each(JSON.parse(contact.get('tags')), function(tag) { %>
                        <span class="badge bg-<%= tag.color %>"><%= tag.name %></span>
                    <% }); %>
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