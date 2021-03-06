<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('asset/css/login.css') }}" />
    <meta name="_token" content="{!! csrf_token() !!}" />
</head>
<body>


<div class="login-page">
    <div class="split left">
        <img style="width: 25%; margin-left: 40%; margin-top: 15%" src="{{asset('asset/images/LogoLogin.png') }}">
        <h2 style="margin-left: 20%">SoFoT kết nối tình yêu TDTU. </h2>
    </div>
    <div class="split right">

        <nav class="navbar navbar-light justify-content-between" style="color: #eef0f3; padding: 0px; margin-left: 7%">
            <form class="form-inline" action="{{ route('login') }}" method="POST">
                @csrf
                <input style="margin-top:15px" name="email" class="form-control mr-sm-2 input-login" type="email" placeholder="Email" aria-label="Search">
                <input style="margin-top:15px" name="matkhau" class="form-control mr-sm-2 input-login" type="password" placeholder="Password" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" style="border-radius: 30px; margin: 0 0 15px" type="submit">Đăng nhập</button>
                <?php
                    if(isset($thongtinsai)){
                        echo "<td colspan='2'><p style='color: #f30606; text-align: center'>".$thongtinsai."</p></td>";
                    }
                ?>
            </form>
        </nav>

        <form class="login-form" action="{{ route('register') }}" method="POST">
            @csrf
            <h2>ĐĂNG KÝ</h2>
            <p>Nhanh chóng và dễ dàng</p>
            <table>
                <tr>
                    <td><input type="text" class="form-control input-login" name="ho" type="text" placeholder="Họ"/></td>
                    <td><input type="text" class="form-control input-login" name="ten" type="text" placeholder="Tên"/></td>
                </tr>
                <tr>
                    <td><input class="form-control input-login" name="email" type="email" placeholder="Email"/></td>
                    <td><input class="form-control input-login" name="matkhau" type="password" placeholder="Mật khẩu"/></td>
                </tr>
                <tr>
                    <td>
                        <select name="gioitinh" class="form-control input-login">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </td>
                    <td><input class="form-control input-login" name="namsinh" style="font-size: 11.5px" type="date"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <?php
                        if(isset($error)){
                            echo "<td colspan='2'><p style='color: #f30606; text-align: center'>".$error."</p></td>";
                        }
                        if(isset($dangkithanhcong)){
                            echo "<td colspan='2'><p style='color: #18cf00; text-align: center'>".$dangkithanhcong."</p></td>";
                        }

                    ?>
                </tr>

            </table>
            <button style="width: 30%" type="submit" id="button-regis">Đăng ký</button>
        </form>
    </div>


</div>

</body>
</html>
