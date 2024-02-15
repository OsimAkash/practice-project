<h1>This is My About Page</h1>


<a href="{{url('/')}}"> Back to Home</a>

<h1>Store Your Contact Person</h1>

<form action="{{route('student.store')}}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="write your name"> <br>
    <input type="email" name="email" id="" placeholder="write your email"> <br>
    <input type="text" name="phone" id="" placeholder="write your phone"> <br>
    <button type="submit">Submit</button>
</form>