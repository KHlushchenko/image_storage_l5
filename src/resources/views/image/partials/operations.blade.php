<div class="image-storage-operations well row">
    <form name="image-storage-operations-form">
    <div class="col-md-12 image-storage-operations-row">
        <div class="col-md-2">{{__cms('Создать новую галерею')}}</div>
        <div class="col-md-8">
            <div class="input-group">
                <input type="text" name="gallery_name" class="form-control image-storage-operations-input" placeholder="{{__cms('Название галереи')}}">
            </div>
        </div>
        <div class="col-md-2">
            <a onclick="ImageStorage.createGalleryWithImages();" href="javascript:void(0);" class="btn btn-default btn-sm image-storage-operations-button">{{__cms('Создать')}}</a>
        </div>
    </div>
    <div class="col-md-12 image-storage-operations-row">
        <div class="col-md-2">{{__cms('Добавить в галереи')}}</div>
        <div class="col-md-8">
            <div class="input-group">
                <select name="relations[image-storage-galleries][]" class="image-storage-operations-input image-storage-select" multiple="multiple">
                    @foreach($relatedEntities['gallery'] as $gallery)
                        <option value="{{ $gallery->id }}">{{ $gallery->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <a onclick="ImageStorage.saveImagesGalleriesRelations();" href="javascript:void(0);" class="btn btn-default btn-sm image-storage-operations-button">{{__cms('Добавить')}}</a>
        </div>
    </div>
    <div class="col-md-12 image-storage-operations-row">
        <div class="col-md-2">{{__cms('Добавить к тегам')}}</div>
        <div class="col-md-8">
            <div class="input-group">
                <select name="relations[image-storage-tags][]" multiple="multiple" class="image-storage-operations-input image-storage-select">
                    @foreach($relatedEntities['tag'] as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <a onclick="ImageStorage.saveImagesTagsRelations();" href="javascript:void(0);" class="btn btn-default btn-sm image-storage-operations-button">{{__cms('Добавить')}}</a>
        </div>
    </div>
    <div class="col-md-12 image-storage-operations-row">
        <div class="col-md-2">{{__cms('Удалить выбранные изображения')}}</div>
        <div class="col-md-8">
        </div>
        <div class="col-md-2">
            <a onclick="ImageStorage.deleteMultipleGridView();" href="javascript:void(0);" class="btn btn-default btn-sm image-storage-operations-button">{{__cms('Удалить')}}</a>
        </div>
    </div>
    </form>
</div>

