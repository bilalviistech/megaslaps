document.querySelectorAll('.accordion__header').forEach(header => {
    header.addEventListener('click', () => {
      const accordion = header.parentElement;
      const isActive = accordion.classList.contains('accordion--active');
      
      document.querySelectorAll('.accordion').forEach(acc => {
        acc.classList.remove('accordion--active');
      });
  
      if (!isActive) {
        accordion.classList.add('accordion--active');
      }
    });
  });
  