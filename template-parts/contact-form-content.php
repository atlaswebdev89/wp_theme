<div class="header-h2 header-h2-center">
    <h2 class="mb-50">Напишите нам </h2>
</div>                			
<form action="/scripts/" class="contact_form mt-15" id="contact-form" novalidate="novalidate">
                    			<div class="form-group has-feedback">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-user2  icon-size-m"></i></span>
                                                <input type="text" class="form-control" placeholder="Ваше имя" name="NAME" required="required" pattern="^[A-Za-zА-Яа-яЁё0-9\s]+$">
                                            </div>
                                        </div>
                    			<div class="form-group has-feedback">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-envelop icon-size-m"></i></span>
                                                <input type="email" id = "email" class="form-control" placeholder="Email" name="EMAIL" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-bubble2  icon-size-m"></i></span>
                                                <textarea class="form-control" rows="6" placeholder="Сообщение" name="MESSAGE" required="required" maxlength="400"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group response_order">
                                            <p class="msg"></p>
                                        </div>
                    			<button type="submit" data-loading-text="•••" data-complete-text="Completed!" data-reset-text="Try again later..." class="btn btn-block btn-primary"><span>Отправить</span></button> 
</form>                			