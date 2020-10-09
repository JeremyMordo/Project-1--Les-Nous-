const an15 = document.getElementById("an15"); 
const an16 = document.getElementById("an16");
const an17 = document.getElementById("an17");
const an18 = document.getElementById("an18");
const name = document.getElementById("name");
const mail = document.getElementById("mail");
const company = document.getElementById("company");
const describe = document.getElementById("describe");
const pop1 = document.getElementById("popdiv1");
const pop2 = document.getElementById("popdiv2");
const pop3 = document.getElementById("popdiv3");
const pop4 = document.getElementById("popdiv4");
const hack = document.getElementById("windowhack");
const hackedlist = document.getElementById("hackedlist");
const form = document.getElementById("form");
  
name.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      event.preventDefault();  
      an15.style.display="flex";
      mail.style.display="flex";
    }
});
mail.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      event.preventDefault();  
      an16.style.display="flex";
      company.style.display="flex";
    }
});
company.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      event.preventDefault();  
      an17.style.display="flex";
      describe.style.display="flex";
    }
});

describe.addEventListener('keypress', function (e) {
  if (e.key === 'Enter') {
    event.preventDefault();
    document.forms["form"].submit();
    // let firstname = $('#name').val();
    // let email = $('#mail').val();
    // let company = $('#company').val();
    // let project = $('#describe').val();      
    
    $.ajax({
      type: 'POST',
      url: '/hack.php',
      data: 
      {
          firstname: $('input#name').val(),
          email: $('input#mail').val(),
          company: $('input#company').val(),
          project: $('#describe').val()
        }
    })
  }
})
