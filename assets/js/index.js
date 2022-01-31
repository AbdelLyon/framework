const titleCommentsCocktails = document.querySelectorAll('.title-comments-cocktail');
const contentCategoryComment = document.querySelectorAll('.content-comments-cocktail');

const toggleLink = (link, target) => {
   document.querySelector(link).addEventListener('mouseenter', () => document.querySelector(target).classList.add('visible'));
   document.querySelector(link).addEventListener('mouseleave', () => document.querySelector(target).classList.remove('visible'));
}

toggleLink('#link-addCocktail', '.link-addCocktail');
toggleLink('#link-addComment', '.link-addComment');
toggleLink('#link-deleteComment', '.link-deleteComment');
toggleLink('#link-editeCocktail', '.link-editeCocktail');
toggleLink('#link-deleteCocktail', '.link-deleteCocktail');

if (titleCommentsCocktails !== null && contentCategoryComment !== null) {
   for (let i = 0; i < titleCommentsCocktails.length; i++) {
      titleCommentsCocktails[i].addEventListener('click', () => {
         contentCategoryComment[i].classList.toggle('show');
      })
   }
}







