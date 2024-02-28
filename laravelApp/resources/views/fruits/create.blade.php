
<div>
    @if(isset($fruit) && is_object($fruit)) 
        <h1>Edit Fruit</h1>
    @else
        <h1>Create Fruit</h1>
    @endif
    <form action="{{ isset($fruit) ? route('fruits.update', $fruit->id) : route('fruits.save') }}" method="post">
        {{ csrf_field() }}
        <label for="fruitname">Fruit Name</label>
        <input type="text" name="fruitname" value="{{ $fruit->name }}">
        <br/>
        <label for="fuitdescr">Fruit Description</label>
        <input type="text" name="fruitdescr" value="{{ $fruit->descr }}">
        <br/>
        <label for="fruitprice">Fruit Price</label>
        <input type="number" name="fruitprice" value="{{ $fruit->price }}">
        <br/>
        <input type="submit" value="Send">
    </form>
</div>
