<div class="modal-dialog" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action('TaxRateController@update', [$tax_rate->id]), 'method' => 'PUT', 'id' => 'tax_rate_edit_form' ]) !!}

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">@lang( 'tax_rate.edit_taxt_rate' )</h4>
    </div>

    <div class="modal-body">
      <div class="form-group">
        {!! Form::label('name', __( 'tax_rate.name' ) . ':*') !!}
          {!! Form::text('name', $tax_rate->name, ['class' => 'form-control', 'required', 'placeholder' => __( 'tax_rate.name' )]); !!}
      </div>

      <div class="form-group">
        {!! Form::label('amount', __( 'tax_rate.rate' ) . ':*') !!}
          {!! Form::text('amount', $tax_rate->amount, ['class' => 'form-control input_number', 'required']); !!}
      </div>

    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang( 'messages.update' )</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang( 'messages.close' )</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->