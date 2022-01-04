<script type="text/template" id="create-contact-template">
    <div class="col-8">
        <form class="create-user-form">
            <div class="input-group mb-3">
                <span class="input-group-text border-0" id="basic-addon1"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" placeholder="First name" aria-label="First Name"
                    aria-describedby="basic-addon1" name="f_name" value="<%= contact ? contact.get('f_name') : '' %>" />
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text border-0" id="basic-addon1"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Surname" aria-label="Surname"
                    aria-describedby="basic-addon2" name="l_name" value="<%= contact ? contact.get('l_name') : '' %>" />
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text border-0" id="basic-addon3"><i class="fas fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email"
                    aria-describedby="basic-addon1" name="email" value="<%= contact ? contact.get('email') : '' %>" />
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text border-0" id="basic-addon3"><i class="fas fa-phone-alt"></i></span>
                <input type="text" class="form-control" placeholder="Phone" aria-label="Phone"
                    aria-describedby="basic-addon1" name="contact" value="<%= contact ? contact.get('contact') : '' %>" />
            </div>

            <label for="label-form" class="form-label">Select Labels</label>

            <div class="mb-3">
                <select class="form-select" aria-label="Select Labels" name="tags" multiple="multiple">
                    <% _.each(labels, function(label) { %>
                        <option value="<%= label.get('id') %>"><%= label.get('label_name') %></option>
                    <% }); %>
                </select>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary mr-1">save</button>
                <% if(contact) { %>
                    <input type="hidden" value="<%= contact.id %>" name="id">
                    <button type="button" class="btn btn-danger delete">Delete</button>
                <% }; %>
            </div>
        </form>
    </div>
</script>