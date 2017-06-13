<div class="form-group">
    <label for="name">Name:</label>
    @if(isset($task))
    <input type="text" name="name" class="form-control"
    value={{$task->name}}>
    @else
    <input type="text" name="name" class="form-control">
    @endif
</div>
<div class="form-group">
  <label for="name">Slug:</label>
  @if(isset($task))
  <input type="text" name="slug" class="form-control"
  value={{$task->slug}}>
  @else
  <input type="text" name="slug" class="form-control">
  @endif
</div>
<div class="form-group">
  <button type="submit" name="button" class="btn btn-primary">{{$submit}}</button>
</div>
