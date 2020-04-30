<section class="modal fade modal-confirm flex-center" id="message_form" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content text-left light">
            <div class="half-container-left"></div>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <h2 class="mb-30 text-center">Напишите нам</h2>
                        <form action="/scripts/" class="contact_form mb-0" id="form_message" novalidate="novalidate">
                            <div class="form-group has-feedback">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-user2  icon-size-m"></i></span>
                                    <input type="text" class="form-control" placeholder="Ваше имя" name="NAME" required="required" pattern="^[A-Za-zА-Яа-яЁё0-9\s]+$">
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-envelop icon-size-m"></i></span>
                                    <input type="email" class="form-control" id ="email" placeholder="Email" name="EMAIL" required="required">
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-bubble2  icon-size-m"></i></span>
                                    <textarea class="form-control" rows="6" placeholder="Сообщение" name="MESSAGE" required="required" maxlength="400"></textarea>
                                </div>
                            </div>
                            <div class="form-group response_order">
                                <p class="msg text-center"></p>
                            </div>
                            <button type="submit" data-loading-text="•••" data-complete-text="Completed!" data-reset-text="Try again later..." class="btn btn-primary btn-block"><i class="icon-paper-plane icon-position-left icon-size-m"></i><span>Отправить сообщение</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg"></div>
        </div>
    </div>
</section>