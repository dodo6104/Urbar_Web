const header = document.getElementById("header");
    header.addEventListener("click", function() {
        location.reload();
    });
document.getElementById('showMore').addEventListener('click', function() {
    var extraAnnouncements = document.querySelectorAll('.extra-announcement');
    for (var i = 0; i < extraAnnouncements.length; i++) {
        extraAnnouncements[i].style.display = 'block';
    }
    this.style.display = 'none';
    document.getElementById('showLess').style.display = 'inline';
});

document.getElementById('showLess').addEventListener('click', function() {
    var extraAnnouncements = document.querySelectorAll('.extra-announcement');
    for (var i = 0; i < extraAnnouncements.length; i++) {
        extraAnnouncements[i].style.display = 'none';
    }
    this.style.display = 'none';
    document.getElementById('showMore').style.display = 'inline';
});

document.querySelectorAll('.navbar a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });


