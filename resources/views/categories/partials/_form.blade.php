<div class="form-group">
    <label for="name">Name:</label>
    @if(isset($category))
    <input type="text" name="name" class="form-control"
    value={{$category->name}}>
    @else
    <input type="text" name="name" class="form-control">
    @endif
</div>
<div class="form-group">
  <label for="name">Slug:</label>
  @if(isset($category))
  <input type="text" name="slug" class="form-control"
  value={{$category->slug}}>
  @else
  <input type="text" name="slug" class="form-control">
  @endif
</div>
<div class="form-group">
  <button type="submit" name="button" class="btn btn-primary">{{$submit}}</button>
</div>
