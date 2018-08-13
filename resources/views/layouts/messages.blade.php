@if (isset($errors) && count($errors) > 0)
<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">×</button>
  @foreach ($errors->all() as $error)
    <p><i class="icon-remove-sign"></i> {{ $error }}</p>
  @endforeach
</div>
@endif

@if (session('problems'))
<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">×</button>
  @foreach (session('problems') as $problem)
    <p><i class="icon-remove-sign"></i> {{ $problem }}</p>
  @endforeach
</div>
@endif

@if (session('warnings'))
<div class="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  @foreach (session('warnings') as $warning)
    <p><i class="icon-warning-sign "></i> {{ $warning }}</p>
  @endforeach
</div>
@endif

@if (session('informations'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  @foreach (session('informations') as $information)
    <p><i class="icon-ok"></i> {{ $information }}</p>
  @endforeach
</div>
@endif
