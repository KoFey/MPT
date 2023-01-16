<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Настроить количество примеров
</button>

<!-- Модальное окно -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заголовок модального окна</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <h5>Изменение параметров дяля случайных вариантов</h5>

                    <div class="form-group">
                        <label for="formGroupCountQuests">Количество заданий</label>
                        <input type="text" class="form-control" id="formGroupCountInput"
                               placeholder="Введите количество заданий, которое вы хотите выполнить"
                               value="<?php echo $_SESSION['countQuest']; ?>">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" onclick="setting();" data-dismiss="modal">Сохранить изменения</button>
            </div>
        </div>
    </div>
</div>