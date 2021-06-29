@include('Etudiant/header')
@include('Etudiant/headerpage')
<section class="message-area">
    <div class="container">
        <div class="row no-gutters align-items-stretch">
            <div class="col-lg-5">
                <div class="message-sender-list-box">
                    <button class="btn compose-btn" type="button" id="NewMessage" onclick="NewMessage(event)">Compose</button>
                    <hr>
                    <ul class="message-sender-list">

                                                    <a href="http://pn-learning-management-system-online.test/home/my_messages/read_message/76a1b077278bc52">
                                <li>
                                    <div class="message-sender-wrap">
                                        <div class="message-sender-head clearfix">
                                            <div class="message-sender-info d-inline-block">
                                                <div class="sender-image d-inline-block">
                                                    <img src="http://pn-learning-management-system-online.test/uploads/user_image/placeholder.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="sender-name d-inline-block">
                                                    admin admin                                                </div>
                                            </div>
                                            <div class="message-time d-inline-block float-right">Tue, 01-Jun-2021</div>
                                        </div>
                                        <div class="message-sender-body">
                                            wrr                                        </div>
                                    </div>
                                </li>
                            </a>
                                            </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="message-details-box" id="toggle-1">
                        <div class="text-center empty-box">Select A Message Thread To Read It Here.</div>
                </div>
                <div class="message-details-box" id="toggle-2" style="display: none;">
                    <div class="new-message-details"><div class="message-header">
                        <div class="sender-info">
                            <span class="d-inline-block">
                                <i class="far fa-user"></i>
                            </span>
                            <span class="d-inline-block">New Message</span>
                        </div>
                    </div>
                    <form class="" action="http://pn-learning-management-system-online.test/home/my_messages/send_new" method="post">
                        <div class="message-body">
                            <div class="form-group">
                                <select class="form-control select2 select2-hidden-accessible" name="receiver" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                            <option value="1" data-select2-id="3">admin admin</option>
                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-receiver-6k-container"><span class="select2-selection__rendered" id="select2-receiver-6k-container" role="textbox" aria-readonly="true" title="admin admin">admin admin</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn send-btn">Send</button>
                            <button type="button" class="btn cancel-btn" onclick="CancelNewMessage(event)">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@include('layouts.footer')