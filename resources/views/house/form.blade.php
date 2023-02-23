<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $house->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $house->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category') }}
            {{ Form::text('category', $house->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'category']) }}
            {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rooms') }}
            {{ Form::text('rooms', $house->rooms, ['class' => 'form-control' . ($errors->has('rooms') ? ' is-invalid' : ''), 'placeholder' => 'rooms']) }}
            {!! $errors->first('rooms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('baths') }}
            {{ Form::text('baths', $house->baths, ['class' => 'form-control' . ($errors->has('baths') ? ' is-invalid' : ''), 'placeholder' => 'baths']) }}
            {!! $errors->first('baths', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('persons') }}
            {{ Form::text('persons', $house->persons, ['class' => 'form-control' . ($errors->has('persons') ? ' is-invalid' : ''), 'placeholder' => 'persons']) }}
            {!! $errors->first('persons', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('population') }}
            {{ Form::text('population', $house->population, ['class' => 'form-control' . ($errors->has('population') ? ' is-invalid' : ''), 'placeholder' => 'population']) }}
            {!! $errors->first('population', '<div class="invalid-feedback">:message</div>') !!}
        </div><div class="form-group">
            {{ Form::label('province') }}
            {{ Form::text('province', $house->province, ['class' => 'form-control' . ($errors->has('province') ? ' is-invalid' : ''), 'placeholder' => 'province']) }}
            {!! $errors->first('province', '<div class="invalid-feedback">:message</div>') !!}
        </div><div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $house->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div><div class="form-group">
            {{ Form::label('preferences') }}
            {{ Form::text('preferences', $house->preferences, ['class' => 'form-control' . ($errors->has('preferences') ? ' is-invalid' : ''), 'placeholder' => 'preferences']) }}
            {!! $errors->first('preferences', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nameProperty') }}
            {{ Form::text('nameProperty', $house->nameProperty, ['class' => 'form-control' . ($errors->has('nameProperty') ? ' is-invalid' : ''), 'placeholder' => 'nameProperty']) }}
            {!! $errors->first('nameProperty', '<div class="invalid-feedback">:message</div>') !!}
        </div><div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $house->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Publish</button>
    </div>
</div>