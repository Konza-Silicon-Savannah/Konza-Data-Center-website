<form action="/sendMessage" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="John Doe" name="name">
    </div>
    <div class="mb-3">
        <label for="org" class="form-label">Organization</label>
        <input type="text" class="form-control" id="org" placeholder="ABC Company" name="organization">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Send</button>
</form>