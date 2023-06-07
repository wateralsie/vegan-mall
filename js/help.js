function check_input() {
    // 제목
    if (!document.help_form.subject.value) {
        alert("제목을 입력하세요!");
        document.help_form.subject.focus();
        return;
    }
    // 내용
    if (!document.help_form.content.value) {
        alert("내용을 입력하세요!");    
        document.help_form.content.focus();
        return;
    }

    document.help_form.submit();
}