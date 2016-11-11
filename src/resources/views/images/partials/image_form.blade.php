<div class="superbox-show image-storage-popup">
<ul id="image-storage-images-sizes-tabs" class="nav nav-tabs bordered">
    @foreach ($sizes as $ident => $info)
        <li class="{{$info['default_tab'] ? 'active':""}}">
            <a style="color: #000000 !important;" href="#image-storage-images-size-{{ $ident }}" data-toggle="tab">{{ __cms($info['caption']) }}</a>
        </li>
    @endforeach
</ul>

<div id="image-storage-images-sizes-tabs-content" class="tab-content padding-10">
    @foreach ($sizes as $ident => $info)
        <div class="tab-pane fade {{$info['default_tab'] ? 'in active':""}}" id="image-storage-images-size-{{ $ident }}">
        <p>
            <img {{$info['default_tab'] ? '':"real-"}}src="{{asset($entity->getSource($ident))}}" class="superbox-current-img">
        </p>
            <div class="image-storage-images-sizes-control_row">
                <div class="pull-left button-block">
                    <a download="{{ $entity->title .'('. $info['caption'] .')' }}" target="_blank" href="{{ asset($entity->getSource($ident)) }}" class="image-storage-btn-download btn btn-default btn-sm">
                        {{ __cms("Скачать")}}
                    </a>
                </div>

{{--                <div class="pull-left button-block">
                    <a  class="image-storage-btn-download btn btn-default btn-sm">
                        {{ __cms("Изменить")}}
                    </a>
                </div>
--}}

                <div class="pull-right">
                    <form class="smart-form">
                    <div class="input input-file image-storage-images">
                        <span class="button">
                            <input type="file" name="image" accept="image/*" onchange="ImageStorage.replaceSingleImage(this, '{{ $ident }}', '{{$entity->id}}');">
                            {{ __cms("Выбрать")}}
                        </span>
                        <input type="text" readonly="readonly" placeholder="{{__cms("Заменить изображение")}}">
                    </div>
                    </form>
                </div>

            </div>
        </div>
    @endforeach
</div>

    <div id="imgInfoBox" class="superbox-imageinfo inline-block">
        <div class="imgInfoBox-container">
            <div class="imgInfoBox-title"># {{ $entity->id }}: {{ $entity->title }} ({{ $entity->created_at }})</div>
            <form class="smart-form" id="imgInfoBox-form">
            <fieldset>
                <div class="imgInfoBox-container-content tab-content padding-10">
                    @foreach ($fields as $fieldName => $field)
                        <section>
                            <div class="tab-pane active">
                                @if(isset($field['tabs']))
                                    <!-- fixme  исправить вьюхи для инпутов-->
                                    @include('image-storage::partials.form-field-tabbed')
                                @else
                                    @include('image-storage::partials.form-field')
                                @endif
                            </div>
                        </section>
                    @endforeach
                </div>
            </fieldset>
            <fieldset>
                <section><label>{{__cms('Галереи')}}</label>
                    <select name="relations[image-storage-galleries][]" multiple class="imgInfoBox-select image-storage-select">
                        @foreach ($galleries as $gallery)
                            <option {{in_array($gallery->id, $relatedGalleries) ? 'selected="selected"' : ''}} value="{{$gallery->id}}">{{$gallery->title}}</option>
                        @endforeach
                 </select>
                </section>
{{--                <section><label>{{__cms('Теги')}}</label>
                    <select name="relations[image-storage-tags][]" multiple class="imgInfoBox-select image-storage-select">
                        @foreach ($tags as $tag)
                            <option {{in_array($tag->id, $relatedTags) ? 'selected="selected"' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>
                </section>--}}
            </fieldset>

            <div class="well action-buttons-row">
                <a onclick="ImageStorage.saveImageInfo({{ $entity->id }});" href="javascript:void(0);"
                   class="btn btn-success btn-sm pull-right j-btn-save">{{__cms('Сохранить')}}</a>
                <a onclick="ImageStorage.deleteImage({{ $entity->id }});" href="javascript:void(0);"
                   class="btn btn-danger btn-sm pull-left j-btn-del">{{__cms('Удалить')}}</a>
            </div>
        </form>
        </div>
    </div>

<div class="superbox-close txt-color-white"><i class="fa fa-times fa-lg"></i></div>
</div>


