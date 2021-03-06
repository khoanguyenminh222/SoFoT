<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('asset/css/trangchu.css') }}" />
    <script src = "{{ asset('asset/js/trangchu.js') }}"> </script>
    <meta name="_token" content="{!! csrf_token() !!}" />
</head>

<body style="background-color: #f0f2f5">

    <!--Side bar-->
    <div id="mySidebar" class="sidebar mt-5">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><img class="rounded-circle" style="width: 50%; height: 50%" src="avatar.png" alt=""></a>
        <a href="#">Username</a>
        <a href="#">Trang chủ</a>
        <a href="#">Tin nhắn</a>
        <a href="#">Thông báo</a>
        <a href="#">Bạn bè</a>
        <a style="padding: 8px;" href="#"><input class="form-control" id="search_input" type="text" placeholder="Tìm kiếm..."></a>


    </div>
    <!--Navbar-->
    <!-- Header  -->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom border-warning" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1), 0 1px 5px 0 rgba(0, 0, 0, 0.24); background-color: #2b2b2b;">
        <!-- Brand/logo -->
        <span style="color: rgb(223, 160, 45);">
            <i style="cursor: pointer;" onclick="openNav()" class="fas fa-list-alt fa-3x"></i>
        </span>

        <a style="margin-left: 2%; width: 180px; height: 35px; padding: 0px" class="navbar-brand hidden-xs" href="#"><img style="width: 100%; height: 100%" src="{{ asset('asset/images/LogoHome.png') }}"></a>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse">

        </div>
        <ul class="nav navbar-nav" style="display: inline;">
            <li class="nav-item m-auto text-center pr-4" style="display: inline;">
                <a class="text-center m-auto" href="#"><i style="color: rgb(223, 160, 45);"
                        class="fas fa-users fa-lg"></i></a>
            </li>
            <li class="nav-item m-auto text-center pr-4" style="display: inline;">
                <a class="text-center m-auto" href="#"><i style="color: rgb(223, 160, 45);"
                        class="fas fa-comment fa-lg"></i></a>
            </li>
            <li class="nav-item m-auto text-center pr-4" style="display: inline;">
                <a class="text-center m-auto" href="#"><i style="color: rgb(223, 160, 45);"
                        class="fas fa-globe-africa fa-lg"></i></a>
            </li>
            <li class="nav-item m-auto text-center pr-4 dropdown" style="display: inline;">
                <button class="btn btn-link dropdown-toggle mb-1 p-0" type="button" id="" data-toggle="dropdown" style="color: rgb(223, 160, 45)">
                                <i  class="fas fa-cog fa-lg"></i>
                            </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="h6 dropdown-header">Configuration</div>
                    <a class="dropdown-item" href="#">Đăng xuất</a>
                </div>

            </li>
        </ul>
    </nav>
    <div id="main">
        <!-- Phần thân -->
        <div class="container">
            <div class="row">

                <!-- Text đăng tin -->
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8  ">
                    <div class="well well-sm well-social-post mb-3 ">
                        <form>
                            <ul class="list-inline " id='list_PostActions'>
                                <li class='active' style="font-weight: bold; ">Đăng tin</li>
                            </ul>
                            <textarea class="form-control " placeholder="What 's in your mind?"></textarea>
                            <ul class='list-inline post-actions '>
                                <li style="display: inline; "><a href="#"><span style="color: rgb(223, 160, 45)" class="fa fa-camera"></span></a></li>
                                <li style="display: inline;">
                                    <a style="color: rgb(223, 160, 45)" href="#" class='fa fa-map-marker '></a>
                                </li>
                                <li class='float-right '><button class='btn btn-primary btn-xs ' style="padding: 2px 10px; background-color: rgb(223, 160, 45); border-color: rgb(223, 160, 45);">Post</button>
                                </li>
                                <li class="float-right" style="display: inline;">
                                    <div class="btn-group">
                                        <button style="padding: 0px; color: rgb(223, 160, 45)" id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i style="color: rgb(223, 160, 45) " class="fa fa-globe"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#"><i style="color: rgb(223, 160, 45);" class="fa fa-globe"></i> Public</a>
                                            <a class="dropdown-item" href="#"><i style="color: rgb(223, 160, 45)" class="fa fa-users"></i> Friends</a>
                                            <a class="dropdown-item" href="#"><i style="color: rgb(223, 160, 45)" class="fa fa-user"></i> Just me</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>

                    <!-- Hiển thị các tin -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img class="rounded-circle" width="45" src="{{ asset('asset/images/avatar.png') }}" alt="">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">User name</div>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle" type="button" id="" data-toggle="dropdown" style="color: rgb(223, 160, 45)">
                                            <i  class="fa fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="h6 dropdown-header">Configuration</div>
                                            <a class="dropdown-item" href="#">Delete</a>
                                            <a class="dropdown-item" href="#">Report</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o" aria-hidden="true"></i>Đã đăng: 40 min</div>
                            <p class="card-text">
                                Nội dung của bài viết
                                <a href="https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU" target="_blank">https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU</a>
                            </p>
                        </div>
                        <div class="card-footer border-bottom" style="background-color: #ffffff;">
                            <a style="color: rgb(223, 160, 45)" href="#" class="card-link"><i style="color: rgb(223, 160, 45)" class="fa fa-heart"></i> Like</a>
                            <a style="color: rgb(223, 160, 45)" href="#" class="card-link" onclick="openComment()"><i style="color: rgb(223, 160, 45)" class="fa fa-comment"></i> Comment</a>
                            <a style="color: rgb(223, 160, 45)" href="#" class="card-link"><i style="color: rgb(223, 160, 45)" class="fa fa-share"></i> Share</a>
                        </div>

                        <!-- Bình luận và hiển thị bình luận -->
                        <div id="comment" class="card-body comment" style="visibility: hidden; height: 0; padding: 0; ">
                            <div class="user-comment mb-3">
                                <div class="d-flex mb-2">
                                    <div class="mr-2">
                                        <img class="rounded-circle" width="35" src="{{ asset('asset/images/avatar.png') }}" alt="">
                                    </div>
                                    <div class="ml-2 mt-1">
                                        <div>User name</div>
                                    </div>

                                </div>
                                <input style="width: 100%; margin-bottom: 0px; background-color: #f7f7f7;" class="form-control input-login" name="" type="text" placeholder="Bạn đã bình luận" readonly/>
                                <a style="color: #8e8e8e;" href="#">Delete</a>
                            </div>
                            <div class="d-flex">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="35" src="{{ asset('asset/images/avatar.png') }}" alt="">
                                </div>
                                <input class="form-control input-login" name="" type="text" placeholder="Viết" />
                                <button class='btn btn-primary ml-2 mt-1 ' style="height: 30%; padding: 2px 10px; background-color: rgb(223, 160, 45); border-color: rgb(223, 160, 45);">Post</button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Liên lạc -->
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4">
                    <div class="Contact">
                        <div style="text-align: center;">
                            <img class="rounded-circle" style="width:75%;" src="{{ asset('asset/images/Laravel.jpg') }}" alt="">
                        </div>
                        <!-- Friend-->
                        <div class="list-friend">
                            <p>
                                Liên lạc
                            </p>
                            <div onclick="openChat()" class="User">
                                <div class="d-flex mb-2 p-2">
                                    <div class="mr-2">
                                        <img class="rounded-circle" width="30" src="{{ asset('asset/images/avatar.png') }}" alt="">
                                    </div>
                                    <div class="ml-2 mt-1">
                                        <div>User name</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--Group-->
                        <div class="list-group">
                            <p>
                                Cuộc trò chuyện nhóm
                            </p>
                            <div onclick="openChat()" class="User">
                                <div class="d-flex mb-2 p-2">
                                    <div class="mr-2">
                                        <img class="rounded-circle" width="30" src="{{ asset('asset/images/avatar.png') }}" alt="">
                                    </div>
                                    <div class="ml-2 mt-1">
                                        <div>User name</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Chat-->
            <div id="chat-full" class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="30" src="{{ asset('asset/images/avatar.png') }}" alt="">
                            </div>
                            <div class="ml-2">
                                <div class="m-0">User name</div>
                            </div>
                        </div>
                        <div>
                            <a onclick="miniChat()" style="padding: 0 15px 0 0;" href="#"><i style="padding: 0 0 5px 0;" class="fas fa-minus"></i></a>
                            <a onclick="closeChat()" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div id="chat-body" class="card-body">
                    <input style="line-height:1.5; width: 75%; height: auto; background-color: #f1f1f1;" class="form-control input-login" name="" type="text" placeholder="Bạn đã bình luận" readonly></input>
                    <input style="line-height:1.5; width: 75%; height: auto; background-color: #f1f1f1;" class="form-control input-login float-right" name="" type="text" placeholder="Bạn đã bình luận" readonly></input>
                </div>
                <div id="chat-footer" class="card-footer" style="padding: 5px 1px 5px 1px;">
                    <div class="d-flex">
                        <input class="form-control input-login m-0" name="" type="text" placeholder="Viết" />
                        <button class='btn btn-primary ml-1 mt-1 ' style="height: 30%; padding: 2px 10px; background-color: rgb(223, 160, 45); border-color: rgb(223, 160, 45);">Post</button>
                    </div>
                </div>
            </div>
            <div onclick="openChat()" id="chat-mini">
                <img class="rounded-circle" width="45" src="{{ asset('asset/images/avatar.png') }}" alt="">
            </div>
        </div>
    </div>
</body>
