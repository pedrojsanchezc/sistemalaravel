{{-- <div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <textarea class="form-control" rows="5" name="Nombre" type="textarea" id="Nombre" >{{ isset($company->Nombre) ? $company->Nombre : ''}}</textarea>
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="text" id="Correo" value="{{ isset($company->Correo) ? $company->Correo : ''}}" >
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Logotipo') ? 'has-error' : ''}}">
    <label for="Logotipo" class="control-label">{{ 'Logotipo' }}</label>
    <input class="form-control" name="Logotipo" type="file" id="Logotipo" value="{{ isset($company->Logotipo) ? $company->Logotipo : ''}}" >
    {!! $errors->first('Logotipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('SitioWeb') ? 'has-error' : ''}}">
    <label for="SitioWeb" class="control-label">{{ 'Sitioweb' }}</label>
    <input class="form-control" name="SitioWeb" type="text" id="SitioWeb" value="{{ isset($company->SitioWeb) ? $company->SitioWeb : ''}}" >
    {!! $errors->first('SitioWeb', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
--}}