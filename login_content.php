<div id="login_box">
    <div id="login_title">
        <h2>로그인</h2>
    </div>
    <div id="login_form">
        <form name="login" action="login_execute.php" method="post">
            <!-- <ul>
                        <li><input type="text" name="id" placeholder="아이디"></li>
                        <li><input type="password" name="pw" placeholder="비밀번호"></li>
                    </ul> -->
            <div id="login_input">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">아이디</label>
                    <input type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="아이디를 입력해주세요">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">비밀번호</label>
                    <input type="password" name="pw" class="form-control" id="exampleFormControlInput1" placeholder="비밀번호를 입력해주세요">
                </div>
            </div>
            <div id="login_btn">
                <a href="#"><img src="./image/login.png" onclick="check_input()"></a>
            </div>
        </form>
    </div>
</div>