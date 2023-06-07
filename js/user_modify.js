function check_input() {
   if (!document.user_form.pw.value)
   {
       alert("비밀번호를 입력하세요!");    
       document.user_form.pw.focus();
       return;
   }

   if (!document.user_form.pw_confirm.value)
   {
       alert("비밀번호확인을 입력하세요!");    
       document.user_form.pw_confirm.focus();
       return;
   }

   if (!document.user_form.name.value)
   {
       alert("이름을 입력하세요!");    
       document.user_form.name.focus();
       return;
   }

   if (!document.user_form.email_id.value)
   {
       alert("이메일 주소를 입력하세요!");    
       document.user_form.email_id.focus();
       return;
   }

   if (!document.user_form.email_domain.value)
   {
       alert("이메일 주소를 입력하세요!");    
       document.user_form.email_domain.focus();
       return;
   }

   if (document.user_form.pw.value != 
         document.user_form.pw_confirm.value)
   {
       alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
       document.user_form.pw.focus();
       document.user_form.pw.select();
       return;
   }

   document.user_form.submit();
}

function reset_form() {
   document.user_form.id.value = "";  
   document.user_form.pw.value = "";
   document.user_form.pw_confirm.value = "";
   document.user_form.name.value = "";
   document.user_form.email_id.value = "";
   document.user_form.email_domain.value = "";
   
   document.user_form.id.focus();

   return;
}
