// JavaScript to toggle sidebar on smaller screens
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.hamburger-icon').addEventListener('click', function() {
        document.querySelector('.sidebar-blog').classList.toggle('show');
    });
    document.querySelector('.close-icon').addEventListener('click', function() {
        document.querySelector('.sidebar-blog').classList.remove('show');
    });
});

 //accordion partner with us
 const questionWrappers = document.querySelectorAll('.q-wrapper');

 questionWrappers.forEach((wrapper) => {
   const question = wrapper.querySelector('.h3'); 
   const svgIcon = wrapper.querySelector('.svg-icon'); 
   const answer = wrapper.nextElementSibling; 
 
   question.addEventListener('click', showAnswer);
   svgIcon.addEventListener('click', showAnswer);
 

   question.addEventListener('keydown', (e) => {
     if (e.key == 'Enter') {
       showAnswer(e);
     }
   });
 

   function showAnswer(e) {
     answer.hidden = !answer.hidden; 
   }
 });
 