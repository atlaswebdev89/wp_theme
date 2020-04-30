<section class="modal fade modal-confirm flex-center" id="request_call" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content text-center light">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <h2 class="mb-30">Заказать звонок</h2>

                <form action="/scripts/" class="contact_form mb-0" novalidate="novalidate" id="call_request">
                    <div class="form-group has-feedback">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-user2 icon-size-m"></i></span>
                            <input type="text" class="form-control" placeholder="Ваше имя" name="NAME" required="required">
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-phone2 icon-size-m"></i></span>
                            <input type="tel" name="phone" id="phone" class="form-control bfh-phone" required="required"  placeholder="Телефон" >
                        </div>
                    </div>
                    <div class="form-group response_order">
                        <p class="msg"></p>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><i class="icon-phone2 icon-position-left"></i><span>Заказать</span></button>
                </form>

            </div>
            <div class="bg"></div>
        </div>
    </div>
</section>