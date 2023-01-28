const mysql = require('mysql2');

const connection = mysql.createConnection({
    host: 'joanna.id.domainesia.com',
    user: 'kikifaru_user1',
    password: 'Foerkoeqrb3!',
    database: 'kikifaru_commentary'
});

connection.connect();

//Handle the submit
function handleFormSubmit(event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
    var comment = document.getElementById("comment").value;

    //Execute query to insert data into MySQL
    connection.query('INSERT INTO komentar (Nama, Komentar) VALUES (?, ?)', [name, comment], function (err, results) {
        if (err) {
            console.log(err);
        } else {
            console.log('Data inserted successfully!');
        }
    });

connection.end();
    var carouselInner = document.querySelector(".carousel-inner");
    var displayName = document.querySelector("#display-name");
    var displayComment = document.querySelector("#display-comment");
    var newComment = document.createElement("div");
    newComment.classList.add("item");
    newComment.innerHTML = "<h4>" + name + "</h4><p>" + comment + "</p>";
    carouselInner.appendChild(newComment);
    carouselInner.firstChild.classList.remove("active");
    newComment.classList.add("active");
    displayName.innerHTML = name;
    displayComment.innerHTML = comment;
  }
  var form = document.querySelector("form");
  form.addEventListener("submit", handleFormSubmit);
