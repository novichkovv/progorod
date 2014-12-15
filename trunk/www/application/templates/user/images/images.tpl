<h3 class="text-center">Добавление изображений</h3>
<form name="firm_image" action="" method="post">
    <div class="row">
        <div class="col-xs-3 multi_upload">
            <div class="row">
                <div class="thumbnail">
                    <div class="preview">
                        <img id="try" src="http://user.pro-gorod.loc/uploads/temp/2761730563_9016801.jpg" />
                    </div>
                    <div class="caption">
                        <button type="button" class="btn btn-default">Выбрать файл</button>
                        <span class="status"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3 multi_upload">
            <div class="row">
                <div class="thumbnail">
                    <div class="preview">
                    </div>
                    <div class="caption">
                        <button id="upload_logo" type="button" class="btn btn-default">Выбрать файл</button>
                        <span class="status"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3  multi_upload">
            <br>
            <button id="multi_upload" type="button" class="btn btn-primary">Загрузить изображение</button>
        </div>
    </div>
    <div class="row text-center">
        <input type="hidden" name="id_user" value="{$user.id}">
        <input type="hidden" name="id_firm" value="{$smarty.get.id}">
        <input type="submit" value="Сохранить" name="save_firm_images">
    </div>
</form>

