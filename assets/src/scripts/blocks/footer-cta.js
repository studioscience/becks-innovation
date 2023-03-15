const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry)
    if(entry.isIntersecting) {
      entry.target.classList.add('show');
    } else {
      entry.target.classList.remove('show')
    }
  }); 
});


const hiddenElements = docment.querySelectorAll('.hidden_1');
hiddenElements.forEach((el) => observer.observe(el));