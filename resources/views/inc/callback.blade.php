<div type="button" class="callback-bt" data-toggle="modal" data-target="#exapleModal">
    <div class="text-call">
        <i class="fa fa-phone"></i>
        <span>Заказать<br>звонок</span>
    </div>
</div>

<div class="modal fade" id="exapleModal" tabindex="-1" role="dialog" aria-labelledby="exapleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exapleModalLabel">Отправить заявку</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('contact-form') }}" class="form" id="contactform" name="form" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Имя<span class="redStar">*</span>:</label><br>
                            <input id="name" type="text" class="form-control" name="name" placeholder="Ваше имя">
                        </div>

                            {{-- --- --}}
                            <input id="lastname" style="display: none" type="text" class="form-control" name="lastname" value="" placeholder="Фамилия">
                            {{-- --- --}}

                        <div class="form-group">
                            <label for="phone">Телефон<span class="redStar">*</span>:</label><br>
                            <input id="phone" type="text" class="form-control" name="phone" placeholder="Номер телефона">
                        </div>
                        <div class="form-group">
                            <label for="msg">Сообщение:</label><br>
                            <textarea id="msg" class="form-control" name="msg" placeholder="Ваше сообщение"></textarea> 
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn cardbtn"><span class="text-button">Отправить</span></button>
                            <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Закрыть</button>
                        </div>
                        <div>
                        Нажимая кнопку "отправить" вы соглашаетесь с <a class="privacy_link" href="{{route('privacy')}}">условиями</a> обработки персональных данных.
                        </div>
                    </form>
            </div>
            {{-- <div class="modal-footer">

               
            </div> --}}
        </div>
    </div>
</div>