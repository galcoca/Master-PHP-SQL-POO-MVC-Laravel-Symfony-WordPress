<div>
    <h1>Form in Laravel</h1>
    <form action="{{ route('movies.submit') }}" method="post">
        {{ csrf_field() }}
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname">
        <br/>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname">
        <br/>
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email">
        <br/>

        <input type="submit" value="Send">
    </form>
</div>
