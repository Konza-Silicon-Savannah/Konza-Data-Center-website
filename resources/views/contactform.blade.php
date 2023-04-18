<form action="/sendMessage" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="John Doe" name="name">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="org" class="form-label">Organization</label>
        <input type="text" class="form-control  @error('organization') is-invalid @enderror" id="org" placeholder="ABC Company" name="organization">
        @error('organization')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control  @error('message') is-invalid @enderror" id="message" rows="3" name="message"></textarea>
        @error('message')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn bg-successes text-white">Send</button>
</form>