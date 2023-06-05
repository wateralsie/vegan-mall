// 입력값 데이터 유효성 확인
function check_input() {
    // 아이디
    if(!document.signup.id.value) {
        alert("아이디를 입력하세요!");
        document.signup.id.focus();
        return;
    }
    
    // 비밀번호
    if(!document.signup.pw.value) {
        alert("비밀번호를 입력하세요!");
        document.signup.pw.focus();
        return;
    }

    // 비밀번호 확인
    if(!document.signup.pw_confirm.value) {
        alert("비밀번호 확인을 입력하세요!");
        document.signup.pw_confirm.focus();
        return;
    }
    
    // 이름
    if(!document.signup.name.value) {
        alert("이름을 입력하세요!");
        document.signup.name.focus();
        return;
    }

    // 이메일
    if(!document.signup.email_id.value) {
        alert("이메일 주소를 입력하세요!");
        document.signup.email_id.focus();
        return;
    }
    if(!document.signup.email_domain.value) {
        alert("이메일 주소를 입력하세요!");
        document.signup.email_domain.focus();
        return;
    }
    
    // 비밀번호 == 비밀번호 확인
    if(document.signup.pw.value != document.signup.pw_confirm.value) {
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요!");
        document.signup.pw.focus();
        document.signup.pw.select();
        return;
    }

    // 이상이 없으면 제출
    document.signup.submit();
}

// 입력값 데이터 초기화
function reset_form() {
    document.signup.id.value = "";
    document.signup.pw.value = "";
    document.signup.pw_confirm.value = "";
    document.signup.name.value = "";
    document.signup.email_id.value = "";
    document.signup.email_domain.value = "";
    document.signup.id.focus();
    return;
}

// 아이디 중복 확인 창 여는 함수
function check_duplicate_id() {
    window.open(
        "signup_check_duplicate_id.php?id=" + document.signup.id.value,
        "IDcheck",
        "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes"
    );
}