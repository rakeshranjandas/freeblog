
let obj = [

    { id: 'xyt11', title: 'First Post', file: 'posts/first.html', tags: ['first', 'ff', 'x'], date: '2024-09-05' },
    { id: 'ca22', title: 'Second Post', file: 'posts/second.html', tags: ['second', 'gg', 'x'], date: '2024-09-05' }

];


$(document).ready(function() {

    let postsHtml = '';

    obj.forEach(function(val) {

        postsHtml += getPostHtml(val);

    })

    $('#posts').html(postsHtml);

})


function getPostHtml(post) {

    let html = '<div id="'+post.id+'" class="post">';
    html +=  post.date + '<br>' + '<a href="' + post.file + '">' + post.title + '</a>';
    html += '</div>';

    return html
}