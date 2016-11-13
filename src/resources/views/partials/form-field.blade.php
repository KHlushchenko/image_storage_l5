<div class="tab-content padding-5">
    @if($field['type'] == 'checkbox')
        <label class="checkbox"><input type="checkbox"  id="{{$fieldName}}" name="{{ $fieldName }}" value="1" @if ($entity->$fieldName) checked="checked" @endif><i></i>{{__cms($field['caption'])}}</label>
    @else
    <label class="label" for="{{$fieldName}}">{{__cms($field['caption'])}}</label>
    <div class="imgInfoBox-relative-block">
            @if($field['type'] == 'text')
                <label class="input"><input type="text" value="{{$entity->$fieldName}}" name="{{$fieldName}}" placeholder="{{$field['placeholder']}}" class="dblclick-edit-input form-control input-sm unselectable"></label>
            @elseif($field['type'] == 'textarea')
                <label class="input"> <textarea rows="{{$field['rows'] or '3'}}"  id="{{$fieldName}}"  name="{{ $fieldName }}" class="custom-scroll imgInfoBox-textarea">{{$entity->$fieldName}}</textarea></label>
            @elseif($field['type'] == 'datetime')
            <label class="input state-success"><input type="text" id="{{$fieldName }}" value="{{$entity->$fieldName}}" name="{{$fieldName}}" class="form-control datepicker"> <span class="input-group-addon form-input-icon"><i class="fa fa-calendar"></i></span>
                <script>
                    jQuery(document).ready(function() {
                        jQuery("#{{$fieldName}}").datetimepicker({
                            changeMonth: true,
                            numberOfMonths: {{ $field['months'] ? : '1' }},
                            prevText: '<i class="fa fa-chevron-left"></i>',
                            nextText: '<i class="fa fa-chevron-right"></i>',
                            dateFormat: "dd/mm/yy",
                            timeFormat: 'HH:mm:ss',
                            //showButtonPanel: true,
                            regional: ["ru"],
                            onClose: function (selectedDate) {}
                        });
                    });
                </script>
            </label>
            @endif
    </div>
    @endif
</div>