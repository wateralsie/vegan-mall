function check_input() {
    if (!document.help_form.subject.value) {
        alert("제목을 입력하세요!");
        document.help_form.subject.focus();
        return;
    }
    if (!document.help_form.content.value) {
        alert("내용을 입력하세요!");
        document.help_form.content.focus();
        return;
    }
    document.help_form.submit();
}