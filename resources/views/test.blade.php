<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Test Controller</h1>
    <form action="{{url('/test/subt')}}" method="post">
      {{csrf_field()}}
      <label for="">One</label>
      <input type="text" name="one" value="">

      <label for="">Two</label>
      <input type="text" name="two" value="">

      <button type="submit" name="button">Submit</button>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </form>
  </body>
</html>
