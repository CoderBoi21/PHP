@extends('masterlayout')

@section('title','Contact')

@section('content')
<div class="container mt-5">
    <h1>Contact Us</h1>

    <form action="{{ route('contact.store')  }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name_txt" name="name_txt" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email_txt" name="email_txt" required>
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="msg_txt" name="msg_txt" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection