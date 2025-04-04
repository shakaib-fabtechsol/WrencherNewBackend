<!DOCTYPE html>
<html lang="en">

<head>
    @include('Templates.CssLinks')
    <title>Chat</title>
</head>

<body>
    <section>
        <div class="main">
            @include('Templates.Adminsidebar')
            <div class="right">
                <div class="right-top input-shadow">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-start">
                                <span class="sky fs-4 fw-medium">Chat</span>
                                <i class="fas fa-chevron-right mx-2 fs-6"></i>
                                <span class="fs-6 mt-1">Internal Chat</span>
                            </div>
                        </div>
                        <div class="col-6">
                            @include('Templates.AdminNavbar')
                        </div>
                    </div>
                </div>
                <div class="right-bottom px-0">
                    <div class="content ">
                        <div class="container-fluid">
                            <div class="d-flex align-items-center chat-start position-relative">
                                <div class="left-c bg-white border rounded-3">
                                    <div class="d-flex align-items-center border p-2 rounded-3 chat-search m-3">
                                        <input type="search" id="c-search" placeholder="Search people"
                                            class="w-100 border-0 chat-search">
                                        <label for="c-search"><i class="bi bi-search text-secondary"></i></label>
                                    </div>
                                    <div class="per-c">
                                        <div class="person-show">
                                            <div class="d-flex justify-content-between mt-2 chat-person active m-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                            class="img-us shadow border-white border-2">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="font-14 mb-0">Guest Name</h6>
                                                        <p class="gre font-12 mb-0">Read message text</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="font-12">30min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="person-show">
                                            <div class="d-flex justify-content-between mt-2 chat-person m-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                            class="img-us shadow border-white border-2">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="font-14 mb-0">Guest Name</h6>
                                                        <p class="gre font-12 mb-0">Read message text</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="font-12">30min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="person-show">
                                            <div class="d-flex justify-content-between mt-2 chat-person m-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                            class="img-us shadow border-white border-2">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="font-14 mb-0">Guest Name</h6>
                                                        <p class="gre font-12 mb-0">Read message text</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="font-12">30min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="person-show">
                                            <div class="d-flex justify-content-between mt-2 chat-person m-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                            class="img-us shadow border-white border-2">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="font-14 mb-0">Guest Name</h6>
                                                        <p class="gre font-12 mb-0">Read message text</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="font-12">30min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="person-show">
                                            <div class="d-flex justify-content-between mt-2 chat-person m-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                            class="img-us shadow border-white border-2">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="font-14 mb-0">Guest Name</h6>
                                                        <p class="gre font-12 mb-0">Read message text</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="font-12">30min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="person-show">
                                            <div class="d-flex justify-content-between mt-2 chat-person m-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                            class="img-us shadow border-white border-2">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="font-14 mb-0">Guest Name</h6>
                                                        <p class="gre font-12 mb-0">Read message text</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="font-12">30min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mid">
                                    <div
                                        class="mid-chat bg-white border rounded-3 d-flex flex-column justify-content-between">
                                        <div>
                                            <div
                                                class="p-2 border shadow rounded-3 m-2 d-flex align-items-center justify-content-between pointer">
                                                <div class="d-flex align-items-center">
                                                    <div id="toggleButton">
                                                        <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                            class="img-us">
                                                    </div>
                                                    <div class="ps-2">
                                                        <h6 class="mb-0">Franky Schmid</h6>
                                                        <p class="mb-0 gre font-12">Franky is typing......</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div>
                                                        <i class="bi bi-x fs-3 pointer close-chat"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-height">
                                                <div class="chat-msg d-flex align-items-baseline pe-2">
                                                    <div>
                                                        <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                            class="img-us">
                                                    </div>
                                                    <div class="ps-2">
                                                        <div class="msg-content d-flex align-items-center">
                                                            <div class="p-2 frank-bg">
                                                                <p class="mb-0">Hi George! Nice to hear you again!
                                                                </p>
                                                            </div>
                                                            <div class="ps-2 ">
                                                                <i class="bi bi-emoji-smile emoji-bg"></i>
                                                            </div>
                                                        </div>
                                                        <div class="msg-content d-flex align-items-center mt-2">
                                                            <div class="p-2 frank-bg">
                                                                <p class="mb-0">I’m fine, thank you! And what about
                                                                    you?
                                                                    Is everything ok?</p>
                                                            </div>
                                                            <div class="ps-2">
                                                                <i class="bi bi-emoji-smile emoji-bg"></i>
                                                            </div>
                                                        </div>
                                                        <div class="msg-content d-flex align-items-center mt-2">
                                                            <div class="p-2 frank-bg">
                                                                <p class="mb-0">Lorem ipsum dolor sit amet
                                                                    consectetur.
                                                                    Dictum sociis fermentum sodales nisl interdum id
                                                                    eget. Eget libero viverra tristique massa fringilla
                                                                    sit.Lorem ipsum dolor sit amet consectetur.</p>
                                                                <span class="font-12 mt-3">July, 22, 4:27pm</span>
                                                            </div>
                                                            <div class="ps-2">
                                                                <i class="bi bi-emoji-smile emoji-bg"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rep-msg mt-3 d-flex justify-content-end pe-2">
                                                    <div class="pe-2">
                                                        <div
                                                            class="msg-content d-flex align-items-center justify-content-end mb-2">
                                                            <div class="pe-2">
                                                                <i class="bi bi-emoji-smile emoji-bg"></i>
                                                            </div>
                                                            <div class="p-2 frank2-bg">
                                                                <p class="mb-0">Lorem ipsum dolor sit amet
                                                                    consectetur.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="msg-content d-flex align-items-center justify-content-end mb-2">
                                                            <div class="pe-2">
                                                                <i class="bi bi-emoji-smile emoji-bg"></i>
                                                            </div>
                                                            <div class="p-2 frank2-bg">
                                                                <p class="mb-0">Lorem ipsum dolor sit amet
                                                                    consectetur.
                                                                    Dictum sociis fermentum sodales nisl interdum id
                                                                    eget. Eget libero viverra tristique massa fringilla
                                                                    sit.</p>
                                                                <span class="font-12">July, 22, 4:27pm by Beth
                                                                    Turner</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img src="{{ asset('img/rep.png') }}" alt=""
                                                            class="img-us">
                                                    </div>
                                                </div>
                                                <div class="chat-msg d-flex align-items-baseline pe-2">
                                                    <div>
                                                        <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                            class="img-us">
                                                    </div>
                                                    <div class="ps-2">
                                                        <div class="msg-content d-flex align-items-center">
                                                            <div class="p-2 frank-bg">
                                                                <p class="mb-0">Hi George! Nice to hear you again!
                                                                </p>
                                                            </div>
                                                            <div class="ps-2">
                                                                <i class="bi bi-emoji-smile emoji-bg"></i>
                                                            </div>
                                                        </div>
                                                        <div class="msg-content d-flex align-items-center mt-2">
                                                            <div class="p-2 frank-bg">
                                                                <p class="mb-0">I’m fine, thank you! And what about
                                                                    you?
                                                                    Is everything ok?</p>
                                                            </div>
                                                            <div class="ps-2">
                                                                <i class="bi bi-emoji-smile emoji-bg"></i>
                                                            </div>
                                                        </div>
                                                        <div class="msg-content d-flex align-items-center mt-2">
                                                            <div class="p-2 frank-bg">
                                                                <p class="mb-0">Lorem ipsum dolor sit amet
                                                                    consectetur.
                                                                    Dictum sociis fermentum sodales nisl interdum id
                                                                    eget. Eget libero viverra tristique massa fringilla
                                                                    sit.Lorem ipsum dolor sit amet consectetur.</p>
                                                                <span class="font-12 mt-3">July, 22, 4:27pm</span>
                                                            </div>
                                                            <div class="ps-2">
                                                                <i class="bi bi-emoji-smile emoji-bg"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top p-2">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex">
                                                    <div class="border-end px-sm-2 px-1">
                                                        <i class="bi bi-mic icons-clr"></i>
                                                    </div>
                                                    <div class="ps-2 me-2">
                                                        <i class="bi bi-emoji-smile emoji-bg icons-clr"></i>
                                                    </div>
                                                    <div class="border-end pe-2">
                                                        <i class="bi bi-paperclip rot icons-clr"></i>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center w-100 ms-sm-3 ms-2">
                                                    <div class="w-100">
                                                        <input type="text"
                                                            class="w-100 me-2 in-bg form-control shadow-none chat-input"
                                                            placeholder="Type your message">
                                                    </div>
                                                    <div class="ps-2">
                                                        <button
                                                            class="bg-sky text-white px-sm-4 px-3 py-2 border-0 rounded-2 chat-input">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-c bg-white border rounded-3 py-2 px-3" id="myBlock">
                                        <div class="border-bottom pt-5 pb-2 position-relative">
                                            <div>
                                                <i class="bi bi-x close-detail"></i>
                                            </div>
                                            <div class="text-center">
                                                <img src="{{ asset('img/chat-user.png') }}" alt=""
                                                    class="img-detail">
                                            </div>
                                            <div class="mt-2">
                                                <h6 class="text-center fs-5 mb-0">Franky Schmid</h6>
                                                <p class="mb-0 gre font-12 text-center">Franky is typing.....</p>
                                            </div>
                                        </div>
                                        <div class="per-d">
                                            <div class="border-bottom pb-2">
                                                <div class="mt-3">
                                                    <h6 class="mb-0">Phone number</h6>
                                                    <p class="gre mb-0">078942345689</p>
                                                </div>
                                                <div class="mt-3">
                                                    <h6 class="mb-0">Date of Birth:</h6>
                                                    <p class="gre mb-0">12/7/2000</p>
                                                </div>
                                                <div class="mt-3">
                                                    <h6 class="mb-0">Gender:</h6>
                                                    <p class="gre mb-0">Female</p>
                                                </div>
                                            </div>
                                            <div class="border-bottom pb-2">
                                                <div class="mt-3">
                                                    <h6 class="mb-0">Tags</h6>
                                                </div>
                                            </div>
                                            <div class="border-bottom pb-2">
                                                <div class="mt-3">
                                                    <h6 class="mb-0">Active Automation</h6>
                                                </div>
                                            </div>
                                            <div
                                                class="border-bottom pb-2 d-flex align-items-center justify-content-between py-2">
                                                <div class="">
                                                    <h6 class="mb-0">DND</h6>
                                                </div>
                                                <div>
                                                    <p class="gre mb-0">Off</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('Templates.Jslinks')
</body>

</html>
