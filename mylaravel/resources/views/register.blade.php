@extends('layouts.default')

@section('content')
    <div class="login-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register') }}" method="post" onsubmit="return myfunction()">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Full Name" />
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                            <div class="valid-feedback">
                                OK
                            </div>
                            <div class="invalid-feedback" id="invalid-name">
                                กรุณาระบุข้อมูล name
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                            <div class="valid-feedback">
                                OK
                            </div>
                            <div class="invalid-feedback" id="invalid-email">
                                กรุณาระบุข้อมูล email
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                            <div class="valid-feedback">
                                OK
                            </div>
                            <div class="invalid-feedback" id="invalid-password">
                                กรุณาระบุข้อมูล password
                            </div>

                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" id="mycheckbox" type="checkbox" value=""
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                    <div class="valid-feedback">
                                        OK
                                    </div>
                                    <div class="invalid-feedback" id="invalid-mycheckbox" style="display: none;">
                                        กรุณายอมรับเงื่อนไข
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>

                    </form>
                    {{-- <button class="btn" onclick="confirm_delete()" >Click Me</button> --}}

                    <p class="mb-0">
                        <a href="login.html" class="text-center"> I already have a membership </a>
                    </p>
                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
    <!-- /.register-box -->
@endsection

@section('scripts')
    <script>
        // let $myval
        // var myval2 = "value of myval2"
        // const myval3 = ""

        // console.log("Hello World!")

        //alert("Hello World!")
        /**/
        //
        //ALERT("Hello World!")
        function myfunction() {
            //let name = document.getElementById('name')
            let name = $('#name')
            let email = $('#email')
            let password = $('#password')
            let mycheckbox = $('#mycheckbox')
            let isValid = true

            //let email = document.getElementById('email')
            //let password = document.getElementById('password')
            //let mycheckbox = document.getElementById('mycheckbox')
            //document.getElementByClass

            //name.value = "My Name Value"
            //name.val("My Name Value")
            // console.log(name.val(), email.value, password.value, mycheckbox.checked);

            // if(name.val() == "My Name Value"){

            //ตรวจสอบชื่อ
            if (name.val().trim() === "") {
                name.addClass('is-invalid');
                $('#invalid-name').html("<B><u>กรุณาใส่ชื่อ")
                isValid = false;
            } else {
                name.removeClass('is-invalid');
                $('#invalid-name').html("");
            }

            //ตรวจสอบอีเมล
            let emailCheck = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailCheck.test(email.val().trim())) {
                email.addClass('is-invalid');
                $('#invalid-email').html("<b><u>กรุณาระบุ email ที่ถูกต้อง (มี @ และ .)")
                isValid = false;
            } else {
                email.removeClass('is-invalid');
                $('#invalid-email').html("");
            }

            //ตรวจสอบรหัสผ่าน
            let passwordCheck = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
            if (!passwordCheck.test(password.val().trim())) {
                password.addClass('is-invalid');
                $('#invalid-password').html("<b><u>รหัสผ่านต้องมีตัวเลข(0-9), ตัวพิมพ์เล็ก(a-z) และตัวพิมพ์ใหญ่(A-Z)")
                isValid = false
            } else {
                password.removeClass('is-invalid');
                $('#invalid-password').hide();
            }

            //ตรวจสอบ checkbox
            if (!mycheckbox.prop("checked")) {
                mycheckbox.parent().addClass("is-invalid");
                $('#invalid-mycheckbox').show().html("<b><u>กรุณายอมรับเงื่อนไข</u></b>");
                isValid = false
            } else {
                mycheckbox.parent().removeClass("is-invalid");
                $('#invalid-mycheckbox').html("");
            }


            // if(name.val() == "My Name Value"){
            //     name.addClass('is-invalid');
            //     $('#invalid-name').html("<B><u>ใส่ name เป็นค่านี้ไม่ได้")
            // }else{
            //     name.removeClass('is-invalid');
            // }


            return isValid;
        }

        // myfunction()
    </script>
    {{-- <script>
        console.log(myval2);

    </script> --}}
@endsection
