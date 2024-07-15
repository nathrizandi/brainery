let showMoreBtn_popular = document.querySelector('#btn-show-more-popular');
let currentItem_popular = 4;

showMoreBtn_popular.onclick = () => {
    let cards = [...document.querySelectorAll('.most-popular .all-card .col-3')];

    if (currentItem_popular < cards.length) {
        for (var i = currentItem_popular; i < currentItem_popular + 4; i++) {
            cards[i].style.display = 'inline-block';
        }

        currentItem_popular += 4;

        if (currentItem_popular >= cards.length) {
            showMoreBtn_popular.textContent = 'Show Less';
        }
    }
    else {
        for (let i = 4; i < cards.length; i++) {
            cards[i].style.display = 'none';
        }
        currentItem_popular += 4;
        showMoreBtn_popular.textContent = 'Show More';
    }

};

let showMoreBtn_trending = document.querySelector('#btn-show-more-trend');
let currentItem_trending = 4;

showMoreBtn_trending.onclick = () => {
    let cards = [...document.querySelectorAll('.trending .all-card .col-3')];

    if (currentItem_trending < cards.length) {
        for (var i = currentItem_trending; i < currentItem_trending + 4; i++) {
            cards[i].style.display = 'inline-block';
        }

        currentItem_trending += 4;

        if (currentItem_trending >= cards.length) {
            showMoreBtn_trending.textContent = 'Show Less';
        }
    }
    else {
        for (let i = 4; i < cards.length; i++) {
            cards[i].style.display = 'none';
        }
        currentItem_trending += 4;
        showMoreBtn_trending.textContent = 'Show More';
    }

};
let showMoreBtn_new = document.querySelector('#btn-show-more-new');
let currentItem_new = 4;

showMoreBtn_new.onclick = () => {
    let cards = [...document.querySelectorAll('.new-course .all-card .col-3')];

    if (currentItem_new < cards.length) {
        for (var i = currentItem_new; i < currentItem_new + 4; i++) {
            cards[i].style.display = 'inline-block';
        }

        currentItem_new += 4;

        if (currentItem_new >= cards.length) {
            showMoreBtn_new.textContent = 'Show Less';
        }
    }
    else {
        for (let i = 4; i < cards.length; i++) {
            cards[i].style.display = 'none';
        }
        currentItem_new += 4;
        showMoreBtn_new.textContent = 'Show More';
    }

};
